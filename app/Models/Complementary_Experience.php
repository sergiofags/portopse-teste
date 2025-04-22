<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Complementary_Experience extends Model
{
    protected $table = 'complementary_experience';

    protected $fillable = [
        'id_person',
        'type_experience',
        'title',
        'description',
        'level_language',
        'certificate',
        'start_date',
        'end_date',
        'institution',
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class, 'id_person');
    }
}