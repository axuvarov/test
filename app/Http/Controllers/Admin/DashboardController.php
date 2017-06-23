<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Тест
class DashboardController extends Controller
{
    //Метот показа шаблона
	public function show()
		{
			//Возврат шаблона
   			return view('Admin.Dashboard.show');
		}
}
