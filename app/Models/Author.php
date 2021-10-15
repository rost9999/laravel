<?php

namespace App\Models;

use Database\Factories\AuthorFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Author
 *
 * @property int $id
 * @property string $name
 * @property-read Collection|\App\Models\Book[] $books
 * @property-read int|null $books_count
 * @method static AuthorFactory factory(...$parameters)
 * @method static Builder|Author newModelQuery()
 * @method static Builder|Author newQuery()
 * @method static Builder|Author query()
 * @method static Builder|Author whereId($value)
 * @method static Builder|Author whereName($value)
 * @mixin \Eloquent
 */
class Author extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
