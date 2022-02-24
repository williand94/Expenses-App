<?php

    interface IModel{
        public function save();
        public function getAll();
        public function get($id);
        public function delete($i);
        public function update();
        public function from($array);
    }
