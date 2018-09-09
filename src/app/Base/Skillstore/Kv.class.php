<?php
namespace Base\Skillstore;
use DBModel;
class Kv extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'sk','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'sv','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'kv_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}