<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Genre
 *
 * @property int $id
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $book_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Book[] $books
 * @method static \Illuminate\Database\Query\Builder|\App\Genre whereBookId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Genre whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Genre whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Genre whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Genre whereValue($value)
 * @mixin \Eloquent
 */
class Genre extends Model
{
    //
    public function books(){
        return $this->belongsToMany(Book::class);
    }
    //
}
