<?php
namespace Base\Message;
use DBModel;
class List extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'title','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'content','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}