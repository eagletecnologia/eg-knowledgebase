---
title: 'Procedimento de Registro e Gestão do Ciclo de Vida de Issues'
published: true
date: '13-06-2017 15:34'
publish_date: '13-06-2017 15:34'
taxonomy:
    categoria:
        - Interno
    tag:
        - 'processo interno'
        - desenvolvimento
        - Issue
access:
    site.colaborador: '1'
anchors:
    active: true
menuright: true
tagtitle: h2
---

===

Uma _Issue_ é toda e qualquer demanda registrada no [Gitlab](http://192.168.1.5) com o intuito de ser implementada como correção de _bug_ ou nova funcionalidade.

As ações aqui descritas visam à utilização correta dos recursos do Gitlab, os quais vão ao encontro da metodologia [SCRUM](http://www.desenvolvimentoagil.com.br/scrum/) para gestão de desenvolvimento.

## Registro
Ao se registrar uma _Issue_ o usuário deverá estruturar seu registro da seguinte forma:
* Titulo sugestivo e objetivo<br/>
O titulo deverá descrever a demanda de forma sucinta para se seja fácil identificar o assunto que a mesma se refere de forma mais rápida possível.<br/><br/>
Exemplo:<br/>
**Original:** #579 - Erro no DANFE ao imprimir nota fiscal<br/>
**Esperado:** Impressão fora de ordem das parcelas no DANFE<br/><br/>
* Descrição detalhada contendo as características do problema ou da funcionalidade a ser implementada.<br/>
Para melhor qualidade da descrição da demanda, deverão ser utilizados os templates de abertura disponíveis para cada tipo de demanda.<br/>
Tratando-se de nova funcionalidade ou melhoria, descrever a finalidade, área de negócio ou módulo e se possível anexar exemplos de outras aplicações ou recursos similares.<br/>
Sendo funcionalidade exigida pelo governo anexar quando possível documentação ou legislação pertinente.<br/>
Quando se tratar de implementação de relatório apresentar um modelo ou definição dos dados(colunas, ordenações, grupos) que deverão ser recuperados e filtros.<br/><br/>
* Indicação do solicitante (Suporte ou Cliente final)<br/>
Quando se tratar do suporte não será necessário informar o mesmo.<br/><br/>
* Indicar prazo de entrega caso exista<br/>
Se tratando de demanda fiscal informar a data de obrigatoriedade

## Classificação
Ao se registrar uma demanda no Gitlab faz-se necessário a classificação das mesmas por meio das _TAGs_ disponíveis. Esta classificação possui a finalidade de prover informações sobre as demandas para que seja possível definir quais serão resolvidas primeiro, bem como facilitar a filtragem por tipo e característica.

O não uso ou o uso inadequado das _TAGs_ causará enormes prejuízos aos envolvidos, uma vez que será necessário um tempo maior para análise individual de cada _issue_ a fim de definir suas características.

Para a classificação das _issues_ serão adotados 3 tipos básicos:<br/>
* **_feature_**<br/>
Novo recurso a ser implementado<br/><br/>
Tags de priorização:<br/>
**_P. Estratégica_** - Prioridade de nível estratégico – Demanda com alto valor comercial ou que pode impactar um número considerado de clientes<br/>
**_P. Legislação_** - Prioridade Legislação - Adequação à legislação vigente<br/>
**_P. Sugestão_** - Prioridade de nível comum - Demanda de sugestão considerada sem valor no impacto comercial do  sistema<br/>
Tags de classificação:<br/>
**_discussion_** - Indica que Issue precisa ser discutida por algum motivo

* **_enhancement_**<br/>
Melhoramento de recurso existente<br/><br/>
Tags de priorização:<br/>
**_P. Estratégica_** - Prioridade de nível estratégico – Demanda com alto valor comercial ou que pode impactar um número considerado de clientes<br/>
**_P. Crítica_** - Prioridade Crítica - Demandas que podem causar a paralisação do sistema e ocasionar prejuízo financeiro ao cliente.<br/>
**_P. Sugestão_** - Prioridade de nível comum - Demanda de sugestão considerada sem valor no impacto comercial do  sistema<br/>
Tags de classificação:<br/>
**_discussion_** - Indica que Issue precisa ser discutida por algum motivo

* **_bug_**<br/>
Erro que ocorre no sistema<br/><br/>
Tags de priorização:<br/>
**_P. Crítica_** - Prioridade Crítica - Demandas que podem causar a paralisação do sistema e/ou podem ocasionar prejuízo financeiro ao cliente.<br/>
Tags de classificação:<br/>
**_confirmed_** - Indica se o teste foi reproduzido e confirmado<br/>
**_testFailed_** - Indica que a correção aplicada ao bug não resolveu o mesmo.<br/>
**_discussion_** - Indica que Issue precisa ser discutida por algum motivo

A _Tag_ **_testFailed_** somente deverá se utilizada para qualificar _issues_ que após terem sido finalizadas apresentarem falha nos testes de aceitação.

Caso o _bug_ tenha sido confirmado descrever da forma mais detalhada possível o procedimento de confirmação sendo anexado ao comentário todos os recursos utilizados.

## Alocação
Durante o registro de uma demanda não deverá ser informado o nome do usuário responsável e nem o _milestone_ na qual a _issue_ deverá ser solucionada.

A alocação de uma _issue_ a um _milestone_ deverá ser feita durante reunião de planejamento de [_Sprint_](http://www.desenvolvimentoagil.com.br/scrum/sprint_planning_meeting) onde todas as demandas serão analisadas, pontuadas e alocadas com base na priorização definida para cada demanda.

Durante o período de _sprint_ caso surja demandas de nível crítico deverá ser realizado uma analise e alocação da mesma caso seja necessário dentro do _sprint_ corrente ou no subsequente.

Demandas alocas em um _milestone_ que por ventura não sejam entregues dentro do prazo deverão ser automaticamente realocadas para o próximo _sprint_.

## Resolução
O processo de resolução se iniciará no ato da assinatura da _issue_ por um desenvolvedor.

Durante o processo de resolução toda é qualquer analise ou discussão a respeito da demanda deverá ser documentada via comentários e pela adição de anexos à _issue_ em implementação.

É de responsabilidade do desenvolvedor o registro do [_time_ _tracking_](https://docs.gitlab.com/ce/workflow/time_tracking.html) da _issue_. Tal registro é de fundamental importância para uma melhor alocação de tarefas ao longo do tempo.

## Fechamento
O fechamento de uma _issue_ deverá ser realizado somente pelo desenvolvedor que a tenha assinado, salvo em casos excepcionais onde o administrador ou gerente poderem fechá-las.

Ao fechar um _issue_ o desenvolvedor deverá realizar um comentário explicativo em linguagem de nível de usuário final contendo os detalhes da implementação para a composição do documento de _Release_. Tal descrição deverá contemplar apenas as alterações ou novos recursos implementados.

## Reabertura
A reabertura de uma _issue_ somente deverá ocorrer em caso de **_testFailed_**. Sendo necessário o detalhamento dos erros encontrados, bem como dos detalhes do ambiente utilizado para teste.

O _testFailed_ aqui mencionado se caracteriza pela não implementação de todas as características solicitadas ou pelo não funcionamento da solução implementada seja ela de forma total ou parcial.

Caso durante os teste sejam levantadas novas necessidades ou alterações na implementação as quais precisam ser implementadas para que a funcionalidade possa ser utilizada, a _issue_ deverá ser reaberta contendo todas as novas informações. Caso as novas necessidades não interfiram diretamente na utilização da funcionalidade a _issue_ deverá permanecer fechada e uma nova deverá ser aberta para a melhoria da demanda em teste.
