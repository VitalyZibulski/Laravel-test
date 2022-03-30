<?php

use App\Models\Review;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel("reviews", function ($user, $reviewId) {
    return true;
});

Broadcast::channel("comments.{userId}", function ($userId, $comment) {
    return (int) $userId === (int) $comment->user_id;
});
