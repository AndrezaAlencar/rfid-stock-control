<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'rfid_code'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

}
