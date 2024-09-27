<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
error_reporting(E_ERROR);
    class Combustivel{
        protected $litros_;
        protected $preco_por_litro;

        public function __construct($preco_por_litro, $litros_){
            $this ->preco_por_litro = $preco_por_litro;
            $this -> litros_ = $litros_;
        }

        public function calcularValor(){
            return $this ->preco_por_litro * $this ->litros_;
        }


    }

    class Alcool extends Combustivel{
        public function CalcularDescont(){
            if ($this->litros_ <= 20) {
                return 0.3;
            }
            else{
                return 0.5;
            }

        }

        public function ValorDesconto(){
            $desconto_ = $this -> CalcularDescont();
            $valor_sem_desconto = parent::calcularValor();
            return $valor_sem_desconto - ($valor_sem_desconto * $desconto_);

        }

    }

    class Gasolina extends Combustivel{
        public function CalcularDescont(){
            if ($this->litros_ <= 20) {
               return 0.4; 
            }
            else{
                return 0.6;
            }
        }
        public function ValorDescontoGasolina(){
            $desconto_ = $this -> CalcularDescont();
            $valor_sem_desconto = parent::calcularValor();
            return $valor_sem_desconto - ($valor_sem_desconto * $desconto_);

            }

    }

    function calcularPagamento($litros_, $tipoCombustivel){
        if ($tipoCombustivel == 'A') {
            $alcool = new Alcool(2.89, $litros_);
            return $alcool-> ValorDesconto();
        }
        elseif ($tipoCombustivel = 'G'){
            $gasolina = new Gasolina (3.99, $litros_ );
            return $gasolina -> ValorDescontoGasolina();
        }
        else{
            return "Tipo de combustível invalido";
        }
    }
    $litros_ = $_POST['litros'];
    $tipoCombustivel = $_POST['combustivel'];
    $ValorPagar = calcularPagamento($litros_, $tipoCombustivel);
    echo "<div class = 'result'>";
    echo "O valor a ser pago é: $ValorPagar";
    echo "</div>"
?>