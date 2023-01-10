<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        Blade::directive("success", function ($expression) {
            return <<<EOD
            <?php
                if (session("success")) :
                    if(isset(\$message)) {\$messageCache = \$message;}
                    
                \$message = session("success");    
            ?>
EOD;

        });

        Blade::directive("endsuccess", function ($expression) {
            return <<<EOD
            <?php
                \session()->forget("success");
                
                if(isset(\$message)) {\$messageCache = \$message;}
                endif;
            ?>
EOD;

        });

        Blade::directive("hidden", function ($params) {

            list($expression, $value) = explode(',', $params);
            return "<input type=\"hidden\" name='$expression' value=\"<?php echo with($value); ?>\">";
        });

        Blade::directive("selected", function ($expression) {
            list($first_param, $second_param) = explode(',', $expression);
            return "<?php echo ($first_param == $second_param) ? 'selected' : '' ?>";
        });
    }
}
