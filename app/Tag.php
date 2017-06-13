<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Tag
 *
 * @property int $id
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $articles_id
 * @property int $book_id
 * @property int $anniversary_id
 * @property int $author_id
 * @property int $edition_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Anniversary[] $anniversaries
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Article[] $articles
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Book[] $books
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Photo[] $photos
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Video[] $videos
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereAnniversaryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereArticlesId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereAuthorId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereBookId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereEditionId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereValue($value)
 * @mixin \Eloquent
 */
class Tag extends Model
{
    //
    public function anniversaries(){
        return $this->belongsToMany(Anniversary::class);
    }
    //
    public function articles(){
        return $this->belongsToMany(Article::class);
    }
    //
    public function photos(){
        return $this->belongsToMany(Photo::class);
    }
    //
    public function videos(){
        return $this->belongsToMany(Video::class);
    }
    //
    public function books(){
        return $this->belongsToMany(Book::class);
    }
    //
}
