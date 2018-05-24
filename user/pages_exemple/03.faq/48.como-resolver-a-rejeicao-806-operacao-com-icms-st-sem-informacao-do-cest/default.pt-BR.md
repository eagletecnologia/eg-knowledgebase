---
title: 'Como Resolver a Rejeição 806: Operação com ICMS-ST sem informação do CEST?'
published: true
taxonomy:
    tag:
        - 'rejeição 806'
        - cest
        - 'operação ICMS-ST'
anchors:
    active: false
menuright: true
tagtitle: h2
---

 Erro acontece quando for transmitido uma NF-e( Nota Fiscal Eletrônica ) , sem o Código Especificador de Substituição Tributária – CEST , de produtos com  CST ou CSOSN abaixo:
 
•	10 - Tributada com cobrança de ICMS por substituição tributária;
•	30 - Isenta ou não tributada com cobrança de ICMS por substituição tributária;
•	60 - ICMS cobrado anteriormente por substituição tributária;
•	70 - Com redução de base de cálculo e cobrança de ICMS por substituição tributária;
•	90 - Outros, desde que com a TAG vICMSST;
•	201 - Tributada pelo Simples Nacional com permissão de crédito e com cobrança do ICMS por substituição tributária;
•	202 - Tributada pelo Simples Nacional sem permissão de crédito e com cobrança do ICMS por substituição tributária;
•	203 - Isenção de ICMS do Simples Nacional para a faixa de receita, com cobrança do ICMS por substituição tributária;
•	500 - ICMS cobrado anteriormente por substituição tributária ou por antecipação;
•	900 - Outros, desde que com a TAG vICMSST.

Solução Sistema Eagle Gestão

Cadastro do produto-->Aba Tributação -->ICMS--> CEST--> Lupa , assim apresentando o código CEST , relativo ao NCM (Nomenclatura Comum Mercosul)  do produto.

* Caso apresente a mensagem : Nenhum Registro encontrado , deve consultar se o NCM do produto está correto,  ou se o CST ICMS do produto é realmente o indicado no cadastro. 
* Consulte a nota fiscal de entrada do produto, ou entre em contato com a contabilidade.
