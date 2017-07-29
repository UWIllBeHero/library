<?php
/** @mixin \Eloquent */
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Article
 *
 * @property int $id
 * @property string $header
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $event_date
 * @property string $preview
 * @property string $main_text
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Book[] $books
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Photo[] $photos
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Video[] $videos
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereEventDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereHeader($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereMainText($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article wherePreview($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Anniversary $anniversary
 */
class Article extends Model
{
    //
    public function anniversary(){
        return $this->hasOne(Anniversary::class);
    }
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
    //
    public function books(){
        return $this->belongsToMany(Book::class);
    }
    //

}
