<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'description',
    ];

    public function features() {
        return $this->hasMany(Feature::class);
    }

    public function faqs() {
        return $this->hasMany(Faq::class);
    }
}
