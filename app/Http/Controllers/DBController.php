<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DBController extends Controller
{
    /**
     * 查询
     */
    public function select()
    {
    	$mvs = DB::select('select * from mvs limit 10');
    }

    /**
     * 事务
     */
    public function trans()
    {
    	test();
    	DB::transaction(function(){
    		//
	    	$res1 = DB::update('update users set account = account - 100 where id = 100');
	    	$res2 = DB::update('update users set account = account + 100 where id = 6');

	    	if($res1 && $res2) {
	    		DB::commit();
	    	}else{
	    		DB::rollback();
	    	}

    		// try{
	    	// 	$res2 = DB::update('update users sets account = account + 100 where id = 6');
	    	// }catch(\Exception $e) {
	    	// 	//获取异常的信息
	    	// 	echo $e->getMessage();
	    	// }

	    	// echo 3333;

    	});
    	return view('page1');
    }
    /**
     * join
     */
    public function join()
    {
        $res = DB::table('goods')
            ->join('cates','goods.cate_id','=','cates.id')
            ->skip(0)
            ->take(10)
            ->get();

        dd($res);
    }
}
