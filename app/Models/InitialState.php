<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InitialState extends Model
{
    protected $table = 'initial_state';
    protected $fillable = ['key', 'value'];
    
    protected $casts = [
        'value' => 'array'
    ];

    public static function getValue($key)
    {
        $record = self::where('key', $key)->first();
        return $record ? $record->value : null;
    }
}
