<?php

namespace App\Controllers;
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;

class ProfileController{

    #[Router(path:'/profile/{other_id?}', method:'GET')]
    public function getProfile(Request $request,Response $response,$params){
        
        $id = $params->other_id; 
        $db = $request->getDatabase();
        if(!$id)
            $id = $request->getUser()->id;

        $user = $db->fetchOne('users',['id'=>$id]);
        if(!$user){
            echo "User not found";
            return;
        }//

        return $response->render('profile/profile',['profile'=>$user]);

    }//
}
