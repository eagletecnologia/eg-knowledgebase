---
title: 'Como resolver quando ao tentar transmitir uma NF-e é exibida a mensagem de falha na validação dos dados?'
published: true
taxonomy:
    categoria:
        - 'falha na validação'
        - 'emissão de nf-e'
        - xml
anchors:
    active: false
menuright: true
tagtitle: h2
---

O erro referente a falha de validação acontece antes de enviar a NF-e para a SEFAZ e está relacionado a informações que invalidam o XML. 

Inicialmente verifique se o cadastro do destinatário está com todas as informações corretas CPF, CNPJ, IE. (Inscrição Estadual) endereço e se está identificado com as informações fiscais corretas.

**Não Contribuinte ICMS :** Não possui inscrição Estadual ou é pessoa Física -Tipo consumidor Final.

**Contribuinte de ICMS :** Possui inscrição Estadual - Tipo Consumidor Normal.

 Caso não seja o cadastro do destinatário :
 
1. Abra o arquivo XML com o bloco de notas e copie todo o conteúdo do arquivo. 

2. Acesse o site [Validador XML- SEFAZ RS ](https://www.sefaz.rs.gov.br/nfe/nfe-val.aspx) 

3. Cole o conteúdo a ser validado e clique no botão validar.

Este processo tem por finalidade identificar inconsistência nos arquivos XML. Uma vez identificada, as inconsistências serão mostradas. Para a emissão da NFE será necessário realizar a modificação do que originou a falha na validação.
 
