<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{

    // Especificar el nombre de la tabla
    protected $table = 'sales_details';
    
    use HasFactory;

    public function sale(){
        return $this->belongsTo(Sale::class,'sale_id','id');
    }

    public function article(){
        return $this->belongsTo(Article::class,'article_id','id');
    }
}
