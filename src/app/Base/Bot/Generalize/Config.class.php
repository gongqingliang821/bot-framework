<?php
namespace Base\Bot\Generalize;
use DBModel;
class Config extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_name','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'generalize_nick_name','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'generalize_type','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'generalize_name','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'config_style','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'is_enable','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}