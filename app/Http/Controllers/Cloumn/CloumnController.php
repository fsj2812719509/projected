<?php

namespace App\Http\Controllers\Cloumn;

use App\Model\CloumnModeL;
use App\Model\NavModel;
use App\Model\Nc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CloumnController extends Controller
{
    //栏目添加页面
    public function CloumnAddList()
    {
        //查询所有的导航名
        $res = NavModel::all();
        return view('cloumn.cloumnadd', ['all' => $res]);
    }

    public function CloumnAdd(Request $request)
    {
        $all = $request->all();

        $c_name = $all['c_name'];
        $c_weight = $all['c_weight'];
        $is_show = $all['whether'];
        $link = $all['link'];
        $n_id = $all['n_id'];
        $creattime = time();
        $status = 1;


        //验证空
        if ($c_name == '') {
            return 1;//栏目不能为空
        }
        if ($c_weight == '') {
            return 2;//权重不能为空
        }
        if ($link == '') {
            return 3;//网址不能为空
        }
        //查询数据库中是否与此名
        $where = [
            'c_name' => $c_name
        ];
        $sql = CloumnModeL::where($where)->first();


        $where2 = [
            'link' => $link
        ];
        $sql2 = CloumnModeL::where($where)->first();
        if ($sql) {
            return 6;
        }else if($sql2){
            return 7;
        }else{
            $data = [
                'c_name' => $c_name,
                'c_weight' => $c_weight,
                'is_show' => $is_show,
                'link' => $link,
                'creattime' => $creattime,
                'status'=>$status
            ];

            $res = CloumnModeL::insert($data);
            if ($res) {
                //根据名字查询id
                $sql3 = CloumnModeL::where(['c_name' => $c_name])->first();
                $c_id = $sql3['c_id'];
                $data2 = [
                    'n_id' => $n_id,
                    'c_id' => $c_id
                ];
                $sql4 = Nc::insert($data2);
                if ($sql4) {
                    return 4;
                } else {
                    return 8;
                }

            } else {
                return 5;
            }
        }



    }

    //展示栏目
    public function Cloumn(){
        //查询数据库
        $where = [
            'status'=>1
        ];
        $data = CloumnModeL::where($where)
            ->join('nc_association','cloumn.c_id','=','nc_association.c_id')
            ->join('navigation','nc_association.n_id','=','navigation.n_id')
            ->select()
            ->paginate(2);

        return view('cloumn.cloumn',['data'=>$data]);
    }

    //栏目删除
    public function CloumnDel(Request $request){
        $c_id = $_GET['id'];

        //根据id修改状态
        $where = [
            'c_id'=>$c_id
        ];

        $data = CloumnModeL::where($where)->update(['status'=>0]);
        if($data){
            echo '删除成功';
            return redirect('/NavSelList');
        }else{
            echo '删除失败';
        }
    }

    //栏目修改页面
    public function CloumnUpdateList(Request $request){
        $c_id = $_GET['id'];
        //根据c_id查询所有
        $where = [
            'c_id'=>$c_id
        ];
        $data = CloumnModeL::where($where)->first();
        $res = NavModel::all();
        return view('cloumn.cloumnupdate',['data'=>$data,'all'=>$res]);
    }

    //栏目修改
    public function CloumnUpdate(Request $request){
        $all = $request->all();

        $c_name = $all['c_name'];
        $c_weight = $all['c_weight'];
        $link = $all['link'];
        $n_id = $all['n_id'];
        $whether = $all['whether'];

        if($c_name==''){
            return 4;
        }
        if($c_weight==''){
            return 5;
        }
        if($link==''){
            return 6;
        }
        if($whether==''){
            return 7;
        }


        //根据id对数据进行修改
        $c_id = $all['c_id'];
        $where= [
            'c_id'=>$c_id
        ];
        $res = CloumnModeL::where($where)->update(['c_name'=>$c_name,'c_weight'=>$c_weight,'link'=>$link,'is_show'=>$whether]);
        if($res){
            //修改导航栏
            $res2 = Nc::where($where)->update(['n_id'=>$n_id]);
            if($res2){
                return 1;
            }else{
                return 3;
            }
        }else{
            return 2;
        }


    }



}
