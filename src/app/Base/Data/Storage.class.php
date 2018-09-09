<?php
namespace Base\Data;
use DBModel;
class Storage extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'app_id','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'category_id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'url','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'CURRENT_TIMESTAMP','null'=>false,],
            ['name'=>'query_date','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}