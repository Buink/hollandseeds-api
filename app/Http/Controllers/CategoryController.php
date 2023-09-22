<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index(): array
    {
        return ['Феминизированые','Регулярные', 'Автоцвет', 'Конец Сентября', 'КБД', 'Без ТГК'];
    }
}
