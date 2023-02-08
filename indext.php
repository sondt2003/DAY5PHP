<?php
// require_once "controllers/CategoryController.php";
// require_once "controllers/ProductController.php";
// require_once "models/Product.php";
require_once "vendor/autoload.php";
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
use App\Models\Product;

$ctgController = new CategoryController();
$productConller = new ProductController();
$product = new Product();
