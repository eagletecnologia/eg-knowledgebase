---
title: 'Criar uma Página'
taxonomy:
    categoria:
        - 'Base de Conhecimento'
---

A criação de uma página na Base de Conhecimento é muito simples e rápido. A maioria das configurações que vem como padrão na criação não será necessário alterar.

### Login

Antes de criar a página, primeiro precisamos fazer o login como `moderador` ([Entenda como funciona os níveis de acesso](../bloqueando-paginas)).

![Tela de Login](print-pg-login.PNG "Tela de login")

Feito o login você verá uma página como mostrado abaixo:

![Página de Administração](print-pg-admin.PNG "Página de Administração")

Nessa página para criar uma página, clique no menu `Páginas` para acessar o grenciamento de páginas da Base de Conhecimento.

![Gerenciamento de Pàginas](print-pg-paginas.PNG "Gerenciamento de Pàginas")

### Configurações da Página

Agora clique em adicionar uma página para inserir as primeiras configurações.

![Primeiras Configurações](print-create-page.PNG "Primeiras Configurações")

Confira na tabela baixo a explicação de cada item da tela:

|Campo|Explicação|
|-----|----------|
|Título da Página|Aqui será o título que identificará a página e aparecerá nos tópicos recentes e menus|
|Nome da pasta|Para toda página criada é criada também uma pasta que guardará o arquivo da página, neste caso não é necessário colocar nada, pois ao digitar o título esse campo é preenchido automaticamente|
|Página Mãe|Selecione nesse campo quem será a página acima da qual você está criando. Isso é importante para a organização da Base de Conhecimento.|
|Template Pàgina|Esse campo define como a página será renderizada na plataforma. Muito cuidado ao selecionar essa opção, pois ela define o layout da página. Por padrão a plataforma aceita vários tipos de templates, mas somente três foram configurados para atender as necessidade da Base de Conhecimento. São eles: **Blog List**: Esse é o layout pai de todos, ele só será usado para criar mais categorias além das padrõe, FAQs e Materiais; **Lista de Tópicos:** Esse template será usado somente para toda e qualquer página que tiver páginas filhas. **Default:** Esse template é usado para todas páginas específicas que não possui filhas.|
|Visível|Esse campo não precisa alterar ele sempre pegará as configurações automaticamente de acordo com os campos preenchidos acima.|

Inserido as primeiras configurações, você acessará o formulário para escrever o texto da página ([Aprenda a formatar os textos na Base de Conhecimento](../sintaxe-markdown)).

![Formulário da Página](print-new-page.PNG "Formulário da Página")

### Aba Opções

Na aba opções serão inseridos os parâmetros da página referentes a data de publicação, metadados, categoria, tags e autor. Essas informações são importantes para tornar a página melhor ranqueada tanto nos Buscadores como na própria busca interna da Plataforma.

![Aba de Opções](print-tab-options.PNG "Aba de Opções")

|Sessão|Descrição
|------|---------|
|Publicando|Nessa sessão você irá inserir respectivamente a opção de publicar ou despublicar a página, a Data fixa que a página foi criada, a data de publicação e a data de despublicação caso você deseje que a página fique por um período determinado. Por fim temos o campo Metadado, onde serão colocados parâmetros como palavra-chave e resumo da página para melhorar o ranqueamento nos buscadores.|
|Taxonomias|Essa sessão é responsável por enquadrar a página em níveis de organização. Os campos respectivos são Categoria, tag e autor. As tags é interessante ter no máximo 3.|

### Aba Avançado

Essa aba você poderá editar as configurações que foram inseridos na primeira etapa da criação da página, além de outras opções mais avançadas que não serão necessárias alterar ou inserir na Base de Conhecimento atual.

![Aba Avançado](pring-tab-advanced.PNG "Aba Avançado")

### Aba Parâmetros

Essa aba é dedicada a algumas opções extras para a página que será criada. Os parâmetro adicionais nessa aba são a ACL para adicionar restrição de acesso ([Aprenda a bloquear páginas na Base de Conhecimento](../bloqueando-paginas)) e os parâmetros para as páginas do tipo `Lista de Tópicos`.

![Aba parâmetros da Página](print-tab-params.PNG "Aba parâmetros da Página")

Para as páginas do tipo `Lista de Tópicos` existe alguns parâmetros referentes ao máximo de ítens para mostrar, ordenação padrão, e ordem da ordenação respectivamente. Por padrão os itens serão ordenados pela data de alteração de forma descendente. Se você quiser montar uma ordenação crescente, basta mudar o parâmetro para `Padrão` e a direação para `Ascendente`. E antes de salvar habilite o campo `Prefixo numérico de pasta` na aba `Avançado`, dessa forma a plataforma irá atribuir um número na frente da pasta da página para proporcionar a ordeção crescente.
 
### Barra de Ação

Após criado o texto da página, você poderá fazer algumas ações como salvar, copiar etc.

![Barra de Ação](print-action-bar.PNG "Barra de Ação")

|Opção|Descrição
|-----|---------|
|Visualizar|Abra uma nova aba no link da página, essa opção é habilitada somente se você já estiver salvado a primeira vez.|
|Voltar|Volte para gestor de páginas.|
|Copiar|Essa opção te dá a habilidade de poder clonar a página criada, muito útil se precisar criar uma página com os parâmetros e configurações comuns.|
|Mover|Com essa opção você consegue mudar a ordem de visualização da página diante as outras do mesmo pai.|
|Apagar|Apaga a página permanentemente, muito cuidade a selecionar essa opção.|
|Gravar|Salva a página.|

### Boas Práticas

Agora falaremos das boas práticas para criação de um texto na Base de Conhecimento. Essas práticas não importantes para manter a informação inserida bem organizado na Base de Conhecimento e também ranquear de forma adequada nos buscadores, além de melhorar a acessibilidade.

1. **Títulos nas imagens**: Toda imagem que for inserida no texto deverá ser preenchido um título explicando brevemente o que há na imagem. Esse título deverá se colocado entre as tags `[]`;
2. **Inserção de Categorias e Tags**: A categoria na Base de Conhecimento será um ítem obrigatório para facilitar o sistema de busca interno. Obs: As categorias deverão sempre ser o nome da página Pai imediata, ou seja, se existir uma página onde a pai está imediatamente acima dela, então a sua categoria será o nome de seu pai. Se essa página for pai de uma outra, essa filha também deverá ter a categoria com o nome de seu ancestral. As tags não serão obrigatórias, mas são importantes também para melhorar o sistema de busca interno e facilita a busca de páginas relacionadas. Deverão ser inseridas no máximo 3 tags por página.
3. **Preenchimento do campo Metadado**: Não é uma prática obrigatória, mas para as páginas que forem públicas é interessante preencher para que os sistemas de busca ranqueiam mais rápita e facilite a busca pelo usuário que estiver buscando pela solução.


