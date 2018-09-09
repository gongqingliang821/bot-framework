<?php
namespace Base\Bank;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bank_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'bank_province','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'bank_city','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'account_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'account_num','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'tax_num','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'proportions','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'tax_rate','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}