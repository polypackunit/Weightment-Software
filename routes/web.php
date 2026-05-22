<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WeightmentController;

Route::get('/', function () {
    return view('auth.login');
});






Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'role:Super Admin|Admin|Operator|Teacher')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // All Settings Routes
    Route::get('/settings', [SettingController::class, 'load_settings'])->name('settings');
    Route::post('/update_setting', [SettingController::class, 'update_setting'])->name('update_setting');
    Route::post('/update_bill', [SettingController::class, 'update_bill'])->name('update_bill');
    Route::get('/delete_setting/{delete_val}', [SettingController::class, 'delete_setting'])->name('delete_setting');
    


  


    // < ====================================================================== >

    // All Permission Routes
    Route::view('/all_permission_groups', 'admin.roles_and_permissions.all_permission_groups')->name('all_permission_groups');
    Route::post('/load_permission_groups', [RoleController::class, 'load_permission_groups'])->name('load_permission_groups');
    Route::post('/insert_permission_group', [RoleController::class, 'insert_permission_group'])->name('insert_permission_group');
    Route::get('/edit_permission_group/{id}', [RoleController::class, 'edit_permission_group'])->name('edit_permission_group');
    Route::post('/update_permission_group', [RoleController::class, 'update_permission_group'])->name('update_permission_group');
    Route::get('/delete_permission_group/{id}', [RoleController::class, 'delete_permission_group'])->name('delete_permission_group');
    Route::get('/get_permission_groups', [RoleController::class, 'get_permission_groups'])->name('get_permission_groups');

        
    // All Permission Routes
    Route::view('/all_permissions', 'admin.roles_and_permissions.all_permissions')->name('all_permissions');
    Route::post('/get_all_permissions', [RoleController::class, 'load_permissions'])->name('get_all_permissions');
    Route::post('/insert_permission', [RoleController::class, 'insert_permission'])->name('insert_permission');
    Route::get('/edit_permission/{permission_id}', [RoleController::class, 'edit_permission'])->name('edit_permission');
    Route::post('/update_permission', [RoleController::class, 'update_permission'])->name('update_permission');
    Route::get('/delete_permission/{permission_id}', [RoleController::class, 'delete_permission'])->name('delete_permission');



    // All Roles Routes
    Route::view('/all_roles', 'admin.roles_and_permissions.all_roles')->name('all_roles');
    Route::post('/get_all_roles', [RoleController::class, 'load_roles'])->name('get_all_roles');
    Route::post('/insert_role', [RoleController::class, 'insert_role'])->name('insert_role');
    Route::get('/edit_role/{role_id}', [RoleController::class, 'edit_role'])->name('edit_role');
    Route::post('/update_role', [RoleController::class, 'update_role'])->name('update_role');
    Route::get('/delete_role/{role_id}', [RoleController::class, 'delete_role'])->name('delete_role');
    Route::get('/get_roles', [RoleController::class, 'get_roles'])->name('get_roles');

    
    // All Assign Permission Routes
    Route::view('/roles_and_permissions', 'admin.roles_and_permissions.roles_and_permissions')->name('roles_and_permissions');
    Route::post('/get_roles_and_permissions', [RoleController::class, 'load_roles_and_permissions'])->name('get_roles_and_permissions');
    Route::get('/add_permissions', [RoleController::class, 'add_permissions'])->name('add_permissions');
    Route::post('/insert_role_permission', [RoleController::class, 'insert_role_permission'])->name('insert_role_permission');
    Route::get('/edit_permissions/{role_id}', [RoleController::class, 'edit_permissions'])->name('edit_permissions');
    Route::post('/update_role_permission', [RoleController::class, 'update_role_permission'])->name('update_role_permission');

    
    // All Users Routes
    Route::view('/users', 'admin.users')->name('users');
    Route::post('/get_all_users', [UserController::class, 'load_users'])->name('get_all_users');
    Route::post('/insert_user', [UserController::class, 'insert_user'])->name('insert_user');
    Route::get('/edit_user/{user_id}', [UserController::class, 'edit_user'])->name('edit_user');
    Route::post('/update_user', [UserController::class, 'update_user'])->name('update_user');
    Route::get('/delete_user/{user_id}', [UserController::class, 'delete_user'])->name('delete_user');
    Route::post('/update_user_status', [UserController::class, 'update_user_status'])->name('update_user_status');
    Route::get('/user_profile/{user_id}', [UserController::class, 'user_profile'])->name('user_profile');
    Route::post('/update_profile_photo', [UserController::class, 'update_profile_photo'])->name('update_profile_photo');
    Route::post('/change_password', [UserController::class, 'change_password'])->name('change_password');
    Route::post('/change_password_from_admin', [UserController::class, 'change_password_from_admin'])->name('change_password_from_admin');
        
    // < ====================================================================== >

    // All weightment Routes
    Route::view('/all_weight', 'admin.all_weight')->name('all_weight'); 
    Route::view('/ist_weight', 'admin.ist_weight')->name('ist_weight');  
    Route::get('/second_weight/{id}', [WeightmentController::class, 'second_weight'])->name('second_weight');
    Route::post('/load_weights', [WeightmentController::class, 'load_weights'])->name('load_weights');
    Route::post('/insert_ist_weight', [WeightmentController::class, 'insert_ist_weight'])->name('insert_ist_weight');
    Route::post('/insert_second_weight', [WeightmentController::class, 'insert_second_weight'])->name('insert_second_weight');
    Route::get('/view_invoice/{id}', [WeightmentController::class, 'view_invoice'])->name('view_invoice');
    Route::get('/invoice_print', [WeightmentController::class, 'invoice_print'])->name('invoice_print');
    // Route::get('/edit_role/{role_id}', [RoleController::class, 'edit_role'])->name('edit_role');
    // Route::post('/update_role', [RoleController::class, 'update_role'])->name('update_role');
    // Route::get('/delete_role/{role_id}', [RoleController::class, 'delete_role'])->name('delete_role');
    // Route::get('/get_roles', [RoleController::class, 'get_roles'])->name('get_roles');
 

});

require __DIR__.'/auth.php';



