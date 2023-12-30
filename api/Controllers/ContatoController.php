<?php
    class ContatoController extends Controller {
        public function index():void {
            $this->setTitle('Entrar em contato - Studeex');
            $this->loadTemplate('contato');
        }
    }
?>