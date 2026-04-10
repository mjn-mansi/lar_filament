<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'status'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function getStatusLabelAttribute()
    {
        return $this->status ? 'Active' : 'Inactive';
    }

    public function getStatusColorAttribute()
    {
        return $this->status ? 'success' : 'danger';
    }
}
