<?php 

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller {
    
    public function index() {
        $roles = Role::all();
        $data = [
            'roles' => $roles
        ];
        return view('admin::roles_index', $data);
    }


    public function create() {
        $permission = Permission::all();

        $data = [
            'permissions' => $permission
        ];

        return view('admin::roles_create', $data);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name'          =>  'required|max:32|unique:roles,name',
            'permissions'   =>  'required|exists:permissions,name'
        ]);

        
        $role = Role::create(['name' => strtolower($request->input('name'))]);

        if($role) {
            $role->syncPermissions($request->input('permissions'));
            return redirect()->back()->with('message_success', 'Saved Successfully');
        }
        else {
            return redirect()->back()->with('message_error', 'Something went wrong');
        }
    }

    public function edit($id) {
        $role = Role::with('permissions')->findOrFail($id);
        $permissions = Permission::all();
        $checkedPermissions = array_map(function($e) {
            return $e['name'];
        }, $role->permissions->toArray());
  
        $data = [
            'role'               =>     $role,
            'permissions'        =>     $permissions,
            'checkedPermissions' =>      $checkedPermissions
        ];

        return view('admin::roles_edit', $data);
    }

    public function update($id, Request $request) {
        $this->validate($request, [
            'permissions'   =>  'required|exists:permissions,name'
        ]);
        
        $role = Role::findOrFail($id);

        if($role->syncPermissions($request->input('permissions'))) {
            return redirect()->back()->with('message_success', 'Saved Successfully');
        }
        else {
            return redirect()->back()->with('message_error', 'Something went wrong');
        }
    }
}