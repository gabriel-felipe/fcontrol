fcontrol
========

Classe para facilitar a integração com o fcontrol via webservice.

Exemplo de uso 
```php
$pagamentos = array(
    "metodo" => "2", // Lista de códigos em https://www.fcontrol.com.br/manuaisfcontrol/Anexos/CodigoMetodosPagamento.aspx?enum=false
    "parcelas" => "1",
    "valor" => "123.46", // Valor do produto somente os números, "." como separador.
    "numeroCartao" => "4532.1170.8710.7448",
    "validadeCarto" => "09/16",
    "quatroUltimosDigitos" => "7448",
    "nomeTitular" => "UMBERTO GIUSTI",
);

$produtos = array(

    array(
        "nome" => "Produto 1",
        "quantidade" => "2",
        "cod" => "#cod1",
        "valor" => "61.73", // Valor do produto somente os números, "." como separador.
        "categoria" => "Cat1"
    ),
     
);

$fcontrol = new fcontrol;
$fcontrol->setEnderecoCobranca("Rua Coronel AntiFraude","197","São Paulo","SP","BRA","04602-000","Jardim Social","",true);
$fcontrol->setComprador("FControl Homologa","085003679-89","homologacao@fcontrol.com.br",true, array("sexo"=>"M","ddd"=>"11","telefone"=>"33668899","ip"=>$_SERVER['REMOTE_ADDR']));
$fcontrol->setTransacao("489");
$fcontrol->setPagamentos(array($pagamentos));
$fcontrol->setProdutos($produtos);
print_r($fcontrol->send());
```