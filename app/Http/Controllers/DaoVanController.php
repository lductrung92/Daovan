<?php

namespace App\Http\Controllers;


use PhpOffice\PhpWord\Reader;

class DaoVanController extends Controller
{
    public function home() {

        $w = new Reader\Word2007();
        $content = $w->load("C:\\xampp\\htdocs\\Daovan\\public\\helloWorld.docx");

        return view('welcome', ['content' => $content]);
    }
}
