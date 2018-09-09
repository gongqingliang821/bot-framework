<?php
namespace Base\Company;
use DBModel;
class Audit extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'com_name','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'com_site','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'com_intr','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'app_intr','type'=>"string",'key'=>false,'defalut'=>' ','null'=>false,],
            ['name'=>'license_code','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'license_img_url','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'contact','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'mobile','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'email','type'=>"string",'key'=>false,'defalut'=>' ','null'=>false,],
            ['name'=>'read_msg','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'reason','type'=>"string",'key'=>false,'defalut'=>'无','null'=>false,],
            ['name'=>'is_private','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'expires_in','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'access_token','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'refresh_token','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'path_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'is_dbp_user','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'temporary_authority','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'company_config','type'=>"string",'key'=>false,'defalut'=>'{"store_space_size": 1073741824}','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}