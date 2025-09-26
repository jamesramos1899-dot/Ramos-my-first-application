<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'salary',
        'employer_id',
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
