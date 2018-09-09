<?php
namespace Base\Ss;
use DBModel;
class Skill extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'system_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'developer_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'developer','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'developer_home','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'icon','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'summary','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'instructions','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'display_imgs','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'manual','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'skill_desc','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'language','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'query_example','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'tags','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'is_system','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'need_tp_login','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'tp_login_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'install_count','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'score','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'version','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'update_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}