<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classification extends Model
{
    protected $table = 'classification';

    protected $fillable = [
        'id_candidacy',
        'cr_score',
        'interview_score',
        'situation',
        'reason_disqualified',
    ];

    public function candidacy(): BelongsTo
    {
        return $this->belongsTo(Candidacy::class, 'id_candidacy');
    }
}