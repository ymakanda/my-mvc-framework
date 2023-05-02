<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $product = new Product();
        $product->setTitle('My first Product');
        $product->setDescription('MVC-SP-PHP-01');
        $product->setPrice(23.89);
        $product->setSku('MVC-SP-PHP');
        $product->setImage('https://via.placeholder.com/150');


        require_once APP_ROOT . '/views/product.php';
	}

}