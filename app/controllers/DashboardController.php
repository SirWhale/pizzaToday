<?php

Class DashboardController extends BaseController
{
    public function returnHello()
    {
        return View::make('hello');
    }
}