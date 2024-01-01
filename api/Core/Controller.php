<?php
    class Controller {
        private $data;
        private string $title;

        public function __construct() {
            $this->data = array();
            $this->title = '';
        }

        protected function loadTemplate($view, $modelData = array()) {
            require_once $_SERVER['DOCUMENT_ROOT'].'/api/Views/template.php';
        }
        protected function loadViewInTemplate($view, $modelData = array()) {
            if (count($this->data) > 0) array_merge($this->data, $modelData);
            else $this->data = $modelData;
            require_once $_SERVER['DOCUMENT_ROOT']."/api/Views/pages/$view.php";
        }

        public function getData() {
            return $this->data;
        }

        public function getTitle() {
            return $this->title;
        }
        protected function setTitle(string $titleValue) {
            $this->title = $titleValue;
        }
    }
?>