<?php
namespace Base\Config;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'device','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'config','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'update_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}