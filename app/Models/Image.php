<?php

namespace App\Models;

use App\Traits\UsesUuidKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    use UsesUuidKey;

    /*
     * Get the Msa that this Image belongs to.
     */
    public function msa()
    {
        return $this->belongsTo(Msa::class);
    }
}
