<?php

namespace App\Controllers;
use App\Helpers\MailSender;
use App\Helpers\Validation;
use Phphelper\Core\Request;
use Phphelper\Core\Response;

class AuthController{
    public function loginPage(Request $request,Response $response,$params){
        $type = $params->type;
        return $response->render('auth/login',['type'=>$type]);       
    }//loginPage

    public function registerPage(Request $request,Response $response,$params){
        $type = $params->type;
        return $response->render('auth/register',['type'=>$type]);       
    }//loginPage





    public function register(Request $request,Response $response){

        $db = $request->getDatabase();
        [$data,$errors] = Validation::validateRegister($request,$db);
        $role = $data['role'];

        if( !empty($errors)  ) return $response->redirect(null,['errors'=>$errors,'type'=>$role,'data'=>$data,'c_password'=>$request->c_password ] );


        $path = $request->uploadImage('id_photo');
        
        if(!$path)  return $response->redirect(null,['errors'=>$errors,'type'=>$role,'data'=>$data ] );

        $data['id_photo'] = $path;
        $data['password'] = hash('sha256', $data['password']);

        //email sending process
        $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $subject = 'Email verification';
        $body = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';


        $is_development_mode = getenv('IS_DEVELOPMENT_MODE');
        if($is_development_mode=="no"){
            
            $isMailSent = MailSender::send( $data['email'], $data['full_name'], $subject, $body );

            if(!$isMailSent) {
                $data['password'] = $request->password;
                $errors['email'] = 'Email server is not working to send otp. So registration is cancelled for now';
                return $response->redirect(null,['errors'=>$errors,'type'=>$role,'data'=>$data ] );
            }

            $data['verification_code'] = $verification_code;

        }//if development mode is no, then send the actual email
        else{
            $data['verification_code'] = getenv('DUMMY_DEFAULT_OTP');
        }//dont send the actual email.. Default verification code from .env
       

        $isInserted = $db->insert('users',$data);
        if(!$isInserted){
            echo "Something went wrong with the database";
        }//

        return $response->redirect("/login/$role");
        
        
    }//loginPage

    



    public function login(Request $request,Response $response){
        $email = $request->email;
        $password = $request->password;
        $hasedPassword = hash('sha256',$password);
        $db = $request->getDatabase();
       
        $user = $db->fetchOne('users',['email'=>$email,'password'=>$hasedPassword]);

        if(!$user) return $response->redirect(null,['email'=>$email,'password'=>$password,'error'=>'Invalid Credentials','type'=>'tenant']);

        if($user['email_verified_at'] == null){
            return $response->redirect("/verify_email/".$user['id']);
        }

        $request->setUser($user);
        return $response->redirect('/');


    }//if login




    public function getVerifyEmail(Request $request,Response $response,$params){
        $id = $params->id;
        $expiryMinutes = getenv('OTP_EXPIRY_DURATION_MINUTES');
        
        return $response->render('auth/email_verify',['id'=>$id,'expire'=>$expiryMinutes]);

    }//if login



    public function verifyEmail(Request $request,Response $response){
        $id = $request->id;
        $verification_code = $request->verification_code;

        $date = date("Y-m-d H:i:s");
        // $sql = "UPDATE tenant SET email_verified_at = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "' AND otp_created_at > NOW() - INTERVAL 2 MINUTE";
        
        $db = $request->getDatabase();

        $user = $db->fetchOne('users',['id'=>$id]);
        if(!$user){
            return $response->redirect(null,['id'=>$id,'error'=>"This user is not found"]);
        }
        if($user['email_verified_at'] != null){
            return $response->redirect(null,['id'=>$id,'error'=>"User is already verified. You may proceed to login"]);
        }

        $otp = $user['verification_code'];

        if($otp != $verification_code){
            return $response->redirect(null,['id'=>$id,'error'=>"OTP is wrong"]);
        }

        $expiryMinutes = getenv('OTP_EXPIRY_DURATION_MINUTES');
        $result = $db->query("UPDATE users set email_verified_at = NOW() where id = ? and verification_code = ?  and otp_created_at > NOW() - INTERVAL $expiryMinutes MINUTE",[$id,$verification_code]);
        
        print_r($result);
        if($result->affected_rows>0){
            return $response->redirect('/login/'.$user['role']);
        }
        else{
            return $response->redirect(null,['id'=>$id,'error'=>"OTP is expired"]);
        }



    }//verify email


    
    public function resendOtp(Request $request,Response $response){
        $user_id = $request->id;
        $db = $request->getDatabase();

        $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $subject = 'Email verification';
        $body = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';


        $is_development_mode = getenv('IS_DEVELOPMENT_MODE');
        if($is_development_mode=="no"){

            $user = $db->fetchOne('users',['id'=>$user_id]);

            
            $isMailSent = MailSender::send( $user['email'], $user['full_name'], $subject, $body );

            if(!$isMailSent) {
                return $response->redirect(null,['id'=>$user_id,'error'=>"OTP cannot be sent due to some errors"]);
                
            }

        }//if development mode is no, then send the actual email
        else{
            $verification_code = (int)(getenv('DUMMY_DEFAULT_RESEND_OTP'));
        }//dont send the actual email.. Default verification code from .env
       

        $isUpdate = $db->query('UPDATE users set verification_code = ? , otp_created_at = NOW() where id = ?',[$verification_code,$user_id]);
        if($isUpdate->affected_rows==0){
            return $response->redirect(null,['id'=>$user_id,'error'=>"OTP cannot be sent due to some errors"]);
        }

        return $response->redirect(null,['msg'=>"Otp is sent successfully"]);
 
     }//resend otp



    public function logout(Request $request,Response $response){
       $request->logout();
       return $response->redirect('/');

    }//logout



}