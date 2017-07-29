<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use MaddHatter\LaravelFullcalendar\IdentifiableEvent;

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
 * @property string $url
 * @method static \Illuminate\Database\Query\Builder|\App\Anniversary whereUrl($value)
 * @property-read \App\Article $article
 */
class Anniversary extends Model implements \MaddHatter\LaravelFullcalendar\Event
{
    //
    public function article(){
        return $this->BelongsTo(Article::class);
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
    protected $dates = ['anniversary', 'anniversary'];

    /**
     * Get the event's id number
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->preview;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return true;
    }

    /**
     * Get the start time
     *
     * @return DateTime|string
     */
    public function getStart()
    {
        return $this->anniversary;
    }

    /**
     * Get the end time
     *
     * @return DateTime|string
     */
    public function getEnd()
    {
        return $this->anniversary;
    }
}
