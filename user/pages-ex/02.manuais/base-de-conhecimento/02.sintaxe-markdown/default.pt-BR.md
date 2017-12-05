---
title: 'Sintaxe Markdown'
taxonomy:
    categoria:
        - 'Base de Conhecimento'
    tag:
        - sintaxe
        - markdown
anchors:
    active: true
menuright: true
tagtitle: h2
terms: 'h2 Heading'
---

Nesta sessão iremos aprender como escrever documentações utilizando as marcações necessários para formatar nossos textos e artigos.

## Formatando Títulos

Os cabeçalhos de **nível 1** a **nível 6** são construídos com um **#** para cada nível.

```
# h1 Heading
## h2 Heading
### h3 Heading
#### h4 Heading
##### h5 Heading
###### h6 Heading
```
Isso resultará na seguinte configuração:

# h1 Heading
## h2 Heading
### h3 Heading
#### h4 Heading
##### h5 Heading
###### h6 Heading
___

## Separando sessões na página

Para poder criar uma "quebra de sessão" entre elementos de nível de parágrafo. Em markdown, você pode criar um traço vertical com qualquer uma das marcações:
* `___`: três consecutivos underlines
* `---`: três consecutivos traços
* `***`: três consecutivos asteriscos

___

## Parágrafos
Para escrever parágrafos basta escrever o texto e após o ponto. Uma quebra de linha de linha pode ser feito com 2 espaços após o ponto final seguido de 1 Enter.  

Lorem ipsum dolor sit amet, graecis denique ei vel, at duo primis mandamus. Et legere ocurreret pri, animal tacimates complectitur ad cum. Cu eum inermis inimicus efficiendi. Labore officiis his ex, soluta officiis concludaturque ei qui, vide sensibus vim ad.   

## Destacar Termos

### Negrito

Para colocar algum termo em **evidência** no texto basta inserir dois arteriscos antes e depois do termo:

`**Ficará em negrito**`

### Itálico

Para colocar o texto com aparência de _itálico_ basta inserir um underline antes e depois do termo:

`__Ficará em Itálico__`

Caso queira deixar o termo em ***negrio e itálico***, basta colocar `***` ou `___` antes e depois do termo:

`***Ficará em negrito e itálico***`

### Taxado

Se deseja deixar algum termo taxado para mostrar que aquele termo foi ~~cortado~~ e será substuido posteriormente, basta colocar `~~` antes e depois do termo:

`~~Ficará Taxado~~`

### Citações

Caso queiro destacar algum trecho de texto como citação, basta colocar `>` na frente do texto citado:

`> Esse trecho de texto é uma citação - Eagle Tecnologia`

Ficará da seguinte forma a citação:

> Esse trecho de texto é uma citação - Eagle Tecnologia

Caso queira colocar uma sitação dentro de outra também é possivel fazendo da seguinte forma:

```
> Esse trecho de texto é uma citação - Eagle Tecnologia
>> Essa é a segunda Citação
```
Ficará assim:

> Esse trecho de texto é uma citação - Eagle Tecnologia
>> Essa é a segunda Citação

___

## Inserindo Notificações

As vezes é necessário inserir alguns avisos ou lembretes no artigo para alertar o leitor de algo na documentação. A plataforma oferece 4 tipos de avisos são eles: Informação, Aviso, Erro e Sucesso.

Para mostrar uma **Aviso** coloque `!` na frente do texto:

! Esse é um texto de Aviso

Para mostrar uma **Erro** coloque `!!` na frente do texto:

!! Esse é um texto de Erro

Para mostrar uma **Informação** coloque `!!!` na frente do texto:

!!! Esse é um texto de Informação

Para mostrar uma **Sucesso** coloque `!!!!` na frente do texto:

!!!! Esse é um texto de Sucesso

___

## Inserindo Listas

### Lista não ordenada

Uma lista de itens em que a ordem dos itens não importa explicitamente. Você pode usar qualquer um dos seguintes símbolos para denotar marcadores para cada item de lista:

```
* símbolo é válido
- símbolo é válido
+ símbolo é válido
```
Exemplo:

```
+ Lorem ipsum dolor sit amet
+ Consectetur adipiscing elit
+ Integer molestie lorem at massa
+ Facilisis in pretium nisl aliquet
+ Nulla volutpat aliquam velit
  - Phasellus iaculis neque
  - Purus sodales ultricies
  - Vestibulum laoreet porttitor sem
  - Ac tristique libero volutpat at
+ Faucibus porta lacus fringilla vel
+ Aenean sit amet erat nunc
+ Eget porttitor lorem
```

Isso será mostrado da seguinte forma:

+ Lorem ipsum dolor sit amet
+ Consectetur adipiscing elit
+ Integer molestie lorem at massa
+ Facilisis in pretium nisl aliquet
+ Nulla volutpat aliquam velit
  - Phasellus iaculis neque
  - Purus sodales ultricies
  - Vestibulum laoreet porttitor sem
  - Ac tristique libero volutpat at
+ Faucibus porta lacus fringilla vel
+ Aenean sit amet erat nunc
+ Eget porttitor lorem

### Lista ordenada

Basta colocar a numeração seguida do ponto na frente do texto:

```
1. Lorem ipsum dolor sit amet
2. Consectetur adipiscing elit
3. Integer molestie lorem at massa
4. Facilisis in pretium nisl aliquet
5. Nulla volutpat aliquam velit
6. Faucibus porta lacus fringilla vel
7. Aenean sit amet erat nunc
8. Eget porttitor lorem
```
Isso será mostrado da seguinte forma:

1. Lorem ipsum dolor sit amet
2. Consectetur adipiscing elit
3. Integer molestie lorem at massa
4. Facilisis in pretium nisl aliquet
5. Nulla volutpat aliquam velit
6. Faucibus porta lacus fringilla vel
7. Aenean sit amet erat nunc
8. Eget porttitor lorem

Se você usar somente `1.` na frente de cada termo, a plataforma irá numerar automaticamente:

```
1. Termo 1
1. Termo 2
1. Termo 3
```
1. Termo 1
1. Termo 2
1. Termo 3

___

## Formatando trechos de Código

Caso queira destacar algum trecho de código ou tag para exemplificar algo, você pode usar a crase para fazer o destaque da tag ou código.

Para destacar o trecho em uma linha use o trecho entre os acentos:


```
Isso é uma frase que tem o seguinte trecho de código: `<span><span>`
```

O trecho ficará da seguinte forma:

Isso é uma frase que tem o seguinte trecho de código: `<span><span>`

Agora se quiser destacar um trecho com quebra de linha, basta usar três crases ` ``` ` antes e depois do trecho e especificar na frente das três crases a linguagem que deseja ser renderizado. Confira [nesse link](https://highlightjs.org/static/demo/) as linguagens suportadas. 

O trecho ficará da seguinte forma:

``` js
{% do assets.addJs('theme://js/jquery.sticky.js') %}
{% do assets.addInlineJs('
    $(document).ready(function(){
       $("#sticker").sticky({topSpacing:0});
    });
')%}
```

___

## Inserindo Tabelas

As tabelas são criadas adicionando pipes como divisórias entre cada célula e adicionando uma linha de traços (também separados por barras) abaixo do cabeçalho. Observe que os pipes não precisam ser alinhados verticalmente.

```
| Option | Description |
| ------ | ----------- |
| data   | path to data files to supply the data that will be passed into templates. |
| engine | engine to be used for processing templates. Handlebars is the default. |
| ext    | extension to be used for dest files. |
```

Renderizará da seguinte forma:

| Option | Description |
| ------ | ----------- |
| data   | path to data files to supply the data that will be passed into templates. |
| engine | engine to be used for processing templates. Handlebars is the default. |
| ext    | extension to be used for dest files. |

### Alinhar o texto da Tabela

Adicionar um dois-pontos no lado direito dos traços abaixo de qualquer título irá alinhar o texto à direita para a coluna.

```
| Option | Description |
| ------: | -----------: |
| data   | path to data files to supply the data that will be passed into templates. |
| engine | engine to be used for processing templates. Handlebars is the default. |
| ext    | extension to be used for dest files. |
```

Renderizará da seguinte forma:

| Option | Description |
| ------: | -----------: |
| data   | path to data files to supply the data that will be passed into templates. |
| engine | engine to be used for processing templates. Handlebars is the default. |
| ext    | extension to be used for dest files. |

Como visto pode ser um pouco doloroso criar tabelas usando Markdown, caso você deseje agilizar esse trabalho, existem ferramentas que fazem isso para você. Escolha qual melhor você se adequa:

* [Table Generator](http://www.tablesgenerator.com/markdown_tables)
* [CSV to Markdown](https://donatstudios.com/CsvToMarkdownTable)
* [Table Editor](http://truben.no/table/)
___

## Adicionando Links

### Link Externo

Em algum momento na escrita da documentação você irá precisar inserir algum link externo para referenciar alguma informação extra, para isso basta fazer o seguinte:

```
[Eagle Tecnologia](https://eagletecnologia.com)
```

O que estiver dentro do colchete será o nome do link e no parêntese o link propriamente dito. Ficará da seguinte forma:

[Eagle Tecnologia](https://eagletecnologia.com)

Se quiser também pode adicionar um título ao link, basta colocar um espaço depois do link e escrever o título entre aspas:

```
[Eagle Tecnologia](https://eagletecnologia.com "Soluções Inteligentes para sua Empresa")
```

O título irá aparecer ao passar o mouse por cima do link:

[Eagle Tecnologia](https://eagletecnologia.com "Soluções Inteligentes para sua Empresa")

### Link Interno

O link interno serve para acessar páginas da Base de Conhecimento. Isso é útil caso queira referenciar uma página para complementar um assunto do artigo que o usuário esteja lendo no momento.

O link interno é semelhante ao externo, porém em vez de colocar uma url você irá colocar o caminho da pasta onde está a página.

```
[Veja a Introdução](../introducao)
```

Os `../` significa que está voltando um nível na pasta onde está localizada a página. O nome é sempre o que é mostrado na url da página que pode também ser chamado de **slug**.

Exemplo:

[Veja a Introdução](../introducao)

___

## Adicionando Imagens

As imagens têm uma sintaxe similar aos links, mas incluem um ponto de exclamação no início.

```
![Logo da Eagle Tecnologia](hd.eagletecnologia.com/images/logo/prin_png_256.png)
```

Exemplo:

![Logo da Eagle Tecnologia](http://hd.eagletecnologia.com/images/logo/prin_png_256.png)

Caso queira colocar uma legenda na imagem, basta colocar um espaço depois do link da imagem e colocar a legenda entre aspas.

![Logo da Eagle Tecnologia](http://hd.eagletecnologia.com/images/logo/prin_png_256.png "Logo Principal da Eagle Tecnologia")

## Destacar texto com Cor

Para que você consiga destacar uma palavra, frase ou trecho de texto é necessário marcar a parte que deseja colorir da seguinte forma:

```
Este é um {c:red}texto vermelho.{/c} 
```
**Resultado**

Este é um {c:red}texto vermelho.{/c}

A cor deve ser escrita em inglês. Segue a tabela dos marcadores desponíveis.

| Cor            	| Marcador 	|
|----------------	|----------	|
| Amarelo        	| {c:yellow}yellow{/c}   	|
| Azul           	| {c:blue}blue{/c}     	|
| Cinza          	| {c:gray}gray{/c}     	|
| Laranja        	| {c:orange}orange{/c}    	|
| Magenta        	| {c:magenta}magenta{/c}   	|
| Marrom         	| {c:brown}brown{/c}     	|
| Ouro / Dourado 	| {c:gold}gold{/c}     	|
| Prata          	| {c:silver}silver{/c}   	|
| Rosa           	| {c:pink}pink{/c}      	|
| Roxo           	| {c:purple}purple{/c}   	|
| Verde          	| {c:green}green{/c}    	|
| Vermelho       	| {c:red}red{/c}      	|
| Violeta        	| {c:violet}violet{/c}    	|

Caso precisar utilizar uma cor que não esteja listado na tabela, poderá utilizar o código hexadecimal de cores que represente a cor desejada. Segue exemplo utilizando código hexadecimal:

```
Este é um {c:#B81365}texto colorido com hexadecimal{/c} 
```
**Resultado**

Este é um {c:#B81365}texto colorido com hexadecimal{/c}

## Inserir Nota de Rodapé e Abreviações

#### Nota de Rodapé

Para inserir uma nota de rodapé é necessário colocar a sinxate `[^<numero da nota>]` no decorrer do texto e ao final de todo o conteúdo incluir as notas colocando a mesma sintaxe com sua numeração e depois insira `:` e escreva a informação da nota. Para exemplificar veja o trecho a seguir:

**Sintaxe**

```markdown
Esse um trecho de texto onde tem uma nota de rodapé aqui [^1] e outra aqui [^2]
```
**Resultado**

Esse um trecho de texto onde tem uma nota de rodapé aqui [^1] e outra aqui [^2]

**Notas sintaxe**

```markdown
[^1]: Essa é a nota de Rodapé 1
[^2]: Essa é a nota de Rodapé 2
```
#### Abreviações

As abreviações servem para destacar iniciais do nome completo de um termo. Um explemplo seria em vez de escrever `Hyper Text Markup Language` você colocaria somente `HTML`. Neste caso o termo HTML seria destacado e ao passar o mouse em cima do termo apareceria o nome completo. Ex:

**Sintaxe**

```markdown
A W3C é uma instituição que convenciona a web.

<!-- no final do documento coloque a sintaxe para o termo que terá a abreviação -->
*[W3C]: World Wide Web Consortium
```
**Resultado**

A W3C é uma instituição que convenciona a web.

*[W3C]:  World Wide Web Consortium

[^1]: Essa é a nota de Rodapé 1
[^2]: Essa é a nota de Rodapé 2