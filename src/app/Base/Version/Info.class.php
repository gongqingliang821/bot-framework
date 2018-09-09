<?php
namespace Base\Version;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'version','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'icon_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'summary','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'query_example','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'version_desc','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'template_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'template_md5','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'biz_info','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'reason','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}