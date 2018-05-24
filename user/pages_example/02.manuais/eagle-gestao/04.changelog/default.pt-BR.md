---
title: Changelog
taxonomy:
    categoria:
        - Manuais
    tag:
        - Releases
        - Changelog
anchors:
    active: true
menuright: true
tagtitle: h2
---

===
#### Legenda

1. [](#new)
    * Novo recurso implementado
1. [](#improved)
    * Melhoria de recurso existente
1. [](#bugfix)
    * Erro que foi encontrado e corrigido

---
## v2018.003.4
### 16/05/2018
1. [](#bugfix)
    * Corrigida a violação de memória apresentada ao finalizar uma Ordem de Serviço.
    * Resolvida situação que retornava mensagem de saldo igual a zero ao baixar contas vinculadas a cheque.
    * Corrigida a geração do Sped Fiscal com inventário.
1. [](#improved)
	* Alterada regra para desabilitar cobrança em operação de devolução ou ajuste.

## v2018.003.3
### 25/04/2018
1. [](#improved)
    * Atualizado o Tipo Fiscal no Cadastro de Meios de Pagamento para inclusão da opção 15 - Boleto Bancário.

## v2018.003.2
### 19/04/2018
1. [](#improved)
    *  Desbloqueados os campos das abas Totais e Produtos para NF-e Complementar.

## v2018.003.1
### 12/04/2018
1. [](#improved)
    *  Modificada a forma de cobrança de juros no boleto bancário.
    *  Incluído hint (descrição) nos campos da aba totais e do detalhamento de itens nas telas de entradas e saídas.
    *  Modificada a importação de cupons do DJPDV para incluir a hora de saída.
1. [](#bugfix)
    * Excluído o cálculo do DIFAL nas NF-es de saídas para vendas a consumidor normal.

## v2018.003
### 20/03/2018
1. [](#new)
    * Criada na tela de recebimento de contas a função para mostrar todos os orçamentos vinculados a contas a receber.
    * Criada configuração para permitir cadastro de Grupo e Subgrupo com nomes iguais.
    * Criado o Relatório de Clientes que não Compraram por Período.
    * Criado o Relatório de Controle Resumido de Clientes.
1. [](#improved)
    * Alterada a legenda de cores nas telas de pesquisa de produtos.
    * Incluído campo de data de demissão no cadastro de funcionários.
    * Incluído o NCM 000.00.00 - Mercadoria ou Outra Operação Não Classificada Segundo a Tabela da NCM.
    * Atualizada a tabela de NCM com base na tabela disponível no site do MDIC (Ministério da Indústria, Comércio Exterior e Serviços).
    * Tratada a mensagem de falha ao enviar e-mail.
    * Alterada a forma de classificação de produtos. Os produtos agora possuem um Tipo Comercial e um Tipo Fiscal.
    * Inserida a validação na tela de saídas para o calcular a primeira parcela e o intervalo entre parcelas conforme configurado no meio de pagamento.
    * Incluído os campos PERC. DEVOL. (Percentual do Produto Devolvido) e VLR IPI DEVOL. (Valor do IPI Devolvido) para serem usados em NF-es de devolução quando houver devolução de IPI.
    * Alterado o relatório de Raking de Produtos (Curva ABC) para totalizar a classe de acordo com o agrupamento.
    * Alterado o relatório de Movimentação de Produtos por CST de PIS/Cofins para incluir os dados do módulo de CT-e.
    * Incluído filtro de plano de contas nos relatórios: Controle Analítico de Clientes, Controle Sintético de Clientes, Controle Analítico de Clientes Resumido.
1. [](#bugfix)
    * Corrigido o comportamento das funções Imprimir Orçamento e Reimprimir Orçamento da tela de Venda Rápida, padronizando-as com o que acontece na tela de Orçamentos.
    * Corrigido arredondamento gerado ao faturar orçamento.

## v2018.002.1
### 19/03/2018

1. [](#new)
    * Criada configuração para permitir cadastrar componentes e fazer composição e decomposição com quantidade e custo zerados.
1. [](#improved)
    * Alterado relatório de Tributação de Produtos por Estado (ICMS/IPI) para buscar as informações de FCP do cadastro de produtos.
    * Implementada a sincronização do Cadastro de Fabricantes.
    * Incluída a opção de marcar um fornecedor como fabricante.
    * Implementada a sincronização de FCP (Fundo de Combate a Pobreza).
1. [](#bugfix)
    * Corrigido o agrupamento do Relatório de Apuração de PIS/Cofins para não repetir o tipo de movimentação.
    * Corrigido o carregamento da referência na aba de componentes no cadastro de produtos.

## v2018.002
### 05/03/2018

1. [](#new)
    * Criada opções para a configuração do certificado digital.
    * Incluída a opção de referenciar nota fiscal modelo 02, possibilitando referenciar este modelo de documento no Grupo Documentos Fiscais Referenciados da NF-e.
    * Criada o Cadastro de Fabricantes e campo para informá-lo no cadastro de produtos.
    * Criado o relatório de Controle de Vale-crédito.
    * Implementado as regras para venda de produtos produzidos em escala não relevante.
    * Criado Relatórios de Fabricantes.
    * Criado relatório mensal de vendas por produto, com opções de ordenação por código, produto, quantidade, venda bruta, venda líquida e lucro.
    * Criado Relatório de Comissão por Meio de Pagamento.
    * Criado Relatório de Comissão por Recebimento por Meio de Pagamento.
1. [](#improved)
    * Alterado o cadastro do meio de pagamento e a geração da cobrança de uma NF-e.
    * Padronização da tela de Decomposição conforme a tela de Composição.
    * Alterada a precisão do campo quantidade para 5 casas decimais nas telas de entradas, saídas, orçamentos, composição e decomposição.
    * Atualizado o cadastro de CFOP incluindo os novos CFOP's disponibilizados pela SEFAZ.
    * Implementada a comunicação com servidor para emissão da NF-e no ambiente 4.00
    * Atualizada as opções de indicador de presença do consumidor incluindo a opção **5 - Operação presencial, fora do estabelecimento**.
    * Atualizada as modalidades de frete da NF-e.
    * Criado campo para informar o código da Anvisa no cadastro de produtos.
    * Criada configuração para determinar a informação do Grupo Veículos de Transporte e Reboque na NF-e.
    * Padronizada a opção de detalhamento de transportes nas telas de entradas, saídas, orçamentos e faturamento.
    * Incluída a validação para não permitir informar o Grupo Informações de Pagamento nas notas de Ajuste e Devolução.
    * Incluída a validação para obrigar o preenchimento do Grupo Duplicata quando informado Duplicata Mercantil como Forma de Pagamento da NF-e.
    * Alterado o tamanho e disposição dos campos  das telas de entradas e saídas.
    * Criada configuração para definir se os dados de fornecedores devem ser atualizados ao importar o XML.
    * Alterada mensagem mostrada quando não existem dados para exibir em um relatório.
    * Criado campo para a informação do FCP no cadastro de produtos.
    * Incluída a aba de Derivados de Petróleo, no Cadastro de Produtos, para que possam ser informados os dados referentes a ANP.
1. [](#bugfix)
    * Tratamento da mensagem retornada quando não existem dados para serem exibidos nos relatórios.
    * Corrigido o cálculo de DIFAL na tela de orçamentos.

## v2018.001.1
### 26/01/2018

1. [](#improved)
    * Incluída a obrigatoriedade de preenchimento dos campos Natureza da Conta e Tipo de conta no Cadastro de Plano de Contas.
    * Alterada a nomenclatura do campo referente a classificação da conta como: Contas Fixas, Contas Variáveis ou Investimentos para Categoria da Conta, na tela de Cadastro de Plano de Contas. 
    * Alterada a pesquisa de produtos na tela de entrada para listar o preço de custo.
    * Implementado o envio de Redução Z zerada para o Sintegra.
1. [](#bugfix)
    * Corrigida a geração da etiqueta de gôndola da impressora Zebra modelo ZPLII.
    * Corrigido o rateio de multa, juros, acréscimos e descontos no recebimento e pagamento parcial.
    * Corrigido o envio de base de cálculo de CT-es para o Sped Contribuições.
    * Corrigido envio do CST de PIS/Cofins para o Sped Contribuições.
    * Corrigido o uso de operações sem cobrança na tela de orçamentos.
    
## v2018.001
### 19/01/2018

1. [](#new)
    * Criado o relatório Operações com Cartão de Crédito, que mostra os dados do Registro 1600 do Sped Fiscal.
    * Incluído aplicativo MultiDB na pasta de instalação do Eagle Gestão.
    * Criado relatórios de Tributação de Produtos (ICMS/IPI) e Tributação de Produtos (PIS/COFINS).
    * Incluído relatório detalhado de contas pagas.
    * Criado aplicativo para executar scripts.
1. [](#improved)
    * Criado campo Inativo no cadastro de Famílias.
    * Inserida a tabela da ANP no sistema na aba de Tributação --> Geral no Cadastro de Produtos.
    * Padronizada a tela de tributação por UF com a aba de Tributação --> ICMS do Cadastro de Produtos.
    * Atualizada a tabela do IBTT para 18.1a.
    * Atualizado os modelos de documentos conforme a Tabela de Documentos Fiscais do ICMS.
    * Padronizado o tamanho dos campos de detalhamento de transporte nas telas de Orçamentos, Faturamento, Entradas e Saídas.
    * Padronizada a formatação dos campos nos relatórios de Serviços.
    * Padronizado os filtros dos relatórios de Entradas e Saídas.
    * Incluído filtro de CEST no relatório de Código Especificardo da Substituição Tributária.
    * Alterada a descrição dos campos referentes ao Validador Sped Fiscal e Sped Sped PIS/COFINS no LocalConf. 
    * Feito o tratamento da mensagem de restrição de cadastro de usuários com o mesmo nome.
    * Inserida mensagem de confirmação durante a tentativa de criar um banco de dados já existente com o aplicaitvo MultiDB.
    * Incluído os campos documento fiscal, modelo e série nos relatórios de Contas Pagas por Fornecedor e Contas Recebidas por Clientes.
    * Alterado o relatório de Romaneio de Carga para totalizar o valor dos itens.
1. [](#bugfix)
    * Corrigida a grafia da palavra CONSUMO no cadastro de operações.
    * Inserida quantidade máxima de 18 caracteres para o campo RG no cadastro de pessoas.
    * Bloqueada a seleção de tipo de clientes inativos.
    * Corrigida a inserção de itens na tela de Tributação por UF.
    * Corrigida a totalização de clientes no Relatório de Clientes para Contato.
    * Alterada a impressão de promissória para que seja considerado o saldo devedor do cliente. 
    * Corrigida a funcionalidade de teste de conexão com o LocalConf.
    * Melhorado o processamento para o cadastro de Tributação por UF.
    * Implementada a importação de valores de desoneração de ICMS.
    * Incluído valores de desoneração de ICMS na geração do SPED Fiscal.
    * Implementada a sincronização de localização.
    * Corrigida a exibição de logo personalizado nos relatórios acessado através dos menus e que contém mais de uma página.
    * Corrigida a duplicação de dados nos reltórios de clientes quando existe mais de um tipo de cliente vinculado ao mesmo cliente.
    * Incluída Redução Z zerada na geração do Sintegra.

## v2017.007.2
### 08/01/2018

1. [](#improved)
    * Alterado o Relatório de Produtos com CEST para que liste todos os produtos com CEST cadastrado.
    * Implementado a geração de boletos para o Banco Santander.
    * Alterado o layout do Sped Fiscal para 12.
    * Alterado geração dos registros D100 e D101 do Sped Fiscal. 
1. [](#bugfix)
    * Corrigida a importação de XML's que possuem dados de veículos novos.
    * Corrigido processo de cadastro de produtos ao importar XML.
    * Modificado registro 1600 para bloquear o lançamento de valores negativos.
    * Corrigido o carregamento dos Planos de Contas cadastrados.
    * Corrigir o carregamento da tabela de preço durante a navegação entre orçamentos.

## v2017.007.1
### 22/12/2017

1. [](#new)
    * Implementada a restrição de instalação do Eagle Gestão em sistemas operacionais inferiores ao Windows 7.
    * Alterado o processo de geração do Sped Fiscal e Contribuições para inclusão de CT-e OS (modelo 67) para documentos de entrada.
    * Incluída opção para que o usuário possa nomear os arquivos de remessa no Gerenciador de Boletos. 
1. [](#improved)
    * Alterado o processo de consulta de NF-e para evitar a inserção de campos incorretos em notas fiscais.
    * Refatoração da aba Seguros no MDF-e para obrigar informar os dados do seguro quando tipo de emitente do MDF-e for TRANSPORTAORA ou TRANSPORTADORA DE CT-E GLOBALIZADO.
    * Incluída a validação para solicitar o remetente e o destinatário quando o tipo de serviço do CT-e for diferente de Redespacho Intermediário.
    * Removido os antigos menus de geração do Sped Fiscal e Sped PIS/COFINS.
    * Padronizado o tamanho dos campos para a geração do Sintegra.
    * Refatorado o procedimento de cadastro de fornecedores e clientes ao importar XML, para informar corretamente os dados da aba Fiscal.
    * Alterada a validação de desconto máximo na tela de Orçamentos, para verificar se o desconto inserido no orçamento é maior que o definido no cadastro do meio de pagamento. A validação passou a ser feita por meio de pagamento.
1. [](#bugfix)
    * Refatoração do gerenciador de MDF-e para que as opções: Consultar na SEFAZ, Exportar XML, Imprimir DAMDFe e  Imprimir DAMDFe, fiquem ativas quando o MDF-e possuir documentos zerados. 
    * Corrigido o processo de cadastro de produtos que possuem referências já cadastradas ao importar XML.
    * Corrigido comportamento na tela de vendas rápida ao inserir código de balança.
    * Corrigida a geração do Sped Fiscal para o Perfil A, incluindo os registros C460 e C470.
 
## v2017.007
### 11/12/2017

1. [](#new)
    * Criado o Livro de Inventário de PIS/COFINS.
    * Criado no módulo de Serviços o relatório de Comissão de Serviços por Recebimento.
1. [](#improved)
    * Alterada fórmula para cálculo da média de atraso no relatório de Etiqueta de Endereço no módulo de Clientes.
    * Criado campo na pesquisa da tela de saídas para mostrar o CCF dos cupons fiscais.
    * Removido filtro de localização dos relatórios: Relatório de Produtos Faltantes, Tabela de Preço por Rota, Ficha KARDEX Detalhada, Tabela de Preços por Marcas, Produtos X Similares, Produtos Compostos e Relatório de Produtos com CEST.
    * Alterado o filtro do relatório de Comissão por Serviços Prestados. O filtro de data de recebimento foi trocado por data de encerramento, uma vez que o relatório não é gerado apenas com base nos serviços recebidos
    * Ajustados os procedimentos do DJPDV para comunicar com Eagle Gestão.
    * Implementada a melhoria na geração de relatórios Fiscais e Contabéis.
1. [](#bugfix)
    * Alterado procedimento de geração do Sintegra e Sped para que busque os dados de acordo com a data de entrada e no caso de saídas considere a data de emissão.
    * Tratada a duplicação de itens nos relatórios de produtos quando o produto possui mais de uma localização cadastrada.
    * Tratada a duplicação de registros no Controle Analítico de Clientes quando o retorno de boletos é processado mais de uma vez.

## v2017.005.3
### 01/12/2017

1. [](#new)
    * Criado o Relatório de Idade de Clientes no módulo de Clientes. Por padrão está inativo, deve ser habilitado no cadastro de empresa caso haja necessidade.
    * Criado Relatório de Titular X Dependentes no módulo de Clientes. Por padrão está inativo, deve ser habilitado no cadastro de empresa caso haja necessidade.
    * Criado o Relatório de Emissão do Último Boleto no módulo de Contas a Receber. Por padrão está inativo, deve ser habilitado no cadastro de empresa caso haja necessidade.
    * Criado o Relatório de Previsão de Recebimento no módulo de Contas a Receber.
1. [](#improved)
    * Alterado o Relatório de Retorno de Boletos, foi adicionada uma coluna para mostrar o número do documento e a parcela correspondente.
    * Refatoração do procedimento de gerar orçamento ao finalizar uma O.S. para gravar os dados do cabeçalho da cobrança.
1. [](#bugfix)
    * Refatoração do procedimento de rateio de juros, multas, acréscimos e descontos na tela de recebimento de contas.
    * Alterado o carregamento dos campos da aba veículo no cadastro de produtos.
    * Corrigida a exibição do total do Relatório de Contas a Receber detalhado. 
    * Refatoração da tela de orçamentos para o uso de operações sem cobrança.
    * Corrigida a geração do registro 150 do Sped Fiscal.
    * Padronização da instalação do Eagle Mercearia e Eagle Emissor. 

## v2017.005.2
### 20/11/2017

1. [](#improved)
    * Alterado a geração do Sped Contribuições para gerar o registro 0500 e seus dependentes.  Foi feita a alteração do cadastro de Plano de Contas, foram criados os campos: Nível, Natureza da Conta, Tipo de Conta, Código Contabilidade, Código Referenciado, CNPJ Estabelecimento. Para utilizar o registro é necessário consultar a contabilidade. 
    * Alterado o relatório de Plano de contas para filtrar os vinculados a operações.
    * Alterado o endereço de consulta a NF-e na importação de documentos. Endereço alterado para http://www.nfe.fazenda.gov.br/portal/consultaRecaptcha.aspx?tipoConsulta=completa&tipoConteudo=XbSeqxE8pl8=
    * Refatoração do procedimento de consulta de NF-e pela tela de saída resolvendo a validação de chave de acesso não encontrada.
    * Alterada a exclusão de NF-e ou CT-e quando vinculado a um MDF-e. Não poderá excluir NF-e e CT-e quando estiver vinculado a um MDF-e.
    * Alterado o procedimento de baixa de conta com parcial com desconto. O sistema não irá mais permitir que o cliente selecione contas que não serão recebidas. 
1. [](#bugfix)
    * Alterado o procedimento de compensação de cheque para salvar o histórico digitado.

## v2017.005.1
### 30/10/2017

1. [](#improved)
    * Alterado os ambientes do MDF-e e CT-e para a versão 3.00 caso ainda não tenha sido alterado.
    * Alterada a mensagem quando estiver gaveta configurada, mas a gaveta não estiver disponível.
    * Alterada a emissão de MDF-e para inserir o tipo do transportador na tela de lançamento do MDF-e.
    * Removido o campo data de entrega da tela de lançamento do CT-e 3.00 atendendo ao manual do contribuinte 3.00.
    * Alterado o CT-e para emissão de CT-e globalizado atendendo a legislação do CT-e 3.00.
    * Alterada a emissão do MDF-e, implementada a emissão de MDF-e para CT-e's globalizados. Atendendo a nota técnica 2017-003-1.
    * Alterado o MDF-e a aba STATUS foi transformada em MODAL e se tornou a primeira aba de MDF-e. Na aba foram inseridas as opções TIPO EMITENTE e TIPO TRANSPORTADOR, sendo o primeiro de preenchimento obrigatório e carregará com o valor padrão do cadastro de empresa. Já o segundo, por não ser obrigatório, virá vazio, cabendo ao usuário preenchê-lo, quando for o caso.  
    * Criada a aba CONTRATANTES no MDF-e para inserção dos múltiplos contratantes do serviço de transporte.
    * Alterado o cadastro de VEÍCULOS, foi criada a aba OUTRAS INFORMAÇÕES com opção para informar se veículo faz parte do projeto CANAL VERDE.
1. [](#bugfix)
    * Alterado tamanho do campo GRUPO_NOME na FV_EXPORTA_GRUPOS, os tamanhos estavam diferentes o que causava falhas quando o grupo possui nome muito grande. 

## v2017.005
### 20/10/2017

1. [](#new)
    * Implementado geração do registro 1600 no Sped Fiscal.
    * Criado a opção para imprimir etiquetas de vendas pela tela de faturamento e relatórios de orçamentos. 
    * Inserido o modelo de etiquetas adesivas de 65 etiquetas por folhas no módulo estoque opção etiquetas.
    * Criado o relatório de crédito em contas correntes agrupados por conta corrente e plano de contas.  
    * Criado o relatório de inutilização de numeração de documentos fiscais.
    * Criado o relatório de contas pagas por centro de custos.
1. [](#improved)
    * Alterado o relatório de contas a receber por clientes e de recebimento por cliente para exibir os dados do cadastro de pessoas.
    * Inserido no relatório de vendas por clientes o total de clientes presente no relatório. 
    * Removido o campo para selecionar produtos da tela de impressão de etiquetas, o campo era desnecessário uma vez que os itens são selecionados no grid.
1. [](#bugfix)
    * Alterado o título do relatório de contas a pagar Relatório de Lançamentos de Débito por Plano de Contas e Relatório de Lançamentos de Débito por Contas Correntes.
 
 
## v2017.004.6
### 05/10/2017

1. [](#improved)
	* Alteração do MDF-e para o registro do seguro da carga seguindo obrigatoriedade da SEFAZ.
	* Alterada a aba modal para informar o tomador (contratante) do transporte. 
 
## v2017.004.5
### 07/09/2017

1. [](#improved)
	* Alterada a tela de geração de boletos por contrato para permitir a seleção de vários itens e alteração dos valores de serviços.
2. [](#bugfix)
	* Corrigida a função vincular vendedor no itens na tela de orçamentos. 

## v2017.004.4
### 23/08/2017


2. [](#improved)
    * Inserida no sistema a função para sincronizar meios de pagamentos bloqueados no cadastro de pessoas. No recurso de sincronização matriz e filial não sincronizava os dados de pessoas referente a bloqueio de meio de pagamento para venda.
1. [](#bugfix)
    * Corrigido o comportamento do sistema alterar orçamento quando opção perguntar se quer faturar está ativa.
    * Alterado a pesquisa   Contas correntes não aparecem na aba Dados de Depósito no cadastro de cheques quando o código do banco do cheque é o mesmo da conta corrente.
    * Alterado o relatório de dados de admissão de funcionário, acrescentados os campos no Report.
    * Corrigido a tela do lançamento de CT-e. Sistema inseria total de NF-e quando MDF-e continha CT-e.

## v2017.004.3
### 02/08/2017

1. [](#improved)
    * Alterada a tela de pesquisa de serviços na Ordem de Serviços para ser ajustável os campos.
1. [](#bugfix)
    * Alterado a busca de contas correntes na aba Dados de Depósito no cadastro de cheques para buscar as contas quando o código do banco do cheque é o mesmo da conta corrente.
    * Alterado o cálculo do valor de FCP sendo calculado na saída para ser igual ao valor da base de ICMS.
    * Alterado o processo de cadastro de produtos por XML, o sistema vinculava itens quando ao cadastrar produtos já existe referência cadastrada.

## v2017.004.2
### 01/07/2017

1. [](#improved)
    * Tratada a inserção de dados no orçamento para não sair da ordem em que os itens foram digitados.
    * Alterado o DRE financeiro para mostrar os dados de lançamentos em contas correntes. Esses dados não aparecem no fluxo de caixa por não conter meio de pagamento, centro custo e cliente o que descaracteriza como fluxo de caixa.
    * Alterado a sincronização para não sincronizar número do documento, já que duas empresas tem sequência de documentos diferentes.
    * Atualizada a tabela do IBPT para a 17.2ª, lembrando que a tabela pode ser atualizada a qualquer momento de dentro do Eagle gestão.
    * Criado o procedimento para gerar o registro E250 no Sped Fiscal.
1. [](#bugfix)
    * Tratado a tela de recebimento e pagamento exceção no recebimento ou pagamento de contas.
    * Alterada a geração do Sped Contribuições para buscar os dados da saída e da entrada e não mais da operação. Essa mudança requer que CT-e's lançados na entrada e na saída tenham detalhamento do item.  
    * Alterado os relatórios de vendas para buscar as informações do financeiro da tabela de saídas. Esse procedimento permite que seja usado o filtro de meio de pagamento mesmo que a conta seja renegociada ou excluída.
    * Modificado a geração Registro C101 para documentos cancelados na geração do Sped Fiscal não enviar FCP.
    * Fatorado o Relatório financeiro 004 para mostrar contas e vendas quando os valores forem iguais.
    * Alterado fator de conversão para aceitar na última casa valor diferente de 1.
    * Validada a mensagem de documento duplicado na importação de saída.
    * Alterado o procedimento para mesclar orçamento mostrando para o usuário a mensagem correta quando orçamentos diferentes forem selecionados.
    * Alterado a geração do registro 75 para não enviar detalhamento de itens quando for notas de serviços, já que serviço não aparece no Sintegra.
    * Fatorado a venda rápida para corrigir as mensagens de restrição quando acontece concorrência de banco de dados. Com isso sempre que o usuário for impedido de fazer algum procedimento o sistema irá informar o que deve ser feito depois.
    * Corrigida a restrição que permitia após alterar a quantidade do item na venda não poder vender pelo código do produto no venda rápida.

## v2017.004.1
### 26/06/2017

1. [](#improved)
    * Melhorado o procedimento de instalação do sistema para evitar erros de permissão ao instalar.
    * Alterado o nome de campos na aba transporte na tela de entradas, saídas e orçamentos. Campo Numero de volumes foi transformado em Numeração conforme nota técnica da NFe.
    * Criada a validação do  CEP no cadastro da empresa e Contator.
    * Criado os campos Plano de Contas, Centro de Custo e Conta Corrente na tela de saídas e Orçamento para usar na Aba de cobrança e nos relatórios de vendas.
1. [](#bugfix)
    * Alterado procedimento de gravação dos itens nas telas de vendas para evitar erros na gravação dos dados.
    * Alterado o procedimento de busca dos planos de contas no lançamento do CIAP.
    * Alterado o valor da alíquota do FCP para o Rio de Janeiro para 2%, essas alíquotas podem ser mudadas caso o usuário verifique que no estado a alíquota é diferente.

## v2017.004
### 17/06/2017

1. [](#new)
    * Criado relatório de apuração de PIS COFINS.
    * Criado a função para duplicar Ordem de Serviços.
1. [](#improved)
    * Adicionado o código do grupo e subgrupo no relatório de produtos para contagem.
    * Alterado o foco paro o campo data da transferência ao clicar em novo em transferência de contas correntes.
    * Melhorado o processo de instalação do sistema informando as permissões ao instalar o sistema.
    * Alterado o domínio senha para permitir inserir 30 caracteres na senha do usuário.
    * Ao finalizar a ordem de serviços o sistema deve guardar o histórico de quem finalizou o atendimento.
    * Inserido o filtro de alíquota e produto nos relatórios fiscais 07 e 08.
    * Criado a validação para ao marcar operação como pré-venda o sistema não deve deixar ficar sem cobrança evitando erros na instalação do PDV.
    * Alterado o tamanho do campo histórico do relatório Movimento diário de caixa detalhado exiba mais que 50 caracteres.
    * Permitir selecionar a tabela de preço com ENTER nas telas de busca preço, venda rápida e orçamento.
1. [](#bugfix)
    * Alterado a venda rápida para aceitar Quantidade * Código.
    * Alterado a tabela de preço de código 1 para permitir alteração, caso o cliente não use tabela de preço deve ser bloqueado no perfil essa alteração.
    * Quando no cadastro existe algum espaço no início ou final de cadastro o SPED fiscal deve desconsiderar os espaços.
    * Alterado a sincronização de Matriz e Filial para sincronizar cadastro de produtos CEST e código de balança.
    * Tratado o cadastro de novas operações.
    * Alterado a telas de Estorno de Contas a pagar/receber, pois carregava os dados das contas a receber/pagar e correto é recebimento/pagamento.
    * Navegação da tela do orçamento foi padronizada.
    * Correção do relatório DRE que estava apresentando erro de Overflow.
    * Corrigido o campo valor total de boletos baixados no relatório de processamento de retornos.
    * Alterado o procedimento de geração do CT-e e Sintegra evitando erro ao gerar  quando existir CT-e pendente.
    * Tratada a mensagem de sincronização quando estoque do banco de destino está negativo.

