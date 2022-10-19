<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Useraccess;
use Auth;
use QrCode;
use DNS1D;
use DNS2D;
use Validator;

class HelpersController extends Controller
{
    public static function getListMenu(){
    	$listmenu = '{
    "data": [{
        "dropdown":"0",
        "url":"dashboard",
        "name":"Dashboard",
        "class":"",
        "icon":"fa fa-tachometer-alt",
        "list_child":[]
    }, { 
        "dropdown":"1",
        "url":"",
        "name":"Master",
        "class":"",
        "icon":"clr-red fa fa-database",
        "list_child":[{
            "dropdown":"0",
            "url":"rs",
            "name":"Rumah Sakit",
            "class":"",
            "icon":"clr-blue fa fa-users",
            "list_child":[]
        }, { 
            "dropdown":"0",
            "url":"pasien",
            "name":"Pasien",
            "class":"",
            "icon":"clr-blue bi bi-person-bounding-box",
            "list_child":[]
        }]
    }]
}';
    	return json_decode($listmenu);
    }
}