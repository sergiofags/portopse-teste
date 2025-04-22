<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Process extends Model
{
    protected $table = 'process';

    protected $fillable = [
        'id_vacancy',
        'id_candidacy',
        'status',
        'start_date',
        'end_date',
        'number_process',
        'edital',
    ];

    public function vacancy(): BelongsTo
    {
        return $this->belongsTo(Vacancy::class, 'id_vacancy');
    }

    public function candidacy(): BelongsTo
    {
        return $this->belongsTo(Candidacy::class, 'id_candidacy');
    }
}