<?php
namespace Base\Scene;
use DBModel;
class List extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'scene_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'icon','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'required_capability','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'optional_capability','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'biz_info','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}