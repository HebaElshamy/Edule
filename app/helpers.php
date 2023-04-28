<?php
function uploadImage($path)
{

    return asset('uploaded').'/'.$path;
}

//website image
 function website_assets($path)
 {
    return asset('website_assets/') .'/' .$path ;
 }
