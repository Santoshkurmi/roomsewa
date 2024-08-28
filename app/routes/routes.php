<?php
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\PropertyController;
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;



// $isLogin = function (Request $request,Response $response) {
    
//     if( !$request->isLogin() ) return $response->redirect('/login');
// };




Router::get('/',[HomeController::class,'home'] );
Router::get('/contact','home/contact' );
Router::get('/about','home/about' );

Router::get('/admin/login','admin/auth/login_admin');
Router::get('/login_choice','auth/choice/login_choice' );
Router::get('/register_choice','auth/choice/register_choice' );


Router::get('/property/{id}',[PropertyController::class,'viewProperty'] );
Router::post('/search_property',[PropertyController::class,'searchProperty']);



Router::get('/login/{type?}',[AuthController::class,'loginPage']);
Router::get('/register/{type?}',[AuthController::class,'registerPage']);


//auth logic
Router::post('/register',[AuthController::class,'register']);
Router::post('/login',[AuthController::class,'login']);
Router::post('/verify_email',[AuthController::class,'verifyEmail']);
Router::post('/resend_otp',[AuthController::class,'resendOtp']);



Router::get('/verify_email/{id}',[AuthController::class,'getVerifyEmail']);


Router::get('/logout',[AuthController::class,'logout']);




