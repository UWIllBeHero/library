<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Video
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
 * @method static \Illuminate\Database\Query\Builder|\App\Video whereAnniversaryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Video whereArticleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Video whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Video whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Video whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Video whereValue($value)
 * @mixin \Eloquent
 */
class Video extends Model
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
