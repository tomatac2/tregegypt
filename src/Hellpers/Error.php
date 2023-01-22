<?php
namespace App\Hellpers;

class Error {
    
    public static function errorMsg( $errs  ){
        foreach ($errs as $v):
            foreach ($v as $k=>$vv):
                    $errObj = $vv   ;
            endforeach;
        endforeach;
        
    return $errObj ;
    }

      
}
