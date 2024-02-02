<?php 
class HomeController extends Controller
{
  public function __construct()
  {
    checkIsNotLogin();
  }

  public function index()
  {
    $this->view('home');
  }
}
