<?php
namespace Base\Banner;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'icon','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'jump_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'sort_num','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'channel','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
                    ];
        return $FIELD_LIST;
    }
}