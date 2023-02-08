<?php
require_once "controllers/CategoryController.php";
require_once "controllers/ProductController.php";
require_once "models/Product.php";
use Controllers\ProductController;
use Controllers\CategoryController;
use Models\Product;

$ctgController = new CategoryController();
$productConller = new ProductController();
$product = new Product();
