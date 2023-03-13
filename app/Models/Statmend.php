<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Statmend extends Model
{
    use HasFactory;
    protected $table = 'statment';
    
    protected $guarded = [];


    public function user(){
        return $this->hasOne(User::class, 'id', 'transfer');
    }
}
