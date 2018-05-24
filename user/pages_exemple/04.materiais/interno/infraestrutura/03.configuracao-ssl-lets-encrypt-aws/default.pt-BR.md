---
title: 'Configuração SSL Let''s Encrypt AWS'
taxonomy:
    categoria:
        - 'Desenvolvimento Web'
    tag:
        - letsencrypt
        - ssl
        - certificado
anchors:
    active: true
menuright: true
tagtitle: h2
---

Essa página tem o intuito de mostrar como faz as configurações de certificado SSL para os projetos hospedados na AWS Amazon Instância EC2 Falcon FV.

Antes de instalar um certificado SSL é necessário verificar o grupo de segurança na aba `Inbound` se a porta `443` está liberada para tráfego externo configuração `0.0.0.0/0` .

## Instalar Certificado SSL

Para instalar um certificado digital em um domínio hospedado na AWS, deve-se executar o comando `certbot-auto` com parâmetros e o domínio. Ex: se precisa instalar um certificado para o domínio `exemplo.com` no terminal digite:

```shell
certbot-auto --apache
```
1. O comando irá listar todos os hosts criados na configuração do Apache. Digite os números referentes aos domínios que deseja instalar o certificado.
2. Após irá perguntar se deseja forçar o `https://`, isso é bom pois toda vez que o domínio for acessado de qualquer lugar irá inserir o cadeado verde com o protocolo https. Coloque a opção 1 para isso.

Feito esses procedimentos ao acessar o domínio já virá com o certificado.

## Renovação do certificado

A renovação no servidor AWS é automática e se renova a cada 90 dias. Não é necessário fazer nenhum procedimento. Para mais detalhes sobre a renovação [consulte a documentação oficial](https://certbot.eff.org/docs/using.html#re-creating-and-updating-existing-certificates).

## Retirar Certificado de um domínio

Para limpar um certificado de um domínio, basta fazer o processo de revogar e depois deletar os certificados. Para revogar o certificado de um domínio, digite o seguinte comando:

```shell
certbot-auto revoke --cert-path /etc/letsencrypt/live/<dominio>/cert.pem
```
Depois de feito o `revoke` digite o seguinte comando para deletar o certificado:

```shell
certbot-auto delete --cert-name example.com
```
Após feito esse procedimento é interessante verificar se realmente o certificado foi removido, acessando o domínio sem o `https` no navegador. Se acontecer de continuar puxndo o `https` com erro de site inseguro faça o seguinte procedimento:

1. acesse `/etc/apache2/sites-available`
2. abra o arquivo de configuração do domínio para edição usando o `vim`
3. delete as informações a seguir do arquivo:

```shell
RewriteEngine on
RewriteCond %{SERVER_NAME} =www.exemplo.com [OR]
RewriteCond %{SERVER_NAME} =exemplo.com
RewriteRule ^ https://%{SERVER_NAME}%{REQUEST_URI} [END,QSA,R=permanent]
```
4. verifique também se o arquivo `exemplo.com-le-ssl.conf` não está presente, se sim delete-o
5. se precisar fazer esses procedimentos acima mesmo depois de revogar e deletar o certificado reinicie o apache com o comando `sudo serve apache2 restart`



