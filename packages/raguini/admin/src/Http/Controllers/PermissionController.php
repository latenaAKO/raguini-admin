<?php

namespace Admin\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller {
    public function index() {
        $permissions = Permission::all();
        $data = [
            'permissions' => $permissions
        ];
        return view('admin::permissions_index', $data);
    }

    public function create() {
        return view('admin::permissions_create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:32|regex:/[a-zA-Z_\\h\\d]/|unique:roles,name'
        ]);
        
        $role = Permission::create(['name' => strtolower(implode('_', explode(' ',$request->input('name'))))]);

        if($role) {
            return redirect()->back()->with('message_success', 'Saved Successfully');
        }
        else {
            return redirect()->back()->with('message_error', 'Something went wrong');
        }
    }

    public function destroy($id) {
        $permission = Permission::findOrFail($id);

        if (!$permission->delete()) {
            return redirect()->back()->with('message_error', 'Something went wrong');
        }
        return redirect()->back()->with('message_success', 'Deleted Successfully');
    }
}