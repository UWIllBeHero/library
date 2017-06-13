<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Edition
 *
 * @property int $id
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $book_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Book[] $books
 * @method static \Illuminate\Database\Query\Builder|\App\Edition whereBookId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Edition whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Edition whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Edition whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Edition whereValue($value)
 * @mixin \Eloquent
 */
class Edition extends Model
{
    //
    public function books(){
        return $this->belongsToMany(Book::class);
    }
    //
}
