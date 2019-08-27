<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::any('/','Login\LoginController@login');//登录

//Route::any('/index','Index\IndexController@index')->middleware('Login');
Route::any('/index','Index\IndexController@index')->middleware('Login');

//登录
Route::any('/login','Login\LoginController@login');//登录页面
Route::any('/loginDo','Login\LoginController@loginDo');//登录1

Route::any('/login2','Login\LoginController@login2');//登录页面2
Route::any('/codelogin','Login\LoginController@codelogin');//注册时发送的验证码
Route::any('/loginDo2','Login\LoginController@loginDo2');//登录1


Route::any('/quit','Login\LoginController@quit');//登录1





//忘记密码
Route::any('/ForgetList','Login\LoginController@ForgetList');//忘记密码页
Route::any('/Forget','Login\LoginController@Forget');//忘记密码


//注册
Route::any('/register','Login\LoginController@register');//注册页面
Route::any('/registerDo','Login\LoginController@registerDo');//注册
Route::any('/code','Login\LoginController@code');//注册时发送的验证码



//管理员
Route::any('/AdminAddList','Admin\AdminController@AdminAddList');//添加管理员页面
Route::any('/AdminList','Admin\AdminController@AdminList');//管理员列表页面
Route::any('/AdminUpdateList','Admin\AdminController@AdminUpdateList');//管理员修改页面
Route::any('/AdminAdd','Admin\AdminController@AdminAdd');//管理员添加
Route::any('/AdminDelete','Admin\AdminController@AdminDelete');//管理员删除
Route::any('/AdminUpdate','Admin\AdminController@AdminUpdate');//管理员修改


//导航栏
Route::any('/NavAddList','Navigator\NavigatorController@NavAddList');//导航栏添加页面
Route::any('/NavAdd','Navigator\NavigatorController@NavAdd');//导航栏添加
Route::any('/NavSelList','Navigator\NavigatorController@NavSelList');//导航栏展示
Route::any('/NavDel','Navigator\NavigatorController@NavDel');//删除导航栏
Route::any('/NavUpdList','Navigator\NavigatorController@NavUpdList');//修改导航栏页面
Route::any('/NavUpdate','Navigator\NavigatorController@NavUpdate');//修改导航



//栏目
Route::any('/CloumnAddList','Cloumn\CloumnController@CloumnAddList');//添加栏目页面
Route::any('/CloumnAdd','Cloumn\CloumnController@CloumnAdd');//添加栏目
Route::any('/Cloumn','Cloumn\CloumnController@Cloumn');//栏目展示
Route::any('/CloumnDel','Cloumn\CloumnController@CloumnDel');//栏目删除
Route::any('/CloumnUpdateList','Cloumn\CloumnController@CloumnUpdateList');//栏目修改页面
Route::any('/CloumnUpdate','Cloumn\CloumnController@CloumnUpdate');//栏目修改



//内容
Route::any('/MatterAddList','Matter\MatterController@MatterAddList');//内容添加页面
Route::any('/MatterAdd','Matter\MatterController@MatterAdd');//内容添加
Route::any('/MatterList','Matter\MatterController@MatterList');//内容展示
Route::any('/MatterDel','Matter\MatterController@MatterDel');//内容删除
Route::any('/MatterUpdateList','Matter\MatterController@MatterUpdateList');//内容修改页
Route::any('/MatterUpdate','Matter\MatterController@MatterUpdate');//内容修改



//轮播图
Route::any('/SliAddList','SlideShow\SlideShowController@SliAddList');//轮播图
Route::any('/SliAdd','SlideShow\SlideShowController@SliAdd');//轮播图
Route::any('/slishow','SlideShow\SlideShowController@slishow');//轮播图
Route::any('/SliDel','SlideShow\SlideShowController@SliDel');//轮播图
Route::any('/SliUpdList','SlideShow\SlideShowController@SliUpdList');//轮播图
Route::any('/SliUpd','SlideShow\SlideShowController@SliUpd');//轮播图




/** 前台 */
Route::any('/proscenium_index','Proscenium\IndexController@index');//首页
Route::any('/matters','Proscenium\IndexController@matters');//首页
Route::any('/music','Proscenium\IndexController@music');//首页
Route::any('/snacks','Proscenium\IndexController@snacks');//首页
Route::any('/beauty','Proscenium\IndexController@beauty');//首页









