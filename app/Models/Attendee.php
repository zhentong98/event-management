<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $event_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Event|null $event
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendee query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendee whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attendee whereUserId($value)
 * @mixin \Eloquent
 */
class Attendee extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
