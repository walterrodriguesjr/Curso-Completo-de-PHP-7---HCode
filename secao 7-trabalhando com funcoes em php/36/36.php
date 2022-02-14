<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    'nome_cargo' => 'Gerente de Vendas',
                ),
            ),
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            'nome_cargo' => 'Supervisor de Pagamentos',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
