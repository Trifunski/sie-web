<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_title_1',
        'contact_description_1',
        'contact_title_2',
        'contact_description_2',
        'contact_title_3',
        'contact_description_3',
        'contact_title_4',
        'contact_description_4',
    ];

}
