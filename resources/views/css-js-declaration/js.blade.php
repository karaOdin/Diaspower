        @switch(request())

            @case(request()->is('faq'))
                @include('js_component.faqjs')
            @break

            @case(request()->is('/'))
                @include('js_component.welcomejs')
            @break

            @case(request()->is('cars'))
                @include('js_component.carsjs')
            @break

            @case(request()->is('cars/*'))
                @include('js_component.cars_detailjs')
            @break

            @case(request()->is('hotels'))
                @include('js_component.carsjs')
            @break

            @case(request()->is('hotels/*'))
                @include('js_component.cars_detailjs')
            @break

            @case(request()->is('houses'))
                @include('js_component.carsjs')
            @break

            @case(request()->is('houses/*'))
                @include('js_component.cars_detailjs')
            @break

            @case(request()->is('about'))
                @include('js_component.aboutjs')
            @break

            @default
                @include('js_component.welcomejs')
           
        @endswitch