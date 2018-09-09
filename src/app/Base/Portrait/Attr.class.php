<?php
namespace Base\Portrait;
use DBModel;
class Attr extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'focus','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'attr_name','type'=>"string",'key'=>false,'defalut'=>' ','null'=>false,],
            ['name'=>'attr_value','type'=>"string",'key'=>false,'defalut'=>' ','null'=>false,],
            ['name'=>'questions','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'answers','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}