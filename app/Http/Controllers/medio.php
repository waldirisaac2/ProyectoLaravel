<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class medio extends Controller
{
    //
    public function index()
    {
    	$cursos = new Client();
    	$response = $cursos->request('GET', 'http://127.0.0.1:8080/api/curso');
    	$statusCode = $response->getStatusCode();
    	$body = $response->getBody()->getContents();
    	return $body;
    }
}
