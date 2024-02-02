<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
}
