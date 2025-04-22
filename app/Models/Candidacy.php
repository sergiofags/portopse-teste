<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidacy extends Model
{
    protected $table = 'candidacy';

    protected $fillable = [
        'id_person',
        'id_vacancy',
        'status',
        'candidacy_date',
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class, 'id_person');
    }

    public function vacancy(): BelongsTo
    {
        return $this->belongsTo(Vacancy::class, 'id_vacancy');
    }
}