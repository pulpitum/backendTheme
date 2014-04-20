<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle('Copyright ©  '.date("Y").' - Laravel.in.th');

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{{ $crumb["label"] }}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function ($theme) {
            // You may use this event to set up your assets.
            // $theme->asset()->usePath()->add('core', 'core.js');
            $theme->asset()->usePath()->add('jquery', 'js/jquery-1.7.2.min.js');
            $theme->asset()->usePath()->add('bootstrap', 'js/bootstrap.js');
            $theme->asset()->usePath()->add('base', 'js/base.js');
            // $theme->asset()->add('jquery-ui', 'vendor/jqueryui/jquery-ui.min.js', array('jquery'));

            // Partial composer.
            // $theme->partialComposer('header', function($view)
            // {
            //     $view->with('auth', Auth::user());
            // });

            $theme->asset()->usePath()->add('bootstrap', 'css/bootstrap.min.css');
            $theme->asset()->usePath()->add('bootstrap-responsive', 'css/bootstrap-responsive.min.css');
            $theme->asset()->usePath()->add('font-awesome', 'css/font-awesome.css');
            $theme->asset()->usePath()->add('style', 'css/style.css');
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'login' => function ($theme) {
                $theme->asset()->usePath()->add('signin', 'css/pages/signin.css');

            }

        )

    )

);
