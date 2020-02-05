<?php

namespace App\Providers;

use App\Category;
use App\Contract;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        $unseen_mail = Contract::where('is_seen', 0)->count();
        view()->share('unseen_mail', $unseen_mail);
        $search_categories = Category::with('sub_categories')->where('cate_status', 1)->get();
        view()->share('search_categories', $search_categories);
    }
}
