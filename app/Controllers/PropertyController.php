<?php 


namespace App\Controllers;
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;

class PropertyController{




    #[Router(path:'/booked_property', method:'GET')]
    public function bookedProperty(Request $request,Response $response){

        $id = $request->getUser()->id;
        $db = $request->getDatabase();
         
        $properties = $db->fetchAllSql('SELECT * from ( SELECT p.* from booking b join properties p on p.id = b.property_id where b.user_id = ?)  pb join  property_photo pp on pb.id = pp.property_id',[$id]);

        // print_r($properties);
        return $response->render('property/booked_property',['properties'=>$properties]);
    }//view Property




    #[Router(path:'/review', method:'POST')]
    public function reviewProperty(Request $request,Response $response){

        $property_id = $request->property_id;
        $comment = $request->comment;
        $rating = $request->rating;

        if(!$comment || !$rating){
            die("Please input some comment and rating");
        }
        $user_id = $request->getUser()->id;

        $db = $request->getDatabase();

        $isInserted = $db->insert('reviews',['property_id'=>$property_id,'comment'=>$comment,'rating'=>$rating,'user_id'=>$user_id]);
        return $response->redirect(null,['msg'=>"Thank you for giving review"]);
    }//view Property





    #[Router(path:'/book_property', method:'POST')]
    public function bookProperty(Request $request,Response $response){

        $prop_id = $request->id;
        $user_id = $request->getUser()->id;

        $db = $request->getDatabase();

        $property = $db->fetchOne('properties',['id'=>$prop_id]);
        if(!$property){
            die("This property does not exits");
        }
        if(!$property['booked'] == "Yes"){
            die("This property is already booked");
        }

        $isUpdated = $db->update('properties',['booked'=>'Yes'],['id'=>$prop_id]);
        if(!$isUpdated) die("Something went wrong booking the property");

        $isInserted = $db->insert('booking',['property_id'=>$prop_id,'user_id'=>$user_id]);
        if(!$isInserted) die("Something went wrong booking th property");

        echo "ok";
        return;

    }//view Property





    #[Router(path:'/property/{id}', method:'GET')]
    public function viewProperty(Request $request,Response $response,$params){

        $id = $params->id;
        $db = $request->getDatabase();
        $property = $db->fetchOneSql('SELECT ap.* , pp.p_photo from properties as ap inner join property_photo as pp on ap.id = pp.property_id where ap.id = ?',[$id]);
        if(!$property){
            die("Property not found");
        }
        // SELECT * from review where property_id='$property_id
        $reviews = $db->fetchAll('reviews',['property_id'=>$id]);
        
        return $response->render('property/view_property',['property'=>$property,'reviews'=>$reviews]);

    }//view Property

    




    #[Router(path:'/search_property', method:'POST')]
    public function searchProperty(Request $request,Response $response){

        $search_property = $request->search_property;
        $property_type = $request->property_type;
        $price_range = $request->price_range;

        $conditions = array();

        $sql = "SELECT ap.* , pp.p_photo from properties as ap left join property_photo as pp on ap.id = pp.property_id where";

        // Add conditions based on search input
        if (!empty($search_property)) {
            $conditions[] = "CONCAT(zone, district, province, city, tole, property_type, country) LIKE '%$search_property%' ";
        }
    
        if (!empty($property_type)) {
            $conditions[] = "property_type = '$property_type'";
        }
     
        if (!empty($price_range)) {
            // Parse the price range into minimum and maximum values
            
            $price_parts = explode('-', $price_range);
            $min_price = (int)trim($price_parts[0]);
            $max_price = (int)trim($price_parts[1]);
            $conditions[] = "estimated_price BETWEEN $min_price AND $max_price";
        }
    
        // Append conditions to the SQL query
        if (!empty($conditions)) {
            $sql .= "  " . implode(' AND ', $conditions);
        } 


        $db = $request->getDatabase();
        $properties = $db->fetchAllSql($sql);

        return $response->json($properties);

    }//view Property




    
}//proper cass