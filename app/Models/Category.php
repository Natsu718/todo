<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function posts()  
    {
        return $this->hasMany(Event::class);  
    }
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    protected $fillable = [
        'name',
        'user_id',
    ];
}
