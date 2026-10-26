<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()        { return view('admin.index'); }
    public function calendar()     { return view('admin.app-fullcalender'); }
    public function login()        { return view('admin.auth-basic-login'); }
    public function modals()       { return view('admin.component-modals'); }
    public function formElements() { return view('admin.form-elements'); }
    public function datatable()    { return view('admin.table-datatable'); }
}
