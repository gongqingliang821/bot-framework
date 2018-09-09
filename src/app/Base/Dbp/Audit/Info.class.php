<?php
namespace Base\Dbp\Audit;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_info_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'auditor','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'audit_result','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'audit_reason','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}