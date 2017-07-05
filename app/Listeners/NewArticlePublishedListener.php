<?php

namespace App\Listeners;

use App\Events\NewArticlePublished;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\ArticlePublished;
use Carbon\Carbon;

class NewArticlePublishedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewArticlePublished  $event
     * @return void
     */
    public function handle(NewArticlePublished $event)
    {
        $subscribers = Subscriber::where('is_subscribed', true)->get();

        $article = $event->article;

        foreach ($subscribers as $subscriber) {
            // $when = Carbon::now()->addMinutes(1)
            Mail::to($subscriber->email)->queue(new ArticlePublished($article));
        }

    }
}
