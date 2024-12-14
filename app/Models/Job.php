<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    protected $table = 'jobs';
    use HasFactory;
    public function tag(string $name):void{
        $tag = Tag::firstorcreate(['name' =>strtolower($name)]);
        $this->tags()->attach($tag);
    }
    public function tags(): BelongsToMany {
        return $this->belongsToMany(Tag::class);
    }
    public function employer(): BelongsTo {
        return $this->belongsTo(Employer::class);
    }

}
