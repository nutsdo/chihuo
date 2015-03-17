<?php
class RegisterController extends BaseController{
    
    protected $layout = "layouts.page";
    
    public function index(){
        
        return View::make('template.default.register');
    }
    
    public function store(){
        
        var_dump(Input::all());
        
        
    }
}