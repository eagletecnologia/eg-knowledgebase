---
title: 'ORDIRE - Site Expresso'
taxonomy:
    categoria:
        - Processos
    tag:
        - ordire
        - 'site expresso'
anchors:
    active: true
menuright: true
tagtitle: h2
---

> **FUNÇÃO** - Profissionais do setor de Websites

> **OBJETIVO PRINCIPAL** - Atingir as metas de qualidade nos processos de desenvolvimento de Site Expresso

## ACR UM – RECEBIMENTO DA AUTORIZAÇÃO DE FATURAMENTO

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Ao receber a autorização de faturamento, o colaborador deverá em até 24 horas enviar o formulário de dados do template para o cliente para prenchimento;
3. Com o formulário enviado, ligar para o cliente e explicar como ele deverá preencher os dados;
4. Criar a pasta no `STORAGE` com o nome do cliente em `/SITES EXPRESSO E PERSONALIZADO - PROJETOS/SITE EXPRESSO - ATIVO/`. Dentro da pasta do cliente crie um arquivo chamado `ACESSO.TXT`, este arquivo conterá todos os dados de acesso ao servidor de hospedagem, banco de dados, ftp, e-mail padrão entre outros;
5. Cadastrar os acessos no Cofre de Senhas LastPass do Setor.

## ACR DOIS – PREPARAR AMBIENTE DE DESENVOLVIMENTO

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Criar a pasta no Servidor Web (192.168.1.10), copiando a pasta padrão localizada em `/websites/_default` e colar em `/expresso/<ANO>/`. Esta pasta deverá ser renomeada com o nome do projeto tudo em minúsculo, sem caracteres especiais e `_` no lugar do espaço;
2. Copiar o pacote do template que será usado localizado em `/templates/<NOME_TEMA>/backup` para `/expresso/<ANO>/<NOME_PROJETO>/site.com.br`. Copiar sempre o backup mais recente. Renomeie a pasta `site.com.br` colocando o domínio do projeto;
3. Atualizar as informações do arquivo `index.html` localizado na pasta `callofpage` com os dados do cliente.

## ACR TRÊS – REGISTRO DO DOMÍNIO (PULAR CASO O DOMÍNIO JÁ FOR REGISTRADO)

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Olhar junto ao cliente um nome de domínio adequado e que esteja disponível na [registro.br](https://registro.br/). O colaborador poderá sugerir domínios que sejam mais ranqueáveis pelo Google[^1] e com outras extensões que não sejam o `.com.br`, caso o domínio que o cliente escolheu não esteja disponível;
2. Após a escolha do domínio, acesse a conta da Eagle no [registro.br](https://registro.br/) e registre o domínio enviando o boleto diretamente para o setor comercial da Eagle que deverá ser pago o mais rápido possível.

## ACR QUATRO – ASSINATURA NA REVENDA (ACR VÁLIDA SOMENTE SE O DOMÍNIO ESTIVER REGISTRADO E SE O CLIENTE NÃO TIVER CONTRATO COM OUTRA HOSPEDAGEM)

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Domínio estiver registrado;
2. Caso o domínio tenha sido registrado por terceiros, verificar junto ao cliente quem registrou e entrar em contato para pegar dados de acesso ao painel da empresa registradora. Esse procedimento deverá ser realizado para a mudança de autoridade DNS;
3. Realizar o cadastro do cliente e assinatura do domínio no Painel Plesk. ([Consulte na BC o tutorial sobre este processo](https://ajuda.eagletecnologia.com/materiais/interno/desenvolvimento-web/revenda-plesk));
4. Verificar se o cliente já usa e possui e-mail em outro servidor. Se sim deverá pegar os acessos a esse servidor e fazer a configuração MX na revenda. (Consulte no BC o tutorial sobre esse processo);
5. Preencha o arquivo `ACESSO.TXT` localizado em `/SITES EXPRESSO E PERSONALIZADO - PROJETOS/SITE EXPRESSO - ATIVO/<NOME_CLIENTE>` e atualizar no Cofre de Senhas. Com os dados inseridos no Painel Plesk e outras informações necessárias;
6. Mudar autoridade DNS na empresa registradora;

## ACR CINCO – ANALISAR E COLETAR INFORMAÇÕES DO SERVIDOR DE HOSPEDAGEM (ACR VÁLIDA SOMENTE SE O DOMÍNIO ESTIVER REGISTRADO E SE O CLIENTE JÁ TIVER CONTRATO COM OUTRA HOSPEDAGEM)

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Olhar junto ao cliente os dados de acesso a esse servidor de hospedagem;
2. Inserir os dados de acesso no arquivo `ACESSO.TXT` localizado em `/SITES EXPRESSO E PERSONALIZADO - PROJETOS/SITE EXPRESSO - ATIVO/<NOME_CLIENTE>` e atualizar os dados no Cofre de Senhas;
3. Verificar versão do PHP. O pré-requisito mínimo para a instalação do Site Expresso é a versão `7.0`;
4. Caso o servidor esteja ok, criar um banco de dados e colocar os acessos no arquivo `ACESSO.TXT` e atualizar o Cofre de Senhas;
5. Caso o cliente não tenha esses acessos ou os requisitos mínimos para a instalação do Site Expresso, ver a possibilidade de hospedar o site na Revenda ou contratar uma outra hospedagem;

## ACR SEIS – COBRANÇA DE CONTEÚDO DO CLIENTE

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Após passado 10 dias e não receber nenhuma notificação do formulário de dados preenchido, ligar para o cliente cobrando o preenchimento;
2. Após passado 5 dias da lembrança, caso cliente ainda não tenha atualizado, ligar novamente e cobrar o conteúdo. Caso o cliente não tiver condição de enviar o conteúdo inteiro nos próximos 2 dias, pedir para enviar pelo menos a logo. Explicar para o cliente que se não tiver pelo menos a logo, a entrega do site atrasará e o site não ficará disponível na internet no prazo de 30 dias como está declarado no contrato;
3. Se cliente não atualizar o formulário no período citado anteriormente, iniciar o processo de coleta de conteúdo padrão e alimentar o site com informações referentes ao negócio do cliente;
4. O site deverá se publicado após 30 dias após assinatura do contrato.

## ACR SETE – DESENVOLVIMENTO DO SITE

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Descompactar o arquivo de backup do template e fazer a instalação do mesmo;
2. Para o banco de dados use a nomenclatura “bdexp_<nomedocliente>”;
3. Após a instalação atualize a plataforma e extensões que tenham algum upgrade no momento da produção do site e faça um backup;
4. Altere o estilo colocando o tema e logo, e refina o CSS se for necessário;
5. Colete os dados do formulário e insira-os no template;

## ACR OITO – SEGUIR AS ACRs DO ORDIRE - SITE PERSONALIZADO

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Seguir da ACR DOZE até ACR VINTE E TRÊS com exceção da ACR TREZE;

[^1]: Dicas para nomes de domínio: [https://goo.gl/5XnC1X](https://goo.gl/5XnC1X)