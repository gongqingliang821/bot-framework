<?php
namespace Base\Check;
use DBModel;
class List extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'desc','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'desc_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}