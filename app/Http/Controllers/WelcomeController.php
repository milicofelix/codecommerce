<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    protected $category;
    public function __construct(Category $category){
        $this->category = $category;
    }

    public function index(){
        $tests = array(
                        'frutas'=>array('Banana','Laranja','Uva','Pêra','Maçã'),
                        'legumes'=> array('Cenoura','Berinjela','Batatinha','Cebola')
                      );
        return view('welcome.index',compact('tests'));
    }
    public function example(){
        $categories = $this->category->all();

        return view('welcome.category',compact('categories'));
    }
    public function example2(){
        $categories = $this->category->all();

        return view('welcome.category_list',compact('categories'));
    }
}
