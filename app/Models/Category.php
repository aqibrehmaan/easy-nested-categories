<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Category extends Model
{
    use HasFactory, HasRecursiveRelationships;

    // public function scopeRoot($query) {

    //     $query->whereNull('parent_id');

    // }

    // public function children() {

    //     return $this->hasMany(Category::class, 'parent_id');

    // }
}
