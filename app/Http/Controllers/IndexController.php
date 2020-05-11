<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Collective\Annotations\AnnotationsServiceProvider as ServiceProvider;

class IndexController extends Controller
{
    /*
     * @Get("/")
     */
    public function index()
    {
        return view("welcome");
    }

    /*
     * @Get("/ola", as="olamundo")
     */
    public function ola()
    {
        return "Olá mundo!";
    }
}
