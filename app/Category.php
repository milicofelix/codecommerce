<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
                            'cat_name',
                            'cat_description'
                          ];

}
