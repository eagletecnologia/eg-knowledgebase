---
title: 'Como configurar acesso em  mais de um banco de dados na mesma maquina ? '
published: true
taxonomy:
    tag:
        - 'banco de dados'
        - acesso
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

1.	Vá a pasta do sistema faça uma copia do banco e renomeie o arquivo. Veja exemplo abaixo:
![Renomeação de banco ](Banco%20Duplicado.png)

2.	Abra o arquivo aliases na pasta do firebird, este arquivo fica em: C:\Program Files\Firebird\Firebird_2_5\aliases.conf e crie os aliases para os bancos conforme o exemplo abaixo.
![Configuração de Aliases](Configura%C3%A7%C3%A3o%20de%20Aliases.PNG)

3. Deixe o localConf configurado com um dos alias conforme a exemplo abaixo.

![ Configuração de localconf](Configura%C3%A7%C3%A3o%20de%20Local%20Conf.png)
4. Vá à área de trabalho e faça uma cópia do atalho do Eagle Gestão.

5.	Renomeie um dos atalhos colocando um nome diferente do outro.
	
6.	Clique com o botão direito em um dos atalhos e clique em propriedades.
	
7.	Vá até o final do destino (depois das aspas) e configure o caminho com do banco inserindo NULL NOME_DA_MAQUINA NOME_DO_BANCO. No exemplo ficará. NULL LOCALHOST FISCAL conforme mostra a imagem abaixo.

![ Configuração de atalho](Configura%C3%A7%C3%A3o%20de%20Atalho.png)

8.	Clique em aplicar e ok. Teste para ver se os dois atalhos estão abrindo.