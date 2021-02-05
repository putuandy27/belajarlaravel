<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function getNama(){
        return 'Ini dari controller hello';
    }

    public function getId($id){
        return 'Ini dari controller dengan id '.$id;
    }

    public function getDetail($id, $nama){
        return 'Ini dari controller id '.$id. ' dengan nama '.$nama;
    }

    public function returnView($id){
        $namaDepan = 'Putu';
        $namaBelakang = 'Andy';
        return view('hello', compact('namaDepan', 'namaBelakang', 'id'));
    }

    public function testBranch(){
        return 'ea';
    }

}
