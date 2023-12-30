<?php
    class SistemaController extends Controller {
        public function rotina($systemId):void {
            if (!systemIdIsEmpty($systemId)) {
                $this->loadTemplate('sistema/rotina', ['systemTitle' => $systemId]);
            }
        }
        public function ciclo($systemId):void {
            if (!systemIdIsEmpty($systemId)) {
                $this->loadTemplate('sistema/ciclo', ['systemTitle' => $systemId]);
            }
        }
    }
    function systemIdIsEmpty($systemId) {
        if (empty($systemId)) call_user_func_array(array(new ErrorController, 'index'), []);
    }
?>