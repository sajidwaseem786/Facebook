<?php
namespace imranrbx\Facebook\Library;
class facebook{

    private $fbid;
    private $fbsecrit;
    private $fburl;


    public function __construct($fb){

     $this->fbid=$fb['id'];
     $this->fbsecrit=$fb['secret'];
     $this->fburl=$fb['url'];

    }

    public function getCreds(){

      return [

        'fb_id'=>$this->fbid,
        'fb_secret'=>$this->fbsecrit,
        'fb_url'=>$this->fburl,

      ];

    }



}

?>