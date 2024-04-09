<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'question',
        'answer',
    ];

    public function section() {
        return $this->belongsTo(Section::class);
    }
}
