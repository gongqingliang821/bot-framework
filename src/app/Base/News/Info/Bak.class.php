<?php
namespace Base\News\Info;
use DBModel;
class Bak extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'author_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'author_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'title','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'abstract','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'content','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'icon_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'view_count','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'favorite_count','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'display_order','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'update_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}