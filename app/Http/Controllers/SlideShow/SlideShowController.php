<?php

namespace App\Http\Controllers\SlideShow;

use App\Model\SliModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

class SlideShowController extends Controller
{
    //添加页面
    public function SliAddList(){
        return view('sli.sliadd');
    }
    //添加
    public function SliAdd(Request $request){

        $all = $request->input();
        $file = $request->file;

        $sli_img = $this->upload($file);
        $is_show = $all['whether'];
        $weight = $all['weight'];

        if($sli_img== ''){
            echo '请上传图片';
        }
        if($weight==''){
            echo '请设置权重';
        }
        $data = [
            's_img'=>$sli_img,
            'is_show'=>$is_show,
            'weight'=>$weight,
            'status'=>1
        ];

        $data = SliModel::insert($data);
        if($data){
            echo '添加成功';
            return redirect('/slishow');
        }else{
            echo '添加失败';
        }

    }

    //展示
    public function slishow(){
        $where = [
            'status'=>1
        ];
        $res = SliModel::where($where)->select()->paginate(2);
        return view('sli.sli',['data'=>$res]);

    }

    //删除
    public function SliDel(){
        $id = $_GET['id'];
        //根据id进行修改
        $res = SliModel::where(['s_id'=>$id])->update(['status'=>0]);
        if($res){
            echo '删除成功';
            return redirect('/slishow');
        }else{
            echo '删除失败';
        }
    }

    //修改页面
    public function SliUpdList(){
        $id = $_GET['id'];
        //根据id查询数据库
        $where = [
            's_id'=>$id
        ];
        $all = SliModel::where($where)->first();
        return view('sli.sliupd',['all'=>$all]);
    }

    public function SliUpd(Request $request){
        $all = $request->input();
        $file = $request->file;

        $sli_img = $this->upload($file);
        $is_show = $all['whether'];
        $weight = $all['weight'];
        $s_id = $all['s_id'];


        $data = SliModel::where(['s_id'=>$s_id])->update(['s_img'=>$sli_img,'is_show'=>$is_show,'weight'=>$weight]);

        if($data){
            echo '修改成功';
            return redirect('/slishow');
        }else{
            echo '修改失败';
        }
    }

    /**
     * 验证文件是否合法
     */
    public function upload($file, $disk='public')
    {
    // 1.是否上传成功
        if (! $file->isValid()) {
            return false;
        }
    // 2.是否符合文件类型 getClientOriginalExtension 获得文件后缀名
        $fileExtension = $file->getClientOriginalExtension();
        if(! in_array($fileExtension, ['png', 'jpg', 'gif'])) {
            return false;
        }

    // 3.判断大小是否符合 2M
        $tmpFile = $file->getRealPath();
        if (filesize($tmpFile) >= 2048000) {
            return false;
        }

    // 4.是否是通过http请求表单提交的文件
        if (! is_uploaded_file($tmpFile)) {
            return false;
        }
    // 5.每天一个文件夹,分开存储, 生成一个随机文件名
        $fileName = date('Y_m_d').'/'.md5(time()) .mt_rand(0,9999).'.'. $fileExtension;
        $aa=Storage::disk('local')->put($fileName, file_get_contents($tmpFile));
        if ($aa ){
            return Storage::url($fileName);
        }
    }
}
