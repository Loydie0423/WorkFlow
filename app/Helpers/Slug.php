<?php

namespace App\Helpers;

class Slug {

    public function generate(string $subject = ""): string 
    {
        if(isset($subject)) {
            return md5($subject.date("m-d-y h:i:s"));
        }

        $arr = array();
        $str = array("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
        for($i = 0; $i < 6; $i++) {
            $arr[] = $str[rand(0,sizeof($str)-1)];
        }

        return md5(implode("",$arr).date("m-d-y h:i:s"));
    }
}