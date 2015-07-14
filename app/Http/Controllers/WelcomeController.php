<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index(){
        $tests = array(
                        'frutas'=>array('Banana','Laranja','Uva','Pêra','Maçã'),
                        'legumes'=> array('Cenoura','Berinjela','Batatinha','Cebola')
                      );
        return view('welcome.index',compact('tests'));
    }
}
