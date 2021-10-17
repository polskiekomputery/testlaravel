<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputersController extends Controller
{
    public function index() {
      
      //print_r(route('Computers'));
      
      return view('computers.index');
      
      //$title = "Welcome to my Polish Computers Database!";
      //$description = "Probably the biggest private collection of Polish Computers";   
     
      //$data = [
      //  'computerOne' => 'Elwro 800 Junior',
      //  'computerTwo' => 'Mera Elzab Meritum'
      //];
      
      //Directly in the view 
      //return view('Computers.index', [
      //  'data' => $data
      //]);
      
      //With method - one variable
      //return view('Computers.index')->with('title', $title);
      
      //With method - array
      //return view('Computers.index')->with('data', $data);
      
      //Compact method - many variables
      //return view('Computers.index', compact('title', 'description'));
    
   }
 
   public function about() {
      $name = "Mera Elzab Meritum";
      return view('computers.about')->with('name', $name);
   }
  
  public function show($name) {
      $data = [
        'junior' => 'Elwro 800 Junior',
        'meritum' => 'Mera Elzab Meritum'
      ];
    return view('computers.index', [
      'computers' => $data[$name] ?? 'Computer ' . $name . ' does not exist in my collection'
    ]);
  }
}
