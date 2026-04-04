<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function load_settings(Request $request)
    {
        $settings = Setting::find(1);

        return view('admin.settings', compact('settings'));

    }

    public function update_setting(Request $request)
    {

            $setting = Setting::find(1);
            
            $setting->school_name = $request->input('school_name');
            $setting->camp_name   = $request->input('camp_name');
            $setting->phone     = $request->input('phone');
            $setting->email = $request->input('email');
            $setting->website = $request->input('website');
            $setting->prefix = $request->input('prefix');
            $setting->address   = $request->input('address');

            if($request->hasFile('logo')){

                // Get the old image path
                $oldLogoPath = public_path('uploads/') . $setting->logo;

                // Check if the old image exists and delete it
                if (file_exists($oldLogoPath) && is_file($oldLogoPath)) {
                    unlink($oldLogoPath); // Delete the old image
                }

                $logo = $request->file('logo');

                $name = $logo->getClientOriginalName();
                $logo_ext = $logo->getClientOriginalExtension();

                $new_logo_name = hexdec(uniqid()).'.'.$logo_ext;

                $logo->move(public_path('uploads/'), $new_logo_name);

                $setting->logo = $new_logo_name;
            }

            if($request->hasFile('favicon')){
                
                // Get the old image path
                $oldFaviconPath = public_path('uploads/') . $setting->favicon;

                // Check if the old image exists and delete it
                if (file_exists($oldFaviconPath) && is_file($oldFaviconPath)) {
                    unlink($oldFaviconPath); // Delete the old image
                }

                $favicon = $request->file('favicon');

                $name = $favicon->getClientOriginalName();
                $favicon_ext = $favicon->getClientOriginalExtension();

                $new_favicon_name = hexdec(uniqid()).'.'.$favicon_ext;

                $favicon->move(public_path('uploads/'), $new_favicon_name);

                $setting->favicon = $new_favicon_name;
            }

            $setting->save();

            return response()->json([
                'status'=>200
            ]);


    }


    public function update_bill(Request $request)
    {

            $bill_setting = Setting::find(1);

            $bill_setting->terms     = $request->input('terms');
            $bill_setting->footer_text   = $request->input('bill_footer');

            if($request->hasFile('bill_logo')){

                // Get the old image path
                $oldBillLogoPath = public_path('uploads/') . $bill_setting->bill_logo;
                
                // Check if the old image exists and delete it
                if (file_exists($oldBillLogoPath) && is_file($oldBillLogoPath)) {
                    unlink($oldBillLogoPath); // Delete the old image
                }

                $bill_logo = $request->file('bill_logo');

                $name = $bill_logo->getClientOriginalName();
                $bill_logo_ext = $bill_logo->getClientOriginalExtension();

                $new_bill_logo_name = hexdec(uniqid()).'.'.$bill_logo_ext;

                $bill_logo->move(public_path('uploads/'), $new_bill_logo_name);

                $bill_setting->bill_logo = $new_bill_logo_name;
            }

            if($request->hasFile('header_image')){
                
                // Get the old image path
                $oldHeaderPath = public_path('uploads/') . $bill_setting->bill_header_image;

                // Check if the old image exists and delete it
                if (file_exists($oldHeaderPath) && is_file($oldHeaderPath)) {
                    unlink($oldHeaderPath); // Delete the old image
                }

                $header_image = $request->file('header_image');

                $name = $header_image->getClientOriginalName();
                $header_image_ext = $header_image->getClientOriginalExtension();

                $header_image_name = hexdec(uniqid()).'.'.$header_image_ext;

                $header_image->move(public_path('uploads/'), $header_image_name);

                $bill_setting->bill_header_image = $header_image_name;
            }

            if($request->hasFile('footer_image')){
                
                // Get the old image path
                $oldFooterPath = public_path('uploads/') . $bill_setting->bill_footer_image;

                // Check if the old image exists and delete it
                if (file_exists($oldFooterPath) && is_file($oldFooterPath)) {
                    unlink($oldFooterPath); // Delete the old image
                }

                $footer_image = $request->file('footer_image');

                $name = $footer_image->getClientOriginalName();
                $footer_image_ext = $footer_image->getClientOriginalExtension();

                $new_footer_image_name = hexdec(uniqid()).'.'.$footer_image_ext;

                $footer_image->move(public_path('uploads/'), $new_footer_image_name);

                $bill_setting->bill_footer_image = $new_footer_image_name;
            }

            if($request->hasFile('letter_head')){
                
                // Get the old image path
                $oldLetterheadPath = public_path('uploads/') . $bill_setting->letter_head;

                // Check if the old image exists and delete it
                if (file_exists($oldLetterheadPath) && is_file($oldLetterheadPath)) {
                    unlink($oldLetterheadPath); // Delete the old image
                }

                $letterhead_image = $request->file('letter_head');

                $name = $letterhead_image->getClientOriginalName();
                $letterhead_image_ext = $letterhead_image->getClientOriginalExtension();

                $new_letterhead_image_name = hexdec(uniqid()).'.'.$letterhead_image_ext;

                $letterhead_image->move(public_path('uploads/'), $new_letterhead_image_name);

                $bill_setting->letter_head = $new_letterhead_image_name;
            }

            $bill_setting->save();

            return response()->json([
                'status'=>200
            ]);


    }


    public function delete_setting($delete)
    {

            $setting = Setting::find(1);

            if($delete == "remove_header_image"){
                // Get the old image path
                $oldLogoPath = public_path('uploads/') . $setting->bill_header_image;

                // Check if the old image exists and delete it
                if (file_exists($oldLogoPath) && is_file($oldLogoPath)) {
                    unlink($oldLogoPath); // Delete the old image
                }

                $setting->bill_header_image = "";

            }else if($delete == "remove_footer_image"){
                // Get the old image path
                $oldLogoPath = public_path('uploads/') . $setting->bill_footer_image;

                // Check if the old image exists and delete it
                if (file_exists($oldLogoPath) && is_file($oldLogoPath)) {
                    unlink($oldLogoPath); // Delete the old image
                }

                $setting->bill_footer_image = "";
            }


            $setting->save();

            return response()->json([
                'status'=>200
            ]);


    }
}
