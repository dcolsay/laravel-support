<?php

namespace Dcolsay\Support\Concerns;

// @see https://ryangjchandler.co.uk/articles/flashing-banner-messages-in-your-laravel-jetstream-and-livewire-applications
trait InteractsWithBanner
{
    public function banner(string $message, string $style = 'success')
    {
        request()->session()->flash('flash.banner', $message);
        request()->session()->flash('flash.bannerStyle', $style);
    }
}
