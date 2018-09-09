<?php
namespace Base\Sys;
use DBModel;
class Slot extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'sys_intent_id','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'slot_type','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'slot_label','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}