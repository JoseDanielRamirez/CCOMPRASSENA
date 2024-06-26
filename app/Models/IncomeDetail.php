<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeDetail extends Model
{
    use HasFactory;
    public function income(){
        return $this->belongsTo(Income::class,'income_id','id');
    }

    public function article(){
        return $this->belongsTo(Article::class,'article_id','id');
    }
}
