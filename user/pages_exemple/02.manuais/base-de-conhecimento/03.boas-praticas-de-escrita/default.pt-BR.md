---
title: 'Boas Práticas de Escrita'
taxonomy:
    categoria:
        - 'Base de Conhecimento'
    tag:
        - 'boas práticas'
        - padrões
        - sintaxe
anchors:
    active: true
menuright: true
tagtitle: h2
---

Falaremos nessa página das boas práticas para criação de um texto na Base de Conhecimento. Essas práticas são importantes para manter a informação inserida bem organizado na Base de Conhecimento e também ranquear de forma adequada nos buscadores, além de melhorar a acessibilidade.

Sobre texto copiado de outra fonte

É comum copiarmos algum trecho de texto ou vários trechos de alguma outra fonte como _Word_ ou _Websites_. Neste caso pode acontecer de alguma formatação vim junto quando colado o trecho aqui na **Base de Conhecimento**. O recomendado é smpre limpar essa formatação e formatar direto na plataforma usando a [formatação markdown](../sintaxe-markdown). Um caso muito comum são as listas no qual é copiado os caracteres de tópicos. Limpe esses caracteres e use a [formatação adequada](../sintaxe-markdown#inserindo-listas).

## Títulos nas imagens

Toda imagem que for inserida no texto deverá ser preenchido um título explicando brevemente o que há na imagem. Esse título deverá se colocado entre as tags `[]`;

## Inserção de Categorias e Tags

A categoria na Base de Conhecimento será um ítem obrigatório para facilitar o sistema de busca interno. Obs: As categorias deverão sempre ser o nome da página Pai imediata, ou seja, se existir uma página onde a pai está imediatamente acima dela, então a sua categoria será o nome de seu pai. Se essa página for pai de uma outra, essa filha também deverá ter a categoria com o nome de seu ancestral. As tags não serão obrigatórias, mas são importantes também para melhorar o sistema de busca interno e facilita a busca de páginas relacionadas. Deverão ser inseridas no máximo 3 tags por página.

## Preenchimento do campo Metadado

Não é uma prática obrigatória, mas para as páginas que forem públicas é interessante preencher para que os sistemas de busca ranqueiam mais rápita e facilite a busca pelo usuário que estiver buscando pela solução.

## Títulos nas Páginas

O título da página será sempre renderizado como **nível 1(H1)**. De acordo com boas práticas _SEO(Práticas de Otimização de Pesquisa)_, não poderá existir mais de um título de nível 1 na página. Com isso os título imediatos que deverão ser usados é o de **nível 2(H2)**, podendo ser usado quantos quiser. Na Base de Conhecimento é recomendado que coloque esses títulos como cabeçalho principal dos diversos assuntos discutidos em uma página de documentação e os outros níveis, seguir uma ordem consecutiva para os subassuntos do principal. Se for habilitar o menu lateral para a página, recomenda-se que use sempre o filtro de nível 2(H2).

## Inserir caminho de pasta, códigos em linha e nome de arquivo específico

Para informar esses casos específicos dentro de um texto/documentação é recomendado usar a [formatação para marcar código](../sintaxe-markdown#formatando-trechos-de-cdigo). Isso manterá um padrão entre tudo escrito na Base de Conhecimento. Ex: se precisa informar um caminho deverá ficar da seguinte forma: `Raiz/Pasta Pai/Pasta Filha/arquivo.pdf`, use sempre a separação entre as pastas o caractere `/`. Se quiser informar um código `<span></span>` ou informar um nome de arquivo específico `teste-de-arquivo.docx`.

## Uso do itálico e negrito

É recomendado que use o itálico somente para palavras e nomes estrangeiros, siglas e nomes de ferramentas ou softwares. Ex: para a palavra _The New Yourk Times_, a sigla _IPI(Imposto sobre Produto Industrializado)_ e _Microsoft Word_ coloque sempre em itálico. Fora esses casos poderá usar o negrito para qualquer termo ou frase que deseja destacar no texto/documentação.