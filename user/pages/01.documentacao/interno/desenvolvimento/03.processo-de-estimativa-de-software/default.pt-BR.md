---
title: 'Processo de Estimativa de Software'
media_order: img_2627.png
taxonomy:
    categoria:
        - Desenvolvimento
    tag:
        - scrum
        - estimativa
        - software
anchors:
    active: true
menuright: true
tagtitle: h2
---

Um dos pontos críticos no processo de desenvolvimento de software sem dúvidas é conseguir medir com precisão o esforço da equipe para o desenvolvimento de demandas de um produto de software.

Existem várias técnicas que prometem resolver esse problema crítico, mas nenhuma até hoje conseguiu chegar a um nível de acerto de 100% na estimativa. Isso ocorre porque o fator humano está em jogo e todos sabemos que esse fator é imprevisível.

A abordagem que será utilizada aqui para a medição da força de trabalho para tarefas e demandas de um produto de software desenvolvido pela Eagle será **Story Points**.

## Story Points

É uma unidade subjetiva de estimativa utilizada por times ágeis para estimar uma estória de usuário, ou seja, uma demanda fornecida por um usuário é considerada uma estória e essa estória será classificada por um número que identificará a sua complexidade no desenvolvimento, representando assim a quantidade de esforço requerido para implementá-la.

#### Por que estimar com Story Points e não por unidade de tempo?

Pontos de Estória são baseados em medidas relativas, por comparação de uma Estória contra uma Estória **padrão** previamente estimada. Medidas relativas tendem a ser mais acertivas em grandes amostragens, em comparação com a tentativa de se estimar isoladamente cada item (Estória).

Como uma analogia, é mais fácil dizer que a distância entre Guanhães e Rio Vermelho é três vezes maior do que a distância entre Guanhães e Sabinópolis, do que dizer que a distância entre Guanhães e Rio Vermelho é de 81km.

Times estimarão mais rapidamente se não tiverem de analisar e **acertar** o exato número de horas/dias necessários para concluir uma atividade.

#### Classificação das Story Points

Story Points são classificadas seguindo a sequência inicial de Fibonacci: `0, 0.5, 1, 2, 3, 5, 8, 13, 20, 40 e 100`. Cada um desses números são equivalentes a uma pontuação de complexidade de uma demanda/estória do usuário. Ainda em adição a essa sequência temos o símbolo `?` para identificar quando ainda existem dúvidas e não se consegue pontuar.

Para a estimação de demandas/estórias, será utilizado a sequência abordado na biografia de _SUTHERLAND_ que utilza a seguinte sequência de pontuação: `1, 2, 3, 5, 8, 13`.

Para que a complexidade seja aplicada aos pontos, devemos escolher uma estória/demanda **padrão** como elemento relacional. Utilizaremos duas estratégias para escolher qual estória será utilizada como **padrão** na comparação com as demais estórias:

- A primeira seria a escolha daquela que se acredita ser a menor estória e lhe atribuir o valor 1;
- A segunda seria escolher uma estória com tamanho médio e lhe atribuir um valor entre 3 e 8 inclusive;

Lembrando que a escolha do valor (ponto) para uma estória, deve levar em consideração o esforço necessário para se finalizar esta estória em comparação com o esforço necessário para se finalizar a estória padrão. Por exemplo, se utilizarmos a Estória **Cadastrar Endereço** como padrão e atribuimos o valor 1, poderíamos estimar que a Estória **Cadastrar Empresa** possuirá valor 3, pois seu tamanho é um pouco maior do que duas vezes o tamanho da estória padrão.

## Quando realizar as estimativas

As estimativas são realizadas durante a reunião de planejamento do sprint. A equipe definirá as estórias que serão estimadas/pontuadas através de Story Point, baseado na priorização previamente mapeada pelo **Product Owner (PO)**.

## Como realizar as estimativas

A realização da estimativa de cada demanda/estória acontecerá através de rodadas de `Planning Poker`, no qual consiste de um baralho com os 6 números da sequência de Fibonacci mais o símbolo `?` que cada membro da equipe portará.

![Planning Poker](img_2627.png "Planning Poker")

**Passos**

- Escolha das demandas/estórias que serão usadas como padrão;
- Escolhe-se uma demanda/estória por vez para ser avaliada;
- Cada integrante do grupo separa a carta que considera corresponder à quantidade de esforço exigida por aquela tarefa e coloca virada para baixo na mesa;
- Em seguida, todo mundo vira sua carta ao mesmo tempo. Se as opiniões de todos estiverem a uma distância de até duas cartas umas das outras (digamos, há um 5, dois 8 e um 13), a equipe apenas soma esses números, tira a média (neste caso 6,6) e atribui o ponto da sequência mais próximo da média, neste caso o 5 e passa para a próxima demanda;
- Caso as cartas escolhidas estiverem a uma distância de mais três múmeros presentes na sequência, quem selecionou a mais alta e a mais baixa explica seu raciocínio e depois todo mundo faz outra rodada para aquela demanda;

! Para a pontuação da demanda padrão e a estimativa deverá ser levado em consideração pela equipe de desenvolvimento. o ciclo de vida de desenvolvimento: `Análise, Desenvolvimento e Review`. E para equipe de testes: `Testes, Entrega`. A sugestão é que todos joguem a rodada, mas a equipe de teste tenha sua própria média somada com a média da equipe de desenvolvimento, ou seja, se a média da equipe de teste der a pontuação 5 e a de desenvolvimento der a pontuação 3, então será somado essas duas pontuações que equivalerá à pontuação final da demanda sendo 8.

! É fundamental que as rodadas do _Planning Poker_ sejam feitas pela equipe que executará o trabalho, e não por quaisquer avaliadores ou especialistas externos.

## Estimação da análise para demandas do tipo Legislação

Demandas do tipo legislação são muito críticas e podem ter grande impacto se não forem muito bem analisadas antes de serem classificadas para o _Product Backlog_.

**O Problema**

- Uma demanda desse tipo são descritas de acordo com normas técnicas de um órgão superior que regem regras de como aparentemente certa funcionalidade deve funcionar em um produto de software.

- Diante desse senário ao implementar uma demanda, a mesma pode futuramente sofrer alguma alteração ou até mesmo revogação implicando em alterações críticas no que já foi implementado. Isso poderá impacatar no tempo de desenvolvimento de outros projetos, pois tais demandas podem se tornar muito urgentes tendo impacto financeiro na empresa.

**Sugestão de solução**

- Ao aceitar uma demanda de Legislação, a mesma deverá passar por algumas etapas de análise (criar uma documentação e passos para esse processo) onde o objetivo é detalhar a fundo (tanto pelo analista como pelo desenvolvedor) essa demanda e identificar a probabilidade da legislação vigente ser alterada ou revogada.

- Após a análise completa, implementar tudo que é pedido na legislação para tentar evitar futuros atrasos no desenvolvimento.

- Se identificado alguma probabilidade de alteração ou revogação, a sugestão é planejar um sprint de correção para as demandas ou funcionalidades afetadas pela mudança.