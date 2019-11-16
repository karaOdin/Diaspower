<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('convert', function ($money) {
            return "<?php echo number_format($money); ?>";
        });

        Blade::directive('discount',function ($expression)
        {
             // function for calculate discount

            // Split variable and its value
            $str = explode(',', $expression, 2);

            list($price , $discount) = explode(',', $expression, 2);

            // Ensure variable has no spaces or apostrophes
            $price = trim(str_replace('\'', '', $price));
            $discount = trim(str_replace('\'', '', $discount));

          // Make sure that the variable starts with $
          if (!starts_with($price, '$')) {
              $price = '$' . $price;
          }

          if (!starts_with($discount, '$')) {
              $discount = '$' . $discount;
          }

          if (count($str) == 2) {
              return "<?php echo number_format($price - ($price * $discount)/100); ?>"; 
          }
          else {
              return "<?php echo number_format($price); ?>";
          }

            
        });
        Schema::defaultStringLength(191);
    }
}
