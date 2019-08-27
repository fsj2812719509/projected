<?php

namespace App\Http\Controllers\Admin;

use App\Model\AdminModel;
use App\Model\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    //管理员添加展示
    public function AdminAddList(){
        return view('admin.adminadd');
    }

    //管理员添加
    public function AdminAdd(Request $request){
        //获取数据
        $all = $request->all();
        $a_name = $all['a_name'];
        $a_password = $all['a_password'];
        $a_time = time();
        if($a_name==''){
            return 1;
        }
        if($a_password==''){
            return 2;
        }

        //根据用户名查询数据
        $where = [
            'a_name'=>$a_name
        ];
        $user = AdminModel::where($where)->first();
        if($user==''){
            //密码进行加密
            $a_password = Hash::make($a_password);

            //将数据添加到数据库
            $data = [
                'a_name'=>$a_name,
                'a_password'=>$a_password,
                'a_time'=>$a_time
            ];
            $res = AdminModel::insert($data);
            if($res){
                return 3;
            }else{
                return 4;
            }
        }else{
            return 5;
        }


    }


    //管理员展示页面
    public function AdminList(){
        //查询数据库
        $res = AdminModel::select()->paginate(2);

        return view('admin.admin',['data'=>$res]);
    }


    //管理员修改页面
    public function AdminUpdateList(Request $request){
        //查询数据
        $id = $_GET['a_id'];
        //根据id查询数据
        $where = [
            'a_id'=>$id
        ];
        $all = AdminModel::where($where)->first();
        return view('admin.adminupdate',['all'=>$all]);
    }

    //管理员修改
    public function AdminUpdate(Request $request){
        //获取数据
        $a_name = $request->post('a_name');
        $a_id = $request->post('a_id');

        if($a_name==''){
            return 4;
        }else{
            //根据 id 查询数据库
            $where = ['a_id'=>$a_id];
            $res = AdminModel::where($where)->first();
            $a_name_model = $res['a_name'];
            if($a_name == $a_name_model){
                return 1;
            }else{
                //进行修改
                $data = [
                    'a_name'=>$a_name
                ];
                $res2 = AdminModel::where($where)->update($data);
                if($res2){
                    return 2;
                }else{
                    return 3;
                }
            }
        }



    }


    //管理员删除
    public function AdminDelete(Request $request){
        $id = $_GET['a_id'];
        //根据获取的id对数据进行删除
        $where = [
            'a_id'=>$id
        ];
        $res = AdminModel::where($where)->delete();
        if($res){
            echo '删除成功';
            return redirect('/AdminList');

        }else{
            echo '删除失败';
            return redirect('/AdminList');
        }
    }

}
