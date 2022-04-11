<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function getContentPreviewAttribute() {
        return substr($this->content, 0, 100);
    }

    public function getFullUrlAttribute() {
        return '/articles/' . $this->url;
    }
}
