<?php

namespace program;

class geta {

    public static function getUser() {
        return ['stranger' => '*'];
    }
    public static function execute() {
        $q = "select id,description,peer_id,check_interval,cope_duration,phone_number_group_id,sms,ring,enable,load from prog order by id asc";
        \db\init(DB_PATH_DATA);
        $data = \db\getDataAll($q);
        \db\suspend();
        return $data;
    }

}
