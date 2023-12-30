<?php
    class HomeController extends Controller {
        public function index():void {
            $this->setTitle('Studeex: Facilite a organização dos seus estudos');
            $this->loadTemplate('home');
        }
    }
?>