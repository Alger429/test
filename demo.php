<?php
namespace App\Http\Controllers;

use App\Http\Controller\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{
    public function index(Request $request ){
        $method = $request->mothod();
        if ($request->isMethod('post')){
            $id1 = $request->input('id1');
            $id2 = $request->input('id2');

            $user_data = DB::table('user')->select('userID')->where([
                ['id1','=',$id1],
                ['id2','=',$id2]
            ])->first();
            if (!$user_data){
                $row_id = DB::table('user')->insertGetId(
                    ['userID' => ''],
                    ['uid1' => ''],
                    ['uid2' => '']
                );
                $user_data = DB::table('user')->where('id',$row_id)->first();
            }
            return json_encode(['code' => '10000', 'message' => 'Operation is successful', 'data' => $user_data], JSON_UNESCAPED_UNICODE);
        }else{
            return ['code'=>'10500','msg'=>'Please use the POST method to pass the parameters'];
        }
    }
    
}