<?php

namespace World\Countries\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use World\Countries\Traits\Uuids;

class Country extends Model
{
    use Uuids, SoftDeletes;

    /**
     * make the auto increment false
     */
    public $incrementing = false;

    /**
     * type of auto-increment
     *
     * @string
     */
    protected $keyType = 'string';

    // casts
    protected $casts = [
        'data' => 'array'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'name',
        'slug',
        'data',
    ];
}
