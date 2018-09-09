<?php
namespace Base\Data\Storage;
use DBModel;
class Category extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'name','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'code','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'instruction','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'CURRENT_TIMESTAMP','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}