<?php
namespace Base\Pay;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'order_id','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'trade_id','type'=>"string",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'order_info','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'order_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'trans_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'pay_status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'user_nofify_status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'bot_nofify_status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}