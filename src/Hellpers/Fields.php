<?php
namespace App\Hellpers;

class Fields {
    
    public static function getUpdateFields( $fields  ){
        $updateFields = [] ;
        //update fields 
        foreach ($fields as $k=>$v):
             if($v):
                $updateFields[$k] .= $v ;
             endif;   
        endforeach;
        
    return $updateFields ;
    }

    public static function setFields( $fields  ){
        $setFields = [] ;
        //set fields 
        foreach ($fields as $k=>$v):
             if($v):
                $setFields[$k] .= $v ;
             endif;   
        endforeach;
        
    return $setFields ;
    }

      
}
