<?php
namespace Base\Dbp\Developer;
use DBModel;
class Resource extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'resource_id','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'url','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'size','type'=>"int",'key'=>false,'defalut'=>'0','null'=>true,],
            ['name'=>'bot_id','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}