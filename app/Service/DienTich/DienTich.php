<?php
namespace App\Service\DienTich;

use App\Service\HinhVuong\HinhVuong;

Class DienTich{
    protected $HinhVuong;
    function __construct(HinhVuong $hinhVuong)
    {
        $this->HinhVuong = $hinhVuong;
    }
    public function DienTich($a)
    {
        return $this->HinhVuong->HinhVuong($a);
    }
}



?>