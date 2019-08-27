<?php
namespace App\Http\Controllers\Login;
use Illuminate\Http\Request;
use App\Model\UserModel;
use Illuminate\Support\Facades\Hash;

class LoginController{
   //登录1
    public function login(){
        return view('login.login');
    }

    public function loginDo(Request $request){
        //获取数据
        $all = $request->all();

        $username = $all['username'];
        $password = $all['password'];

        //根据用户名查询数据库
        $where1 = ['username'=>$username];
        $res1 = UserModel::where($where1)->first();


        $where2 = ['tel'=>$username];
        $res2 = UserModel::where($where2)->first();


        $where3 = ['email'=>$username];
        $res3 = UserModel::where($where3)->first();

        if($res1){
            $password_model = $res1['password'];
            $username_model = $res1['username'];
        }else if($res2){
            $password_model = $res2['password'];
            $username_model = $res2['username'];
        }else if($res3){
            $password_model = $res3['password'];
            $username_model = $res3['username'];
        }
        if($username_model==''){
            return 3;
        }else{
            if(Hash::check($password,$password_model)){
                $data = [
                    'username'=>$username,
                    'password'=>$password,
                    'time'=>time()
                ];
                //存session
                session(['userlogin'=>$data]);
                return 1;
            }else{
                return 2;
            }

        }










    }


    //登录2
    public function login2(){
        return view('login.login2');
    }
    public function loginDo2(Request $request){
        //获取数据
        $all = $request->all();

        $tel = $all['tel'];
        $code = $all['code'];

        //查session
        $code2 = session('code')['code'];
        if($code2['code']==$code){
            return 1;//验证码成功
        }else{
            return 2;//验证码有误
        }


    }

    //注册展示
    public function register(Request $request){
        return view('login.register');
    }

    //注册
    public function registerDo(Request $request){
        //获取数据
        $all = $request->post();

        $username = $all['username'];
        $tel = $all['tel'];
        $code = $all['code'];
        $email = $all['email'];
        $password = $all['password'];
        $password2 = $all['password2'];

        //验证是否为空
        if($username==''){
            return 1;//姓名不能为空
        }
        if($tel==''){
            return 2;//电话号码不能为空
        }
        if($email==''){
            return 3;//邮箱不能为空
        }
        if($password==''){
            return 4;//密码不能为空
        }
        if($password2!=$password){
            return 5;//两次密码输入不一致
        }
        if($code == ''){
            return 4;//验证码不能为空
        }

        //验证code
        $code2 = session('code',$code);
        if($code2['code']==$code){
            //密码加密
            $password = Hash::make($password);

            //将获取盗的数据添加到数据库
            $data = [
                'username'=>$username,
                'tel'=>$tel,
                'email'=>$email,
                'password'=>$password,
            ];

            $res = UserModel::insert($data);
            if($res){
                return 6;//注册成功
            }else{
                return 7;//注册失败
            }
        }else{
            return 8;//验证码正确
        }




    }


    //手机号发送验证码
    public function code(Request $request){
        $tel = $request->post('tel');
        $code = $this->getCode();
        $host = "http://dingxin.market.alicloudapi.com";
        $path = "/dx/sendSms";
        $method = "POST";
        $appcode = "f384b34407e64176b2b6e6284d86f5f9";
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);
        $querys = "mobile=$tel&param=code%3A$code&tpl_id=TP1711063";
        $bodys = "";
        $url = $host . $path . "?" . $querys;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        if (1 == strpos("$".$host, "https://"))
        {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        }
        $auth = curl_exec($curl);
        $auth = json_decode($auth,true);
        if($auth['return_code']==00000){
            //存session
            $code2 = [
                'code'=>$code
            ];
            session(['code'=>$code2]);
            return 1;
        }else{
            return 2;
        }



    }

    private function getCode(){
        return rand(1000,9999);

    }

    //手机发送登录验证码
    public function codelogin(Request $request){
        $tel = $request->post('tel');


        //查询数据库中是否有次电话号码
        $where = ['tel'=>$tel];
        $sql = UserModel::where($where)->first();
        if($sql==''){
            return 3;
        }else{
            $code = $this->getCode();
            $host = "http://dingxin.market.alicloudapi.com";
            $path = "/dx/sendSms";
            $method = "POST";
            $appcode = "f384b34407e64176b2b6e6284d86f5f9";
            $headers = array();
            array_push($headers, "Authorization:APPCODE " . $appcode);
            $querys = "mobile=$tel&param=code%3A$code&tpl_id=TP1711063";
            $bodys = "";
            $url = $host . $path . "?" . $querys;

            $curl = curl_init();
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_FAILONERROR, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            if (1 == strpos("$".$host, "https://"))
            {
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            }
            $auth = curl_exec($curl);
            $auth = json_decode($auth,true);
            if($auth['return_code']==00000){
                //存session
                $code2 = [
                    'code'=>$code
                ];
                session(['code'=>$code2]);
                return 1;
            }else{
                return 2;
            }

        }







    }

    //忘记密码
    public function ForgetList(){
        return view('login.forgetlist');
    }

    public function Forget(Request $request){
        $all = $request->all();

        $tel = $all['tel'];
        $code = $all['code'];
        $password = $all['password'];

        //查session
        $code2 = session('code')['code'];


        if($code2==$code){
            $where = [
                'tel'=>$tel,
            ];

            $password = Hash::make($password);
            $res = UserModel::where($where)->update(['password'=>$password]);

            if($res){
                //存session
                session('userlogin',$tel);
                return 3;
            }else{
                return 4;
            }
        }else{
            return 2;//验证码有误
        }
    }

    //退出登录
    public function quit(){

    }

}