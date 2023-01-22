<?php
namespace App\Hellpers;
use Cake\ORM\TableRegistry;
use App\Hellpers\UploadFile;
use App\Hellpers\Fields;

class GeneralActions {
    
    public static function create($param){
      
        $registry = TableRegistry::get($param['table_name']) ;
        $create = $registry->newEmptyEntity();
        $create = $registry->patchEntity($create , $param['fields'], ["validate"=>$param['validate_name']]);
       
        //check file updload 
        $fileObj = $param["fields"][$param["file"]["name"]] ; //ex: {name:"",tmp_name:"",size:""} 
        $fileName = $param["file"]["name"] ; //ex : "photo"
        $fileObj["tmp_name"] ? $create[$fileName] = UploadFile::uploadSinglePhoto(["photoName"=>$fileName,"path"=>$param["file"]["path"]])["name"] : "";
      
        if($registry->save($create)){
            $res = ["key"=>0,"success"=> true ,"data"=>$create , "msg" => $param['msg'], "code"=>200] ;
        }else{
            $res = ["key"=>0,"success"=> false ,"data"=>json_decode("{}") , "msg"=>$create->getErrors() , "code"=>400] ;
        }
    return $res ;
    }
    //
    public static function update($param){
        $registry = TableRegistry::get($param['table_name']) ;
        //$find4Update = $registry->findById($param["fields"]['id'])->first();

        //find4Update with where condation 
        $param['where'] ?  $find4Update = $registry->findById($param["fields"]['id'])->where($param['where']) 
                        :  $find4Update = $registry->findById($param["fields"]['id']);
         
        $param['contain'] ?  $find4Update = $find4Update->contain($param['contain'])->first()
                          :  $find4Update = $find4Update->first() ;
         
      
        if($find4Update == null || !isset($find4Update) ) return ["key"=>0,"success"=> false ,"data"=>json_decode("{}") , "msg"=>$param['msg_not_found'], "code"=>404] ; 
       // echo json_encode($find4Update) ; exit ; 
     
        $update = $registry->patchEntity($find4Update ,$param['fields'], ["validate"=>$param['validate_name']]);
   
        //check file updload 
        $fileObj = $param["fields"][$param["file"]["name"]] ; //ex: {name:"",tmp_name:"",size:""} 
        $fileName = $param["file"]["name"] ; //ex : "photo"
        $fileObj["tmp_name"] ? $update[$fileName] = UploadFile::uploadSinglePhoto(["photoName"=>$fileName,"path"=>$param["file"]["path"]])["name"] : "";
 
        if($registry->save($update)){
            $res = ["key"=>0,"success"=> true ,"data"=>$update , "msg" => $param['msg'], "code"=>200] ;
        }else{
            $res = ["key"=>0,"success"=> false ,"data"=>json_decode("{}") , "msg"=>$update->getErrors() , "code"=>400] ;
        }
    return $res ;
    }
    //
    public static function delete($param){
        $registry = TableRegistry::get($param['table_name']) ;
 
         $find4Delete = $registry->findById($param['id']);
        //where condation 
        $param['where'] ?   $find4Delete = $find4Delete->where($param['where'])->first():
                            $find4Delete = $find4Delete->first() ;

        if($find4Delete == null) return ["key"=>0,"success"=> false ,"data"=>json_decode("{}") , "msg"=>$param['msg_not_found'], "code"=>404] ; 
       
        if($registry->delete($find4Delete)){
            $res = ["key"=>0,"success"=> true ,"data"=>$find4Delete , "msg" => $param['msg'], "code"=>200] ;
        }else{
            $res = ["key"=>0,"success"=> false ,"data"=>json_decode("{}") , "msg"=>$create->getErrors() , "code"=>400] ;
        }
    return $res ;
    }
    //
    public static function delete_all($param){
      
        $registry = TableRegistry::get($param['table_name']) ;
 
        $find4Delete = $registry->find('all')->where([$param['table_name'].'.id IN'=>$param['ids']])->toArray();
        if($find4Delete == null) return ["key"=>0,"success"=> false ,"data"=>json_decode("{}") , "msg"=>$param['msg_not_found'], "code"=>404] ; 
        foreach($find4Delete as $find4DeleteV):
            $registry->delete($find4DeleteV) ;
            $arr[] = $find4DeleteV ; 
        endforeach;
    
    return ["key"=>0,"success"=> true ,"data"=>$arr , "msg" => $param['msg'], "code"=>200] ;
    }
    //
    public static function index($param){
        //custom sort data
        $orderBy = $param["order"]?$param["order"]:"DESC";

        $registry = TableRegistry::get($param['table_name']) ;

        //query and order sort DESC
        $index = $registry->find('all')->order([$param['table_name'].'.id'=>$orderBy]);

        //select fields 
        $param['select'] ? $index->select($param['select']) : "";

        //where condation 
        $param['where'] ? $index->where($param['where']) : "";
        
        //search by condation 
        $param['searchBy'] ? $index->where($param['searchBy']) : "";

        //filter by  
        $param['filterBy'] ? $index->where($param['filterBy']) : "";

        //matching by  
        $param['matching'] ? $index->matching($param['matching']["table_matching"])->group($param['matching']["table_group_by"]) : "";

        //->distinct("More7Orders.id")
        $param["distinct"] ? $index->distinct($param["distinct"]) : "";
        
        //contain  
        $param['contain'] ? $index->contain($param['contain']) : "";

        if($index == null) return ["key"=>0,"success"=> false ,"data"=>json_decode("[]") , "msg"=>$param['msg_not_found'], "code"=>404] ; 
    
    return ["key"=>0,"success"=> true ,"data"=>$index , "msg" => $param['msg'], "code"=>200] ;
    }
    //
    public static function view($param){
        $registry = TableRegistry::get($param['table_name']) ;

        //query and order sort DESC
        $q = $registry->findById($param['id']);

        //select condation 
        $param['select'] ? $q->select($param['select']) : "";

        //where condation 
        $param['where'] ? $q->where($param['where']) : "";

        //contain  
        $param['contain'] ? $q->contain($param['contain']) : "";

        if($q->first() == null ) return ["key"=>0,"success"=> false ,"data"=>json_decode("{}") , "msg"=>$param['msg_not_found'], "code"=>404] ; 
    
    return ["key"=>0,"success"=> true ,"data"=>$q->first() , "msg" => $param['msg'], "code"=>200] ;
    }
    //
    public static function createOrUpdate($param){
        $registry = TableRegistry::get($param['table_name']) ;

        $find4Update = $registry->find()->where($param['where'])->first();
        
        !$find4Update ? $find4Update = $registry->newEmptyEntity() : ""  ;
        
        $update = $registry->patchEntity($find4Update ,$param['fields'], ["validate"=>$param['validate_name']]) ; 
        //check file updload 
        $fileObj = $param["fields"][$param["file"]["name"]] ; //ex: {name:"",tmp_name:"",size:""} 
        $fileName = $param["file"]["name"] ; //ex : "photo"
        $fileObj["tmp_name"] ? $update[$fileName] = UploadFile::uploadSinglePhoto(["photoName"=>$fileName,"path"=>$param["file"]["path"]])["name"] : "";
    
        if($registry->save($update)){
            $res = ["key"=>0,"success"=> true ,"data"=>$update , "msg" => $param['msg'], "code"=>200] ;
        }else{
            $res = ["key"=>0,"success"=> false ,"data"=>json_decode("{}") , "msg"=>$update->getErrors() , "code"=>400] ;
        }
    return $res ;
    }
}