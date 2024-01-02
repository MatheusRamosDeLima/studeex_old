<?php
    class Controller {
        private $data;
        private string $style;
        private string $script;
        private string $title;

        public function __construct() {
            $this->data = array();
            $this->style = '';
            $this->script = '';
            $this->title = '';
        }

        protected function loadTemplate($view, $modelData = array()) {
            require_once $_SERVER['DOCUMENT_ROOT'].'/api/Views/template.php';
        }
        protected function loadViewInTemplate($view, $modelData = array()) {
            if (!empty($modelData)) {
                if (count($this->data) > 0) $this->data = array_merge($this->data, $modelData);
                else $this->data = $modelData;
            }
            require_once $_SERVER['DOCUMENT_ROOT']."/api/Views/pages/$view.php";
        }

        public function getData() {
            return $this->data;
        }

        public function getStyle() {
            return $this->style;
        }
        protected function setStyle(string $inputStyle) {
            $this->style = $inputStyle;
        }
        
        public function getScript() {
            return $this->script;
        }
        protected function setScript(string $inputScript) {
            $this->script = $inputScript;
        }

        public function getTitle() {
            return $this->title;
        }
        protected function setTitle(string $titleValue) {
            $this->title = $titleValue;
        }
    }
?>