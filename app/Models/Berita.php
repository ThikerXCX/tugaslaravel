<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;

class Berita extends Model
{
    use HasFactory,Sluggable;
    protected $guarded = ['id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    /*
    public function setExcerptAttribute($isiberita)
    {
        $this->attributes['excerpt'] = Str::limit(strip_tags($request->isiberita),100);
    }
    */
}
