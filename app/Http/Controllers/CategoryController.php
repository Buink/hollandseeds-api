<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index(): array
    {
        return ['Feminized','Regular', 'Autoflower', 'End of September', 'CBD', 'No TGK'];
    }
}
