<?php

namespace Survey\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Survey\Models\Audit;

class SurveyController extends Controller {
    public function index() {
        $audits = Audit::paginate(15);
        $data = [
            'audits' => $audits
        ];
        return view('survey::survey_index', $data);
    }

    public function create() {
        return view('survey::survey_create');
    }
    
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $audit = Audit::create([
            'name'              =>      $request->input('name'),
            'is_published'      =>      $request->has('published'),
            'user_id'           =>      1,
            'checklist_id'      =>      1
        ]);
        
        if ($audit) {
            return redirect()->back()->with('message_success', 'Audit successfully created');
        }
        
    }

    public function edit() {

    }

    public function update($id, Request $request) {

    }
}