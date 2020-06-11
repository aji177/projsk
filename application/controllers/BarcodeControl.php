<?php

use Picqer\Barcode\BarcodeGeneratorJPG;

defined('BASEPATH') or exit('No direct script access allowed');


class BarcodeControl extends CI_Controller
{

    public function index(string $code)
    {
        $generatorJPG = new BarcodeGeneratorJPG();

        echo $generatorJPG->getBarcode($code, $generatorJPG::TYPE_CODE_128, 2, 30);
    }
}

/* End of file Barcode.php */
