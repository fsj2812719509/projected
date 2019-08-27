<?php
namespace App\Http\Controllers\User;
class UserController{
    //管理员添加
    public function useradd(){
        return view('user.useradd');
    }
}