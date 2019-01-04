<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Permission;
class DeleteUserController extends Controller
{
    public function deleteUser($id){
    	$user = User::findOrFail($id);
        return view('admin.users.delete')->withUser($user);
    }

    public function deleteRole($id){

    	$role= Role::findOrFail($id);

    	return view('admin.roles.delete')->withRole($role);

    }
     public function deletePermission($id)
     {
     	$permission = Permission::findOrFail($id);

     	return view('admin.permissions.delete')->withPermission($permission);

     }
}
