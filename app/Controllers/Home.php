<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('view_home');
	}

	public function class()
	{
		return view('view_class');
	}

	public function contact()
	{
		return view('view_contact');
	}
	public function actionContact()
	{
		return view('view_action_contact');
	}
	public function designClass()
	{
		return view('view_class_detail');
	}
}
