<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
         echo view('front/head_view');
         echo view('front/navbar_view');
         echo view('front/principal'); 
         echo view('front/footer_view');
       
    }

    public function acceder()
    {
         echo view('front/head_view');
         echo view('front/navbar_view');
         echo view('front/cuenta'); 
         echo view('front/footer_view');
        
    }
    public function registrar()
    {
         echo view('front/head_view');
         echo view('front/navbar_view');
         echo view('front/sesion'); 
         echo view('front/footer_view');
        
    }

    public function nosotros()
    {
         echo view('front/head_view');
         echo view('front/navbar_view');
         echo view('front/nosotros'); 
         echo view('front/footer_view');
        
    }

    public function acerca()
    {
         echo view('front/head_view');
         echo view('front/navbar_view');
         echo view('front/acerca');
         echo view('front/footer_view');
        
    }

   
}
