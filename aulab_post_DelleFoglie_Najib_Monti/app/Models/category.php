<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'colors'];

    public function articles() {
        return $this->hasMany(Article::class);
    }
}
