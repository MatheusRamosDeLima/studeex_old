<?php
    class SobreController extends Controller {
        public function index():void {
            $this->setTitle('Sobre o projeto - Studeex');
            $this->loadTemplate('sobre');
        }
    }
?>