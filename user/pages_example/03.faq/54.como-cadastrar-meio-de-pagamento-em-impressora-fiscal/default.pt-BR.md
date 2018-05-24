---
title: 'Como cadastrar meios de pagamento em Impressora Fiscal ECFTeste'
media_order: '1.png,2.png,3.png,4.png,5.png,6.png'
published: true
taxonomy:
    categoria:
        - 'impressora fiscal'
        - 'Eagle PDV'
    tag:
        - cadastro
        - 'meio de pagamento'
anchors:
    active: true
menuright: true
tagtitle: h2
content:
    items: '@self.children'
    limit: '10'
    order:
        by: date
        dir: desc
---

Dependendo a necessidade do seu cliente, e também da impressora que ele está utilizando pode ser necessário realizar alguns cadastros de forma manual na impressora, como meios de pagamento visto que, nem todos os meios de pagamento vem cadastrado.

!! É importante informar que esses cadastros são irreversíveis, ou seja, ficaram registrados na impressora, portanto sempre confira antes a real necessidade de cadastrar essas informações, seja com o cliente ou com o contador.

## Como conectar ao ECFTeste

! O aplicativo que é utilizado para realizar esse tipo de procedimento por padrão da Eagle é o ECFTeste. Ele estará  instalado na pasta do Eagle PDV.
1.	Após abrir o aplicativo do ECFTeste, primeiro você deve conectar a impressora e configurar a conexão, informando o modelo, porta e clicando em ativar.
![Ativar Impressora Fiscal](1.png)
2.	Depois de ativar, caso tenha alguma duvida sobre os dados que já se encontram gravados na impressora é possível verifica-los através do menu Variáveis -> Ler Todas as Variáveis.
![Ler Todas variáveis](2.png)

## Cadastrando meio de pagamento

1.	Após confirmar os dados que serão gravados, para cadastra-los deve-se acessar o menu Utilitários e selecionar a opção que deseja cadastrar. 
![Acessar cadastro de forma de pagamento](3.png)
2.	Insira o nome da forma de pagamento que será cadastrada (ex: Cartao Debito), e clique em Ok.
![Cadastrar forma de pagamento](4.png)
3.	Importante que para poder vincular o meio de pagamento cadastrado com o meio de pagamento que se encontra no Eagle Gestão, sempre selecione a opção Yes quando perguntar se deseja permitir vincular o meio de pagamento, caso contrario você não poderá realizar essa vinculação, o que pode acarretar em transtornos futuros.
![Confirmação para vincular](5.png)
4.	Por fim se o cadastro estiver correto clique em Yes novamente.
![Confirmar cadastro de meio de pagamento](6.png)

! No LocalConf do Eagle PDV é necessário vincular os meios de pagamento cadastrados na impressora aos meios de pagamento do Eagle Gestão.


