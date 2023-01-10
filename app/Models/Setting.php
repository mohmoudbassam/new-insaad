<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Config;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    /**
     * @param string $key
     * @return string
     */
    public static function get ($key)
    {
        return self::where("key", $key)->firstOrFail()->value;
    }


    /**
     * @param $key
     * @param $value
     * @return bool
     */
    public static function set ($key, $value)
    {
        $record = self::where("key", $key)->first();

        (! $record) ? self::create(["key" => $key, "value" => $value]) : $record->update(["value" => $value]);

        Config::set("key", $value);
        return (Config::get($key) == $value);
    }
}
