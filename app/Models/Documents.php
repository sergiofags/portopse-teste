<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Documents extends Model
{
    protected $table = 'documents';

    protected $fillable = [
        'id_person',
        'document_type',
        'file',
        'name_document',
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class, 'id_person');
    }
}