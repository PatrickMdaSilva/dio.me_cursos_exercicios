<?php

declare(strict_types=1);
class Venda {

    private string $data;
    private string $produto;
    private int $quantidade;
    private float $valor;

    public function __construct (
        string $data, 
        string $produto,
        int $quantidade, 
        float $valor
    )

    {
        $this-> data = $data;
        $this-> produto = $produto;
        $this-> quantidade = $quantidade;
        $this-> valor = $valor;
    }

    public function item_comprado():string {
        return'o produto comprado foi '.$this->produto. 'e a quantidade foi '.$this-> quantidade ;
    }

    public function valor_da_compra(): string{
       return 'Você gastou um total de R$' .$this-> quantidade * $this->valor;
    }


}

$compra = new Venda(
    '03/02/2020',
    'bicicleta',
    2,
    700.00
);

$compra2 = new Venda(
    '20/01/2010',
    'televisores',
    4,
    400.00
);
var_dump($compra);
echo '<br>';
echo $compra -> item_comprado();
echo '<br>';
echo $compra -> valor_da_compra();

echo '<br>';
var_dump($compra2);
echo '<br>';
echo $compra2 -> item_comprado();
echo '<br>';
echo $compra2 -> valor_da_compra();