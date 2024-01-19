<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Front end', 'Back end', 'Full-stack'];
        foreach ($types as $value) {
            $newType = new Type();
            $newType->name = $value;
            $newType->slug = Str::slug($value, '-');
            $newType->save();
        }
    }
}
