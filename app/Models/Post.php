<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getSnippetAttribute(){
        return substr($this->body, 0, 200) . '...';
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
