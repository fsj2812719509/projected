<?php

namespace App\Http\Controllers\Matter;

use App\Model\CloumnModeL;
use App\Model\cmModel;
use App\Model\MatterModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatterController extends Controller
{
    public function MatterAddList(){
        $res = CloumnModeL::all();
        return view('matter.matter',['data'=>$res]);
    }

    public function MatterAdd(Request $request){
        $author = $request->input('author');
        $m_name = $request->input('m_name');
        $m_count = $request->input('gcontent');
        $c_id = $request->input('c_id');
        $is_show = $request->input('whether');

        //验证为空
        if($author==''){
            return 1;
        }
        if($m_name==''){
            return 2;
        }
        if($m_count==''){
            return 3;
        }
        //查询库中是否有数据
        $where = [
            'm_name'=>$m_name
        ];
        $sql = MatterModel::where($where)->first();
        if($sql==''){
            //添加到数据库
            $data = [
                'author'=>$author,
                'm_name'=>$m_name,
                'm_content'=>$m_count,
                'status'=>1,
                'is_show'=>$is_show,
                'm_time'=>time()
            ];

            $res = MatterModel::insert($data);
            if($res){
                //根据m名字获取id
                $where = [
                    'm_name'=>$m_name
                ];
                $sql = MatterModel::where($where)->first();
                $m_id = $sql['m_id'];
                $data = [
                    'm_id'=>$m_id,
                    'c_id'=>$c_id
                ];
                $res2 =cmModel::insert($data);
                if($res2){
                    return 5;
                }else{
                    return 6;
                }

            }
        }else{
            return 4;
        }




    }

    public function MatterList(){
        $where = [
            'matter.status'=>1
        ];
        $data = MatterModel::where($where)
            ->join('cm_association','matter.m_id','=','cm_association.m_id')
            ->join('cloumn','cm_association.c_id','=','cloumn.c_id')
            ->select()->paginate(2);
        return view('matter.matterlist',['all'=>$data]);
    }

    public function MatterDel(){
        $m_id =$_GET['id'];

        $where = [
            'm_id'=>$m_id
        ];
        $res = MatterModel::where($where)->update(['status'=>0]);
        if($res){
            echo '删除成功';
            return redirect('/MatterList');
        }else{
            echo '删除失败';
        }
    }

    public function MatterUpdateList(){
        $m_id = $_GET['id'];
        //根据id查询数据库
        $where = [
            'm_id'=>$m_id
        ];
        $all = MatterModel::where($where)->first();
        //查询栏目
        $data = CloumnModeL::all();
        return view('matter.matterupdate',['all'=>$all,'data'=>$data]);
    }

    public function MatterUpdate(Request $request){
        $author = $request->input('author');
        $m_name = $request->input('m_name');
        $m_count = $request->input('gcontent');
        $is_show = $request->input('whether');

        //验证为空
        if($author==''){
            return 1;
        }
        if($m_name==''){
            return 2;
        }
        if($m_count==''){
            return 3;
        }

        //查询库中是否有数据
        $where = [
            'm_name'=>$m_name
        ];
            //修改数据库
            $m_id = $request->input(['m_id']);

            $where = [
                'm_id'=>$m_id
            ];
            $res = MatterModel::where($where)->update(['author'=>$author,'m_name'=>$m_name,'m_content'=>$m_count,'is_show'=>$is_show]);
           if($res){
               return 5;
           }else{
               return 6;
           }
    }
}
