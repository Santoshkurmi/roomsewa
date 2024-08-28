<?php

namespace App\Helpers;
use Phphelper\Core\Request;

class Validation{

    //return errors,datas
//   global $tenant_id, $full_name, $email, $password, $phone_no, $address, $id_type, $id_photo, $errors, $db, $email_verified_at, $verification_code;

    public static function validateRegister(Request $request,$db){
        $full_name = $request->full_name;
        $email = $request->email;
        // echo strlen($email);
        $password = $request->password;
        $c_password = $request->c_password;
        $phone_no = $request->phone_no;
        $address = $request->address;
        $id_type = $request->id_type;
        $id_photo = $request->id_photo;
        $role = $request->role;

        $errors = [];
        if(!$full_name || strlen($full_name)<6 ){
            $errors['full_name'] = "Name must be greater than 6 chars";
        }//name error

        if( !$email || strlen($email)<6 || !filter_var($email, FILTER_VALIDATE_EMAIL) ){
            $errors['email'] = "Email is invalid";
        }//email error
        else {
            // $db = $request->getDatabase();
            $user = $db->fetchOne('users',['email'=>$email]);
            if($user) 
                $errors['email'] = "Email is already exists";
        }// if valid

        if(!$password || strlen($password)<8 ){
            $errors['password'] = "Password must be at least 8";
        }//password error
        if( $password != $c_password ){
            $errors['c_password'] = "Confirm password does not matched";
        }//password error

        if(!$phone_no || strlen($phone_no)!= 10){
            $errors['phone_no'] = "Phone number must be 10 digits";
        }//password error

        if(!$address || strlen($address)<6){
            $errors['address'] = "Address must be 6 chars long";
        }//password error

        if(!$id_type){
            $errors['id_type'] = "Id must be selected";
        }//password error
        
        if(!$role || !($role =='tenant' || $role == 'owner')  ){
            $errors['role'] = "Role must be valid";
        }

        $data = [
            'full_name'=> $full_name,
            'email'=> $email,
            'password'=>$password,
            'phone_no'=> $phone_no,
            'address'=>$address,
            'id_type'=>$id_type,
            'role'=>$role
        ];

        // id_photo
        if(!$request->hasFile('id_photo') ){
            $errors['id_photo'] = "Image must be selected";
        }
        else if(!$request->isImageSupported('id_photo')){
            $errors['id_photo'] = "This image is not supported";
        }//

        return [$data,$errors];


    }//validate


}