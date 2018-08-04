<?php


namespace App\Http\ViewComposer;
use App\Model\Category;


class CategoryComposer
{
    public function compose($view)
    {
        $view->with('allcats', Category::all());
    }
}