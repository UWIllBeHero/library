<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Book
 *
 * @property int $id
 * @property string $name
 * @property string $annotation
 * @property string $publication_date
 * @property int $article_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Article[] $articles
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Author[] $authors
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Edition[] $edition
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Genre[] $genres
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Language[] $languages
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereAnnotation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereArticleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book wherePublicationDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Book extends Model
{   //
    public static function get_fresh_books(){
        return null;
    }
    //
    public function authors(){
        return $this->belongsToMany(Author::class);
    }
    //
    public function edition(){
        return $this->belongsToMany(Edition::class);
    }
    //
    public function languages(){
        return $this->belongsToMany(Language::class);
    }
    //
    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
    //
    public function articles(){
        return $this->belongsToMany(Article::class);
    }
    //
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //

}
