---
title: 'PROCESSO DE IMPLANTAÇÃO'
published: true
taxonomy:
    categoria:
        - Interno
anchors:
    active: true
menuright: true
tagtitle: h2
---

===

## OBJETIVOS
Orientar profissionais do setor comercial, suporte e revendas quanto aos processos que envolvem a implantação do sistema no cliente.

## ACR UM - DO PROJETO DE IMPLANTAÇÃO
1. O Projeto de Implantação é composto pelas informações captadas pelo setor comercial no CRM durante a prospecção, apresentação até o fechamento do contrato e estará acessível pelos profissionais do suporte para que seja alimentado pelos responsáveis pela implantação. 
1. Após a leitura do mesmo será avaliado a necessidade inicial do cliente. 

## ACR DOIS - DA INSTALAÇÃO DO SISTEMA
1. A constatação dos [REQUISITOS MÍNIMOS EXIGIDOS DO CLIENTE](https://ajuda.eagletecnologia.com/materiais/revenda/processos-internos/requisitos-minimos-exigidos-do-cliente) deve ser feita remotamente pelo setor de suporte, sendo previamente enviado pelo setor comercial ou administrativo;
1. A instalação do sistema deverá ser feita remotamente pelo setor de suporte;
1. A instalação do sistema deverá ser feita seguindo as orientações do [MANUAL TÉCNICO EAGLE GESTÃO](https://ajuda.eagletecnologia.com/links-ocultos/manual-tecnico-eagle-gestao);
1. O sistema principal será instalado em uma máquina chamada SERVIDOR;
1. Para ser acessado em rede o servidor deve ter o Firewall Ativado com exceção na porta 3050 para o Firebird;
1. Demais terminais devem ser configurado em rede em máquinas chamadas TERMINAL01, TERMINAL02 e assim sucessivamente.

!!!! **INSTALAÇÃO DO SISTEMA**<br>1) Executar o Install na versão em que estão configuradas todos os clientes, que será a versão mais nova liberada;<br>2) Conceder permissões nas pastas EAGLE e FIREBIRD no Disco;<br>3) Conceder permissões na chave Eagle no Registro do Windows;<br>4) Configurar os bancos de dados no Firebird usando ALIAS;<br>5) Configurar o sistema através do LocalConf;<br>6) Conceder permissão de execução das pastas EAGLE e FIREBIRD no antivírus instalado na máquina. Lembrando que o Avira não pode ser utilizado;<br>7) Ativar o Firewall do Windows com exceção na porta 3050;<br>8) Configurar Backup em Nuvem para armazenar os Backup do sistema;

!!!! **BANCO DE DADOS**<br>1) O cliente que for utilizar um banco de dados devera mante-lo como: “EAGLEERP”.<br>2) O Cliente que utilizar dois bancos, obrigatóriamento os mesmo devem estar no SERVIDOR com os nomes:<br>- “FISCAL”<br>- “FINANCEIRO”

## ACR DOIS - DO TREINAMENTO
1. O treinamento começa seguindo os passos e as necessidades apresentadas no projeto de implantação e tendo verificado as reais necessidades com a pessoa a ser treinada, é bom conversar com o cliente antes de começar o treinamento para ver a necessidade e ensinar a melhor forma de execução de uso do sistema;
1. Quando o cliente solicitar alguma implantação ou treinamento de módulo, antes de marcar com o cliente deve ser conferida juntamente com o Setor de Suporte a melhor data;
1. Após realizar um treinamento o técnico deve abrir a O.S colocando a quantidade de horas usadas, e também avisar o Setor Financeiro;
1. O setor financeiro é responsável por realizar a cobrança;
1. Os números horas podem variar dependendo do ramo de negócio da empresa;
1. Sendo implantado dois bancos de Dados, é bom implantar o FISCAL primeiro pois todos os cadastros são feitos nesse Banco e depois o FINANCEIRO que será sincronizado do Fiscal.

## ACR TRES - DO CRONOGRAMA
### Cronograma Eagle Gestão
|Atividade|Como Fazer|Quanto Tempo|
|---------|------|----------|-----|
|[Homologação da estrutura mínima](https://ajuda.eagletecnologia.com/materiais/revenda/processos-internos/requisitos-minimos-exigidos-do-cliente)|Verificar hardware, configurações, rede, estrutura etc|1h|
|[Instalação e Configuração do Sistema](https://ajuda.eagletecnologia.com/links-ocultos/manual-tecnico-eagle-gestao)|Instalação do sistema no servidor e terminais, configuração de servidor de banco de dados, exceção no firewall, permissões de usuários, backup|3h|
|[Configuração de Matriz e Filial](https://ajuda.eagletecnologia.com/materiais/revenda/processos-internos/arquitetura-matriz-e-filial)|Configurar Bancos de Origem e Destino, Sincronização de Cadastros, Permissões Matriz, Permissoes Filial|3h|
|[Treinamento em Cadastros](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-cadastros)|Cadastros de Clientes, Fornecedores, Funcionários, Grupos, Subgrupos, Localização, Produtos, Tributação, Referências, Relatórios|2h|
|[Treinamento Financeiro](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-financeiro)|Meios de Pagamento, Plano de Contas, Contas a Pagar, Projeção de Pagamentos, Pagamentos, Retiradas, Contas a Receber, Projeção de Recebimentos, Recebimentos, Baixa Parcial, Emissão de Recibos, Juros, Cheques, Fechamento de Caixa, Conciliação Bancária, Conciliação de Cartões, Relatórios|4h|
|[Treinamento em Estoque](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-estoque)|Entradas, Alteração de Preços, Etiquetas, Saídas, Estoque Mínimo, Transferências, Inventário de Estoque, Kardex, Curva ABC, Relatórios|2h|
|[Treinamento em Produção](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-estoque#composio-de-produtos)|Cadastro de Produtos Compostos, Composições Decomposições, Relatórios|2h|
|[Treinamento em Vendas e Faturamento](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-vendas-e-faturamento)|Operações, Tabelas de Preço, Orçamento, Venda Rápida, Faturamento, Busca Preço, Limite de Crédito, Inadimplentes, Cobrança, Comissionamento, Relatórios|2h|
|[Treinamento em Emissão de NF-e](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-nf-e)|Certificado Digital, Emissão, Cancelamento, Carta de Correção de NF-e, Relatórios|1h|
|[Treinamento em Emissão de CT-e](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-ct-e)|Certificado Digital,Emissão, Cancelamento, Carta de Correção de CT-e, Relatórios|1h|
|[Treinamento em Emissão de MDF-e](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-mdf-e)|Certificado Digital,Emissão, Cancelamento, Carta de Correção de MDF-e, Relatórios|1h|
|[Configuração e Treinamento Ordem de Serviço](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-servicos)|Configuração e Tipos, Subtipos, Cadastro de Serviços, Técnicos, Abertura, Edição, Fechamento, Faturamento, Relatórios|3h|
|[Configuração e Treinamento Boleto Bancário](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-boletos)|Configuração de Carteira de Cobrança, Emissão, Remessa, Retorno, Relatórios|2h|
|[Configuração e Treinamento SPED e Sintegra](https://ajuda.eagletecnologia.com/manuais/eagle-gestao/modulo-fiscal)|Tributação, Adequação Cadastral, Conferência de Notas de Entrada e Saídas, Geração do SPED Fiscal /PIS/COFINS, Sintegra|8h|


### Cronograma Eagle PDV
|Atividade|Como Fazer|Quanto Tempo|
|---------|------|----------|-----|
|[Instalação e Configuração do Sistema](https://ajuda.eagletecnologia.com/manuais/eagle-pdv/manual-operacional)|Tributação, Instalação do sistema, Sincronização, Cadastro de ECF, Alíquotas, Formas de Pagamento, Gaveta, Produtos Rejeitados, Backup|3h|
|[Treinamento em Vendas](https://ajuda.eagletecnologia.com/manuais/eagle-pdv/manual-operacional)|Abrindo o Sistema, Teclas de Função, Abertura de Turno, Consulta de Preço, Identificação do Cliente, Venda a Vista, Venda Parcelada, Cancelamento, Pré-Venda, Suprimento, Sangria, Fechamento de Turno, Redução Z, Menu Fiscal, Arquivos Fiscais, Relatórios|3h|

### Cronograma Eagle Falcon Força de Vendas
|Atividade|Como Fazer|Quanto Tempo|
|---------|------|----------|-----|
|Instalação e Configuração do Sistema|Vendedores, Rotas, Meios de Pagamento, Planos de Pagamento, Cadastro de Produtos, Instalação, Registro e Configuração do Sistema nos Smartphones, Operações de Pedido, Troca e Bonificação, Cliente não Cadastrado, Sincronização|3h|
|[Treinamento em Pedidos](https://ajuda.eagletecnologia.com/manuais/falcon-fv/manual-operacional)|Sincronização, Consultas, Pedidos, Crédito e Débito, Cliente não Cadastrado, Relatórios|3h|
|Treinamento em Faturamento|Sincronização, Corte de Produtos, Mesclagem de Orçamentos, Faturamento, Romaneio de Carga e Entrega, Relatórios|3h|

! Se for identificado alguma necessidade de personalização de relatórios deverá ser encaminhado ao suporte nível 3.

! As permissões de usuários devem ser bem planejadas para evitar que o cliente solicite suporte desnecessário.

! As operações a serem utilizadas nas operações de entrada, saída, venda e faturamento deve ser bem planejadas para evitar que o cliente solicite suporte desnecessário.

! Para o treinamento em boleto bancário a carteira deve estar previamente homologada para o banco a ser utilizado pelo cliente.

## ACR TRES - POS-IMPLANTAÇÃO
Durante o período entre 2 a 3 meses é bom fazer um acompanhamento periódico com o cliente sobre a usabilidade, dar tarefas para que o cliente use o sistema efetivamente e tenha resultado, o acompanhamento é muito importante para que se mantenha a usabilidade, tarefas como: **Fechamento de caixa, conferencia de relatórios diários**, são de suma importância para o resultado final e sucesso do cliente.