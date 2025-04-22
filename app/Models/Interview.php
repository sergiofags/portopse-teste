<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Interview extends Model
{
    protected $table = 'interview';

    protected $fillable = [
        'id_candidacy',
        'date_time',
        'status',
        'location',
    ];

    public function candidacy(): BelongsTo
    {
        return $this->belongsTo(Candidacy::class, 'id_candidacy');
    }
}