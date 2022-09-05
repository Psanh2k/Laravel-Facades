<?php

namespace App\Providers;

use App\Service\DienTich\DienTich;
use Illuminate\Support\ServiceProvider;
use App\Service\HinhVuong\HinhVuong;
use Illuminate\Support\Facades\View;

class DienTichProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(DienTich::class,function(){
            $HinhVuong = new HinhVuong;
            return new DienTich($HinhVuong);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */ 
    public function boot()
    {
        //
    }
}
