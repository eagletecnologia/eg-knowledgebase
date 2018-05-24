---
title: 'Adicionando Elementos de Interface'
taxonomy:
    categoria:
        - 'Base de Conhecimento'
    tag:
        - interface
anchors:
    active: false
menuright: false
tagtitle: h2
---

Para organizar melhor o conteúdo dentro de uma página e deixar um visual mais agradável, é possível inserir alguns elements de interface como **Abas** e **Listas Acordeon**.

## Abas

Para organizar textos em abas na página siga o exemplo seguinte:

Inicia com a tag `ui-tabs position="top-left" active="0" theme="lite"` para abrir a sintaxe da aba. Veja o que significa os parâmetros:
* **position**: é a posição que ficará as abas. Aceita 4 parâmetros `(top-left | top-right | bottom-left | bottom-right)`;
* **active**: marca em número qual aba estará ativa quando a página carregar;
* **theme**: As abas possuem três temas diferentes `(default | lite | badges)`.

Depois de inserido a primeira tag para indentificar o elemento, coloque a tag `ui-tab title="Primeira Aba"` que identificará a aba propriamente dito. Ela possui somente o parâmetro `title` para inserir o título da aba.

Coloque o texto da aba e feche com a tag `/ui-tab`. Caso tenha mais abas é só repetir o processo e no final feche com a tag `/ui-tabs`.

! Lembrando que todos os termos deverá ficar entre os `[]` para funcionar.

**Ex:**

```
ui-tabs position="top-left" active="0" theme="lite"
ui-tab title="Primeira Aba"

Conteúdo da Primeira ABA

/ui-tab
ui-tab title="Segunda ABA"

Conteúdo da Primeira ABA

/ui-tab
/ui-tabs
```

Gerará o seguinte resultado:

[ui-tabs position="top-left" active="0" theme="lite"]
[ui-tab title="Primeira ABA"]

Conteúdo da primeira ABA

[/ui-tab]
[ui-tab title="Segunda ABA"]

Conteúdo da segunda ABA

[/ui-tab]
[/ui-tabs]

## Listas Acordeon

As listas em acordeon é muito semelhante às Abas, muda somente alguns detalhes nas tags. Segue o exemplo:

Inicia com a tag `ui-accordion independent=true open=all` para abrir a sintaxe da lista acordeon. Veja o que significa os parâmetros:
* **independent**: determina se os ítens poderão ser abertos independetemente dos outros, caso contrário quando abrir um o que estiver aberto fecha automaticamente. O parâmetro aceita os valores `true|false`;
* **open**: identifica qual dos ítens da lista ficará aberto quando a página carregar. Você pode também deixar todos abertos quando a página carregar usuando o valor `all` ou todos fechados usando o valor `closed`;

Depois de inserido a primeira tag para indentificar o elemento, coloque a tag `ui-accordion-item title="Section 1"` que identificará o ítem da lista propriamente dito. Ela possui somente o parâmetro `title` para inserir o título da lista.

Coloque o texto da lista e feche com a tag `/ui-accordion-item`. Caso tenha mais ítens da lista é só repetir o processo e no final feche com a tag `/ui-accordion`.

! Lembrando que todos os termos deverá ficar entre os `[]` para funcionar.

**Ex:**

```
ui-accordion independent=true open=all
ui-accordion-item title="Sessão 1"

Conteúdo da primeira sessão

/ui-accordion-item
ui-accordion-item title="Sessão 2"

Conteúdo da segunda sessão

/ui-accordion-item
ui-accordion-item title="Sessão 3"

Conteúdo da terceira sessão

/ui-accordion-item
/ui-accordion
```

Gerará o seguinte resultado:

[ui-accordion independent=true open=all]
[ui-accordion-item title="Sessão 1"]
Conteúdo da primeira sessão
[/ui-accordion-item]
[ui-accordion-item title="Sessão 2"]
Conteúdo da segunda sessão
[/ui-accordion-item]
[ui-accordion-item title="Sessão 3"]
Conteúdo da terceira sessão
[/ui-accordion-item]
[/ui-accordion]