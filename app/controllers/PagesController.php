<?php

class PagesController extends \BaseController {

	public function home()
    {
        return View::make('pages.home');
    }

    public function contactus()
    {
        return View::make('pages.contactus');
    }

    public function aboutus()
    {
        return View::make('pages.aboutus');
    }

    public function staff()
    {
        return View::make('pages.staff');
    }

    public function gallery()
    {
        return View::make('pages.gallery');
    }

    public function compilation()
    {
        return View::make('pages.compilation');
    }


}
