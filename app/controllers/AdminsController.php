<?php

class AdminsController extends BaseAdminController {


    public function dashboard()
    {
        return View::make('layouts.admin.dashboard');
    }


}
