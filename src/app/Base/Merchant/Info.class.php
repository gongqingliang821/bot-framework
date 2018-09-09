<?php
namespace Base\Merchant;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'contract_num','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'merchant_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'source_from','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'proportion','type'=>"string",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'channel_shoulder','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}