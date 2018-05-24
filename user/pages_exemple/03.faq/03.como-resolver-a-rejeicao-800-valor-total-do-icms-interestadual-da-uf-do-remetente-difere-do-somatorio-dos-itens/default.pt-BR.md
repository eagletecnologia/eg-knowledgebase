---
title: 'Como resolver a rejeição 800 – Valor total do ICMS interestadual da UF do remetente difere do somatório dos itens?'
published: true
taxonomy:
    tag:
        - icms
        - 'rejeição 800'
        - interestadual
        - somatório
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

Esta mensagem ocorre quando ao emitir uma NFe nos Totais do documento o Valor do ICMS Interestadual para a UF do Remetente for apresentado valor que difere somatório do Valor do ICMS Interestadual para a UF do Remetente de cada item. 

Isso pode acontecer se nos totais da nota constar base de ICMS e nos itens não ou quando ocorre o contrário, tem ICMS nos itens e não consta na base de cálculo. Também pode ocorrer por questões de arredondamento onde a diferença for superior a R$ 0,01 centavo.
    
**Procedimentos:**

Para solucionar esta rejeição deve-se conferir se os itens tributados contêm a base de cálculo de ICMS, caso algum não tenha inserir a base. Verificar se o valor que está nos totais da NFe é igual ao somatório do valor de base do ICMS de cada item, caso seja encontrada alguma diferença deve-se colocar o valor correto. 
