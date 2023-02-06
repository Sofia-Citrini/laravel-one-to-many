<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Type;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'link_github',
        'type_id'
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
