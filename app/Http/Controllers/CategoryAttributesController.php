<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryAttributesController extends Controller
{
    public function allcategoryattribute()
   {

    try {
    $attr=Category_attributes::all();
    return response(['Category_attributes' => $attr,'Message'=>'all attribute package here'], 200);  
} catch (Throwable $th) {
    throw $th;
}
}
}
