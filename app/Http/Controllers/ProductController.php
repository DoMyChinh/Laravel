<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\SanPham;
class ProductController extends Controller
{
    //
    public function get(){
        $data = DanhMuc::all();
        $data = SanPham::all();
        return view ('List-Product', ["data"=> $data]);
    }
}