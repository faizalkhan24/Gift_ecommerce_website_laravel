<?php

// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
// app/Models/Product.php

protected $fillable = ['name', 'description', 'price', 'photo'];
// protected $guarded = [];

}
