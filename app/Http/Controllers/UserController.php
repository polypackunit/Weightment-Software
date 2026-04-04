<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function load_users(Request $request)
    {
        // $users = User::all();

        // return view('admin.users', compact('users'));

        $start_date = !empty($request->input('startdate')) ? Carbon::parse($request->input('startdate'))->format('Y-m-d') : "";
        $end_date   = !empty($request->input('startdate')) ? Carbon::parse($request->input('enddate'))->format('Y-m-d') : "";
        $limit      = $request->input('length');
        $offset     = $request->input('start');
        $column     = $request->input('order.0.column');
        $dir        = $request->input('order.0.dir');
        $order_by   = $request->input("columns.$column.data");

        $query = DB::table('users')
        ->leftJoin('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
        ->leftJoin('roles', 'model_has_roles.role_id', '=', 'roles.id')
        ->select([
            'users.*',
            'roles.name as role_name'
        ])
        ->where('users.id', '!=', 1)
        ->where('is_deleted', '!=', 1);

        if (!empty($start_date) && !empty($end_date)) {
            $query->whereBetween('created_at', [$start_date, $end_date]);
        }

        if ($search = $request->input('search')) { // .value if using DataTables
            $query->where('users.name', 'like', '%' . $search . '%');
        }

        $type = $request->input('type');
        if (isset($type)) {
            $query->where('users.is_active', '=', $type);
        }

        $role = $request->input('search_by_role');
        if (isset($role)) {
            $query->where('roles.id', '=', $role);
        }

        // Calculate total before pagination
        $total_count = $query->count();

        // Apply sorting and pagination
        $query->orderBy($order_by, $dir);
        if ($limit != -1) {
            $query->offset($offset)->limit($limit);
        }

        // Fetch the data
        $users = $query->get();

        // Calculate totals by roles
        $roleTotals = DB::table('model_has_roles')
        ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
        ->select('roles.name', DB::raw('count(model_has_roles.model_id) as total'))
        ->groupBy('roles.name')
        ->get()
        ->pluck('total', 'name');

        $all_data = [];
        foreach ($users as $user) {

            if($user->is_active == 1){
                $status = '<label class="switch">
                                <input type="checkbox" id="statusToggleSwitch" data-status_id="'.$user->id.'" checked>
                                <span class="slider round"></span>
                            </label>';
            }else if($user->is_active == 0){
                $status = '<label class="switch">
                                <input type="checkbox" id="statusToggleSwitch" data-status_id="'.$user->id.'">
                                <span class="slider round"></span>
                            </label>';
            }

            $btn = '<td class="text-right">';
            if (Auth::user()->can('update_user')) {
                $btn .= '<button id="edit_btn" data-eid="'.$user->id.'" class="btn btn-info btn-icon" data-toggle="tooltip" title="Edit" style="margin-right: 3px"><i class="fa-duotone fa-pen-to-square"></i></button>';
            }
            if (Auth::user()->can('change_password')) {
                $btn .= '<button id="change_pass_btn" data-cpass="'.$user->id.'" class="btn btn-warning btn-icon" data-toggle="tooltip" title="Change Password" style="margin-right: 3px"><i class="fa-duotone fa-solid fa-key"></i></button>';
            }
            if (Auth::user()->can('delete_user')) {
                $btn .= '<button id="delete_btn" data-did="'.$user->id.'" class="btn btn-danger btn-icon" data-toggle="tooltip" title="Delete" style="padding: 6px 10px;"><i class="fa-duotone fa-trash-xmark"></i></button>';
            }
            $btn .= '</td>';

            if ($user->role_name == "Teacher"){
                                
                $role_name = '<div class="label label-table label-warning">'.$user->role_name.'</div>';   
            }else if ($user->role_name == "Student"){
                $role_name = '<div class="label label-table label-success">'.$user->role_name.'</div>';   
            }else if ($user->role_name == "Parent"){
                $role_name = '<div class="label label-table label-info">'.$user->role_name.'</div>';
            }else {
                $role_name = '<div class="label label-table label-primary">'.$user->role_name.'</div>';
            }

            

            $all_data[] = [
                'id'            => $user->id,
                'name'          => $user->name,
                'email'         => $user->email,
                'role'          => $role_name,
                'last_login'    => $user->last_login ? Carbon::parse($user->last_login)->format('d-m-Y h:i A') : "",
                'last_login_location' => $user->last_login_location,
                'status'        => $status,
                'btn'           => $btn
            ];
        };

        $data = [
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => $total_count,
            "recordsFiltered" => $total_count,
            "data"            => $all_data,
            "roleTotals"      => $roleTotals
        ];

        return response()->json($data);


    }

    public function insert_user(Request $request)
    {
        $user_email = User::where('email', $request->input('email'))->exists();

        if($user_email){

            return response()->json([
                'status'=> "userExist",
            ]);
            
        }else{

            $user = new User();
            $user->name         = $request->input('name');
            $user->email        = $request->input('email');
            $user->password     = Hash::make($request->input('password'));
            $user->created_by   = Auth::id();

            $user->save();

            $user->assignRole($request->input('role'));

            

            return response()->json([
                'status'=>200
            ]);

        }
    }

    public function edit_user($id)
    {
        $user = User::findOrFail($id);

        $roles = Role::all();

        $user_roles = [];
        foreach ($roles as $role) {
            if ($user->hasRole($role->name)) {
                $user_roles[] = $role->name;
            }
        }

        return response()->json([
            'status'=>200,
            'user_data' => $user,
            'user_role' => implode($user_roles),
        ]);
    }

    public function update_user(Request $request)
    {
        $user_email =  User::where('email', $request->input('email'))
        ->where('id', '!=', $request->input('user_id'))->exists();

        if($user_email){

            return response()->json([
                'status'=> "userExist",
            ]);
            
        }else{
            
            $user = User::findOrFail($request->input('user_id'));
            $user->name         = $request->input('name');
            $user->email        = $request->input('email');

            $user->save();
            
            $user->roles()->detach();
            $user->assignRole($request->input('role'));

            return response()->json([
                'status'=>200
            ]);

        }
    }

    public function delete_user($delete_id)
    {
        $user = User::find($delete_id);

        $user->is_deleted = 1;

        $user->save();
        return response()->json([
            'status'=>200
        ]);
    }

    public function update_user_status(Request $request)
    {
        
        $user = User::find($request->input('user_id'));

        $user->is_active = $request->input('status');

        $user->save();

        return response()->json([
            'status'=>200
        ]);


    }


    public function user_profile($id)
    {
        $user = User::findOrFail($id);

        $roles = Role::all();

        $user_roles = [];
        foreach ($roles as $role) {
            if ($user->hasRole($role->name)) {
                $user_roles[] = $role->name;
            }
        }

        $role = implode($user_roles);

        return view('admin.profile', compact('user', 'role'));

    }


    public function update_profile_photo(Request $request)
    {
        if($request->hasFile('user_image')){
            $user = User::find($request->input('user_id'));
            $image = $request->file('user_image');

            // Get the old image path
            $oldImagePath = public_path('/uploads/user_images/') .$user->photo;

            // Check if the old image exists and is a file, then delete it
            if (!empty($$user->photo) && file_exists($oldImagePath) && !is_dir($oldImagePath)) {
                unlink($oldImagePath); // Delete the old image
            }

            $ext = $image->getClientOriginalExtension();

            $new_image_name = hexdec(uniqid()).'.'.$ext;

            $image->move(public_path('/uploads/user_images/'), $new_image_name);

            $user->photo = $new_image_name;
            $user->save();

            return response()->json([
                'status'=>200
            ]);
        }

    }


    public function change_password(Request $request)
    {

        // Find the user
        $user = User::find($request->input('user_id'));

        // Check if the old password matches
        if (!Hash::check($request->input('old_pass'), $user->password)) {
            return response()->json([
                'status' => 'old_pass_wronge',
            ]);
        }

        // Update the user's password
        $user->password = Hash::make($request->input('new_pass'));
        $user->save();

        return response()->json([
            'status' => 200,
        ]);


    }


    public function change_password_from_admin(Request $request)
    {

        // Find the user
        $user = User::find($request->input('user_id'));

        // Update the user's password
        $user->password = Hash::make($request->input('new_pass'));
        $user->save();

        return response()->json([
            'status' => 200,
        ]);


    }






}
