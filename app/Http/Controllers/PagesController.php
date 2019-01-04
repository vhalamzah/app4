<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function getServices()
     {
     	return view('noneadmin.pages.services');
     }

     public function getTeam()
     {
     	return view('noneadmin.pages.team');
     }

     public function getGallery()
     {
     	return view('noneadmin.pages.gallery');
     }

     public function getContact()
     {
     	return view('noneadmin.pages.contacts');
     }
}
