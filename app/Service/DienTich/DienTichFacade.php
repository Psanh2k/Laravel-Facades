<?php
namespace App\Service\DienTich;

use Illuminate\Support\Facades\Facade;

Class DienTichFacade extends Facade{
    protected static function getFacadeAccessor()
    {
        return DienTich::class;
    }
}



?>