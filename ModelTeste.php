<?php

/**
 * ==============================================================================================================
 *
 * ModelTeste: Classe Model para teste
 *
 * ----------------------------------------------------
 *
 * @author Alexandre Bezerra Barbosa <alxbbarbosa@yahoo.com.br>
 * @copyright (c) 2018, Alexandre Bezerra Barbosa
 * @version 1.00
 * ==============================================================================================================
 */
class ModelTeste
{
    private static $data = [
        ['id' => 1, 'name' => 'João', 'celular' => '99991234'],
        ['id' => 2, 'name' => 'Maria', 'celular' => '99994321'],
        ['id' => 3, 'name' => 'Antônio', 'celular' => '99991243'],
        ['id' => 4, 'name' => 'Marcos', 'celular' => '99993412'],
    ];

    public static function find(int $id): array
    {
        foreach (self::$data as $key => $value) {
            if ($value['id'] == $id) return $value;
        }
        return [];
    }
}