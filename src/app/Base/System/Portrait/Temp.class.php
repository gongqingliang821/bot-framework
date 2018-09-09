<?php
namespace Base\System\Portrait;
use DBModel;
class Temp extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'attr_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'product_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'app_id','type'=>"string",'key'=>false,'defalut'=>' ','null'=>false,],
            ['name'=>'source','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'answer_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'attr_value','type'=>"string",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'answers','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'update_redis','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}