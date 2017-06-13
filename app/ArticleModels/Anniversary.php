<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Anniversary
 *
 * @property int $id
 * @property string $anniversary
 * @property string $preview
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $articles_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Photo[] $photos
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Video[] $videos
 * @method static \Illuminate\Database\Query\Builder|\App\Anniversary whereAnniversary($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Anniversary whereArticlesId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Anniversary whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Anniversary whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Anniversary wherePreview($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Anniversary whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Anniversary extends Model
{
    //
    public function photos(){
        return $this->hasMany(Photo::class);
    }
    //
    public function videos(){
        return $this->hasMany(Video::class);
    }
    //
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //
}
