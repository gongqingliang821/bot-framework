<?php
namespace Base\Redeem\Code;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'product_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'redeem_code','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'user_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'order_id','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'begin_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'end_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}