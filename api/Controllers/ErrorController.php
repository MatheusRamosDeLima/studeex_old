<?php
    class ErrorController extends Controller {
        public function index():void {
            $this->setTitle('Erro 404 - Studeex');
            $this->loadTemplate('error');
        }
    }
?>