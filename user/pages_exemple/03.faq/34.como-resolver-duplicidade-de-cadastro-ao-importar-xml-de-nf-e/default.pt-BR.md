---
title: 'Como resolver duplicidade de cadastro ao importar XML de NF-e?'
published: true
taxonomy:
    tag:
        - xml
        - duplicidade
        - cadastro
anchors:
    active: false
menuright: true
tagtitle: h2
content:
    items: '@self.children'
    limit: '10'
    order:
        by: date
        dir: desc
---

Ao importar uma nota fiscal o sistema verifica se os dados do XML de fornecedor e cliente, caso os dados cadastrados conflitem com os do XML o sistema apresenta erro de duplicidade.

**Procedimentos:**

* Verificar se os dados do fornecedor esta correto no cadastro de fornecedor. Exemplo CNPJ ou Inscrição estadual errados, ou cadastro em duplicidade.

* Verificar de dados contidos no XML estão corretos, como CNPJ e Inscrição Estadual.
 
**Situações:**

* Caso exista dois cadastro usando o CNPJ ou a Inscrição estadual será necessário inativar um ou acertar o cadastro.

* Caso os dados do XML esteja errado é possível editar o XML colocando os dados corretos, e é preciso ligar para o fornecedor e solicitar uma carta de correção.

