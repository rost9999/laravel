<?php

namespace App\Models;

use Database\Factories\AuthorFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

// генерь с флагом -М ide-helper:models -M
// а эти докблоки поубирай
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

    public $timestamps = false; // не нужно, верни таймстемпы. почти всегда для сущности их пишут
    // хуже не будет но если что можно будет понять что это за запись и откуда она взялась

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
