<?php
    class Replace
    {
        public function removerCaracteres($a)
        {
            $a = preg_replace('/[^0-9]/', '', $a);
            return $a;
        }
    }
?>