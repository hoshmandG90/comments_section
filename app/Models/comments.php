<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{

    public $guarded=[];
    protected $table="comments";

    public function user(){
       return $this->belongsTo(user::class);
    }
}
