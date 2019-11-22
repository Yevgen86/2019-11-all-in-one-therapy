<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Patient extends Model
{
    use Sortable;

    public $sortable = [
        'id','svnr', 'firstname', 'lastname', 'plz', 'email', 'city', 'address', 'country'
    ];

}
