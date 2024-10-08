<?php

namespace App\Controllers;
use Dompdf\Dompdf;

class Base extends BaseController
{
    
    protected $helpers =['html'];

    public function index(): string
    {
        return view('template/header.php')
            
            . view('inscription.php')
            . view('template/footer.php');
    }

   

  
    public function inscription(): string
    {
        return view('template/header.php')
            
            . view('inscription.php')
            . view('template/footer.php');
    }

    

    }


    

