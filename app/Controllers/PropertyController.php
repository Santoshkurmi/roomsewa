<?php 


namespace App\Controllers;
use Phphelper\Core\Request;
use Phphelper\Core\Response;

class PropertyController{
    public function viewProperty(Request $request,Response $response,$params){

        $id = $params->id;
        $db = $request->getDatabase();
        $property = $db->fetchOneSql('SELECT ap.* , pp.p_photo from add_property as ap inner join property_photo as pp on ap.property_id = pp.property_id where ap.property_id = ?',[$id]);
        if(!$property){
            die("Property not found");
        }
        // SELECT * from review where property_id='$property_id
        $reviews = $db->fetchAll('review',['property_id'=>$id]);
        
        return $response->render('property/view_property',['property'=>$property,'reviews'=>$reviews]);

    }//view Property

    public function searchProperty(Request $request,Response $response){

        $search_property = $request->search_property;
        $property_type = $request->property_type;
        $price_range = $request->price_range;

        $conditions = array();

        $sql = "SELECT ap.* , pp.p_photo from add_property as ap left join property_photo as pp on ap.property_id = pp.property_id where";

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