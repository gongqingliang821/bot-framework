<?php
namespace Base\Iot\Service;
use DBModel;
class List extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'name','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'chinese_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'icon','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'intro','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'list','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}