<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $casts = [
        'productCode' => 'string',
    ];

    protected $primaryKey = 'productCode';

    protected $fillable = ['productCode', 'productName', 'productLine', 'productDescription'];
}
