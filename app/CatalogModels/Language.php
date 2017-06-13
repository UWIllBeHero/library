<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Language
 *
 * @property int $id
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $book_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Book[] $books
 * @method static \Illuminate\Database\Query\Builder|\App\Language whereBookId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Language whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Language whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Language whereValue($value)
 * @mixin \Eloquent
 */
class Language extends Model
{
    //
    public function books(){
        return $this->belongsToMany(Book::class);
    }
    //
}
