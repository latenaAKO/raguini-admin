<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class RolesController {
     /*
    |--------------------------------------------------------------------------
    | Roles Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for managing User Roles
    |
    */

    public function index() {
        $roles = Role::all();
        $data = [
            'roles' => $roles
        ];
        return view('admin.roles_index', $data);
    }

    public function create() {
        return view('admin.roles_create');
    }

    public function store($request) {

    }
    public function show($id) {

    }

    public function edit($id) {
        
    }

    public function update($id, $request) {

    }
    
}