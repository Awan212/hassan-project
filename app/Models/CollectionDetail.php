<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionDetail extends Model
{
    use HasFactory;
    public function collection()
    {
        return $this->belongsTo('App\Models\Collection', 'collection_id');
    }
}
