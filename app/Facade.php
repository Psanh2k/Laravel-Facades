<?php
namespace App;

use App\Service\DienTich\DienTichFacade;

Class Facade{
    public function __construct()
    {
        $result = DienTichFacade::DienTich(12);
        dump($result);
        // $DienTich = app(DienTich::class);
    }
}


?>