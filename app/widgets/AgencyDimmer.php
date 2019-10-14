<?php

namespace App\widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use App\Agency;

class AgencyDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Agency::count();
        $string = trans_choice('voyager::dimmer.agencies', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} Agencies",
            'text'   => "You have {$count} Agencies in your database",
            'button' => [
                'text' => __('voyager::dimmer.post_link_text'),
                'link' => route('voyager.agencies.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        if (Auth::user()->role_id == 1) {
            return Auth::user()->can('browse', app(Agency::class));
        }
    }
}
