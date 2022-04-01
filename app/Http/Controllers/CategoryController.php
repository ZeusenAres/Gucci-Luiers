<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    private $result;
    private $products;

    public function __construct()
    {
        $this->result = Categories::all();
    }

    public function index()
    {
        $id = request('cat_id');
        $products = $this->products = DB::table('products')->where('category_id', '=', $id)->get();
        return view('category', [
            'categories' => $this->result,
            'products' => $products
            ]);
    }
}
