<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hiring extends Model
{
    protected $table = 'hiring';

    protected $fillable = [
        'id_vacancy',
        'id_person',
        'id_candidacy',
        'id_classification',
        'date_hiring',
        'date_exam',
        'guilding_teacher',
        'academic_record',
        'contract_number',
        'insurance_policy',
    ];

    public function vacancy(): BelongsTo
    {
        return $this->belongsTo(Vacancy::class, 'id_vacancy');
    }

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class, 'id_person');
    }

    public function candidacy(): BelongsTo
    {
        return $this->belongsTo(Candidacy::class, 'id_candidacy');
    }

    public function classification(): BelongsTo
    {
        return $this->belongsTo(Classification::class, 'id_classification');
    }
}