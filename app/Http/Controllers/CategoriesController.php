<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Http\Requests\CategoriesRequest;

class CategoriesController extends Controller
{
    protected $category;
    public function __construct(Category $category){
        $this->category = $category;
    }
    public function index(){
        $categories = $this->category->all();

        return view('categories.index',compact('categories'));
    }

    public function create(){

        return view('categories.create');

    }

    public function store(CategoriesRequest $request){

//        $input = $request->all();

//        $this->category->fill($request->all());
//        $this->category->save();
//        dd($input);
        $this->category->create($request->all());
        //$this->category->save();
        return redirect()->route('categories');

    }

    public function destroyData($id){

        $this->category->find($id)->delete();

        return redirect()->route('categories');
    }

}
