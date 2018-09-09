<?php
namespace Base;
use DBModel;
class Intent extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'intent_id','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'parent_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'zh_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'intent_confirm','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'webhook','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'reply','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'context_in','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'context_out','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'dm_config','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'weight','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}