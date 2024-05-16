<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;

Route:: get('/',[HomeController::class,'index']);//Trang chủ
Route:: get('san-pham',[ProductController::class,'index']);//Sản phẩm (All)
Route:: get('chi-tiet-san-pham',[ProductController::class,'product_detail']);//Chi tiết sản phẩm (All)
Route:: get('lien-he',[ContactController::class,'contact']);//Chi tiết sản phẩm (All)
