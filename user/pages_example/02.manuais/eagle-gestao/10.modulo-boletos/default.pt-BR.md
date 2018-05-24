---
title: 'Módulo Boletos'
media_order: 'boleto-carteira-cobranca.png,boleto-conta-corrente.png,boleto-meio-de-pagamento.png,boleto-gerenciador-boletos.png,boleto-tela-orcamento.png,boleto-tela-faturamento.png,boleto-seleciona-carteira.png,boleto-impresso.png,boleto-cliente-conta-receber.png,boleto-cliente-conta-receber-selecao.png,boleto-cliente-conta-receber-meio-pagamento.png,boleto-cliente-conta-receber-conta.png,boleto-gerar-boletos.png,boleto-lote-gerado.png,boleto-imprimir-boleto.png,boleto-listar-clientes-contas-receber.png,boleto-lista-clientes-1.png,boleto-lista-clientes-2.png,boleto-contrato-cadastro-1.png,boleto-contrato-nome.png,boleto-contrato-servicos.png,boleto-contrato-clientes.png,boleto-listar-clientes-contrato.png,boleto-consulta-contratos.png,boleto-clientes-contrato.png,boletos-impressos.png,boleto-listar-clientes-contrato-contas-receber.png,boletos-contrato-contas-receber.png,boleto-excluir-menu.png,boleto-excluir-selecao.png,boleto-excluir-confirmacao-2.png,boleto-excluir-confirmacao.png,boleto-gerar-remessa-menu.png,boleto-remessa-caminho-arquivo.png,boleto-remessa-gerada.png,boleto-remessa-arquivo-gerado.png,boleto-desbloquear-remessa-menu.png,boleto-remessa-selecao-desbloqueio.png,boleto-remessa-confirmacao-desbloqueio.png,boleto-processar-retorno-menu.png,boleto-impressao-2-via-menu.png,boleto-2-via-gerado.png,boleto-2-via-consulta.png,boleto-selecao-titulos-carteira.png,boleto-impressao-titulos-carteira.png,boleto-retorno-localizacao-arquivo.png,boleto-retorno-data-credito.png,boleto-relatorio-carteira.png,boleto-relatorios-menu.png,boleto-tela-relatorios.png,boleto-relatorio-contas-receber.png,boleto-retorno-relatorio-retorno_.png,boleto-consulta-periodo-2.png,boleto-consulta-periodo.png,boleto-consulta-clientes-2.png,boleto-consulta-clientes.png,boleto-consulta-numero-2.png,boleto-consulta-numero.png,boleto-consulta-todos.png,boleto-consulta-impressao.png,boleto-consulta-impressao-2.png,boleto-impressao-consulta-selecao.png,boleto-imprimir-consulta.png,boleto-consulta-enviar.png,boleto-consulta-envio-realizado.png'
taxonomy:
    categoria:
        - boletos
anchors:
    active: true
menuright: true
tagtitle: h2
---

===

## Introdução

O boleto bancário é um documento que representa títulos de cobrança e é amplamente utilizado porque apresenta uma grande praticidade e flexibilidade de pagamento, por parte do sacado (aquele que paga o boleto).
O módulo de boletos é mais uma ferramenta disponibilizada pelo sistema Eagle Gestão, que proporciona à empresa a facilidade na geração de boletos bancários, previamente aprovados pelo Banco.
<br>O sistema conta com uma interface intuitiva que possibilita a rápida geração dos boletos, através das vendas, das contas a receber, dos contratos e, também, o recebimento automático dos boletos, que ocorre por meio dos arquivos de retorno. 
<br>Os relatórios também são essenciais e proporcionam um gerenciamento mais apurado sobre as emissões, as baixas, os valores a receber e recebidos.

<br>
## Configuração do Sistema

A utilização do módulo boletos requer determinadas configurações realizadas no sistema. Somente após o cadastro da conta corrente, do meio de pagamento e da carteira de cobrança, será possível gerar os boletos. <br>É importante observar que muitas informações inseridas nessa configuração, **são fornecidas pela agência bancária**. São elas:

1. Dados da Conta Corrente:
* Número do Banco
* Número da Agência
* Número da Conta
* Código do Cedente

2. Dados da Carteira de Cobrança:
* Número da Carteira
* Variação
* Convênio
* Espécie do Documento
* Percentual de Multa

3. Padrão do arquivo de remessa - CNAB 240 ou CNAB 400.

<br>
### Cadastro de Contas Correntes

Acesse a tela de conta corrente através do caminho Cadastros / Financeiro / Cadastro de Contas Correntes.
Lembrando que os campos Banco, Agência, Conta e Código do Cedente devem ser adquiridos junto ao banco.

![Configuração da Conta Corrente](boleto-conta-corrente.png "Configuração da Conta Corrente")

! Para mais detalhes sobre o cadastro de Contas Correntes acesse o [Módulo Cadastros - Conta Corrente](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-cadastros#cadastro-de-contas-correntes "Módulo Cadastros - Conta Corrente").
<br>
### Cadastro de Meios de Pagamento

Acesse Cadastros / Financeiro / Cadastro de Meios de Pagamento. Cria-se, no sistema, um meio de pagamento denominado Boleto Bancário. Esse meio de pagamento será utilizado na carteira de cobrança cadastrada, para que seja possível a emissão de boletos.

![Meio de Pagamento](boleto-meio-de-pagamento.png "Meio de Pagamento")

! Veja mais detalhes sobre o cadastro através do Manual de [Cadastros de Meios de Pagamento](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-cadastros#cadastro-de-meios-de-pagamento).

<br>
### Cadastro de Carteiras de Cobrança

A Carteira de Cobrança é um recurso utilizado no sistema para possibilitar a emissão de boletos bancários e ela representa um serviço contratado junto ao banco.

Os dados da carteira de cobrança devem ser solicitados junto ao banco onde serão homologados os boletos. As informações nela contidas aparecem na impressão do boleto e devem estar corretas para comprovar a veracidade do documento. Deve-se conferir junto ao banco se sua carteira está autorizada a enviar e receber arquivos e qual remessa será utilizada: padrão CNAB 240 ou CNAB 400.

Acesse Cadastros / Financeiro / Carteiras de Cobrança para inserir as informações repassadas pelo banco.

![Configuração da Carteira de Cobrança](boleto-carteira-cobranca.png "Configuração da Carteira de Cobrança")

! O campo "Meio de Pagamento" deve estar selecionado como "Boleto Bancário" para que a emissão do boleto seja realizada.

! Para mais detalhes, acesse o Manual de Cadastros, na seção [Carteiras de Cobrança](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-cadastros#cadastro-de-carteiras-de-cobrana).

<br>
## Gerar Boletos - Vendas

O sistema Eagle Gestão disponibiliza diversas maneiras para a geração de Boletos Bancários. A tela principal para o gerenciamento de boletos é acessado através do Financeiro / Contas a Receber / Gerenciador de Boletos.

![Gerenciador de Boletos](boleto-gerenciador-boletos.png "Gerenciador de Boletos")

Uma das possibilidades de emissão de boletos se dá através da realização de uma venda:
1. Faça uma venda acessando o caminho **Vendas / Orçamentos**.
2. Escolha uma forma de pagamento a prazo, preferencialmente o meio de pagamento “**boleto bancário**”. Escolha também a conta corrente para a qual o boleto será gerado.

![Pré-venda](boleto-tela-orcamento.png "Pré-venda")

3. Confira a data de vencimento, o valor e **fature** a venda normalmente, através de Vendas / Faturamento. <br>Para mais detalhes sobre Orçamentos e Vendas, acesse o [Manual de Vendas e Faturamento](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-vendas-e-faturamento "Vendas e Faturamento").

![Faturamento](boleto-tela-faturamento.png "Faturamento")

! O boleto gerado poderá ser visualizado através da **Impressão pela Carteira de Cobrança**, **Impressão em 2ª Via** ou **Impressão através da Consulta de Boletos**. Acesse o tópico [**IMPRIMIR BOLETOS**](#imprimir-boletos) e veja o passo a passo.

<br>
## Gerar Boletos - Contas a Receber

Outra possibilidade de gerar boletos é através das contas a receber. Mesmo não tendo escolhido o meio de pagamento e a conta corrente referentes à emissão de boletos, ainda será possível gerá-lo. É importante que o cliente tenha o seu cadastro completo - endereço, contatos e documentos.

### Selecionar Cliente por Contas a Receber

1. Clique em Financeiro / Contas a Receber / Gerenciador de Boletos.
2. Clique em Menu e escolha a opção "Gerador de Boletos" ou utilize a tecla F11.
3. Vá em Menu e escolha a opção "**Selecionar Cliente por Conta a Receber**" ou tecle F5.
![Acessando Contas a Receber](boleto-cliente-conta-receber.png "Acessando Contas a Receber")

4. Selecione o Cliente e a conta correspondente.
![Selecionando a Conta](boleto-cliente-conta-receber-selecao.png "Selecionando a Conta")

5. Selecione e confirme o meio de pagamento "Boleto Bancário".

![Meio de Pagamento](boleto-cliente-conta-receber-meio-pagamento.png "Meio de Pagamento")

6. Selecione o cliente e a conta correspondente, utilizando a primeira coluna (entre colchetes). Nesta etapa também é possível selecionar vários documentos do mesmo cliente para emissão do boleto com o total das contas.
![Selecionando a(s) Conta(s) correspondentes](boleto-cliente-conta-receber-conta.png "Selecionando a(s) Conta(s) correspondentes")

7. Clique em Menu / Gerar Boletos ou pressione F10.

![Gerando o Boleto](boleto-gerar-boletos.png "Gerando o Boleto")

![Confirmação do Processo](boleto-lote-gerado.png "Confirmação do Processo")

! O(s) boleto(s) gerado(s) poderá(ão) ser visualizado(s) através da **Impressão pela Carteira de Cobrança**, **Impressão em 2ª Via** ou **Impressão através da Consulta de Boletos**. Acesse o tópico [**IMPRIMIR BOLETOS**](#imprimir-boletos) e veja o passo a passo.

<br>
### Listar Clientes por Contas a Receber

Nesta seção é possível gerar, ao mesmo tempo, boletos para todos os clientes selecionados que tenham contas pendentes.

1. Acesse Financeiro / Contas a Receber / Gerenciador de Boletos
2. Clique em Menu e vá em Gerador de Boletos (F11).
3. Clique em Menu e vá em Listar Clientes por Contas a Receber ou pressione F3.

![Listar os Clientes](boleto-listar-clientes-contas-receber.png "Listar os Clientes")

4. Selecione o meio de pagamento "Boleto Bancário".

![Meio de Pagamento](boleto-cliente-conta-receber-meio-pagamento.png "Meio de Pagamento")

5. Selecione os clientes e as contas a receber correspondentes. O sistema exibe, na barra de status, o número de boletos e o valor total de todas as contas selecionadas.

![Lista de Clientes](boleto-lista-clientes-1.png "Lista de Clientes")

6. Verifique as datas de vencimento e faça as alterações necessárias, clicando uma vez sobre a data antiga e digitando o dia correto.

![Alterando a data de vencimento](boleto-lista-clientes-2.png "Alterando a data de vencimento")

7. Clique em Menu / Gerar Boletos ou pressione F10.

![Confirmação do Processo](boleto-lote-gerado.png "Confirmação do Processo")

! O(s) boleto(s) gerado(s) poderá(ão) ser visualizado(s) através da **Impressão pela Carteira de Cobrança**, **Impressão em 2ª Via** ou **Impressão através da Consulta de Boletos**. Acesse o tópico [**IMPRIMIR BOLETOS**](#imprimir-boletos) e veja o passo a passo.

<br>
## Gerar Boletos - Contratos

O uso de contratos é muito útil quando a empresa possui serviços que são entregues aos clientes em intervalos fixos de tempo. Um exemplo seria um clube  recreativo, onde os clientes pagam mensalmente para usufruir das suas dependências. Nesta seção veremos como cadastrar os contratos e gerar os boletos respectivos.

### Cadastrar um Contrato

Para cadastrar um novo contrato vá até Financeiro / Contas a Receber / Contratos e Clique em Novo.

![Cadastrar Contratos](boleto-contrato-cadastro-1.png "Cadastrar Contratos")

<br>
**Contrato**

![Nome do Contrato](boleto-contrato-nome.png "Nome do Contrato")

|Campo|Função|
|-----|------|
|Código|Gerado automaticamente pelo sistema.|
|Nome|Informe o Nome para o Contrato de serviços.|

<br>
**Serviços do Contrato**

![Serviço(s) do Contrato](boleto-contrato-servicos.png "Serviço(s) do Contrato")

|Campo|Função|
|-----|------|
|Item|Código identificador do serviço no contrato. Gerado automaticamente.|
|Serviço|Nome do serviço que compõe o contrato. Clique sobre o campo e digite o nome do Serviço. Para adicionar um novo serviço, clique com o botão direito do mouse e escolha "Adicionar Serviço".|
|Plano de conta|Selecione o plano de conta do qual o serviço fará parte clicando com o botão direito do mouse e escolhendo "Alterar Plano de Contas".|
|Valor|Valor do Serviço. Para alterar, clique sobre o campo e digite o novo valor.|

<br>
**Clientes do Contrato**

![Cliente(s) do Contrato](boleto-contrato-clientes.png "Clientes do Contrato")

|Campo|Função|
|-----|------|
|Item|Identificador do cliente em relação ao contrato. Gerado automaticamente.|
|Nome|Nome de cada cliente que irá aderir ao contrato. Para selecionar um cliente, pressione espaço ou a tecla F2. O sistema irá solicitar a escolha de um meio de pagamento: escolha um meio de pagamento **Boleto Bancário**. Logo após, aparecerá a tela de pesquisa para a seleção do cliente.|
|Venc.|Dia do mês padrão para vencimento das mensalidades para cada cliente. Para alterar, clique sobre o campo e digite o novo dia.|
|Mensalidade|Valor da mensalidade. Para alterar o valor, basta clicar sobre ele e digitar.|
|Cobrança|Meio de pagamento escolhido no momento da pesquisa do cliente. Se for necessário alterar, pressione F3.|

<br>
### Listar Clientes por Contrato

Com este recurso, será possível acessar todos os clientes que fazem parte de um determinado contrato e imprimir os respectivos boletos da próxima mensalidade.

1. Acesse Financeiro / Contas a Receber / Gerenciador de Boletos.
2. Clique em Menu / Gerador de Boletos ou pressione F11.
3. Clique em Menu / **Listar Clientes por Contrato** ou pressione F4.

![Menu](boleto-listar-clientes-contrato.png "Menu")

4. Selecione o Contrato

![Seleção do Contrato](boleto-consulta-contratos.png "Seleção do Contrato")

5. Selecione os clientes do contrato para a geração dos boletos. Neste momento, ainda é possível alterar a data de vencimento de cada boleto. Basta clicar sobre a data e digitar o novo dia.

![Seleção dos Clientes](boleto-clientes-contrato.png "Seleção dos Clientes")

6. Clique em Menu / **Gerar Boletos** ou pressione F10. Neste momento, o sistema, além de gerar os boletos, também registra os documentos de contas a receber.

! O(s) boleto(s) gerado(s) poderá(ão) ser visualizado(s) através da **Impressão pela Carteira de Cobrança**, **Impressão em 2ª Via** ou **Impressão através da Consulta de Boletos**. Acesse o tópico [**IMPRIMIR BOLETOS**](#imprimir-boletos) e veja o passo a passo.

<br>
### Listar Clientes por Contrato por Contas a Receber

É utilizado quando for necessário gerar boletos para clientes que possuam outras contas na empresa, além dos contratos, já cadastrados.

1. Acesse Financeiro / Contas a Receber / Gerenciador de Boletos.
2. Clique em Menu / Gerador de Boletos ou pressione F11.
3. Clique em Menu / **Listar Clientes por Contrato por Contas a Receber** ou pressione F2.

![Menu](boleto-listar-clientes-contrato-contas-receber.png "Menu")

4. Selecione o Contrato

![Seleção do Contrato](boleto-consulta-contratos.png "Seleção do Contrato")

5. Selecione um ou mais clientes e as suas respectivas contas a receber. Lembrando que essas contas não fazem parte dos contratos e podem, portanto, ter vencimentos diferentes.

![Relação dos Clientes e suas Contas](boletos-contrato-contas-receber.png "Relação dos Clientes e suas Contas")

6. Clique em Menu / Gerar Boletos ou pressione F10.

! O(s) boleto(s) gerado(s) poderá(ão) ser visualizado(s) através da **Impressão pela Carteira de Cobrança**, **Impressão em 2ª Via** ou **Impressão através da Consulta de Boletos**. Acesse o tópico [**IMPRIMIR BOLETOS**](#imprimir-boletos) e veja o passo a passo.

<br>
## Imprimir Boletos

### Impressão através da Carteira de Cobrança

O recurso de impressão utilizando a Carteira de Cobrança, dá a possibilidade de impressão de um ou mais boletos que estejam vinculados à carteira selecionada.

1. Abra o Gerenciador de Boletos através do menu Financeiro / Contas a Receber / Gerenciador de Boletos.
2. Clique em Menu / Selecionar Carteira ou pressione F2.

![Selecão da Carteira](boleto-seleciona-carteira.png "Seleção da Carteira")

3. Selecione um ou mais boletos para impressão. Utilize a primeira coluna, contendo os colchetes, para a seleção.

![Seleção dos Boletos](boleto-selecao-titulos-carteira.png "Seleção dos Boletos")

4. Clique em Menu / Imprimir Boleto utilizando uma das opções disponíveis.

![Impressão dos títulos](boleto-impressao-titulos-carteira.png "Impressão dos títulos")

Ao final do processo, os boletos serão exibidos em PDF para impressão.
![Boletos em PDF](boletos-impressos.png "Boletos gerados em PDF")

<br>
### Impressão em Segunda Via

O sistema possui a opção de impressão de boletos em segunda via, permitindo gerar, a qualquer momento, a cópia de um boleto que já foi emitido ou impresso.

1. Abra o Gerenciador de Boletos através do menu Financeiro / Contas a Receber / Gerenciador de Boletos.
2. Clique em Menu / Imprimir Boleto (2ª Via) ou pressione F7 para ativar os formatos de impressão.

![Opção de 2ª Via](boleto-impressao-2-via-menu.png "Opção de 2ª Via")

3. Neste momento, já com as opções de impressão ativadas, escolha um formato mais adequado (formato padrão, carnê, fatura ou padrão entrega).

![Formato de Impressão](boleto-imprimir-boleto.png "Formato de Impressão")

4. Escolha o boleto desejado.

![Seleção do Boleto](boleto-2-via-consulta.png "Seleção do Boleto")
![Boleto Gerado](boleto-2-via-gerado.png "Boleto Gerado")

! Durante a consulta, é possível perceber cores diferentes para os boletos. Cada cor representa o estado atual do boleto: {c:green}verde (títulos impressos){/c}, {c:blue}azul (títulos emitidos){/c}, {c:red}vermelho (com arquivo de remessa processada){/c}, {c:grey}cinza (com arquivo de retorno processado){/c} e {c:grey}cinza (com baixa manual no sistema){/c}.

<br>
### Impressão através da Consulta de Boletos

Também é possível utilizar a seção [CONSULTAR BOLETOS](#consultar-boletos) para fazer a impressão desejada. 

1. Acesse Financeiro / Contas a Receber / Gerenciador de Boletos
2. Clique em Menu / Consulta de Boletos
3. Clique em Menu e escolha uma das quatro formas de consulta (Mostrar Todos, Mostrar por Número, Mostrar por Cliente, Mostrar por Emissão).

![Consultar Todos os Boletos](boleto-consulta-todos.png "Consultar Todos os Boletos")

4. Selecione o documento desejado, vá em Menu e escolha o formato de impressão mais adequado.

![Seleção do Boleto](boleto-impressao-consulta-selecao.png "Seleção do Boleto")

![Boleto em PDF](boleto-imprimir-consulta.png "Boleto em PDF")

! Para mais informações veja a seção [CONSULTAR BOLETOS](#consultar-boletos).

<br>
## Gerar Remessa

Através do arquivo de remessa é possível enviar todas as informações envolvendo os boletos gerados dentro de um período específico.
Após a geração do arquivo de remessa, o mesmo é enviado eletronicamente ao banco, que terá, então, conhecimento de todos os boletos pendentes.
<br>Há duas opções para a geração dos arquivos de remessa, o formato **CNAB240** ou **CNAB400**. Os formatos correspondentes foram estabelecidos pela Febraban e tem por objetivo padronizar e simplificar todo o método de cobrança através de boletos bancários.

A geração do arquivo de remessa está disponível em Financeiro / Contas a Receber / Gerenciador de Boletos.

1. Acesse Menu / Selecionar Carteira ou pressione F2 e escolha a carteira de cobrança correspondente.
2. Selecione todos os títulos emitidos que deverão ser enviados ao banco.
3. Vá em Menu e escolha a opção "Gerar Remessa CNAB240" ou "Gerar Remessa CNAB400".

![Gerar Remessa](boleto-gerar-remessa-menu.png "Gerar Remessa")

4. Escolha o local onde o arquivo será salvo.

!["Local do arquivo de remessa"](boleto-remessa-caminho-arquivo.png "Local do arquivo de remesssa")

5. Confirme o processo para gerar o arquivo.
!["Remessa de boletos gerada"](boleto-remessa-gerada.png "Remessa de boletos gerada")
!["Arquivo gerado"](boleto-remessa-arquivo-gerado.png "Arquivo gerado")

! O arquivo de remessa gerado é enviado para o gerenciador financeiro do banco correspondente.

<br>
## Desbloquear Remessa Gerada

O desbloqueio é realizado quando há necessidade de alterar ou excluir algum boleto que esteja no arquivo de remessa, considerando que este ainda não foi enviado ao banco.

1. Acesse Financeiro / Contas a Receber / Gerenciador de Boletos.
2. Acesse Menu / Desbloquear Remessa Gerada.
![Desbloquear Remessa](boleto-desbloquear-remessa-menu.png "Desbloquear Remessa")

3. Selecione a Remessa desejada e confirme o processo.
![Seleção da Remessa](boleto-remessa-selecao-desbloqueio.png "Seleção da Remessa")
![Confirmação do processo](boleto-remessa-confirmacao-desbloqueio.png "Confirmação do processo")

! Após selecionar a carteira de cobrança novamente, é possível visualizar os boletos na tela do gerenciador. 

! Para realizar alterações dos boletos será necessário excluí-los e gerá-los novamente após as correções desejadas. Depois de realizadas as alterações, gere a remessa e envie ao banco.

<br>

## Excluir Boletos

É possível excluir os boletos gerados pelo sistema e que ainda não foram enviados como remessa para o banco. Basta seguir alguns passos:

1. Acesse o Financeiro / Contas a Receber / Gerenciador de Boletos.
2. Clique em Menu / Excluir Boletos Gerados.

![Exclusão de Boletos](boleto-excluir-menu.png "Exclusão de Boletos")

3. Selecione o boleto correspondente.

![Seleção do Boleto para Exclusão](boleto-excluir-selecao.png "Seleção do Boleto para Exclusão")

4. Confirme a exclusão.

![Confirmação da Exclusão](boleto-excluir-confirmacao.png)
![Confirmação da Exclusão](boleto-excluir-confirmacao-2.png)

<br>

## Processar Retorno

Os arquivos de retorno, também padronizados pela Febraban, representam os lotes de recebimento e são fornecidos pelo banco. O processo de retorno facilita a tarefa de recebimento das contas no sistema, proporcionando mais agilidade e confiança.
1. Baixe o arquivo de retorno do gerenciador do banco e salve-o em uma pasta de fácil acesso.
2. Abra o Gerenciador de Boletos no sistema (Financeiro / Contas a Receber / Gerenciador de Boletos).
3. Acesse Menu / Processar Retorno ou pressione F10.

![Processar Retorno](boleto-processar-retorno-menu.png "Processar Retorno")

4. Na janela que se abre, selecione a Carteira de Cobrança correspondente.
5. Localize o arquivo de retorno, salvo anteriormente, e selecione-o.

![Localizando Arquivo de Retorno](boleto-retorno-localizacao-arquivo.png "Localizando Arquivo de Retorno")

6. Confirme a data do crédito na conta, ou seja, a data do recebimento.

![Data de Crédito](boleto-retorno-data-credito.png "Data de Crédito")

7. Após confirmação de data, será aberto o relatório contendo a lista de clientes do arquivo e seus respectivos boletos com a data da baixa no sistema.

![Relatório de Retornos](boleto-retorno-relatorio-retorno_.png "Relatório de Retornos")

<br>

## Consultar Boletos

Nesta seção é possível acessar todos os boletos gerados no sistema, independentemente do status de cada um deles. Acesse Menu / Consulta de Boletos e utilize uma das quatro opções disponíveis:

### Mostrar Todos

Exibe todos os boletos gerados, sejam eles emitidos, impressos ou processados como remessa ou retorno. <br>Basta clicar em Menu / Mostrar Todos ou pressionar a tecla **F2**.

![Consultar Todos os Boletos](boleto-consulta-todos.png "Consultar Todos os Boletos")

### Mostrar por Número

Para agilizar a consulta de um determinado boleto, é possível acessá-lo diretamente pelo número. <br>Clique em Menu / Mostrar por Número ou pressione **F3** e entre com o **Número do Documento** do boleto.

![Consulta por Número](boleto-consulta-numero.png "Consulta por Número")
![Consulta por Número](boleto-consulta-numero-2.png "Consulta por Número")

### Mostrar por Cliente

É possível consultar todos os boletos de um determinado cliente. <br>Acesse Menu / Mostrar Cliente ou pressione **F4** e selecione o cliente desejado.

![Consulta por Cliente](boleto-consulta-clientes.png "Consulta por Cliente")
![Consulta por Clientes](boleto-consulta-clientes-2.png "Consulta por Clientes")

### Mostrar por Emissão

Nesta opção é possível visualizar os boletos emitidos num determinado **período mensal**. <br>Acesse Menu / Mostrar por Emissão ou pressione **F5**.

![Consulta por Período](boleto-consulta-periodo.png "Consulta por Período")
![Consulta por Período](boleto-consulta-periodo-2.png "Consulta por Período")

<br>

### Consultar e Imprimir

Após utilizar qualquer uma das opções anteriores (no exemplo, foi utilizado a opção "Mostrar por Cliente"), é possível imprimir o boleto. Selecione o documento, clique em Menu e escolha o formato apropriado para impressão.

![Impressão de Boletos](boleto-consulta-impressao.png "Impressão de Boletos")
![Impressão de Boletos](boleto-consulta-impressao-2.png "Impressão de Boletos")

! Veja também a seção [Impressão através da Consulta de Boletos](#impresso-atravs-da-consulta-de-boletos)

<br>

### Consultar e Enviar por E-mail

Através desta seção, também é possível enviar o boleto diretamente para o e-mail do cliente, proporcionando mais agilidade e economia para a empresa.

1. Acesse o Gerenciador de Boletos (Financeiro / Contas a Receber / Gerenciador de Boletos).
2. Clique em Menu / Consulta de Boletos.
3. Clique em Menu e pesquise o boleto correspondente utilizando uma das quatro opções (Mostrar Todos, Mostrar por Número, Mostrar por Cliente ou Mostrar por Emissão).
4. Selecione o boleto, clique em Menu / Enviar Boleto, escolhendo um dos formatos disponíveis.

![Enviando o boleto por e-mail](boleto-consulta-enviar.png "Enviando o boleto por e-mail")

5. Após este processo o boleto estará disponível em PDF para o cliente.
![E-mail do cliente](boleto-consulta-envio-realizado.png "E-mail do cliente")

! Para utilizar este recurso é preciso que a empresa tenha o seu cadastro configurado corretamente, incluindo seus dados de e-mail. 
! Os dados do cliente precisam estar atualizados, principalmente seu endereço eletrônico.


<br>

## Relatórios

O módulo de boletos conta com relatórios específicos que auxiliam o processo de gerenciamento dos títulos. O recurso pode ser acessado em Financeiro / Contas a Receber / Gerenciador de Boletos, através do botão Menu / Relatórios ou pressionando a tecla F12.

![Acessando os Relatórios](boleto-relatorios-menu.png "Acessando os Relatórios")

<br>
Os **Relatórios** podem ser gerados por Carteira de Cobrança, por Contas a Receber ou por Retornos de Boletos. Diversos **Filtros** também podem ser utilizados para otimizar e facilitar a leitura dos dados gerados.

![Tela de Relatórios](boleto-tela-relatorios.png "Tela de Relatórios")

### Relatório de Boletos por Carteira de Cobrança

Através deste relatório, o usuário terá a relação dos boletos, emitidos ou impressos, separados por carteira de cobrança.

![Relatório por Carteira de Cobrança](boleto-relatorio-carteira.png "Relatório por Carteira de Cobrança")

### Relatório de Boletos por Contas a Receber

Apresenta todos os boletos emitidos detalhando as contas a receber vinculadas ao mesmo.

![Relatório por Contas a Receber](boleto-relatorio-contas-receber.png "Relatório por Contas a Receber")

### Relatório de Retornos de Boletos

Detalha os retornos de boletos por carteira de cobrança, apresentando nome do sacado, data de vencimento, data do retorno e data de baixa. Este relatório deve ser observado sempre que for feito um retorno e os valores comparados ao relatório de contas recebidas por meio de pagamento. Com estes dados é possível conferir se o valor do retorno foi igual ao das contas baixadas, pois pode acontecer de algum boleto não ter sido baixado automaticamente por alguns motivos: exclusão de boletos já enviados ao cliente, pagamento duplicado de boletos por parte do cliente e, também, em casos de renegociação.

![Relatório de Retornos](boleto-retorno-relatorio-retorno_.png "Relatório de Retornos")
