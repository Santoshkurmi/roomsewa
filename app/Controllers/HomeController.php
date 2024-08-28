<?php

namespace App\Controllers;
use Phphelper\Core\Request;
use Phphelper\Core\Response;

class HomeController{

   public function home(Request $request,Response $response) {

        $db = $request->getDatabase();
        $properties = $db->fetchAllSql('SELECT ap.* , pp.p_photo from properties as ap inner join property_photo as pp on ap.id = pp.property_id order by rand() limit 18');
        // print_r($properties);
        return $response->render('home/home',['properties'=>$properties]);
    }


}//HomeController