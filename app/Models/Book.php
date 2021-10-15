<?php

namespace App\Models;

use Database\Factories\BookFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Book
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $img_source
 * @property int $author_id
 * @property-read Author $author
 * @method static BookFactory factory(...$parameters)
 * @method static Builder|Book newModelQuery()
 * @method static Builder|Book newQuery()
 * @method static Builder|Book query()
 * @method static Builder|Book whereAuthorId($value)
 * @method static Builder|Book whereBody($value)
 * @method static Builder|Book whereId($value)
 * @method static Builder|Book whereImgSource($value)
 * @method static Builder|Book whereTitle($value)
 * @mixin Eloquent
 */
class Book extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
