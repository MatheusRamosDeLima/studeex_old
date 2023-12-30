<?php
    class CriarController extends Controller {
        private string $systemName;

        public function rotina():void {
            $this->systemName = 'rotina';
            $this->setTitle('Criar rotina - Studeex');
            $this->loadTemplate('criar/index', ['systemName' => $this->systemName]);
        }
        public function ciclo():void {
            $this->systemName = 'ciclo';
            $this->setTitle('Criar ciclo - Studeex');
            $this->loadTemplate('criar/index', ['systemName' => $this->systemName]);
        }
    }
?>