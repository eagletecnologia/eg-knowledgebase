---
title: 'Ao sincronizar os pedidos do Falcon Fv com o Eagle Gestão, alguns pedidos não são baixados, como resolver?'
published: true
taxonomy:
    tag:
        - pedidos
        - FalconFv
        - sincronizar
anchors:
    active: false
menuright: true
tagtitle: h2
---

A não exibição de um pedido na tela de orçamentos do ERP não necessáriamente representa um erro de sincronização propriamente dito. Em alguns casos os dados foram recebidos pelo sincronizador e no momento da consolidação junto ao ERP ocorreu alguma falha, o que impediu o registro do mesmo como orçamento.
Para solucionar tal problema, primeiramente será necessário investigar o que realmente ocorreu. Para isso execute os procedimentos invertigatórios para que seja possivél enquadrar a falha em uma das situações já registradas e suas correções.
 
Procedimentos:
1.	Verificar qual o último pedido sincronizado com sucesso registrado no ERP.
2.	Verificar no WS a existência de pedidos posteriores ao último registrado no ERP.
3.	Verificar na tabela FV_Pedidos se os pedidos foram sincronizados e não consolidados.
4.	Verificar se os pedidos forma sincronizados e faturados.
 
Situações:

* Caso os pedidos estejam no WS e não foram baixados para o ERP e não existam pedidos posteriores que foram sincronizados com sucesso, tentar desbloquear a sincronização dos pedidos pela interface de desbloqueio informando a data e hora base que deverá ser posterior à data e hora do último pedido sincronizado com sucesso e anterior a data e hora do primeiro pedido não sincronizado.
* Caso os pedidos estejam no WS e não foram baixados para o ERP e existam pedidos posteriores que foram sincronizados com sucesso, o procedimento de desbloqueio não deverá ser realizado. Esta ação poderá gerar novos problemas uma vez que existem pedidos sincronizados e sua nova sincronização causará excessão no banco de dados do ERP. Neste caso, a melhor ação será alterar a data e hora de gravação dos pedidos no WS para um momento posterior à última sincornziação do ERP. É necessário observar que não se pode informar uma data e hora futura.
* Caso os pedidos tenham sido baixados e registrados na tabela FV_Pedidos mas não constem na lista de orçamentos. Nesta situação deve-se verificar se a flag de consolidação dos pedidos estão ativa.
Uma flag não ativa pode indicar que ocorreu algum tipo de erro durante a consolidação, tente executar a procedure de importação de pedidos, caso ocorra algum erro, os mais comuns são ocasionados por exclusão de registros tipo clientes ou meios de pagamento, solucione tais problemas e repita a execução da procedure.
* Caso a flag esteja ativa e os pedidos não constem na tela de orçamento, o mais provável é que forma faturados, diante disto consultar todos os pedidos faturados para confirmação.
