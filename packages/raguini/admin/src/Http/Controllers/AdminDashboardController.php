<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller {

    public function index() {
        return view('admin::dashboard');
    }
}