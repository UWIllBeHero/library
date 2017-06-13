<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Author
 *
 * @property int $id
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $book_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Book[] $books
 * @method static \Illuminate\Database\Query\Builder|\App\Author whereBookId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Author whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Author whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Author whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Author whereValue($value)
 * @mixin \Eloquent
 */
class Author extends Model
{
    //
    public function books(){
      return $this->belongsToMany(Book::class);
    }
    //
}
