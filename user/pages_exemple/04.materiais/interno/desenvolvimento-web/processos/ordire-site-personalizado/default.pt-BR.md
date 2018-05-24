---
title: 'ORDIRE - Site Personalizado'
taxonomy:
    categoria:
        - Processos
    tag:
        - 'processo interno'
        - 'site personalizado'
        - ordire
anchors:
    active: true
menuright: true
tagtitle: h2
---

> **FUNÇÃO** - Profissionais do setor de Websites

> **OBJETIVO PRINCIPAL** - Atingir as metas de qualidade nos processos de desenvolvimento de Site Personalizado

## ACR UM - BRIEFING

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Criar a pasta no **Storage** com o nome do cliente em `/WEBSITES/SITES EXPRESSO E PERSONALIZADO - PROJETOS /SITE PERSONALIZADO - ORÇADOS/<NOME_CLIENTE>`. Dentro da pasta do cliente crie um arquivo chamado `ACESSO.TXT`, este arquivo conterá todos os dados de acesso ao servidor de hospedagem, banco de dados, ftp, e-mail padrão entre outros;

2. For feito um estudo superficial sobre a área e o tipo de serviço ou produto que o cliente trabalha.

3. Entrar em contato com o cliente e marcar uma reunião em um dia que tanto o cliente como a equipe da Eagle estejam disponíveis e de acordo;

4. Coletar o maior número de informações relevantes ao negócio do cliente tendo como base o arquivo `Briefing` localizado na sessão anexo dessa página. Copie esse arquivo para a pasta do projeto criada anteriormente;

5. Estudar de forma mais profunda as informações coletadas e manter contato com o cliente caso surja alguma dúvida, crítica ou sugestão;

6. Organizar as informações documentando os principais recursos, ferramentas e possíveis problemas que venha a surgir durante o desenvolvimento do projeto.

## ACR DOIS – PROPOSTA

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Analisar os recursos, ferramentas e problemas definindo os custos e tempo do projeto;

2. Documentar essa análise com base no arquivo `Modelo de Proposta` localizado na sessão anexo. Copie esse arquivo para a pasta do projeto;

3. Enviar a proposta formatada para o cliente;

4. Reajuste na proposta caso não seja aprovado de imediato;

5. Caso a proposta seja aceita, mova a pasta do cliente criada em `SITE PERSONALIZADO - ORÇADOS` para `SITE PERSONALIZADO - ATIVO`. Caso contrário mova a pasta para `SITE PERSONALIZADO - NÃO APROVADOS` e não precisa seguir com o _ORDIRE_.

## ACR TRÊS – CRONOGRAMA

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Preencher o arquivo `Modelo de Cronograma` localizado na sessão de anexo dessa página, inserindo as atividades, datas e marcos do projeto. Copie esse arquivo para pasta do projeto;

2. Duplicar o card Site Personalizado com o check-list do processo de desenvolvimento localizado no quadro Web Site do trello e movê-lo para a coluna _Aberto_;

3. Agendar as entregas no Google Agenda, convidando o setor comercial e os interessados no projeto.

## ACR QUATRO – FORMULÁRIO DE CONTEÚDO

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Criar o formulário no Google Forms com os ítens necessários para coletar informações do negócio do cliente. Após a criação, enviá-lo para o e-mail principal do cliente e ligar para explicar sobre o preenchimento e prazos. O formulário deverá ser preenchido em no máximo 15 dias após o envio, caso contrário será colocado conteúdos fictícios no projeto. Deixar claro no formulário que os arquivos de mídia deverão ser enviados para o e-mail `websites@eagletecnologia.com`;

2. Caso o cliente atrase no preenchimento do formulário, ligar cobrando os conteúdos durante a execução do projeto.

## ACR CINCO – PREPARAR AMBIENTE DE DESENVOLVIMENTO

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Os projetos de Websites deverão ficar no servidor **Apache PHP 7.1**(Confira a documentação sobre os Servidores Web). Para a criação da pasta do projeto, abra um terminal e entre via SSH no servidor. Ao logar no servidor execute o comando `createproject.sh` com os parâmetros `<tipo_de_site>`(site_expresso ou site_personalizado) e `<dominio_do_site>`;

2. Baixar a versão recente mais estável do Joomla e copiar para a pasta que acabara de criar com o comando;

## ACR SEIS – WIREFRAME

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Fazer um estudo sobre projetos que está no mesmo ramo de negócio do
cliente;

2. Analisar o briefing com foco no que o cliente gosta e o que não gosta;

3. Fazer um estudo sobre tendências de design e mercado. Sugestões([Pinterest](https://br.pinterest.com/), [Behance](https://www.behance.net/), [Dribbble](https://dribbble.com/));

4. Esboçar em uma folha de papel o esqueleto das páginas principais do projeto com base nos estudos e análises realizados;

5. Com o esboço final em mãos, passar as ideias para o programa _Balsamiq Mockup_ ou outro similar;

6. Após finalizado as partes principais do projeto no programa, exportar para XML e PDF colocando os arquivos na pasta `layout` do projeto;

7. Marcar uma reunião com o cliente para apresentar e discuti o Wireframe;

8. Realizar as correções necessárias a pedido do cliente e enviá-lo para aprovação.

## ACR SETE – MOCKUP

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Definir as cores institucionais;

2. Definir a fonte;

3. Definir o Grid (1200);

4. Criar o layout estático das principais páginas (Desktop, Tablet, Smartphone) com base no Wireframe;

5. Salvar o layout em PSD, PDF, e JPG na pasta `layout` do projeto;

6. Marcar uma reunião com o cliente para discuti o layout;

7. Fazer as devidas correções questionadas pelo cliente e enviá-lo para aprovação.

## ACR OITO – REGISTRO DO DOMÍNIO (PULAR CASO O DOMÍNIO JÁ FOR REGISTRADO)

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Olhar junto ao cliente um nome de domínio adequado e que esteja disponível na [registro.br](http://registro.br). O colaborador poderá sugerir domínios que sejam mais ranqueáveis pelo google e com outras extensões que não sejam o **.com.br**, caso o domínio que o cliente escolheu não esteja disponível;

2. Após a escolha do domínio, deverá ser criado um ID na registro.br para que o cliente tenha a possibilidade de administrar o painel de domínios. Acesse: https://registro.br/cgi-bin/nicbr/idmng, para fazer o cadastro do usuário. Anote os dados do ID no arquivo `ACESSO.TXT`. No caso do cliente querer um domínio **.com**, esse registro deverá ser feito em alguma outra empresa registradora([Uolhost](http://www.uolhost.uol.com.br), [Locaweb](https://www.locaweb.com.br/default.html), [Godaddy](https://br.godaddy.com/)), o colaborador deverá analisar qual será os melhores planos para o cliente;

3. Ligar para o cliente explicando o processo de registro do domínio e alerta-lo que se o domínio não for pago, a entrega do site atrasará e ele não ficará disponível na internet.

## ACR NOVE – ASSINATURA NA REVENDA (ACR VÁLIDA SOMENTE SE O DOMÍNIO ESTIVER REGISTRADO E SE O CLIENTE NÃO TIVER CONTRATO COM OUTRA HOSPEDAGEM)

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Domínio estiver registrado;

2. Caso o domínio tenha sido registrado por terceiros, verificar junto ao cliente quem registrou e entrar em contato para pegar dados de acesso ao painel da empresa registradora. Esse procedimento deverá ser realizado para a mudança de autoridade DNS(Consulte documentação sobre Revenda);

3. Realizar o cadastro do cliente e assinatura do domínio no Painel Plesk da Revenda(Consulte documentação sobre Revenda);

4. Verificar se o cliente já usa e possui e-mail em outro servidor. Se sim deverá pegar os acessos a esse servidor e fazer a configuração MX na revenda. (Consulte documentação sobre Revenda);

5. Preencha o arquivo `ACESSO.TXT` na pasta do projeto com os dados inseridos no Painel Plesk e outras informações necessárias;

6. Criar os acessos no _LastPass_;

6. Mudar autoridade DNS na empresa registradora.

## ACR DEZ – HOSPEDAGEM EM SERVIDORES DE TERCEIRO (ACR VÁLIDA SOMENTE SE O DOMÍNIO ESTIVER REGISTRADO E SE O CLIENTE JÁ TIVER CONTRATO COM OUTRA HOSPEDAGEM)

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Olhar junto ao cliente os dados de acesso a esse servidor de hospedagem;

2. Inserir os dados de acesso no arquivo `ACESSO.TXT` na pasta do projeto;

3. Verificar versão do PHP. O pré-requisito mínimo para a instalação do Site Personalizado é a versão 5.6;

4. Caso o servidor esteja ok, criar um banco de dados e colocar os acessos no arquivo `ACESSO.TXT`;

5. Caso o cliente não tenha esses acessos ou os requisitos mínimos para a instalação do Site Personalizado, ver a possibilidade de hospedar o site na Revenda ou contratar uma outra hospedagem;

## ACR ONZE – INSTALAÇÃO DO CMS

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Descompactar a versão mais recente e estável do Joomla na pasta do projeto no Servidor Web;

2. Iniciar a instalação seguindo as recomendações:
* Nome do bando de dados seguirá a seguinte política de nome: Iniciar o nome com `bd` e ligar ao outro nome com `_`. O outro nome será o nome do site tudo minúsculo e tudo junto (caso aja dois nomes) e sem caracteres especiais. O servidor do banco será `mysql` sendo o usuário `root` e a senha definidas como `sistes@eagle`. O prefixo das tabelas, para questão de segurança, seguirá o padrão definido pelo CMS;
* Os dados de login do Super Administrador terá o usuário sempre como `Super`, a senha como `sites@eagle` e o e-mail como `websites@eagletecnologia.com`;
* Não é recomendado a instalação do conteúdo padrão devido ao lixo de informações que podem permanecer no site quando o mesmo for subido para o servidor remoto;
* Ainda na instalação clique na opção de instalar idiomas e selecione o idioma Português do Brasil.

3. Instalar Akeeba Backup Professional e configurar(Consulte documentação sobre Backup de Sites);

4. Instalar e configurar Editor JCE(Consulte documentação sobre Extensões Joomla);

5. Instalar Framework de Template(Consulte documentação sobre Gantry 5);

7. Configurar os Meta Dados principais no menu de configuração global, colocando a descrição do site e as palavras chaves relacionados ao conteúdo que terá no site.

## ACR DOZE – ARQUITETURA DA INFORMAÇÃO

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Identificar qual conteúdo será artigo simples (Artigos com texto e imagem) ou extensões (componentes, módulos, plugins e sistemas);

2. Definir as categorias do projeto e criá-las;

3. Criar os artigos simples marcando suas categorias;

4. Baixar, instalar e configurar as extensões. Todas extensões baixadas deverão ser colocadas na pasta `extensions` no Servidor Web;

5. Identificar se haverá algum sistema. Se sim, verificar se é possível desenvolver usando os campos personalizados do Joomla, caso contrário baixar e instalar a versão mais nova e estável do Seblod e desenvolver os sistemas;

6. Estruturar o menu principal de acordo com os artigos, extensões, sistemas e links externos;

7. Identificar qual conteúdo o usuário irá administrar;

8. Criar o menu de administração;

9. Aplicar técnicas SEO(Consulte documentação sobre SEO).

## ACR TREZE– TEMPLATE

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Configurações Iniciais do Template:
* Selecionar a cor primária e secundária;
* Selecionar a fonte;
* Definir o Rodapé;
* Definir as posições do template.
3. Desenvolver o template com base no Mockup. (Consulte a documentação sobre padrões de código);
4. Marcar uma reunião para apresentação do Template;
5. Fazer as alterações necessárias a pedido do Cliente e enviá-las para aprovação.

## ACR QUATORZE – CONTEÚDO

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Organizar os conteúdos enviados pelo cliente;
2. Fazer o tratamento de imagens e arquivos;
3. Definir prioridade de inserção;
4. Inserir os conteúdos;

## ACR QUINZE – LIMPEZA

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Esvaziar da lixeira artigos, categorias, módulos, componentes, menus, usuários, temas e mídias que não serão necessários após a publicação do site;
2. Na pasta dos arquivos Joomla, retirar todas as pastas e ou arquivos que forem desnecessários para o site funcionar;
3. Verificar dependências (CSS ou Javascript) que não estão em uso e eliminá-las;

## ACR DEZESSEIS – COMPATIBILIDADE

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Verificar compatibilidades com Firefox 45+, Chrome 50+, Safari 10+, Opera 40+ e IE 11/Edge (Consulte a documentação sobre problemas comuns de compatibilidade entre navegadores);
3. Colocar script para barrar o IE6, IE7, IE8, IE9 e IE10 pedindo o usuário para atualizar o navegador.

## ACR DEZESETE – ADAPTABILIDADE

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Analisar no projeto quais módulos serão escondidos em determinadas resoluções;
2. Criar a sessão para configuração dos media-quereis em cada arquivo referente às sessões do site;
3. Fazer o teste real em um Smartphone, tanto deitado como em pé;
4. Corrigir possíveis irregularidades encontradas no teste real;

## ACR DEZOITO – TESTES

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Testes de Usabilidade – Aplicar Teste (Observar se o site está fácil de navegar e se a interface não está confusa). Este teste deverá ser realizado ao longo do desenvolvimento do projeto(Consultar documentação sobre boas práticas de Usabilidade);
2. Testes de Portabilidade (Observar se o layout do site está respondendo bem aos dispositivos móveis e a navegadores diferentes – Firefox 45+, Chrome 50+, Safari 10+, Opera 40+ e IE 11/Edge;
3. Testes de Funcionalidade (Conferir se os links, páginas e sistemas do site estão respondendo de acordo com o proposto e observar e anotar qualquer erro encontrado);
4. Correção de Ortografia;
5. Correção de erros ou falhas apontados pelos testes.

## ACR DEZENOVE – MANUAL (Rever essa ACR)

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Identificar as áreas que serão administradas no site;
2. Criar os tutoriais passo a passo para cada processo que será administrável(Consulte a documentação sobre criação de tutoriais para sites e templates);
3. Salvar os arquivos gerados na pasta `manual` do projeto;
4. Criar uma pasta chamada `manual` dentro da pasta `administrator` no servidor remoto;
5. Enviar os arquivos do manual para essa pasta criando uma pasta para cada tutorial passo a passo e renomeando os arquivos HTM para index.html;
6. Criar uma página de ajuda colocando os links apontando para os arquivos do manual;
7. Criar o menu `Ajuda` no painel administrativo.

## ACR VINTE – PUBLICAÇÃO

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Realizar o backup da versão final para publicação;
2. Enviar backup via FTP para o servidor de hospedagem e instalar o site;
3. Bloquear o site;
4. Configurar o Ackeeba Backup Professional. (Consulte a documentação sobre as políticas de backup);
5. Configurar o Servidor de E-mail (Consulte a documentação sobre a Revenda);

## ACR VINTE E UM – DESEMPENHO

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Instalar e configurar o plugin [RokBooster](http://www.rockettheme.com/joomla/extensions/rokbooster) para melhorar a velocidade de carregamento das páginas;
2. Realizar os testes de desempenho:
- Verificar a velocidade do site utilizando a ferramenta [Pingdom](https://tools.pingdom.com/);
- Verificar a velocidade do site de forma manual utilizando um cronômetro. (_Verificar sem cache e com cache_);
- Corrigir arquivos que atrapalham no desempenho apontado pelas ferramentas;
3. Ativar compressão **GZIP** na configuração global do Joomla;
4. Siga essas métricas:
- Velocidade média satisfatória: até 5s;
- Velocidade média tolerada para sites grandes: de 8s a 10s;
- Velocidade média frustrante: > 10s;
5. Fazer o possível para que o desempenho do site bata essas métricas;

## ACR VINTE E DOIS – CONFIGURAÇÕES FINAIS

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Cadastrar o site no [Google Analytics](https://www.google.com/analytics/) (Consulte a documentação sobre pós-publicação);
2. Cadastrar o site no [Google Webmaster](https://www.google.com/webmasters/#?modal_active=none) (Consulte a documentação sobre pós-publicação):
- Gerar arquivo `sitemap.xml` ([http://www.xml-sitemaps.com/](http://www.xml-sitemaps.com/)). Antes de realizar esse procedimento desbloqueie o site e depois bloqueie novamente até a liberação;
- Configurar o arquivo `robots.txt`, colocando o endereço do `sitemap.xml`. Copie: **Sitemap: <domínio_do_site>/sitemap.xml**
3. Inserir as metatags Open Graph para Facebook (Título, Descrição e Imagem), para customizar o compartilhamento nas redes sociais ([Referência](https://developers.facebook.com/docs/sharing/best-practices) - Documentação oficial [Open Graph](http://ogp.me/) ).

## ACR VINTE E TRÊS – TREINAMENTO

Esta área chave de resultados estará satisfatoriamente cumprida quando:

1. Criar a pauta de treinamento listando os procedimentos que serão ensinados;
2. Agendar o dia do treinamento em conjunto com o cliente;
3. Aplicar o treinamento no dia agendado.

## ACR VINTE E QUATRO – LIBERAÇÃO

1. Verificar de forma geral todos os links do site;
2. Desbloquear o site;
3. Colocar site na página de Portfólio da Eagle;
4. Divulgar site nas redes sociais.
