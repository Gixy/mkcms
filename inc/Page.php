<?php

    class Page{

        private $title;
        private $styles=array();
        private $scripts=array();
        private $body;

        function setTitle($title){
            $this->title = $title;
        }

        function addStyles($path){
            $this->styles[] = $path;
        }

        function addScripts($path){
            $this->scripts[] = $path;
        }

        function startBody(){
            ob_start();
        }

        function endBody(){
            $this->body = ob_get_clean();
        }

        function render($path){
            ob_start();
            include($path);
            return ob_get_clean();
        }
    }

 ?>
