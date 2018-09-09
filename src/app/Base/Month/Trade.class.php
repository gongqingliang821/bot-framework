<?php
namespace Base\Month;
use DBModel;
class Trade extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'date','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'order_count','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'total_amount','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'channel_amount','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'baidu_amount','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'seller_amount','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'cashed','type'=>"int",'key'=>false,'defalut'=>'2','null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}