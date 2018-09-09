<?php
namespace Base\Sys;
use DBModel;
class Intent extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'intent_id','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'internal_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'zh_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'domain','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'intent_intr','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'sample_utterances','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'is_can_define_response','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'internal','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'is_can_expand','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'category','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}