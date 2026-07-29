<?php
    class Texto
     {
        public function maiusculo($texto)
        {  
        return strtoupper($texto);
    }
    public function contar($a)
        {
            $a = str_split($a);
            return $a;
        }
}
