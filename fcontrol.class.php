<?php
class fcontrol {
    /* Config */
    private $login = "null"; /* Identificação de acesso para uso do Sistema FControl, troque null pelo seu usuário */ 
    private $Senha = "null"; /* Senha de acesso, troque null pela sua senha */ 
    private $nomeComprador; /* Nome do Comprador */ 
    private $sexoComprador; /* Sexo do Comprador Passar sempre "M" ou "F" */ 
    private $ruaComprador; /* Logradouro do endereço do comprador */ 
    private $numeroComprador = "SN"; /* Número do endereço do comprador, caso não possua número informe (SN, S/N, SEM NUMERO ou SEM NÚMERO) */ 
    private $complementoComprador; /* Complemento do endereço do comprador */ 
    private $bairroComprador; /* Bairro do endereço do comprador */ 
    private $cidadeComprador; /* Cidade do endereço do comprador */ 
    private $ufComprador; /* Sigla do estado do comprador Ex: "SC"*/ 
    private $paisComprador = "BRA"; /* Sigla do país ou nome do país em português ou inglês. Para ver todas as siglas vá em: https://www.fcontrol.com.br/manuaisfcontrol/Anexos/CodigoPaises.aspx*/ 
    private $cepComprador; /* CEP, Formato xxxxx-xxx */ 
    private $cpfComprador; /* CPF para Pessoa Física ou CNPJ para Pessoa Jurídica. Obrigatório para compradores do Brasil. */ 
    private $dddComprador; /* DDD do telefone fornecido pelo comprador. Ex: "41"*/ 
    private $telefoneComprador; /* Número do telefone fornecido pelo comprador. Somente digitos. Ex: "2434455" */ 
    private $dddComprador2; /* DDD do telefone 2 do comprador */ 
    private $telefoneComprador2; /* telefone 2 do comprador */ 
    private $dddCelularComprador; /* DDD do celular do comprador */ 
    private $celularComprador; /* Número do celular do comprador */ 
    private $emailComprador; /* Email do comprador */ 
    private $senhaComprador; /* Senha do comprador */ 
    private $dataNascimentoComprador = "1900-01-01"; /* Data de Nascimento do comprador. Formato ISO8601[YYYY]-[MM]-[DD] Caso n ão possua, deverá ser informado obrigatoriamente a data: 1900-01-01 */ 
    private $ip; /* IP de onde foi efetuada  a compra (suporta IPV4 ou IPV6). Ex: 200.17.200.16 */ 
    private $nomeEntrega; /* Nome fornecido para entrega */ 
    private $ruaEntrega; /* Logradouro do endereço de entrega */ 
    private $numeroEntrega; /* Número do endereço de entrega, casoão possua número informe (SN, S/N, SEM NUMERO ou SEM NÚMERO) */ 
    private $complementoEntrega; /* Complemento do endereço de entrega */ 
    private $bairroEntrega; /* Bairro de endereço de entrega */ 
    private $cidadeEntrega; /* Cidade de endereço de entrega */ 
    private $ufEntrega; /* Sigla do estado de endereço de entrega */ 
    private $paisEntrega; /* Sigla do país ou nome do país em português ou inglês. Para visualizar as Siglas aceitas va em: https://www.fcontrol.com.br/manuaisfcontrol/Anexos/CodigoPaises.aspx */ 
    private $cepEntrega; /* C.E.P. de entrega no formato xxxxx-xxx */ 
    private $dddEntrega; /* DDD do telefone fornecido para entrega */ 
    private $telefoneEntrega; /* Número do telefone fornecido para entrega */ 
    private $dddCelularEntrega; /* DDD do celular de entrega */ 
    private $celularEntrega; /* Número do celular de entrega */ 
    private $dddEntrega2; /* DDD do telefone 2 fornecido para entrega */ 
    private $telefoneEntrega2; /* Número do telefone 2 de entrega */ 
    private $sexoEntrega; /* Sexo do Comprador */ 
    private $cpfEntrega; /* CPF para Pessoa Física ou CNPJ para Pessoa Jurídica. */ 
    private $dataNascimentoEntrega='1900-01-01'; /* Data de Nascimento da entrega. Formato ISO8601[YYYY]-[MM]-[DD] */ 
    private $emailEntrega; /* Email da entrega */ 
    private $codigoPedido; /* Código da transão (deve ser único para sua loja) */ 
    private $quantidadeItensDistintos; /* Itens distintos no pedido */ 
    private $quantidadeTotalItens; /* Número total de itens no pedido */ 
    private $valorTotalCompra; /* Valor total da compra multiplicado por 100. No exemplo, o valor corresponde a R$150,00 */ 
    private $dataCompra; /* Data e hora do Pedido Formato ISO8601[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss] */ 
    private $dataEntrega; /* Data e hora da Entrega Formato ISO8601[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss] */ 
    private $valorTotalFrete; /* Valor do frete multiplicado por 100, no exemplo o frete corresponde a R$ 10,00 */ 
    private $prazoEntregaDias; /* O prazo de entrega em dias */ 
    private $formaEntrega; /* A forma de entrega escolhida */ 
    private $observacao; /* Um texto qualquer que pode ser fornecido para ajudar o analista de risco */ 
    private $canalVenda='lojavirtual'; /* Indica qual a forma de venda. */ 
    private $metodoPagamentos; /* Método(s) de pagamento(s) utilizado(s). Entre em https://www.fcontrol.com.br/manuaisfcontrol/Anexos/CodigoMetodosPagamento.aspx?enum=false para visualizar a tabela com os Métodos de Pagamento. */ 
    private $numeroParcelasPagamentos; /* O número da parcelas de cada pagamento */ 
    private $valorPagamentos; /* O valor de cada pagamento mutiplicado por 100 */ 
    private $numeroCartaoPagamentos; /* É obrigatório informar o número do cartão de crédito criptografado em SHA256. Se o número do cartão não vier criptografado, o FControl poderá não efetuar a análise do pedido. Sempre criptografe o número completo do cartão, sem máscaras. Porém a classe trata essa criptografia*/
    private $dataValidadeCartaoPagamentos; /* A data de validade do(s) carão(Ãµes) */ 
    private $bancoEmissorCartaoPagamentos; /* Nome do(s) banco(s) emissor(res) do(s) cart ão(Ãµes) */ 
    private $binCartaoPagamentos; /* Código BIN do(s) caão(Ãµes) */ 
    private $quatroUltimosDigitosCartaoPagamentos; /* quatro últimos dígitos do cartão */ 
    private $nomeTitularCartaoPagamentos; /* Nome do(s) titular(es) do(s) carão(Ãµes) */ 
    private $cpfTitularCartaoPagamentos; /* CPF(S) do(s) titular(es) do(s) cart ão(Ãµes) */ 
    private $NsuPagamentos; /* Número sequencial único enviado pela operadora do cartão */ 
    private $codigosProdutos; /* O código do(s) produto(s) */ 
    private $descricoesProdutos; /* O nome dos produtos */ 
    private $quantidadesProdutos; /* A quantidade comprada de cada produto */ 
    private $valoresProdutos; /* O valor de cada produto mutiplicado por 100 */ 
    private $categoriasProdutos; /* A categoria de cada produto */ 
    private $paraPresenteProdutos = "false"; /* Se os produtos são para presente ou não */ 
    private $listaCasamentoProdutos = "false"; /* Se os produtos são de lista de casamento ou não */ 
    /*Construct */
        public function __construct(){

        }

    /*Setters */
        public function setComprador($nome,$cpf,$email,$repeatInfosReceptor=false,$informacoesAdicionais=array()){
            /*
            (string)@nome = Nome do Comprador, limit 255 caracteres
            (int)@cpf  = CPF para Pessoa Física ou CNPJ para Pessoa Jurídica. Obrigatório para compradores do Brasil. 14 Caracteres
            (string)@email = Email do comprador
            (bool)@repeatInfosReceptor = Se true repetirá as informações aqui passadas para a entrega.
            (array)@informacoesAdicionais = Array associativo com informações não obrigatórias sobre o comprador, são liberadas os seguintes indices no array:
                [ddd] // somente números
                [telefone] // somente números
                [ddd2] //somente números
                [telefone2] // somente números
                [senha] // string
                [dataNascimento] // formato yyyy-mm-dd ex 1994-06-23 => 23 de junho de 1994
                [dddCelular] //Somente números
                [celular] //Somente números
                [ip] //Manter "."'s 200.17.200.16
                [sexo] // "M" ou "F"
            */
            if(!$nome or !(int)$cpf or !$email){
                throw new Exception("Erro, os parametros nome,cpf e email são obrigatórios para definir o comprador", 1);                
            } else {
                $informacoesAdicionais['nome']  = $nome;
                $informacoesAdicionais['cpf']   = $cpf;
                $informacoesAdicionais['email'] = $email;
                
            }
            $keyMap = array(
                "cpf" => "cpfComprador",
                "email" => "emailComprador",
                "nome" => "nomeComprador",
                "ddd" => "dddComprador",
                "telefone" => "telefoneComprador",
                "ddd2" => "dddComprador2",
                "telefone2" => "telefoneComprador2",
                "senha" => "senhaComprador",
                "dataNascimento" => "dataNascimentoComprador",
                "dddCelular" => "dddCelularComprador",
                "celular" =>"celularComprador",
                "ip" => "ip",
                "sexo" =>"sexoComprador"
            ); //Mapeando indices do array aos atributos da classe
            $this->arrayToAttrs($informacoesAdicionais,$keyMap);
            if($repeatInfosReceptor){
                $this->setReceptor($nome,$informacoesAdicionais);
            }
        }
        public function setReceptor($nome, $informacoesAdicionais=array()){
            /*
            (string)@nome = Nome do Comprador, limit 255 caracteres
            (int)@cpf  = CPF para Pessoa Física ou CNPJ para Pessoa Jurídica. Obrigatório para compradores do Brasil. 14 Caracteres
            (string)@email = Email do comprador
            (array)@informacoesAdicionais = Array associativo com informações não obrigatórias sobre o comprador, são liberadas os seguintes indices no array:
                [ddd] // somente números
                [telefone] // somente números
                [ddd2] //somente números
                [telefone2] // somente números
                [cpf] //somente números
                [email] 
                [dataNascimento] // formato yyyy-mm-dd ex 1994-06-23 => 23 de junho de 1994
                [dddCelular] //Somente números
                [celular] //Somente números
                [sexo] // "M" ou "F"
            */
            if(!$nome){
                throw new Exception("Erro, o parametros nome é obrigatório para definir o receptor", 1);                
            } else {
                $this->nomeEntrega = $nome;
            }
            $keyMap = array(
                "ddd" => "dddEntrega",
                "telefone" => "telefoneEntrega",
                "ddd2" => "dddEntrega2",
                "telefone2" => "telefoneEntrega2",
                "senha" => "senhaEntrega",
                "dataNascimento" => "dataNascimentoEntrega",
                "dddCelular" => "dddCelularEntrega",
                "celular" =>"celularEntrega",
                "sexo" =>"sexoEntrega",
                "cpf" => "cpfEntrega",
                "email" => "emailEntrega"
            ); //Mapeando indices do array aos atributos da classe
            $this->arrayToAttrs($informacoesAdicionais,$keyMap);
        }
        public function setEnderecoCobranca($rua,$numero,$cidade,$uf,$pais,$cep,$bairro='',$complemento='',$repetirEntrega=false){
            /*
            (string)@rua = Logradouro, 255 caracteres
            (string)@numero = Número do endereço do comprador, caso não possua número informe (SN, S/N, SEM NUMERO ou SEM NÚMERO), 8 Caracteres
            (string)@cidade = 100 caracteres
            (string)@uf = Sigla do estado
            (string)@pais = Sigla do país de acordo com o link: https://www.fcontrol.com.br/manuaisfcontrol/Anexos/CodigoPaises.aspx
            (string)@cep = CEP, Formato xxxxx-xxx
            (string)@bairro = 150 caracteres
            (string)@complemento = 50 caracteres
            (bool)@repetirEntrega = True se for quiser utilizar o mesmo endereço na entrega.
            */
            $keyMap = array(
                "rua"         => "ruaComprador",
                "numero"      => "numeroComprador",
                "cidade"      => "cidadeComprador",
                "uf"          => "ufComprador",
                "cep"         => "cepComprador",
                "pais"        => "paisComprador",
                "bairro"      => "bairroComprador",
                "complemento" => "complementoComprador"
            );
            $infos = array(
                "rua"        =>$rua,
                "numero"     =>$numero,
                "cidade"     =>$cidade,
                "uf"         =>$uf,
                "cep"        =>$cep,
                "pais"       =>$pais,
                "bairro"     =>$bairro,
                "complemento"=>$complemento
            );
            $this->arrayToAttrs($infos,$keyMap);
            if($repetirEntrega){
                $this->setEnderecoEntrega($rua,$numero,$cidade,$uf,$pais,$cep,$bairro,$complemento);
            }
        }
        public function setEnderecoEntrega($rua,$numero,$cidade,$uf,$pais,$cep,$bairro='',$complemento=''){
            /*
            (string)@rua = Logradouro, 255 caracteres
            (string)@numero = Número do endereço do comprador, caso não possua número informe (SN, S/N, SEM NUMERO ou SEM NÚMERO), 8 Caracteres
            (string)@cidade = 100 caracteres
            (string)@uf = Sigla do estado
            (string)@pais = Sigla do país de acordo com o link: https://www.fcontrol.com.br/manuaisfcontrol/Anexos/CodigoPaises.aspx
            (string)@cep = CEP, Formato xxxxx-xxx
            (string)@bairro = 150 caracteres
            (string)@complemento = 50 caracteres
            (bool)@repetirEntrega = True se for quiser utilizar o mesmo endereço na entrega.
            */
            $keyMap = array(
                "rua"         => "ruaEntrega",
                "numero"      => "numeroEntrega",
                "cidade"      => "cidadeEntrega",
                "uf"          => "ufEntrega",
                "cep"         => "cepEntrega",
                "pais"        => "paisEntrega",
                "bairro"      => "bairroEntrega",
                "complemento" => "complementoEntrega"
            );
            $infos = array(
                "rua"        =>$rua,
                "numero"     =>$numero,
                "cidade"     =>$cidade,
                "uf"         =>$uf,
                "cep"        =>$cep,
                "pais"       =>$pais,
                "bairro"     =>$bairro,
                "complemento"=>$complemento
            );
            $this->arrayToAttrs($infos,$keyMap);
            
        }
        public function setTransacao($cod,$dataCompra=false,$dataEntrega=false,$valorTotalFrete=false,$prazoEntregaDias=false,$formaEntrega=false,$observacao=false,$canalVenda='lojavirtual'){
            $this->codigoPedido = $cod;
            if($dataCompra === false){ //Se não for fornecida uma data de compra será assumida a data atual.
                $this->dataCompra = date("d/m/Y");
            } else {
                $this->dataCompra = $dataCompra;
            }
            if($dataEntrega !== false){
                $this->dataEntrega = $dataEntrega;
            }
            if($valorTotalFrete !== false){
                $this->valorTotalFrete = (float)$valorTotalFrete*100;
            }
            if($prazoEntregaDias !==false){
                $this->$prazoEntregaDias = (int)$prazoEntregaDias;
            }
            if($formaEntrega !== false){
                $this->formaEntrega = $formaEntrega;
            }
            if($observacao !== false){
                $this->observacao = $observacao;
            }
            if($canalVenda !== false){
                $this->canalVenda = $canalVenda;
            }

        }
        
        public function setProdutos($produtos,$paraPresente=false,$listaCasamento=false){
            /*
            (array)@produtos, é esperado um array multidimensional e associativo dos produtos exemplo: 
            $produtos = [
                [
                    "nome" => "Nome do produto",
                    "quantidade" => "quantidade do produto",
                    "cod" => "Código produto"
                    "valor" => "130.69", // Valor do produto somente os números, "." como separador.
                    "categoria" => "categoria do produto"
                ]
            ]
            (bool)@paraPresente, se esses produtos são para presente ou não. True or False
            (bool)@listaCasamento, se esses produtos são de lista de casamento ou não. True or False
            */
            if(!is_array($produtos)){
                throw new Exception("Erro ao definir produtos FCONTROL, ", 1);
            } else {
                $assocAttrs = array(
                    "cod"=>"codigosProdutos",
                    "nome"=>"descricoesProdutos",
                    "quantidade"=>"quantidadesProdutos", //Caso em branco será assumido 1
                    "valor" =>"valoresProdutos",
                    "categoria"=>"categoriasProdutos"
                ); //Associa as chaves do array ao atributo da classe;

                $totalCompra = 0;
                $totalItens = 0;
                $itensUnicos = count($produtos);
                foreach ($produtos as &$produto){
                    if(!isset($produto['quantidade']) or (int)$produto['quantidade'] < 1){
                        $produto['quantidade'] = 1;
                    }
                    $produto['valor'] = (float)$produto['valor'] * 100;
                    $totalCompra += $produto['valor']*(int)$produto['quantidade'];
                    $totalItens += (int)$produto['quantidade'];
                }
                $this->multiArrayToAttrs($produtos,$assocAttrs);
                $this->quantidadeItensDistintos = $itensUnicos;
                $this->quantidadeTotalItens = $totalItens;
                $this->valorTotalCompra = $totalCompra;
                $this->paraPresenteProdutos = ($paraPresente) ? "true" : "false";
                $this->listaCasamentoProdutos = ($listaCasamento) ? "true" : "false";
            }
            
        }
        
        public function setPagamentos($pagamentos){
             /*
            (array)@pagamentos, é esperado um array multidimensional e associativo dos pagamentos exemplo: 
            $pagamentos = [
                [
                    "metodo" => "cod do metodo", // Lista de códigos em https://www.fcontrol.com.br/manuaisfcontrol/Anexos/CodigoMetodosPagamento.aspx?enum=false
                    "parcelas" => "quantidade de parcelas",
                    "valor" => "130.69", // Valor do produto somente os números, "." como separador.
                    "numeroCartao" => "número do cartão de crédito",
                    "validadeCarto" => "01/11",
                    "bancoCartao"  => "Banco emissor do cartao",
                    "binCartao" => "Bin Cartão",
                    "quatroUltimosDigitos" => "0000",
                    "nomeTitular" => "José da Silva",
                    "cpfTitularCartao" => "79896544362",
                    "NsuPagamentos" => "Número sequencial único enviado pela operador do cartão",
                ]
            ] */
            if(!is_array($pagamentos)){
                throw new Exception("Erro ao definir pagamentos FCONTROL, ", 1);
            } else {
                $assocAttrs = array(
                    "metodo" => "metodoPagamentos",
                    "parcelas" => "numeroParcelasPagamentos",
                    "valor" => "valorPagamentos",
                    "numeroCartao" => "numeroCartaoPagamentos",
                    "validadeCarto" => "dataValidadeCartaoPagamentos",
                    "bancoCartao"  => "bancoEmissorCartaoPagamentos",
                    "binCartao" => "binCartaoPagamentos",
                    "quatroUltimosDigitos" => "quatroUltimosDigitosCartaoPagamentos",
                    "nomeTitular" => "nomeTitularCartaoPagamentos",
                    "cpfTitularCartao" => "cpfTitularCartaoPagamentos",
                    "NsuPagamentos" => "NsuPagamentos"

                ); //Associa as chaves do array ao atributo da classe;
                foreach ($pagamentos as &$pagamento){
                    $pagamento['numeroCartao'] = filter_var($pagamento['numeroCartao'], FILTER_SANITIZE_NUMBER_INT);
                    $pagamento['numeroCartao'] = hash("sha256", $pagamento['numeroCartao']);
                    $pagamento['valor'] = (float)$pagamento['valor'] * 100;
                }
                $this->multiArrayToAttrs($pagamentos,$assocAttrs);
            }
        }
        public function setLogin($value){
             $this->login = $value;
        }
        public function setSenha($value){
             $this->Senha = $value;
        }
        public function setNomeComprador($value){
             $this->nomeComprador = $value;
        }
        public function setSexoComprador($value){
             $this->sexoComprador = $value;
        }
        public function setRuaComprador($value){
             $this->ruaComprador = $value;
        }
        public function setNumeroComprador($value){
             $this->numeroComprador = $value;
        }
        public function setComplementoComprador($value){
             $this->complementoComprador = $value;
        }
        public function setBairroComprador($value){
             $this->bairroComprador = $value;
        }
        public function setCidadeComprador($value){
             $this->cidadeComprador = $value;
        }
        public function setUfComprador($value){
             $this->ufComprador = $value;
        }
        public function setPaisComprador($value){
             $this->paisComprador = $value;
        }
        public function setCepComprador($value){
             $this->cepComprador = $value;
        }
        public function setCpfComprador($value){
             $this->cpfComprador = $value;
        }
        public function setDddComprador($value){
             $this->dddComprador = $value;
        }
        public function setTelefoneComprador($value){
             $this->telefoneComprador = $value;
        }
        public function setDddComprador2($value){
             $this->dddComprador2 = $value;
        }
        public function setTelefoneComprador2($value){
             $this->telefoneComprador2 = $value;
        }
        public function setDddCelularComprador($value){
             $this->dddCelularComprador = $value;
        }
        public function setCelularComprador($value){
             $this->celularComprador = $value;
        }
        public function setEmailComprador($value){
             $this->emailComprador = $value;
        }
        public function setSenhaComprador($value){
             $this->senhaComprador = $value;
        }
        public function setDataNascimentoComprador($value){
             $this->dataNascimentoComprador = $value;
        }
        public function setIp($value){
             $this->ip = $value;
        }
        public function setNomeEntrega($value){
             $this->nomeEntrega = $value;
        }
        public function setRuaEntrega($value){
             $this->ruaEntrega = $value;
        }
        public function setNumeroEntrega($value){
             $this->numeroEntrega = $value;
        }
        public function setComplementoEntrega($value){
             $this->complementoEntrega = $value;
        }
        public function setBairroEntrega($value){
             $this->bairroEntrega = $value;
        }
        public function setCidadeEntrega($value){
             $this->cidadeEntrega = $value;
        }
        public function setUfEntrega($value){
             $this->ufEntrega = $value;
        }
        public function setPaisEntrega($value){
             $this->paisEntrega = $value;
        }
        public function setCepEntrega($value){
             $this->cepEntrega = $value;
        }
        public function setDddEntrega($value){
             $this->dddEntrega = $value;
        }
        public function setTelefoneEntrega($value){
             $this->telefoneEntrega = $value;
        }
        public function setDddCelularEntrega($value){
             $this->dddCelularEntrega = $value;
        }
        public function setCelularEntrega($value){
             $this->celularEntrega = $value;
        }
        public function setDddEntrega2($value){
             $this->dddEntrega2 = $value;
        }
        public function setTelefoneEntrega2($value){
             $this->telefoneEntrega2 = $value;
        }
        public function setSexoEntrega($value){
             $this->sexoEntrega = $value;
        }
        public function setCpfEntrega($value){
             $this->cpfEntrega = $value;
        }
        public function setDataNascimentoEntrega($value){
             $this->dataNascimentoEntrega = $value;
        }
        public function setEmailEntrega($value){
             $this->emailEntrega = $value;
        }
        public function setCodigoPedido($value){
             $this->codigoPedido = $value;
        }
        public function setQuantidadeItensDistintos($value){
             $this->quantidadeItensDistintos = $value;
        }
        public function setQuantidadeTotalItens($value){
             $this->quantidadeTotalItens = $value;
        }
        public function setValorTotalCompra($value){
             $this->valorTotalCompra = $value;
        }
        public function setDataCompra($value){
             $this->dataCompra = $value;
        }
        public function setDataEntrega($value){
             $this->dataEntrega = $value;
        }
        public function setValorTotalFrete($value){
             $this->valorTotalFrete = $value;
        }
        public function setPrazoEntregaDias($value){
             $this->prazoEntregaDias = $value;
        }
        public function setFormaEntrega($value){
             $this->formaEntrega = $value;
        }
        public function setObservacao($value){
             $this->observacao = $value;
        }
        public function setCanalVenda($value){
             $this->canalVenda = $value;
        }
        public function setMetodoPagamentos($value){
             $this->metodoPagamentos = $value;
        }
        public function setNumeroParcelasPagamentos($value){
             $this->numeroParcelasPagamentos = $value;
        }
        public function setValorPagamentos($value){
             $this->valorPagamentos = $value;
        }
        public function setNumeroCartaoPagamentos($value){
             $this->numeroCartaoPagamentos = $value;
        }
        public function setDataValidadeCartaoPagamentos($value){
             $this->dataValidadeCartaoPagamentos = $value;
        }
        public function setBancoEmissorCartaoPagamentos($value){
             $this->bancoEmissorCartaoPagamentos = $value;
        }
        public function setBinCartaoPagamentos($value){
             $this->binCartaoPagamentos = $value;
        }
        public function setQuatroUltimosDigitosCartaoPagamentos($value){
             $this->quatroUltimosDigitosCartaoPagamentos = $value;
        }
        public function setNomeTitularCartaoPagamentos($value){
             $this->nomeTitularCartaoPagamentos = $value;
        }
        public function setCpfTitularCartaoPagamentos($value){
             $this->cpfTitularCartaoPagamentos = $value;
        }
        public function setNsuPagamentos($value){
             $this->NsuPagamentos = $value;
        }
        public function setCodigosProdutos($value){
             $this->codigosProdutos = $value;
        }
        public function setDescricoesProdutos($value){
             $this->descricoesProdutos = $value;
        }
        public function setQuantidadesProdutos($value){
             $this->quantidadesProdutos = $value;
        }
        public function setValoresProdutos($value){
             $this->valoresProdutos = $value;
        }
        public function setCategoriasProdutos($value){
             $this->categoriasProdutos = $value;
        }
        public function setParaPresenteProdutos($value){
             $this->paraPresenteProdutos = $value;
        }
        public function setListaCasamentoProdutos($value){
             $this->listaCasamentoProdutos = $value;
        }
    /*Getters */
        public function getLogin($value){
            return $this->login;
        }
        public function getSenha($value){
            return $this->Senha;
        }
        public function getNomeComprador($value){
            return $this->nomeComprador;
        }
        public function getSexoComprador($value){
            return $this->sexoComprador;
        }
        public function getRuaComprador($value){
            return $this->ruaComprador;
        }
        public function getNumeroComprador($value){
            return $this->numeroComprador;
        }
        public function getComplementoComprador($value){
            return $this->complementoComprador;
        }
        public function getBairroComprador($value){
            return $this->bairroComprador;
        }
        public function getCidadeComprador($value){
            return $this->cidadeComprador;
        }
        public function getUfComprador($value){
            return $this->ufComprador;
        }
        public function getPaisComprador($value){
            return $this->paisComprador;
        }
        public function getCepComprador($value){
            return $this->cepComprador;
        }
        public function getCpfComprador($value){
            return $this->cpfComprador;
        }
        public function getDddComprador($value){
            return $this->dddComprador;
        }
        public function getTelefoneComprador($value){
            return $this->telefoneComprador;
        }
        public function getDddComprador2($value){
            return $this->dddComprador2;
        }
        public function getTelefoneComprador2($value){
            return $this->telefoneComprador2;
        }
        public function getDddCelularComprador($value){
            return $this->dddCelularComprador;
        }
        public function getCelularComprador($value){
            return $this->celularComprador;
        }
        public function getEmailComprador($value){
            return $this->emailComprador;
        }
        public function getSenhaComprador($value){
            return $this->senhaComprador;
        }
        public function getDataNascimentoComprador($value){
            return $this->dataNascimentoComprador;
        }
        public function getIp($value){
            return $this->ip;
        }
        public function getNomeEntrega($value){
            return $this->nomeEntrega;
        }
        public function getRuaEntrega($value){
            return $this->ruaEntrega;
        }
        public function getNumeroEntrega($value){
            return $this->numeroEntrega;
        }
        public function getComplementoEntrega($value){
            return $this->complementoEntrega;
        }
        public function getBairroEntrega($value){
            return $this->bairroEntrega;
        }
        public function getCidadeEntrega($value){
            return $this->cidadeEntrega;
        }
        public function getUfEntrega($value){
            return $this->ufEntrega;
        }
        public function getPaisEntrega($value){
            return $this->paisEntrega;
        }
        public function getCepEntrega($value){
            return $this->cepEntrega;
        }
        public function getDddEntrega($value){
            return $this->dddEntrega;
        }
        public function getTelefoneEntrega($value){
            return $this->telefoneEntrega;
        }
        public function getDddCelularEntrega($value){
            return $this->dddCelularEntrega;
        }
        public function getCelularEntrega($value){
            return $this->celularEntrega;
        }
        public function getDddEntrega2($value){
            return $this->dddEntrega2;
        }
        public function getTelefoneEntrega2($value){
            return $this->telefoneEntrega2;
        }
        public function getSexoEntrega($value){
            return $this->sexoEntrega;
        }
        public function getCpfEntrega($value){
            return $this->cpfEntrega;
        }
        public function getDataNascimentoEntrega($value){
            return $this->dataNascimentoEntrega;
        }
        public function getEmailEntrega($value){
            return $this->emailEntrega;
        }
        public function getCodigoPedido($value){
            return $this->codigoPedido;
        }
        public function getQuantidadeItensDistintos($value){
            return $this->quantidadeItensDistintos;
        }
        public function getQuantidadeTotalItens($value){
            return $this->quantidadeTotalItens;
        }
        public function getValorTotalCompra($value){
            return $this->valorTotalCompra;
        }
        public function getDataCompra($value){
            return $this->dataCompra;
        }
        public function getDataEntrega($value){
            return $this->dataEntrega;
        }
        public function getValorTotalFrete($value){
            return $this->valorTotalFrete;
        }
        public function getPrazoEntregaDias($value){
            return $this->prazoEntregaDias;
        }
        public function getFormaEntrega($value){
            return $this->formaEntrega;
        }
        public function getObservacao($value){
            return $this->observacao;
        }
        public function getCanalVenda($value){
            return $this->canalVenda;
        }
        public function getMetodoPagamentos($value){
            return $this->metodoPagamentos;
        }
        public function getNumeroParcelasPagamentos($value){
            return $this->numeroParcelasPagamentos;
        }
        public function getValorPagamentos($value){
            return $this->valorPagamentos;
        }
        public function getNumeroCartaoPagamentos($value){
            return $this->numeroCartaoPagamentos;
        }
        public function getDataValidadeCartaoPagamentos($value){
            return $this->dataValidadeCartaoPagamentos;
        }
        public function getBancoEmissorCartaoPagamentos($value){
            return $this->bancoEmissorCartaoPagamentos;
        }
        public function getBinCartaoPagamentos($value){
            return $this->binCartaoPagamentos;
        }
        public function getQuatroUltimosDigitosCartaoPagamentos($value){
            return $this->quatroUltimosDigitosCartaoPagamentos;
        }
        public function getNomeTitularCartaoPagamentos($value){
            return $this->nomeTitularCartaoPagamentos;
        }
        public function getCpfTitularCartaoPagamentos($value){
            return $this->cpfTitularCartaoPagamentos;
        }
        public function getNsuPagamentos($value){
            return $this->NsuPagamentos;
        }
        public function getCodigosProdutos($value){
            return $this->codigosProdutos;
        }
        public function getDescricoesProdutos($value){
            return $this->descricoesProdutos;
        }
        public function getQuantidadesProdutos($value){
            return $this->quantidadesProdutos;
        }
        public function getValoresProdutos($value){
            return $this->valoresProdutos;
        }
        public function getCategoriasProdutos($value){
            return $this->categoriasProdutos;
        }
        public function getParaPresenteProdutos($value){
            return $this->paraPresenteProdutos;
        }
        public function getListaCasamentoProdutos($value){
            return $this->listaCasamentoProdutos;
        }
    /*Parsers */
        private function parseCpf($cpf){
            $cpf = preg_replace("/[^\d?]/", "", $cpf);
            return $cpf;
        }
        private function parseCpfComprador($cpf){
            return $this->parseCpf($cpf);
        }
        private function parseCpfEntrega($cpf){
            return $this->parseCpf($cpf);
        }
        private function parseCep($cep){
            $cep = preg_replace("/[^\d?]/", "", $cep);
            $cep = substr($cep, 0,5)."-".substr($cep, 5);
            return $cep;
        }
        private function parseCepEntrega($cep){
            return $this->parseCep($cep);
        }
        private function parseCepComprador($cep){;
            return $this->parseCep($cep);
        }
    /* Helpers */
        private function arrayToAttrs($infos,$keyMap){
            /*Helper para converter um array em atributos da classe. 
                (array)@infos =array que conterá as informações a serem colocadas na classe.
                (array)@keyMap = array que mapeia as chaves do array infos em atributos da classe
            */
            if(!is_array($infos) or !is_array($keyMap)){
                throw new Exception("arrayToAttrs espera dois arrays como parâmetros.", 1);
                
            }
            foreach($keyMap as $index => $attr){
                if(isset($infos[$index]) and property_exists($this,$attr)){ //Se existir essa chave no array 
                    $value = $infos[$index];
                    if(method_exists($this, "parse".ucfirst($attr))){ //Verifica se existe um procedimento para tratar esse campo
                        $method = "parse".ucfirst($attr);
                        $value = $this->{$method}($value); // Trata o campo se existir o procedimento
                    }
                    $this->{$attr} = $value; //Seta o attributo à classe
                } 
            }

        }
        private function multiArrayToAttrs($array,$keyAssoc){

            /*Helper para converter um array multidimensional e associativo em attributos da classe. Ex:
                @produtos = [
                    [
                        "nome" => "Nome do produto A ",
                        "quantidade" => "1",
                        "cod" => "134"
                        "valor" => "13069", // Valor do produto somente os números, "." como separador.
                        "categoria" => "Eletronicos"
                    ],
                    [
                        "nome" => "Nome do produto B",
                        "quantidade" => "2",
                        "cod" => "34"
                        "valor" => "13369", // Valor do produto somente os números, "." como separador.
                        "categoria" => "Outros"
                    ],
                ]; 
                @keyAssoc = [
                        "cod"=>"codigosProdutos",
                        "nome"=>"descricoesProdutos",
                        "quantidade"=>"quantidadesProdutos",
                        "valor" =>"valoresProdutos",
                        "categoria"=>"categoriasProdutos"
                    ]
                Array produtos é convertido em:
                $this->descricoesProdutos = "Nome do produto A; Nome do produto B"
                $this->quantidadesProdutos = "1;2"
                $this->codigosProdutos = "134;34"
                $this->valoresProdutos = "13069;13369"
                $this->categoriasProdutos = "Eletronicos;Outros"
            */
            if(!is_array($array) or !is_array($keyAssoc)){
                throw new Exception("Erro ao definir produtos FCONTROL, ", 1);
            } else {
                foreach($keyAssoc as $chave => $classAttr) {
                    $map = function($obj) use ($chave) {//retorna array dos valores dessa chave
                        return (isset($obj[$chave]) and $obj[$chave]) ? $obj[$chave] : ""; 
                    };
                    $filtered = array_map($map, $array); 
                    $this->{$classAttr} = implode(";", $filtered); //Junta essas chaves com ;, exemplo "$this->descricoesProdutos = 'nomeproduto1;nomeproduto2;nomeproduto3';"
                }
            }
        }
    public function getAttrs(){
        return get_object_vars($this);
    }
    public function send(){
        $url = "https://secure.fcontrol.com.br/WSFControl2/Enfileirar.aspx";

        $params = $this->getAttrs();
        $params = http_build_query($params);
        $url = $url."?".$params;
        $file = file_get_contents($url);
        return $file;
        
    }

}