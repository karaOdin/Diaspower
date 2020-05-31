@switch(request())

            @case(request()->is('faq'))
                @include('css_component.faqcss')
            @break

            @case(request()->is('/'))
                @include('css_component.welcomecss')
            @break

            @case(request()->is('cars'))
                @include('css_component.carscss')
            @break

            @case(request()->is('cars/*'))
                @include('css_component.cars_detailcss')
            @break

            @case(request()->is('hotels'))
                @include('css_component.cars_detailcss')
            @break

            @case(request()->is('hotels/*'))
                @include('css_component.cars_detailcss')
            @break

            @case(request()->is('houses'))
                @include('css_component.cars_detailcss')
            @break

            @case(request()->is('houses/*'))
                @include('css_component.cars_detailcss')
            @break

            @case(request()->is('about'))
                @include('css_component.aboutcss')
            @break

            @default
                @include('css_component.welcomecss')

        @endswitch