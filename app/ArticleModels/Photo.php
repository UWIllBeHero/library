<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Photo
 *
 * @property int $id
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $article_id
 * @property int $anniversary_id
 * @property-read \App\Anniversary $anniversary
 * @property-read \App\Article $article
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereAnniversaryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereArticleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereValue($value)
 * @mixin \Eloquent
 */
class Photo extends Model
{
    //
    public function anniversary(){
        return $this->belongsTo(Anniversary::class);
    }
    //
    public function article(){
        return $this->belongsTo(Article::class);
    }
    //
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //
}
