<?php
namespace Base\Platform;
use DBModel;
class Reward extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'value','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'date','type'=>"string",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'cashed','type'=>"int",'key'=>false,'defalut'=>'2','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'1','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}