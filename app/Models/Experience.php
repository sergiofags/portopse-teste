<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{
    protected $table = 'experience';

    protected $fillable = [
        'id_person',
        'type_experience',
        'status',
        'company_institution',
        'course_position',
        'level',
        'activity',
        'semester_module',
        'start_date',
        'end_date',
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class, 'id_person');
    }
}