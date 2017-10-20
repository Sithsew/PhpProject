<?php

namespace App\Controllers;


 class PagesController
 {

     public function home()
     {

//         $users = App::get('database')->selectAll('users');

//         require 'views/index.view.php';
         return view('index');

     }

     public function about()
     {

         $company = 'laracast';
//         require 'views/about.php';
         return view('about' , ['company'=> $company]);

     }

     public function contacts()
     {

//         require 'views/contacts.php';

         return view('contacts');


     }

 }