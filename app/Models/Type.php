<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Type extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public static function getSlug($name)
    {

        $slug = Str::of($name)->slug('-');
        $count = 1;

        while (Project::where('slug', $slug)->first()) {
            $slug = Str::of($name)->slug('-') . "-{$count}";
            $count++;
        }

        return $slug;
    }

}
