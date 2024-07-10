<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class);
    }

    public function comments(): HasManyThrough
    {
        return $this->hasManyThrough(related: Comment::class, through: ContentModule::class, secondKey: 'content_module_id');
    }
}
