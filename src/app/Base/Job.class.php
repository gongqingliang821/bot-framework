<?php
namespace Base;
use DBModel;
class Job extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'parent_uuid','type'=>"string",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'uuid','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'ext_info','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'have_sub_job','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'priority','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'retry_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}