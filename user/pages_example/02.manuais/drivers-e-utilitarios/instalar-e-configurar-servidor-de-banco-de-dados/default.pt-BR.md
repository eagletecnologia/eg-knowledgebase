---
title: 'Instalar e Configurar Servidor de Banco de Dados'
anchors:
    active: true
menuright: true
tagtitle: h2
---

## Introdução

Firebird é um sistema gerenciador de banco de dados (SGDB) com suporte a sistemas com centenas de usuários simultâneos e bases de dados com centenas de gigabytes. Há suporte gratuito na Internet através de vários sites. O Firebird tem a maior base de usuários no Brasil, Rússia e Europa.

## Instalando o Firebird

Para iniciar a instalação do Firebird 2.5.2.26540 execute o instalador, selecione o idioma Português(Portugal) e clique em OK.

![Idioma](instalacao-firebird-idioma.png "Idioma")

! Recomendamos utilizar a versão 2.5 ou superior.

!  A instalação deve ser feita na máquina servidor do banco de dados.

A tela do assistente de instalação do Firebird será exibida. Clique em **Seguinte** para prosseguir com a instalação.

![Bem vindo](instalacao-firebird-bem-vindo.png "Bem vindo")

Na tela seguinte, selecione a opção, **Aceito o contrato** e em seguida clique em **Seguinte**.

!["Aceite de contrato"](instalacao-firebird-aceite.png "Aceite de contrato")

Clique em **Seguinte**.

![Instalação](instalacao-firebird-instalacao.png "Instalação")

Clique em **Seguinte** sem alterar o diretório padrão de instalação.

![Diretório de instalação](instalacao-firebird-diretorio.png "Diretório de instalação")

!! Recomendamos não alterar o diretório de instalação

Clique em **Seguinte** mantendo as opções sugeridas pelo instalador.

![Componentes](instalacao-firebird-componentes.png "Componentes")

Clique em **Seguinte**.

![Menu iniciar](instalacao-firebird-menu-iniciar.png "Menu iniciar")

Após confirmar se TODAS as opções estão marcadas conforme na tela a seguir clique em **Seguinte** e **Instalar**.

![Instalar](instalacao-firebird-instalar.png "Instalar")

Aguarde a instalação.

![Aguarde](instalacao-firebird-aguarde.png "Aguarde")

Clique em **Concluir**.

![Concluir](instalacao-firebird-concluir.png "Concluir")

!!!! Se tudo ocorreu bem, o Firebird estará instalado e rodando no seu computador. 

## Criando Alias
Um passo muito importante após a instalação do servidor de banco de dados Firebird é a criação de um alias para os bancos de dados de nossas soluções. O Alias é uma maneira de facilitar a configuração do sistema com o banco de dados eliminando assim a necessidade de conhecer todo o caminho físico até o arquivo de banco de dados. 

O caminho físico do banco de dados não fica mais visível na aplicação cliente, e ainda permite maior flexibilidade para alteração física do banco de dados da aplicação quando necessário, sendo que utilizando alias só precisamos especificar o novo caminho do banco de dados na definição do alias sem a necessidade de alterarmos todas as configurações dos terminais.

Para configurar alias para bancos de dados no Firebird abra o arquivo aliases.conf no servidor com um editor de arquivo texto de sua preferência na pasta de instalação do Firebird.

![Abrindo arquivo de Alias](instalacao-firebird-abrindo-alias.png "Abrindo arquivo de Alias")

Se é a primeira vez que o Firebird está sendo instalado a seguinte estrutura será apresentada:

![Estrutura do arquivo alias](instalacao-firebird-estrutura-alias.png "Estrutura do arquivo alias")

|Campo|Função|
|-----|------|
|Alias|Representa o apelido para o banco de dados a ser configurado|
|Caminho|Representa o caminho completo do arquivo de banco de dados|

! As informações contidas nas primeiras 8 (oito) linhas do arquivo são comentários porque cada linha começa com o caractere # (cerquilha).

Para configurar um novo alias acrescente uma linha em branco no arquivo e informe o Alias = Caminho como no exemplo a seguir:

![Configuração do arquivo de alias](instalacao-firebird-configuracao-alias.png "Configuração do arquivo de alias")

|Campo|Função|
|-----|------|
|EAGLEERP|Alias para o banco de dados do Eagle Gestão|
|C:\Program Files (x86)\Eagle\Eagle Gestao\data\EAGLEERP.FDB|Caminho do banco de dados do Eagle Gestão no servidor|

Quando houver mais de um banco de dados no mesmo servidor, cada um deve ser informado individualmente no arquivo de configuração conforme demonstra a figura abaixo:

![Configuração de 2 alias](instalacao-firebird-configuracao-2-alias.png "Configuração de 2 alias")

|Alias|Mapeamento|
|-----|------|
|1|Alias para o arquivo de banco de dados do Eagle Gestão|
|2|Alias para o arquivo de banco de dados do Eagle PDV|

!!!! Utilizando alias em nosso banco de dados nós fazemos com que nossa aplicação cliente faça referência ao alias para conectar ao banco de dados, não sendo mais necessário armazenar o caminho completo do arquivo de banco de dados.

## Liberando Porta no Firewall

Para que seja possível o acesso ao Firebird instalado no servidor de outros computadores sem que o Firewall do Windows esteja desativado, a porta de comunicação TCP do Firebird deve ser configurada para acesso remoto.

Para iniciar a configuração acesse o **Firewall do Windows** no Painel de Controle.

![Painel de Controle](instalacao-firebird-painel-controle.png "Painel de Controle")

Dentro do Painel de Controle clique em **Configurações Avançadas**.

![Firewall do Windows](instalacao-firebird-firewall.png "Firewall do Windows")

Após ser exibida a tela de Segurança Avançada selecione a opção **Regras de Segurança e Conexão** e clique em **Nova Regra**.

![Regras de Segurança e Conexão](instalacao-firebird-firewall-regras.png "Regras de Segurança e Conexão")

No assistente de Nova Regra de Segurança de Conexão selecione o tipo de regra **Personalizado** e logo em seguida **Protocolos e Portas**.

![Nova Regra de Segurança de Conexão](instalacao-firebird-firewall-nova-regra.png "Nova Regra de Segurança de Conexão")

Na tela protocolos e portas deverão ser inseridas as informações conforme ilustra a imagem. Clique em **Avançar**.

![Especifique o protocolo e as portas a que a regra se aplica.](instalacao-firebird-firewall-configuracao.png "Especifique o protocolo e as portas a que a regra se aplica.")

Verifique se todas as opções estão marcadas e clique em **Avançar**.

![Especificar os perfis aos quais essa regra se aplica](instalacao-firebird-firewall-opcoes.png "Especificar os perfis aos quais essa regra se aplica")

Especifique o nome e a descrição desta regra para Firebird e clique em **Concluir**.

![Especificar o nome e a descrição desta regra](instalacao-firebird-firewall-especificar-nome.png "Especificar o nome e a descrição desta regra")

!!!! Regra criada.

![Regra criada](instalacao-firebird-firewall-regra-criada.png "Regra criada")

Ainda nas Configurações Avançadas no Firewall selecione a opção **Regras de Entrada** e clique em **Nova Regra**.

![Nova regra de entrada](instalacao-firebird-firewall-nova-regra-entrada.png "Nova regra de entrada")

Na tela de **Tipo de regra** selecione a **Porta** e clique em **Avançar**.

![Tipo de regra](instalacao-firebird-firewall-tipo-regra-avancar.png "Tipo de regra")

Em seguida marque a opção **TCP** e selecione a opção **Portas locais específicas** informando a porta 3050. Clique em **Avançar**.

![Configuração da porta 3050](instalacao-firebird-firewall-tipo-regra-tcp-3050.png "Configuração da porta 3050")

Marque a opção **Permitir Conexão** e clique em **Avançar**.

![Permitir conexão](instalacao-firebird-firewall-tipo-regra-permitir.png "Permitir conexão")

Verifique se todas as opções estão marcadas e clique em **Avançar**.

![Especificar os perfis aos quais essa regra se aplica](instalacao-firebird-firewall-opcoes.png "Especificar os perfis aos quais essa regra se aplica")

Especifique o nome e a descrição desta regra para Firebird e clique em **Concluir**.

![Especificar o nome e a descrição desta regra](instalacao-firebird-firewall-especificar-nome.png "Especificar o nome e a descrição desta regra")

!!!! Agora os terminais poderão acessar o banco de dados do servidor sem que o Firewall esteja desativado.

! Por questões de segurança, recomendamos que o Firewall do Windows esteja sempre habilitado e o software antivírus atualizado.