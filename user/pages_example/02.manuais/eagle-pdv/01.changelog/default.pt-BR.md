---
title: Changelog
taxonomy:
    categoria:
        - Manuais
    tag:
        - Releases
        - Changelog
anchors:
    active: true
menuright: true
tagtitle: h2
---

===
#### Legenda

1. [](#new)
    * Novo recurso implementado
1. [](#improved)
    * Melhoria de recurso existente
1. [](#bugfix)
    * Erro que foi encontrado e corrigido

---
## v2018.001
### 10/05/2018
1. [](#bugfix)
    * Incluído bloqueio de abertura do PDV caso a diferença de horário com o ECF seja superior a 60 minutos.

## v2017.006
### 18/12/2017

1. [](#new)
    * Implementada a restrição de instalação do Eagle PDV em sistemas operacionais inferiores ao Windows 7.
1. [](#improved)
    * Alterado o processo de sincronização de documentos para gravar o CCF dos cupons fiscais.
    * Inserido campos para informar o período para a geração do arquivo fiscal COTEPE 17/04.
1. [](#bugfix)
    * Alterado o processo de sincronização de produtos e documentos para manter o mesmo CSOSN no PDV que foi cadastrado no produto no retaguarda.
    * Padronizado o tamanho campo referência no PDV de acordo com o retaguarda.

## v2017.005
### 19/09/2017

1. [](#improved)
    * Refatorado o procedimento de geração de comissão buscando na tabela de preço em vendas feitas pelo PDV.
    * Alterado o procedimento de geração de cobrança, para garatir a compatibilidade com o retaguarda versão 2017.004.
    * Alterado o procedimento de sincronização de produtos, para garatir a compatibilidade com o retaguarda versão 2017.004.

    
## v2017.004
### 19/04/2017

1. [](#new)
    * Criada a configuração de cupom vinculado (confissão de dívida). Caso o meio d epagamento não tenha confissão vinculada não será gerado documento vinculado.
    * Foi incluída uma tela de busca de preços o acesso se dá através do menu suspenso ou pelo atalho CTRL+F5.
2. [](#improved)
    * O campo desconto máximo do meio de pagamento será validado no PDV.
    * Alterado o procedimento de importação das vendas para não calcular ICMS para produtos com CST %10 e %70 que são convertidos em 060.
3. [](#bugfix)
    * Refatorado o processo de sangria para limpa o valor da tela após o procedimento.
    