<?php

class validador
{
    /**
     * Calcula o IMC.
     */
    public static function calcularIMC(float $peso, float $altura): float
    {
        if ($altura <= 0) {
            throw new InvalidArgumentException("A altura deve ser maior que zero.");
        }

        return round($peso / ($altura * $altura), 2);
    }

    /**
     * Retorna a classificação do IMC.
     */
    public static function classificarIMC(float $imc): string
    {
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc < 25) {
            return "Peso normal";
        } elseif ($imc < 30) {
            return "Sobrepeso";
        } elseif ($imc < 35) {
            return "Obesidade Grau I";
        } elseif ($imc < 40) {
            return "Obesidade Grau II";
        }

        return "Obesidade Grau III";
    }

    /**
     * Valida um CPF.
     */
    public static function validarCPF(string $cpf): bool
    {
        $cpf = preg_replace('/\D/', '', $cpf);

        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            $soma = 0;

            for ($c = 0; $c < $t; $c++) {
                $soma += $cpf[$c] * (($t + 1) - $c);
            }

            $digito = ((10 * $soma) % 11) % 10;

            if ($cpf[$t] != $digito) {
                return false;
            }
        }

        return true;
    }
}