<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        // Check if the authenticated user is active
        $user = Auth::user();

        // Get the user's IP address
        $ipAddress = $request->ip();

        // Use a geolocation service to get location data
        // Example using ipinfo.io
        $locationData = Http::get("http://ipinfo.io/{$ipAddress}/json");

        if ($locationData->successful()) {
            $location = $locationData->json(); // Convert response to array

            // Check if keys exist and assign values, otherwise use fallback
            $city = $location['city'] ?? 'Unknown City';
            $region = $location['region'] ?? 'Unknown Region';
            $country = $location['country'] ?? 'Unknown Country';

            // Format the location (e.g., "City, Region, Country")
            $formattedLocation = "{$city}, {$region}, {$country}";
        } else {
            $formattedLocation = 'Unknown Location';
        }

        // Save the last login location to the user model
        $update_location = User::find($user->id);
        
        $update_location->last_login = Carbon::now();
        $update_location->last_login_ip = $ipAddress;
        $update_location->last_login_location = $formattedLocation;
        $update_location->save();

        
        if ($user->is_active != 1) {
            // Log out the user and invalidate the session
            Auth::logout();

            // Regenerate the session ID to avoid session fixation
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            // Return back with an error message
            return redirect()->route('login')->withErrors([
                'email' => 'Your account is inactive. Please contact support.',
            ]);
        }

        $request->session()->regenerate();

        if($request->has('remember_me')){

            Cookie::queue('email', $request->email, 43200);
            Cookie::queue('password', $request->password, 43200);
        }else{

            Cookie::queue(Cookie::forget('email'));
            Cookie::queue(Cookie::forget('password'));
        }

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
