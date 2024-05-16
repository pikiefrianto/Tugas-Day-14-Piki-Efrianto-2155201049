<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'users';
    protected $fillable = ['nama','email'];
    
    public $timestamps = false;

    public function relationToProfile(){
        return $this->hasOne(Profile::class);
    }
}