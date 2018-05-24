---
title: 'Como executar script no utilitário patchs'
media_order: 'imagem 1.png,imagem 2.png,imagem 3.png,imagem 4.png'
taxonomy:
    categoria:
        - Faq
    tag:
        - script
        - patch
    autor:
        - 'Sérgio Generoso'
anchors:
    active: true
menuright: true
tagtitle: h2
content:
    items: '@self.children'
    limit: '10'
    order:
        by: date
        dir: desc
---

## Objetivos 

O utilitário foi desenvolvido com a finalidade de facilitar a execução de scripts, pois ao se executar os scripts através do utilitário evita a necessidade de utilizar o IBExpert, prevenindo também os eventuais transtornos que são gerados ao se configurar o IBExpert errado e realizar uma conexão errônea do banco.

## Como executar o script:

Para se executar o script deve-se abrir o aplicativo na aba Utilitários selecione Executar Patch.

![](imagem%201.png)

Deve-se selecionar o arquivo de patch que foi enviado através do suporte, note que o botão de execução já se inicia inabilitado e só será habilitado se for selecionado o arquivo correto com a extensão correta  “.zip” .

![](imagem%202.png)

! _Antes de executar qualquer arquivo que faça modificações no banco de dados é aconselhável fazer uma copia de segurança do banco._

Após selecionar o arquivo correto, clique no botão “Executar Patch”. Após isso o script será executado, esse processo pode demorar um pouco, o que vai depender do tamanho do banco, ou dos comandos que são executados.

![](imagem%203.png)

Caso o script seja executado com sucesso,  são salvos os identificador do patch, a data, descrição e o nome do usuário que realizou a execução do mesmo.

![](imagem%204.png)

Caso tenha seguido o passo a passo corretamente e ocorra algum erro durante o processo de execução, contate o suporte.
