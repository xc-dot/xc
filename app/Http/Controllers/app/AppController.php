<?php

namespace App\Http\Controllers\app;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AppController extends Controller
{
	public function add(Request $request)
	{
		$name = $request->input('name');
        // dd($name);
        $price = $request->input('price');
	//    dd($price);
		$data=DB::table('goods')->insert([
			'name'=>$name,
			'price'=>$price
		]);
		if($data){
			return json_encode(['res'=>200,'msg'=>'添加成功']);
		}else{
			return json_encode(['res'=>201,'msg'=>'添加失败']);
		}
	}
}
