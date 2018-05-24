---
title: 'Instalar e configurar impressoras não fiscais'
anchors:
    active: true
menuright: true
tagtitle: h2
---

## Introdução

Uma impressora não fiscal não possui memória fiscal da impressora e nem o lacre, pois seu uso não precisa ser fiscalizado. O tipo de conexão para ambas pode ser USB ou serial e o tipo de impressão que mais é utilizado é a impressão térmica.

## Instalando Drivers

Para iniciar a configuração de uma impressora não fiscal entre no **Painel de Controle** e clique em **Dispositivos e Impressoras**.

![Painel de Controle do Windows 7](instalacao-impressora-nao-fiscal-painel-controle.png "Painel de Controle do Windows 7")

Na tela de **Dispositivos e Impressoras** clique em **Adicionar uma Impressora**.

![Dispositivos e Impressoras](instalacao-impressora-nao-fiscal-adicionar.png "Dispositivos e Impressoras")

Selecione a opção **Adicionar um Impressora Local**.

![Tipo de impressora](instalacao-impressora-nao-fiscal-adicionar-impressora-local.png "Tipo de impressora")

Selecione a opção **Usar porta Existente** e a porta onde a impressora não fiscal foi reconhecida pelo sistema operacional. Neste exemplo estamos instalando a impressora na porta COM1.

![Escolher uma porta de impressora](instalacao-impressora-nao-fiscal-porta.png "Escolher uma porta de impressora")

Selecione o Fabricante **Generic** e a Impressora **Generic Text Only**. Clique em **Avançar**.

![Instalar o Driver da Impressora](instalacao-impressora-nao-fiscal-generic.png "Instalar o Driver da Impressora")

Por padrão recomendamos que o nome da impressora instalada seja **Cupom**. Clique em **Avançar**.

![Digitar o nome de uma impressora](instalacao-impressora-nao-fiscal-cupom.png "Digitar o nome de uma impressora")

Para que outros usuários possam localizar e utilizar a impressora selecione a opção **Compartilhar** e mantenha o nome de compartilhamento sugerido. Clique em **Avançar**.

![Compartilhamento de Impressora](instalacao-impressora-nao-fiscal-compartilhar.png "Compartilhamento de Impressora")

Clique em **Concluir** e se desejar imprima uma página de testes.

![Impressora Adicionada](instalacao-impressora-nao-fiscal-concluir.png "Impressora Adicionada")

Após adicionada a impressora acesse **Preferências de Impressão**.

![Preferências de Impressão](instalacao-impressora-nao-fiscal-preferencias.png "Preferências de Impressão")

Clique em **Avançado**.

![Opções Avançadas](instalacao-impressora-nao-fiscal-avancado.png "Opções Avançadas")

Selecione a opção **Ledger** referente ao **Tamanho do Papel** e clique em **OK**.

![Tamanho do Papel](instalacao-impressora-nao-fiscal-ledger.png "Tamanho do Papel")

Acesse as **Propriedades da Imrpessora** para que seja realizada mais uma configuração.

![Propriedades da Impressora](instalacao-impressora-nao-fiscal-propriedade.png "Propriedades da Impressora")

Na Aba **Comandos da Impressora** adicione o comando **<1B>C<01>** no campo **Iniciar trabalho de impressão**.

![Comandos de Impressora](instalacao-impressora-nao-fiscal-comandos.png "Comandos de Impressora")

!!!! Impressora instalada com sucesso.