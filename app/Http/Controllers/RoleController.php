<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PermissionGroup;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function load_permissions(Request $request)
    {
        $limit      = $request->input('length');
        $offset     = $request->input('start');
        $column     = $request->input('order.0.column');
        $dir        = $request->input('order.0.dir');
        $order_by   = $request->input("columns.$column.data");

        // Build the query with potential filters
        $query = DB::table('permissions') // Assuming 'students' table
            ->select([
                '*'
            ]);

        if ($search = $request->input('search')) { // .value if using DataTables
            $query->where('group_name', 'like', '%' . $search . '%');
        }

        // Calculate total before pagination
        $total_count = $query->count();

        // Apply sorting and pagination
        $query->orderBy($order_by, $dir);
        if ($limit != -1) {
            $query->offset($offset)->limit($limit);
        }

        // Fetch the data
        $permissions = $query->get();

        $all_data = [];
        foreach ($permissions as $permission) {

            $btn = '<td class="text-right">
                        <button id="edit_btn" data-eid="'.$permission->id.'" class="btn btn-info btn-icon" data-toggle="tooltip" title="Edit"><i class="fa-duotone fa-pen-to-square"></i></button>
                        <button id="delete_btn" data-did="'.$permission->id.'" class="btn btn-danger btn-icon" data-toggle="tooltip" title="Delete" style="padding: 6px 10px;"><i class="fa-duotone fa-trash-xmark"></i></button>
                    </td>
                    ';

            $all_data[] = [
                'id'            => $permission->id,
                'name'          => $permission->name,
                'group_name'    => $permission->group_name,
                'btn'           => $btn
            ];
        };

        $data = [
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => $total_count,
            "recordsFiltered" => $total_count,
            "data"            => $all_data
        ];

        return response()->json($data);
    }

    public function load_roles(Request $request)
    {
        $limit      = $request->input('length');
        $offset     = $request->input('start');
        $column     = $request->input('order.0.column');
        $dir        = $request->input('order.0.dir');
        $order_by   = $request->input("columns.$column.data");

        // Build the query with potential filters
        $query = DB::table('roles') // Assuming 'students' table
            ->select([
                '*'
            ]);

        if ($search = $request->input('search')) { // .value if using DataTables
            $query->where('name', 'like', '%' . $search . '%');
        }

        // Calculate total before pagination
        $total_count = $query->count();

        // Apply sorting and pagination
        $query->orderBy($order_by, $dir);
        if ($limit != -1) {
            $query->offset($offset)->limit($limit);
        }

        // Fetch the data
        $roles = $query->get();

        $all_data = [];
        foreach ($roles as $role) {

            $btn = '<td class="text-right">
                        <button id="edit_btn" data-eid="'.$role->id.'" class="btn btn-info btn-icon" data-toggle="tooltip" title="Edit"><i class="fa-duotone fa-pen-to-square"></i></button>
                        <button id="delete_btn" data-did="'.$role->id.'" class="btn btn-danger btn-icon" data-toggle="tooltip" title="Delete" style="padding: 6px 10px;"><i class="fa-duotone fa-trash-xmark"></i></button>
                    </td>
                    ';

            $all_data[] = [
                'id'            => $role->id,
                'name'          => $role->name,
                'btn'           => $btn
            ];
        };

        $data = [
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => $total_count,
            "recordsFiltered" => $total_count,
            "data"            => $all_data
        ];

        return response()->json($data);
    }


    public function load_roles_and_permissions(Request $request)
    {
        $limit      = $request->input('length');
        $offset     = $request->input('start');
        $column     = $request->input('order.0.column');
        $dir        = $request->input('order.0.dir');
        $order_by   = $request->input("columns.$column.data");

        // Build the query with potential filters
        $query = DB::table('roles')
            ->select([
                '*',
            ]);

        if ($search = $request->input('search')) { // .value if using DataTables
            $query->where('roles.name', 'like', '%' . $search . '%');
        }

        // Calculate total before pagination
        $total_count = $query->count();

        // Apply sorting and pagination
        $query->orderBy($order_by, $dir);
        if ($limit != -1) {
            $query->offset($offset)->limit($limit);
        }

        // Fetch the data
        $roles = $query->get();

        $all_data = [];
        foreach ($roles as $role) {

            $permission_query = DB::table('role_has_permissions')
            ->leftJoin('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
            ->select([
                '*',
            ])->where('role_id', $role->id)
            ->get();

            $permissions = "";

            foreach($permission_query as $permission){

                $permissions .= '<div class="label label-table label-primary" style="width: auto; margin-right: 3px; margin-bottom: 3px;">'.$permission->name.'</div>';
            }

            $btn = '<td class="text-right">';
            if (Auth::user()->can('update_roles_permission')) {
                $btn .= '<a href="edit_permissions/'.$role->id.'" class="btn btn-info btn-icon" data-toggle="tooltip" title="Edit"><i class="fa-duotone fa-pen-to-square"></i></a>';
            }
            $btn .= '</td>';

            $all_data[] = [
                'id'            => $role->id,
                'name'          => $role->name,
                'permissions'   => $permissions,
                'btn'           => $btn
            ];
        };

        $data = [
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => $total_count,
            "recordsFiltered" => $total_count,
            "data"            => $all_data
        ];

        return response()->json($data);
    }


    public function insert_permission(Request $request)
    {
        $permission = Permission::create([
            'name' => $request->input('permission_name'),
            'group_name' => $request->input('permission_group')
        ]);

        return response()->json([
            'status'=>200
        ]);
    }

    public function edit_permission($id)
    {
        $permission = Permission::findOrFail($id);

        return response()->json([
            'status'=>200,
            'permission' => $permission,
        ]);
    }

    public function update_permission(Request $request)
    {
        try {
            $permission = Permission::findOrFail($request->input('permission_id'))->update([
                'name' => $request->input('permission_name'),
                'group_name' => $request->input('permission_group')
            ]);

            return response()->json([
                'status'=>200
            ]);
        } catch (QueryException $e) {
            // Check for unique constraint violation
            if ($e->getCode() === '23000') {
                return response()->json([
                    'status' => 500,
                ], 409); // HTTP 409 Conflict
            }
        } 

    }

    public function delete_permission($id)
    {
        Permission::findOrFail($id)->delete();

        return response()->json([
            'status'=>200
        ]);
    }



    public function insert_role(Request $request)
    {
        $Role = Role::create([
            'name' => $request->input('role_name')
        ]);

        return response()->json([
            'status'=>200
        ]);
    }

    public function edit_role($id)
    {
        $role = Role::findOrFail($id);

        return response()->json([
            'status'=>200,
            'role_data' => $role,
        ]);
    }

    public function update_role(Request $request)
    {
        try {
            $Role = Role::findOrFail($request->input('role_id'))->update([
                'name' => $request->input('role_name'),
            ]);

            return response()->json([
                'status'=>200
            ]);
        } catch (QueryException $e) {
            // Check for unique constraint violation
            if ($e->getCode() === '23000') {
                return response()->json([
                    'status' => 500,
                ], 409); // HTTP 409 Conflict
            }
        } 

    }

    public function delete_role($id)
    {
        Role::findOrFail($id)->delete();

        return response()->json([
            'status'=>200
        ]);
    }

    public function get_roles()
    {
        $role = Role::all();

        return response()->json($role);
    }





    public function add_permissions(Request $request)
    {
        $role = Role::all();

        $permissions = Permission::all();
        
        $permissions_group = DB::table('permissions')->select('group_name')->groupBy('group_name')->get();

        return view('admin.roles_and_permissions.add_permissions', compact('role', 'permissions', 'permissions_group'));
    }

    public function get_role_permission(Request $request)
    {
        $role = Role::all();
        
        $permissions_group = DB::table('permissions')->select('group_name')->groupBy('group_name')->get();

        $current_role = Role::findOrFail(1);

        $permission_data = '';

        foreach ($permissions_group as $permission_group) {
            
            $permission_data .= '<div class="row">  
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="switch">
                                            <input type="checkbox" id="statusToggleSwitch">
                                            <span class="slider round"> </span>
                                        </label>
                                        <label class="control-label" ><strong>'.$permission_group->group_name.':</strong> </label>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="row">';
        $permissions = DB::table('permissions')->select('id', 'name')->where('group_name', $permission_group->group_name)->get();
        foreach ($permissions as $permission) {

            $permission_data .=         '<div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="switch">
                                                    <input type="checkbox" id="permission_box'.$permission->id.'" name="permission_id[]" value="'.$permission->id.'">
                                                    <span class="slider round"> </span>
                                                </label>
                                                <label class="control-label" >'.$permission->name.': </label>
                                            </div>
                                        </div>';
                                    }
            $permission_data .=     '</div>
                                </div>
                            </div>';
            

        }

        return response()->json([
            'status'=>200,
            'permission_data' => $permission_data,
        ]);
    }

    public function insert_role_permission(Request $request)
    {
        $data = array();
        $permissions = $request->input('permission_id');
        
        foreach($permissions as $key => $item){

            $data['role_id'] = $request->input('role_id');
            $data['permission_id'] = $item;

            DB::table('role_has_permissions')->insert($data);
        }
 
        return response()->json([
            'status'=>200
        ]);
    }


    public function edit_permissions($role_id)
    {
        $role = Role::findOrFail($role_id);

        $permissions = Permission::all();
        
        $permissions_group = DB::table('permissions')->select('group_name')->groupBy('group_name')->get();

        return view('admin.roles_and_permissions.edit_permissions', compact('role', 'permissions', 'permissions_group'));
    }


    public function update_role_permission(Request $request)
    {
        $role = Role::findOrFail($request->input('role_id'));
        // Retrieve permission names from the request and sync them with the role
        $permissions = Permission::whereIn('id', $request->input('permission_id', []))->pluck('name')->toArray();
        
        if(!empty($permissions)){

            $role->syncPermissions($permissions);
        }
 
        return response()->json([
            'status'=>200
        ]);
    }




    
    
    public function load_permission_groups(Request $request)
    {
        $limit      = $request->input('length');
        $offset     = $request->input('start');
        $column     = $request->input('order.0.column');
        $dir        = $request->input('order.0.dir');
        $order_by   = $request->input("columns.$column.data");

        // Build the query with potential filters
        $query = DB::table('permission_groups') // Assuming 'students' table
            ->select([
                '*'
            ]);

        if ($search = $request->input('search')) { // .value if using DataTables
            $query->where('permission_group_name', 'like', '%' . $search . '%');
        }

        // Calculate total before pagination
        $total_count = $query->count();

        // Apply sorting and pagination
        $query->orderBy($order_by, $dir);
        if ($limit != -1) {
            $query->offset($offset)->limit($limit);
        }

        // Fetch the data
        $permission_group = $query->get();

        $all_data = [];
        foreach ($permission_group as $data) {

            $btn = '<td class="text-right">
                        <button id="edit_btn" data-eid="'.$data->id.'" class="btn btn-info btn-icon" data-toggle="tooltip" title="Edit"><i class="fa-duotone fa-pen-to-square"></i></button>
                        <button id="delete_btn" data-did="'.$data->id.'" class="btn btn-danger btn-icon" data-toggle="tooltip" title="Delete" style="padding: 6px 10px;"><i class="fa-duotone fa-trash-xmark"></i></button>
                    </td>
                    ';

            $all_data[] = [
                'id'            => $data->id,
                'permission_group_name'          => $data->permission_group_name,
                'btn'           => $btn
            ];
        };

        $data = [
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => $total_count,
            "recordsFiltered" => $total_count,
            "data"            => $all_data
        ];

        return response()->json($data);
    }


    public function insert_permission_group(Request $request)
    {
        $permission_group = PermissionGroup::where('permission_group_name', $request->input('permission_group_name'))->exists();

        if($permission_group){

            return response()->json([
                'status'=> "groupExist",
            ]);
            
        }else{

            $permission_group = new PermissionGroup();
            $permission_group->permission_group_name     = $request->input('permission_group_name');
            $permission_group->created_by    = Auth::id();
            $permission_group->updated_by    = Auth::id();

            $permission_group->save();

            return response()->json([
                'status'=>200
            ]);

        }

    }


    public function edit_permission_group($id)
    {
        $Data = PermissionGroup::find($id);

        return response()->json([
            'status'=>200,
            'data' => $Data,
        ]);
    }


    public function update_permission_group(Request $request)
    {
        $permission_group =  PermissionGroup::where('permission_group_name', $request->input('permission_group_name'))
        ->where('id', '!=', $request->input('permission_group_id'))->exists();

        if($permission_group){

            return response()->json([
                'status'=> "groupExist",
            ]);
            
        }else{
            
            $permissions = PermissionGroup::find($request->input('permission_group_id'));
            $permissions->permission_group_name     = $request->input('permission_group_name');
            $permissions->updated_by    = Auth::id();

            $permissions->save();

            return response()->json([
                'status'=>200
            ]);

        }
    }


    public function delete_permission_group($id)
    {
        $permission_group = PermissionGroup::find($id);

        $permission_group->is_deleted = 1;
        $permission_group->updated_by = Auth::id();

        $permission_group->save();
        return response()->json([
            'status'=>200
        ]);
    }


    public function get_permission_groups()
    {
        $permission_group = PermissionGroup::where('is_deleted', '!=', 1)
                  ->select(['id', 'permission_group_name'])
                  ->get();

        return response()->json($permission_group);
    }


}
