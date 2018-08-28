<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	/**
	 * 添加
	 */
    public function add()
    {
    	return view('add');
    }

    /**
     * 插入
     */
    public function insert()
    {
    	echo  'insert';
    }

    /**
     * 查看指定的用户
     */
    public function show($id)
    {
    	echo $id;
    }

    public function index()
    {
    	return '用户列表';
    }

}
