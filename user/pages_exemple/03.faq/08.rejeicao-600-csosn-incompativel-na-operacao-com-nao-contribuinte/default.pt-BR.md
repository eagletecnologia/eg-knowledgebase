---
title: ' Rejeição 600 - CSOSN incompatível na operação com Não Contribuinte.'
published: true
taxonomy:
    categoria:
        - 'rejeição 600'
        - 'csosn incompatível'
        - contribuinte
anchors:
    active: false
menuright: true
tagtitle: h2
---

A Rejeição 600 acontece quando for emitida uma NF-e para **Destinatário Não Contribuinte do ICMS** com o **Código de Situação da Operação - Simples Nacional (CSOSN)** diferente da relação abaixo:

102 - Tributação SN sem permissão de crédito.

103 - Tributação SN, com isenção para faixa de receita bruta.

300 - Imune.

400 - Não tributada pelo Simples Nacional.

500 - ICMS cobrado anteriormente por substituição tributária ou por antecipação.

Exceções a regras

* A regra de validação 600 não se aplica para NF-e de entrada.
* A regra de validação 600 não se aplica nas operações com CFOP de conserto ou reparo (CFOP 5915, 5916, 6915 e 6916) ou de remessa para demonstração dentro do Estado (CFOP 5912 e 5913).
* A regra de validação 600 não se aplica, em produção, para NF-e com data de emissão anterior a 01/07/2016.

Consulte o contador para saber qual CSOSN deve ser usado: 102, 103, 300, 400 ou 500. Corrija a nota, colocando o CSOSN correto para conseguir transmitir a NF-e.
