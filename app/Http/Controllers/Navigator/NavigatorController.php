<?php

namespace App\Http\Controllers\Navigator;

use App\Model\NavModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavigatorController extends Controller
{
    /** 导航栏添加页面 */
    public function NavAddList(){
        return view('navigator.navigator');
    }
    /** 导航栏添加 */
    public function NavAdd(Request $request){
        //获取值
        $all = $request->all();

        $n_name = $all['n_name'];
        $weight = $all['weight'];
        $is_show = $all['is_show'];
        $n_url = $all['n_url'];

        //验证空
        if($n_name==''){
            return 1;//导航名不能为空;
        }
        if($weight==''){
            return 2;//导航名不能为空;
        }
        if($is_show==''){
            return 3;//导航名不能为空;
        }
        if($n_url==''){
            return 7;//链接不能为空
        }
        //验证此导航栏已经存在
        $where = [
            'n_name'=>$n_name
        ];
        $where2 = [
            'n_url'=>$n_url
        ];
        $res = NavModel::where($where,$where2)->first();
        if($res==''){
            //将值传入数据库中
            $data = [
                'n_name'=>$n_name,
                'n_weight'=>$weight,
                'is_show'=>$is_show,
                'n_url'=>$n_url,
                'creattime'=>time(),
                'statue'=>1
            ];
            $sql = NavModel::insert($data);
            if($sql){
                return 5;
            }else{
                return 6;
            }

        }else{
            return 4;//已存在
        }



    }

    /** 导航栏展示 */
    public function NavSelList(){
        //查询数据库

        $where = [
            'statue'=>1
        ];

        $all = NavModel::where($where)->get();

        return view ('navigator.navigatorList',['all'=>$all]);
    }

    /** 导航栏删除 */
    public function NavDel(Request $request){
        $n_id = $_GET['id'];

        //根据id删除数据
        $where = [
            'n_id'=>$n_id
        ];
        $res = NavModel::where($where)->update(['statue'=>0]);
        if($res){
            echo '删除成功';
            return redirect('/NavSelList');
        }else{
            echo '删除失败';
            return redirect('/NavSelList');
        }
    }

    /** 导航栏修改页面 */
    public function NavUpdList(Request $request){
        $n_id = $_GET['id'];
        //根据id查询数据库
        $where = [
            'n_id'=>$n_id
        ];
        $all = NavModel::where($where)->first();
        return view('navigator.navupdate',['all'=>$all]);
    }

    /** 导航栏修改 */
    public function NavUpdate(Request $request){
        //获取数据
        $all = $request->all();

        $n_id = $all['n_id'];
        $n_name = $all['n_name'];
        $n_weight = $all['weight'];
        $is_show = $all['is_show'];
        if($n_name==''){
            return 1;
        }
        if($n_weight==''){
            return 2;
        }
        if($is_show==''){
            return 3;
        }
        //根据名字查询数据库
        $where = [
            'n_name'=>$n_name
        ];
        $sql = NavModel::where($where)->first();
        if($sql){
            return 4;
        }else{
            $where = [
                'n_id'=>$n_id
            ];
            $res = NavModel::where($where)->update(['n_name'=>$n_name,'n_weight'=>$n_weight,'is_show'=>$is_show]);
            if($res){
                return 5;
            }else{
                return 6;
            }

        }


    }
}
