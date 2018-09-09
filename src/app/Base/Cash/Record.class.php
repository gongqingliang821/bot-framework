<?php
namespace Base\Cash;
use DBModel;
class Record extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'value','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'payment','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'tax','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'time_interval','type'=>"string",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'invoice','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'1','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}