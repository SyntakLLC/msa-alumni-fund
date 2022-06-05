<?php

namespace App\Models;

use App\Traits\UsesUuidKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Msa extends Model
{
    use HasFactory;
    use UsesUuidKey;

    /*
     * Get a collection of this Msa's images
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
