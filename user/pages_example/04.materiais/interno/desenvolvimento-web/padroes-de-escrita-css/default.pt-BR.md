---
title: 'Padrões de escrita CSS'
taxonomy:
    categoria:
        - Websites
    tag:
        - css
        - padrões
anchors:
    active: true
menuright: true
tagtitle: h2
---

Para manter a qualidade do código e evitar despadronização da escrita css nos projetos, esse artigo descreve todas as recomendações que devem ser seguidas. As recomendações valem tanto para a escrita CSS como também para pré-compiladores como SASS e Less.

## Nomenclatura de classes e ids

Ambas as nomenclaturas devem ter um nome sugestivo para identificar de forma mais clara o que o elemento irá estilizar. Todos os nomes deverão ser escritos em **inglês**.

``` css
/* correto */
.title-main-page

/* errado */
.titulo1
.titulo_pageina_inicial
```
Para a escrita de **classes** será utilizado o hífen(`-`) para separar espaços entre os nomes, já os **ids** serão escritos no formato camelCase.

``` css
/* classe */
.this-is-class

/* id */
#thisIsId
```

## Consideração sobre Seletores

Alguns detalhes podem fazer toda a diferença na qualidade e legibilidade do código.

* Seletores por atributo devem usar aspas duplas amarrando o seu valor.
* Evite seletores sobre-qualificados, por exemplo, `div.container` podemos utilizar apenas `.container`.

``` css
/* correto */

#comment-form {
    margin: 1em 0;
}

input[type="text"] {
    line-height: 1.1;
}

/* errado */

/* erro: sobre-qualificação. */
div#comment_form {
    margin: 0;
}

/* com atributos devemos trabalhar dessa forma [type="text"] */
input[type=text] {
    line-height: 110%;
}
```

## Estrutura

Uma estrutura limpa e legível é muito importante em um projeto com grandes equipes. Siga as seguintes recomendações:

* Para indentar use tabs, não use espaços;
* Adicione duas linhas em branco para separar seções e uma linha para separar blocos da mesma seção;
* Caso aplique mais de uma regra para um seletor, colocar um em cada linha. Veja o exemplo:

``` css
/* correto */

.selector-1,
.selector-2,
.selector-3 {
    background: #fff;
    color: #000;
}

/* errado */

.selector-1, .selector-2, .selector-3 {
    background: #fff;
    color: #000;
}

.selector-1 { background: #fff; color: #000; }
```

## Propriedades

A escrita correta das propriedades deixará o código muito mais fácil de ler.

* Propriedades devem ser seguidas de uma coluna e um espaço;
* Todas propriedades devem estar em caixa-baixa, exceto para nomes de Font específicas;
* Usar código hexadecimal para cores, ou utilizar rgba() somente quando necessitar de utilizar opacidade;
* Evitar de utilizar a propriedade rga em letras maiúsculas;
* Quando possível encurtar os valores hexadecimais: `#fff` ao invés de `#FFFFFF`.

### Ordenação de Propriedades

A ordenação aleatória não é uma prática recomendada pois dificulta a leitura do código e dá impressão de desorganização. O padrão que será adotado é a ordenação por categoria no qual é baseada respectivamente pelas categorias:

* Display
* Posicionamento
* Box model
* Cores e tipografias
* Outros

``` css
/* correto */
.category-properties {
	display: flex;
    position: absolute;
    z-index: 1;
    padding: 10px;
    background: #fff;
    color: #777;
}

/* errado */
.category-properties {
	background: #fff;
    z-index: 1;
    padding: 10px;
    display: flex;
    color: #777;
    position: absolute;
}
```

### Vendor Prefixes

São os prefixos para engine de cada browser, por exemplo,`-webkit`. Devem ser ordenados dos prefixos mais longos para os mais curtos. Valores devem ser alinhados a esquerda após os dois pontos. Os valores alinhados com tab como se fosse uma única coluna.

``` css
.vendor-prefixes {
    -webkit-box-shadow: inset 0 0 1px 1px #eee;
    -moz-box-shadow:    inset 0 0 1px 1px #eee;
    box-shadow:         inset 0 0 1px 1px #eee;
    -webkit-transition: border-color 0.1s;
    -moz-transition:    border-color 0.1s;
    -ms-transition:     border-color 0.1s;
    -o-transition:      border-color 0.1s;
    transition:         border-color 0.1s;
}
```

Para os gradient backgrounds será utilizado o seguinte padrão:

``` css
.gradient {
    background: #fff;
    background-image: -webkit-gradient(linear, left bottom, left top, from(#fff), to(#000));
    background-image: -webkit-linear-gradient(bottom, #fff, #000);
    background-image:    -moz-linear-gradient(bottom, #fff, #000);
    background-image:      -o-linear-gradient(bottom, #fff, #000);
    background-image: linear-gradient(to top, #fff, #000);
}
```

## Valores

Seguindo as guidelines abaixo podemos manter um alto grau de consistência em nosso arquivo CSS.

* Espaço antes do valor e depois dos dois pontos;
* Sempre terminar com ponto e vírgula;
* Usar aspas duplas ao invés de aspas simples;
* Valor 0 não deve ter unidade(exemplo: `0%, 0px, 0em…`);
* Use o zero a esquerda para valores decimais, exemplo, evite usar valores como `.5` o ideal é `0.5`.
* Em Múltiplos valores separados por vírgula, cada valor deve ser separado por vírgula ou uma nova linha.

``` css
/* correto */

/* Uso correto de aspas duplas */
.properties-value {
    background-image: url(images/bg.png);
    font-family: "Helvetica Neue", sans-serif;
}

/* Uso correto de valores com zero */
.properties-value {
    font-family: Georgia, serif;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.5),
                       0 1px 0 #fff;
}

/* errado */

/* falta de espaço entre os valores */
.properties-value {
    background:#fff
}

/* adicionando unidade para 0 */
.properties-value {
    margin: 0px 0px 20px 0px;
}
```

## Media Queries

Os _media queries_ configuram os estilos para diversos tamanhos de tela. Eles deverão ser implementados na parte inferior de todo o código CSS. A regra para o _media queries_ devem ser indentadas em somente um nível:

``` css
/*
* Implementações CSS
*/

@media all and (max-width: 699px) and (min-width: 520px) {

        /* Your selectors */
}
```

## Comentários

Para comentar os códigos CSS será utilizado 2 padrões. O primeiro padrão irá comentar sessões e subsessões, ou seja, grupo de seletores que estilizam um mesmo componente, módulo, extensão, etc. Para cada comentário de sessão ou subsessão, deverá utilizar índices numéricos: `1.0, 1.1, 2.0, ect`. Após cada comentário de sessão deverá conter uma linha em branco e antes e depois dos caracteres `/* */` deverá conter um espaço.

``` css
/**
* #.# Título da sessão 1
* 
* Descrição da sessão
*/

.section-component{
	background: #666;
}
```

O segundo padrão é referente aos comentários de linha:

* Esses comentários deverão está sempre em cima do seletor e/ou propriedade;
* Não Incluir linha em branco antes ou depois do comentário se o seletor pertencer a mesma sessão;
* Comentários de linha muito extensos deverão utilizar quebras de linha.

``` css
/* correto */

/**
* 1.0 Título da sessão 1
* 
* Descrição da sessão
*/

/* Este comentário é para esse seletor */
.another-selector {
    position: absolute;
    /* Aqui vocês explica porque usou !important */
    top: 0 !important;
}
/* Este comentário é para outro seletor da mesma sessão */
.another-selector-2 {
	position: relative;
}

/* errado */

/**
* 1.0 Título da sessão 1
* 
* Descrição da sessão
*/

/* uma linha em branco depois do comentário */

.another-selector {
    position: absolute;
    top: 0 !important; /* comentário na frente da propriedade */
}

/*linha em branco antes do comentário da mesma sessão e sem espaço em branco das tags de comentário*/
.another-selector-2 {
	position: relative;
}
```

## Considerações para escrita SASS/Less

Para escrita de pré-compiladores deverá ser seguido algumas regras para manter a legibilidade e qualidade do código. Os padrões definidos para a escrita CSS também são válidos para a escrita SASS/Less.

### Aninhamento

Evite aninhar seletores só porque você pode fazer isso, não significa que você deve fazê-lo sempre. Considere aninhar se você tem um escopo de estilos para um pai e se há múltiplos elementos para serem aninhados.

Tenha em mente de manter um limite de no **máximo três aninhamentos**. Isso facilita a leitura e entendimento do código futuramente. Para escrita SASS será utilizado o estilo SCSS que contém `{}` e `;`.

``` css
/* assim é melhor */
div p a{
  text-decoration: none
}

/* É permitido, mas use só quando necessário */
div{
  background-color: gray;
  p{
    color: #FFF;
    background-color: red;
    margin-top: 0;
    padding-bottom: 0;
    a{
      text-decoration: none;
    }
  }
}
```


