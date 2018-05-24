---
title: 'Registro de terminal em máquina com dois bancos de dados'
published: true
taxonomy:
    categoria:
        - 'Eagle Gestão'
        - Faq
anchors:
    active: false
menuright: true
tagtitle: h2
---

Quando acontece a necessidade configurar atalho de outro banco de dados em um computador que já possui o registro de terminal e se pede registro novamente, deve –se fazer a inserção do registro do terminal do banco de dados existente no novo banco a ser configurado. 
* Abra o Ibexpert, onde deverá existir os dois bancos de dados configurados.  
* Acesse o banco de dados que possui registro nesse computador , no nosso exemplo , o banco Matriz  e pesquise a tabela terminais .  
![](faq1.png)
* Abra a tabela Terminais , acesse a aba Data e vá ao último registro de terminal no banco , clique com botão direito do mouse e selecione Copy selected record(s) as INSERT
![](faq2.png)
* Abra o banco de dados que receberá o registro do terminal . 
![](faq3.png)
* Clique em Script Executive ou de Ctrl +F12
![](faq4.png)
* Abrirá tela para executar script , clique com botão direito do mouse  e selecione Paste ou Ctrl+V , ou seja, estará colando o registro do terminal que foi copiado do banco Matriz . 
![](faq5.png)
![](faq6.png)
* Após realizar a colagem execute  o procedimento em :
![](faq7.png)
* Confirme a execução clicando em YES 
![](faq8.png)
* Depois Clique em OK 
![](faq9.png)
* Finalizado, feche a tela e aparecerá uma mensagem perguntando se deseja salvar o script executado, clique em Yes. 
![](faq10.png)
* Salve o Script (o registro do terminal ) onde desejar e com nome que desejar .  
![](faq11.png)
Finalizado, feche o Ibexpert e abra o atalho que estava pedindo registro . 



