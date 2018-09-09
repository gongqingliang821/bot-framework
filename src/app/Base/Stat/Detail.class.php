<?php
namespace Base\Stat;
use DBModel;
class Detail extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'app_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'app_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'service','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'call_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00','null'=>false,],
            ['name'=>'inc_num','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}