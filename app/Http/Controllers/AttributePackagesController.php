<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modles\Attribute_packages;
use App\Http\Controllers\Controller;

class AttributePackagesController extends Controller
{
   public function allattribute()
   {

    try {
    $attr=Attribute_packages::paginate(10);
    return response(['attributspackages' => $attr,'Message'=>'all attribute package here'], 200);  
} catch (Throwable $th) {
    throw $th;
}
}
}
