<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) => $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('tags', 'like', '%' . $search . '%')
                ->orWhere('spesification', 'like', '%' . $search . '%')
        );

        $query->when(
            $filters['tag'] ?? false,
            fn ($query, $search) => $query->where('tags', 'like', '%' . $search . '%')
        );

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $search) => $query->whereHas('category', fn ($query) => $query->where('slug', 'like', '%' . $search . '%'))
        );

        $query->when(
            $filters['brand'] ?? false,
            fn ($query, $search) => $query->whereHas('brand', fn ($query) => $query->where('slug', 'like', '%' . $search . '%'))
        );

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $search) => $query->whereHas('user', fn ($query) => $query->where('slug', 'like', '%' . $search . '%'))
        );
    }
}
