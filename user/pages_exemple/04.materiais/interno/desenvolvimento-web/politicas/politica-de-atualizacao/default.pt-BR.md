---
title: 'Política de Atualização'
taxonomy:
    categoria:
        - Políticas
    tag:
        - 'atualização de website'
        - atualização
anchors:
    active: false
menuright: false
tagtitle: h2
---

A política de atualização tem o intuito de fornecer regras para atualização de plataforma e extensões dos websites com contrato de manutenção, templates e o produto Site Expresso.

Para realizar as atualizações dos websites, deverá de forma mensal conferir em cada projeto se tem uma atualização disponível. Encontrada a atualização deverá realiza-la seguindo os seguintes critérios:

#### Antes de fazer as atualizações

As atualizações deverão ser feitas primeiramente em uma versão de desenvolvimento para que não comprometa a versão em produção. Caso não haja uma versão do site idêntica ao site em produção, deverá baixar o backup mais recente para o servidor e realizar as atualizações.

#### Quando houver erros

Se na atualização da plataforma ou de extensões houver algum erro, deverá identificar porque aconteceu o erro e tentar solucioná-lo. Caso não consiga solucioná-lo, deverá prorrogar estas atualizações para a próxima versão que for lançado da extensão ou plataforma.

#### Atualização de Plataforma (Joomla)

O ciclo de atualizações do _Joomla_ são frequentes, mas deverá tomar cuidado com essas atualizações, pois algumas delas podem conter bugs que ainda não foram indetificados. A solução mais adequada para isso é assim que sair uma nova atualização, deixar para atualizar somente quando surgir uma atualização para correção de segurança. É interessante conferi [nas comunidades Joomla](https://www.facebook.com/groups/joomla.brasil.desenvolvedores/) para ver se alguém identificou alguma falha e como fizeram para resolver.

#### Atualização de Extensões

As atualizações de extensões também são bem frequentes, mas o risco de falhas é menor, por isso devem ser atualizadas assim que surgem os updates. Caso ocorra alguma falha em relação ao layout do módulo ou componente, deverá verificar se o Override foi realizado adequadamente, caso contrário, deverá efetuar o override para que não surja a mesma falha na próxima atualização.

Nos casos em que as extensões tenham sofrido _hacks_, ou seja, alteração direta em classes e arquivos helpers, o colaborador deverá verificar a pasta `alt` que está localizada dentro da pasta `extensoes` na raiz da pasta do projeto no servidor web. Nesta pasta estarão os arquivos que foram modificados e um arquivo `txt` com informações da localização destes arquivos na pasta da extensão. Após a atualização destas extensões, estes arquivos deverão ser copiados para que não comprometa o funcionamento da extensão.

#### Como controlar as atualizações

* As atualizações deverão ser agendadas de forma mensal, sendo cada projeto tendo meio dia dedicado ao procedimento;
* O Joomla só será atualizado após sair pelo menos uma versão de segurança após lançamento da versão estável;
* A atualização dos templates serão realizadas no último dia útil do mês;
* Os contratos de manutenção e site expresso também serão realizados no final do mês entre os dias 20 e 30;
* Após a realização das atualizações, o colaborador deverá reagendar a próxima atualização do mês;
* Essas atualizações deverão ser divididas entre a equipe do setor de Websites.