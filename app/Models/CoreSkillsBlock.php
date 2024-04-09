<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoreSkillsBlock extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'icon',
        'description',
    ];

    public function section() {
        return $this->belongsTo(Section::class);
    }
}
