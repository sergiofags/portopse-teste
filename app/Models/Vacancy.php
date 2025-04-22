<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vacancy extends Model
{
    protected $table = 'vacancy';

    protected $fillable = [
        'title',
        'description',
        'requirements',
        'salary',
        'location',
        'company_name',
        'posted_date',
        'expiration_date',
    ];

    public function candidacies(): HasMany
    {
        return $this->hasMany(Candidacy::class, 'id_vacancy');
    }
}