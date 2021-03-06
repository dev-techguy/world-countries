<?php


namespace World\Countries\Traits;


use Webpatser\Uuid\Uuid;

trait Uuids
{
    /**
     * -----------------------------
     *  Setup model event hooks
     * -----------------------------
     */
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string)Uuid::generate(4);
        });
    }
}
