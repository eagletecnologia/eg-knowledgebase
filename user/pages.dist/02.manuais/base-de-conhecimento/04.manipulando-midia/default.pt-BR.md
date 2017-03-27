---
title: 'Manipulando Mídia'
taxonomy:
    categoria:
        - 'Base de Conhecimento'
    tag:
        - sintaxe
        - mídia
---

Para que seu artigo fique um pouco mais interativo e com informações mais claras é importante inserir vídeos, áudios e galerias. Assim a página fica mais rica e consequentemente será melhor entendida.

Nessa sessão iremos aprender inserir os diversos tipos disponíveis na plataforma.

## Galeria de Fotos

Antes de colocar o código para renderizar a galeria, primeiro faça o upload das imagens que irão compor a galeria. Depois clique na opção __insert__ das imagens, isso colocará o código. No final do caminho da imagem coloque o parâmetro `?lightbox=1024` e depois o tamanho da miniatura `&cropResize=200,200` os valores são o tamanho da imagem aberta e o tamanho da miniatura respectivamente. O Código ficará da seguinte forma:

```
![Paisagem 1](paisagem-dois.jpg?lightbox=1024&cropResize=200,200)
```

![Paisagem 1](paisagem-dois.jpg?lightbox=1024&cropResize=200,200&class=inline-block)
![Paisagem 2](paisagem-tres.jpg?lightbox=1024&cropResize=200,200&class=inline-block)
![Paisagem 3](paisagem-um.jpg?lightbox=1024&cropResize=200,200&class=inline-block)

Para colocar um do lado do outro, basta adicionar o parâmetro `&class=inline-block` no final.

### Parâmetros de redimensionamento da Imagem

As vezes é necessário redimensionar a imagem para não quebrar o layout da página. Apresentaremos dois métodos de redimensionar:

`resize(width, height)`: Esse método irá literalmente redimensionar a imagem utilizando o valor inserido, mas manterá proporção. Ex:

`![Redimensionamento](paisagem-tres.jpg?resize=500,200)`

![Redimensionamento](paisagem-tres.jpg?resize=500,200)

`cropResize(width, height)`: Esse método irá redimensionar cortando a imagem, mas mantendo sempre a proporção. Ex:

`![Corte de Imagem](paisagem-dois.jpg?cropResize=200,80)`

![Corte de Imagem](paisagem-dois.jpg?cropResize=200,100)

`cropZoom(width, height)`: Esse método irá redimensionar cortando a imagem usando como referência o centro da imagem. Ex:

`![Corte com Zoom](paisagem-um.jpg?cropZoom=300,150)`

![Corte com Zoom](paisagem-um.jpg?cropZoom=300,150)

## Áudio

Da mesma forma que as imagens, também é possivel colocar áudio direto da página através de um arquivo carregado para página.

Faça o upload do áudio para o documento e faça o seguinte:

`![Hal 9000: I'm Sorry Dave](hal9000.mp3)`

![Hal 9000: I'm Sorry Dave](hal9000.mp3)

## Vídeo

A plataforma aceita vídeos de forma embedada, ou seja, através de um link de algum serviço. A Base de Conhecimento está habilitada a aceitar vídeos do YouTube. Para inserir um vídeo, basta usar uma sintaxe que é um pouco diferente do áudio. Entre colchetes coloque os parâmetros `plugin:youtube` e no parêntese coloque o link do vídeo:

[plugin:youtube](https://www.youtube.com/watch?v=Uns55SSb64g)