<?php
    class CriarController extends Controller {
        private string $systemType;

        public function rotina():void {
            $this->systemType = 'rotina';
            $this->setTitle('Criar rotina - Studeex');
            $this->loadTemplate('criar/index', ['systemType' => $this->systemType]);
        }
        public function ciclo():void {
            $this->systemType = 'ciclo';
            $this->setTitle('Criar ciclo - Studeex');
            $this->loadTemplate('criar/index', ['systemType' => $this->systemType]);
        }
    }
?>