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
     * Every Msa has a collection of images (can be empty).
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /*
     * They also have a collection of objectives (can also be empty).
     */
    public function objectives()
    {
        return $this->hasMany(Objective::class);
    }
}
