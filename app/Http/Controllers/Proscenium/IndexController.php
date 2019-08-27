<?php

namespace App\Http\Controllers\Proscenium;

use App\Model\CloumnModeL;
use App\Model\MatterModel;
use App\Model\NavModel;
use App\Model\SliModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //展示页面
    public function index(){
        //查询轮播图
        $sli = SliModel::all();

        //查询导航栏
        $where3 = [
            'is_show'=>1,
        ];
        $where4 = [
            'statue'=>1
        ];
        $nav = NavModel::where($where3,$where4)->orderBy('n_weight','asc')->get();

        //查询栏目
        $where = [
            'is_show'=>1
        ];
        $where2 = [
            'status'=>1
        ];
        $column = CloumnModeL::where($where,$where2)->orderBy('c_weight','asc')->get();

        $res=[];
        for($i=0;$i<count($column);$i++){
            $res[] = MatterModel::join('cm_association','matter.m_id','=','cm_association.m_id')
                ->join('cloumn','cm_association.c_id','=','cloumn.c_id')
                ->get()
                ->toArray();
        }
        /*var_dump($res);exit;*/

        return view('proscenium.index',['all'=>$sli,'nav'=>$nav,'column'=>$column,'matter'=>$res]);
    }

    //内容
    public function matters(){
        //查询轮播图
        $sli = SliModel::all();
        //查询导航栏
        $where3 = [
            'is_show'=>1,
        ];
        $where4 = [
            'statue'=>1
        ];
        $nav = NavModel::where($where3,$where4)->orderBy('n_weight','asc')->get();

        //根据传来的id查询内容
        $id = $_GET['id'];
        //根据id查询数据ku
        $matter = MatterModel::where(['m_id'=>$id])->first();
        //将数据传到页面
        return view('proscenium.matter',['nav'=>$nav,'all'=>$sli,'matter'=>$matter]);
    }

    //音乐展示
    public function music(){
        //查询轮播图
        $sli = SliModel::all();

        //查询导航栏
        $where3 = [
            'is_show'=>1,
        ];
        $where4 = [
            'statue'=>1
        ];
        $nav = NavModel::where($where3,$where4)->orderBy('n_weight','asc')->get();

        //查询栏目
        $where = [
            'is_show'=>1
        ];
        $where2 = [
            'status'=>1
        ];
        $column = CloumnModeL::where($where,$where2)->orderBy('c_weight','asc')->get();

        $res=[];
        for($i=0;$i<count($column);$i++){
            $res[] = MatterModel::join('cm_association','matter.m_id','=','cm_association.m_id')
                ->join('cloumn','cm_association.c_id','=','cloumn.c_id')
                ->get()
                ->toArray();
        }
        /*var_dump($res);exit;*/

        return view('proscenium.music',['all'=>$sli,'nav'=>$nav,'column'=>$column,'matter'=>$res]);
    }

    //零食
    public function snacks(){
        //查询轮播图
        $sli = SliModel::all();

        //查询导航栏
        $where3 = [
            'is_show'=>1,
        ];
        $where4 = [
            'statue'=>1
        ];
        $nav = NavModel::where($where3,$where4)->orderBy('n_weight','asc')->get();

        //查询栏目
        $where = [
            'is_show'=>1
        ];
        $where2 = [
            'status'=>1
        ];
        $column = CloumnModeL::where($where,$where2)->orderBy('c_weight','asc')->get();

        $res=[];
        for($i=0;$i<count($column);$i++){
            $res[] = MatterModel::join('cm_association','matter.m_id','=','cm_association.m_id')
                ->join('cloumn','cm_association.c_id','=','cloumn.c_id')
                ->get()
                ->toArray();
        }
        /*var_dump($res);exit;*/

        return view('proscenium.snacks',['all'=>$sli,'nav'=>$nav,'column'=>$column,'matter'=>$res]);
    }

    //美妆
    public function beauty(){
        //查询轮播图
        $sli = SliModel::all();

        //查询导航栏
        $where3 = [
            'is_show'=>1,
        ];
        $where4 = [
            'statue'=>1
        ];
        $nav = NavModel::where($where3,$where4)->orderBy('n_weight','asc')->get();

        //查询栏目
        $where = [
            'is_show'=>1
        ];
        $where2 = [
            'status'=>1
        ];
        $column = CloumnModeL::where($where,$where2)->orderBy('c_weight','asc')->get();

        $res=[];
        for($i=0;$i<count($column);$i++){
            $res[] = MatterModel::join('cm_association','matter.m_id','=','cm_association.m_id')
                ->join('cloumn','cm_association.c_id','=','cloumn.c_id')
                ->get()
                ->toArray();
        }
       /* var_dump($res);exit;*/

        return view('proscenium.beauty',['all'=>$sli,'nav'=>$nav,'column'=>$column,'matter'=>$res]);
    }


}
