<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * cookie 设置
     */
    public function set()
    {
        //设置
        // \Cookie::queue('name','zhifeng', 10);
        // return response('<p>我是响应体</p>')->withCookie('class','lamp207',10);
        //读取
        // GET  / HTTP/1.1
        // Host: localhost
        // Cookie: name=haiyan;phone=chuizi
        // ....
        // $name = \Cookie::get('name');

        // dd($name);

    }

    /**
     * 写入闪存
     */
    public function flash()
    {
        // \Session::flash('info','恭喜您,添加成功');
        return redirect('/get-flash')->with('info','添加成功');
    }

    /**
     * 读取闪存
     */
    public function getFlash()
    {
        return view('admin');
    }

    /**
     * 
     */
    public function user()
    {
        return view('user');
    }

    public function insert()
    {
        //表单验证   检测用户   密码
        if(empty($_POST['username']) || strlen($_POST['username']) < 6 || strlen($_POST['username']) > 20) {
            \Session::flash('error','用户名格式不正确');
            return back()->withInput();
        }

    }

    /**
     * 响应
     */
    public function response()
    {
        // 普通字符串
        // return 'i love you??';
        // return '<span>这就是爱</span>';

        //返回json
        // return response()->json(['name'=>'xiaohigh','age'=>32]);

        //返回 模板
        return view('view');

        //下载
        // return response()->download('./lirenchou.m4a');
    }
    /**
     * 视图
     */
    public function views()
    {
        return view('user.add', [
            'title' => '第一次接触视图',
            'content'=>'山东发大水了 香菜涨到了39元一斤', 
            'pages' => '<a href="">1</a><a href="">2</a>'
        ]);
    }
    /**
     * 创建页面1
     */
    public function page1()
    {
        return view('page1');
    }

    /**
     * 页面2
     */
    public function page2()
    {
        return view('page2');
    }

    /**
     * 控制
     */
    public function control()
    {
        return view('control', [
            'isVip' => false,
            'classmates' => [
                '贾旭',
                '林彬',
                '杨洋'
            ]
        ]);
    }
}
