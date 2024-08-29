<?php


namespace App\Controllers;
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;

class MessageController{

    #[Router(path:'/messages', method:'GET')]
    public function messageProfiles(Request $request,Response $response){

        $db = $request->getDatabase();
        $user_id = $request->getUser()->id;

        $users = $db->fetchAllSql('SELECT DISTINCT u.*
            FROM users u
            INNER JOIN messages m ON u.id = m.sender_id OR u.id = m.receiver_id
            WHERE (m.sender_id = ? OR m.receiver_id = ?) and u.id != ?',[$user_id,$user_id,$user_id]);

        // print_r($users);

        return $response->render('message/message_profiles',['profiles'=>$users]);
    }//messageProfiles


    #[Router(path:'/message/{id}', method:'GET')]
    public function messages(Request $request,Response $response,$params){
        $user_id = $request->getUser()->id;
        $other_id = $params->id;
        if(!$other_id){
            die("Please provide other user");
        }
        

        $db = $request->getDatabase();

        $messages = $db->fetchAllSql('SELECT * from messages where (sender_id = ? and receiver_id = ?) or (sender_id = ? and receiver_id = ? )',[$user_id,$other_id,$other_id,$user_id]);
        $user = $db->fetchOne('users',['id'=>$other_id]);
        if(!$user){
            die("User id $other_id doesn't exists in users table.");
        }
        // print_r($messages);
        return $response->render('message/messages',['messages'=>$messages,'owner'=>$user]);
    }//messageProfiles


    #[Router(path:'/send_message', method:'POST')]
    public function sendMessage(Request $request,Response $response){
       
        $other_id = $request->id;
        $user_id = $request->getUser()->id;
        $message = $request->message;

        if(!$other_id || !$message){
            die("Message or user id is required");
        }

        $db = $request->getDatabase();
        $db->insert('messages',['sender_id'=>$user_id,'receiver_id'=>$other_id,'message'=>$message]);

        return $response->redirect();
        

    }//messageSend


}