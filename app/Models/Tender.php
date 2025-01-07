<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category',
        'sub_category',
        'title',
        'address',
        'contact_number',
        'email',
        'description',
        'boq',
        'tender_value',
        'end_date',
        'required_documents',
        'work_photos',
        'status'
    ];

    protected $casts = [
        'required_documents' => 'array',
        'end_date' => 'date'
    ];
}
