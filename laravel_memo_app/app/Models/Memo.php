<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Memo
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property string|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Memo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Memo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Memo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Memo whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Memo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Memo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Memo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Memo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Memo whereUserId($value)
 * @mixin \Eloquent
 */
class Memo extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'title',
    'content'
  ];
}
