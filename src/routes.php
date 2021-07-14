<?php

Route::get('/facebook',function(){

  return FB::getCreds();


});

Route::get('/fbController','imranrbx\Facebook\Controllers\facebookController@index');



