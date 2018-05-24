---
title: 'Processo de resolução de conflitos em código fonte'
published: true
taxonomy:
    categoria:
        - Inteno
        - Desenvolvimento
access:
    site.colaborador: '1'
anchors:
    active: true
menuright: true
tagtitle: h2
---

===

Durante o processo de desenvolvimento de um sistema em equipe é quase impossível que não ocorra em algum momento conflitos de código, por tanto, é necessário que se entenda os motivos e adote certos processos para que se evite problemas durante a resolução de tais conflitos.

## Procedimentos

Em uma situação ideal os fontes produzidos deveriam ser autoexplicativos e autodocumentados o que infelizmente nem sempre é possível, seja pela arquitetura adotada, costume dos programadores ou mesmo a cultura da empresa.

Diante disto, a resolução de conflitos muitas vezes exige que os membros da equipe interajam entre si a fim de entender as alterações propostas no sistema. Esta interação á fundamental para que não se perca alterações por sobrescrita de código.

O entendimento das alterações realizadas é de fundamental importância para a resolução adequada dos conflitos, por tanto, não é possível simplesmente escolher de forma automática, aleatória ou por data de alteração qual versão deverá ser elencada como correta.

Em muitos casos, será necessário realizar a fusão das lógicas implementas a fim de se obter uma alteração que satisfaça as duas versões no que tange a funcionalidade desejada. Por tanto, o membro do time não deve trabalhar isoladamente. Deve sempre que julgar necessário questionar o colega que realizou a alteração conflitante.

O Git embora seja uma ferramenta excelente também pode cometer erros ao realizar os merges, mesmo que não ocorra conflitos não é garantido as fusões serem realizadas de maneira correta. Esta garantia somente poderá ser atestada mediante a realização dos testes. Testes estes que o desenvolvedor é obrigado a realizar todas as vezes que integra seu fonte à base de código do servidor.

A seguir serão descritos dois tipos de conflitos e os procedimentos que deverão ser adotados para suas resoluções.

### Resolvendo conflitos destacados pelo Git

Sempre que se realizar um merge ou rebase entre dois ramos poderão ocorrer conflitos seja no servidor ou na máquina local dos desenvolvedores. Independente de onde ocorra o conflito, o procedimento de resolução deverá ser o mesmo.

Para a resolução dos conflitos faz-se necessário a utilização de uma ferramenta de comparação de código para que seja possível visualizar as duas versões em paralelo. O desenvolvedor pode escolher a ferramenta de sua preferência.

O processo de resolução deverá seguir os seguintes procedimentos:

1. Abrir o arquivo de conflito com a ferramenta de comparação em modo de resolução de conflito.
2. Analizar as alterações de ambas as versões de forma detalhada e contextual, ou seja, deve-se analizar não apenas as linhas em conflito como também as demais linhas a fim de se determinar a real função das linhas afetas.
3. Após a compreensão das lógicas adotadas nas duas versões, o desenvolvedor deverá propor uma nova versão que mescle ambas as versões conflitantes ou que desprese uma delas.
4. Repetir o procedimento para todos os arquivos em conflitos.
5. Após a resolução de todos os conflitos, deverá ser realizado a compilação e o teste do sistema. Deverão ser testados todos os pontos do sistema que ocorreu conflito. Os testes deverão ser realizados com base nas duas implementações conflitantes.
6. Após os testes e a confirmação da resolução correta dos conflitos, deverá ser realizado o versionamento das soluções. A forma de execução deste procedimento dependerá de como a integração está sendo realizada, ou seja, depende se a integração é via _merge_ ou _rebase_. Consulte a documentaçâo do Git para maiores detalhes sobre.

Nos casos onde o conflito ocorre ao submeter um _Merge Request_, o desenvolvedor responsável pela abertura do MR deverá proceder com a resolução dos conflitos. Para tanto, deverá seguir o seguinte procedimento:

1. Atualizar locamente os ramos envolvidos
2. Realizar o processo de merge tal como o servidor realizará
3. Realizar a resolução dos conflitos como já descrito
4. Realizar a submissão das alterações para o MR.

! Os conflitos de DFM exigem de forma obrigatória e sem exceção a execução e conferência visual da tela afetada.

### Resolvendo conflitos destacados pelo ChangeVersion

Durante o processo de geração do script de update do banco de dados pode ser detectado conflitos de objetos sql (tables, store procedures, triggers).

Estes conflitos podem ocorrer devido ao fato dos objetos terem sidos alterados ao mesmo tempo por demandas distintas.

A ocorrência de conflitos nos scripts sql quando em quantidade elevada, podem indicar má conduta dos desenvolvedores quanto a aplicação das boas práticas de desenvolvimento. A utilização de bancos desatualizados pode influenciar de forma dramatica no número de conflitos.

Da mesma forma dos conflitos destacados pelo Git, a resolução de conflitos de sql deve ser realizada de forma meticulosa e com o máximo de atenção possível.

Sempre que for detectado um conflito, o desenvolvedor responsável pela compilação da versão deverá comparar os dois "objetos" conflitantes.

Aqui cabe destacar que é de fundamental importância que o membro do time entenda todas as alterações que foram realizadas nos objetos.

Como os conflitos são decorrentes da existência de duplicidade de objetos, ao resolver o conflito, deverá ser descartado o objeto da issue que será executada primeiro, exceto quando existir alguma dependência.

Exemplo:

> Ocorreram conflitos com o objeto "TPRODUTOS" nos arquivos Issue_1000.sql e Issue_1020.sql.
> Ao termino da resolução o objeto "TPRODUTOS" presente no arquivo Issue_1000.sql deverá ser removido em seu lugar, deverá ser adicionado um comentário informando sua remoção e o nome do arquivo de destino.

Após resolver os conflitos, deverá ser realizado os seguintes procedimentos:

1. Realizar o teste de atualiação de um ou mais bancos de dados
2. Testar todas as alterações conflitantes com base nas duas versões.
3. Comitar as resoluções

Pontos a serem observados durante a resolução dos conflitos de views:
* Foram adicionados ou removidos campos? Por qual motivo?
* Foi alterado os filtros da pesquisa? Por qual motivo?

## Reduzindo o número e a gravidade dos conflitos

A ocorrência de conflitos é algo que não é passível de se evitar, porem o uso de boas práticas pode reduzir muito o número e a gravidade dos conflitos.

A seguir serão listadas práticas que podem reduzir o número e a gravidade dos conflitos:

* Mantenha o banco de dados de desenvolvimento o mais atualizado possível
* Sempre atualize o ramo que estiver trabalhando com base no develop. Principalmente se o trabalho demandar muito tempo de codificação.
* Modularize melhor seus códigos. Evite utilizar métodos muito longos.
* Acompanhe o que os outros desenvolvedores estão fazendo e discuta com eles quando estiverem alterando algo que tem relação com a demanda que você está trabalhando.

## Ferramentas Indicadas

[WinMerge](http://winmerge.org/?lang=pt_br)

[Notepad++](https://notepad-plus-plus.org/)
