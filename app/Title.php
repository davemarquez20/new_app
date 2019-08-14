<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends ReadOnlyBase {
    
    protected $title_array = ['Mr' , 'Ms', 'Mrs', 'Dr', 'Engr', 'Professor'];

}
