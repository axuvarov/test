<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //Метот показа шаблона
	public function show()
		{
   			return view('Admin.Dashboard.show');
		}
}
