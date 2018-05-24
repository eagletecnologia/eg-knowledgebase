---
title: ' O antivírus está bloqueando alguns arquivos do Eagle Gestão, devo me preocupar? '
published: true
taxonomy:
    tag:
        - antivirus
        - avast
        - avira
        - exceções
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

Alguns programas antivírus ao fazerem o rastreamento padrão na pasta do Eagle Gestão bloqueiam determinados arquivos do sistema por não reconhecerem em sua base de dados a procedência dos mesmos.  
Essas situações são normais e compreensíveis pois tais arquivos são criados pela Eagle e livres de infecção quando a máquina tem manutenção periódica. 
O procedimento a ser feito para resolver essa questão é adicionar nas exceções do Antivírus os arquivos que estão sendo detectados, prevenindo que os mesmos ao serem rastreados impeçam o sistema de ser aberto. Lembrando que o mais seguro para o funcionamento do sistema é colocar a pasta completa do sistema.

**1.	Como adicionar exceções no AVAST ?**

Passo 1. Abra o painel do Avast e clique na aba “Configurações”;

Passo 2. Clique na opção “Antivírus”;

Passo 3. Role a página até achar a opção “Exclusões”. Esta ferramenta pode deixar uma pasta fora do escaneamento e os módulos de proteção do Avast. Para iniciar sua configuração, clique em “navegar”;

Passo 4. Procure e marque a pasta onde está o arquivo que deseja deixar fora do alcance do Avast e, em seguida, clique em “OK”, como mostrado na imagem abaixo;

Passo 5. Para finalizar o processo, clique em “OK”.

**2.	Como criar uma exceção no AVIRA ?**

Passo 1. Clique com o botão direito no ícone do Avira ao lado do relógio e selecione a opção Configurar; Caso o Avira Online Essentials esteja instalado em seu computador, a opção acima não aparecerá. Por este motivo, clique com o botão direito no ícone do Avira ao lado do relógio e selecione a opção Gerenciar Antivírus. Ao abrir o Avira, clique em Extras ; Configuração.

Passo 2. Ao abrir a janela Configuração, vá em Proteção do PC ; System Scanner ; Varrer ; Exceções. Clique no botão "...", selecione o arquivo que não será verificado pelo Avira e clique em Adicionar.

Passo 3. Após criar uma exceção no System Scanner, vá em Realtime Protection ; Varrer  ; Exceções. Há dois tipos de exceções, que são  para processos ou arquivos.

•	Para arquivos acessados por processos: na área "Processos a serem omitidos pelo Realtime Protection", clique no botão "..." para selecionar o arquivo executável ou clique no botão "Processos..." para selecionar o processo ativo em seu computador e clique em Adicionar. 
Obs.: Neste caso, todos os acessos de arquivo dos processos dessa lista são excluídos do monitoramento do Real-Time Protection, sendo útil, por exemplo, com soluções de backup ou bancos de dados.

•	Para arquivos: na área "Objetos a serem omitidos pelo Realtime Protection", clique no botão "..." e selecione o arquivo que não será verificado pelo Guard do Avira Antivir e clique em Adicionar >>,
Em seguida clique em Aplicar e em OK.

