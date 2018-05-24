---
title: 'Liberação de Versão do Eagle Gestão'
published: true
date: '26-07-2017 14:32'
taxonomy:
    categoria:
        - Interno
    tag:
        - processos
        - padrões
access:
    site.colaborador: '1'
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

===

O processo de liberação de versão e o resultado das demandas definidas pela equipe no início do mês que foram implementadas durante três semanas e liberadas para testes durante o período de uma semana. As funcionalidades são desenvolvidas utilizando bancos de dados de clientes que são atualizados com a última versão de _relesase_. Caso a nova funcionalidade demande criação ou alteração de objetos do banco de dados deve-se gerar o _script_ referentes a esta funcionalidade e anexá-los na issue e atualizar o banco de dados de desenvolvimento. No dia da liberação da versão o banco de dados de desenvolvimento deverá ser comparado como banco de dados de _hotfix_ para que seja gerado o script de atualização da versão. O setor de testes deve ser instruído a comparar os bancos de dados atualizados com o script da versão de desenvolvimento.


## Preparando a Liberação da Versão

Antes que se possa realizar o processo de _build_ faz-se necessário realizar algumas tarefas de preparação para a liberação da versão.

As tarefas de pré-build devem ser realizadas de forma manual em todas as liberações de versão, sendo de extrema importância que o responsável tenha total atenção e cuidado em suas execuções.

! Sempre certifique-se que as tarefas foram executadas por completo e com sucesso.

### Atualização das Libs e Frameworks

A atualização das _libs_ e _frameworks_ utilizados no desenvolvimento do sistema não deve ser executada em todas a liberações de versão. Somente de ver realizado como parte da liberação quando se detectar necessidade para correção de algum _bug_.

As atualizações devem de preferência serem realizadas no inicio do desenvolvimento de uma nova versão para que todas as alterações das _libs_ e/ou _frameworks_ sejam testadas e se necessário que o sistema seja alterado para suportar as alterações.

Caso seja necessário realizar a atualização de algum recurso de terceiros, essa atualização deverá ser realizada apenas nas liberações de [versão de teste e homologação](#versao-de-teste-e-homologacao) e num deverá ser feita na liberação de [versão final de produção](#versao-final-de-producao).

### Geração do Script de Atualização do Banco de Dados

O processo de geração do arquivo de atualização do banco de dados é realizado de forma automatizada pelo utilitário ChangeVersion.

Uma vez que todas as demandas alocadas para a versão estejam fechadas e que os scripts de alteração do banco de dados estejam salvos em arquivos na pasta da versão localizada em "C:\development\eagleerp\scripts\(número da versão em desenvolvimento)" execute o utilitário.

Caso não ocorrá erros ou conflitos será gerado um novo arquivo de update na pasta "C:\development\eagleerp\src\subprojects\Updater\resources\config\scripts", nomedo no formato "update(número da versão sem pontos).sql".

Juntamente com o arquivo de _update_ serão atualizados os seguinte arquivos localizados no diretório "C:\development\eagleerp\src\subprojects\Updater\resources\config":
* **resources.rc**<br/>
Arquivo de configuração do gerador de arquivos de recurso.<br/>
Este arquivo é responsável por listar todos os scripts que deverá compor o arquivo de recurso que será carregado pelo utilitário de _update_ no ato de atualização do banco de dados.
* **updates.conf**<br/>
Arquivo de configuração utilizado pelo utilitário de _update_.<br/>
Este arquivo é reponsável por listar as versões e suas ligações de atualização, ou seja, diz ao utilitário a sequência de atualização entre as versões.
* **versions.conf**<br/>
Arquivo de configuração utilizado pelo utilitário de _update_.<br/>
Este arquivo indica quais versões são suportadas pelo utilitário de update.

### Atualização do Banco de Instalação

O banco de dados de instalação é um banco de dados vazio que fica localizado na pasta "C:\development\projects\eagleerp\setup\resources\eagleerp.fdb". 

! Este banco deve ser atualizado para versão na qual deve ser gerado o instalador. 

Atualize o banco de dados com a versão que será gerada o instalador.

Lembre-se de comparar o script de DDL deste banco atualizado com o DDL de outro banco para garantir que são idênticos.

## _Build_ do Projeto

O processo de _build_ consiste de várias tarefas a serem executas de forma automática com o intuito de gerar ao final do processo os executáveis de atualização e instalação do sistema nos modos _Release_ e _Debug_.

O _build_ de projeto deverá ser realizado por meio do _bat_ _script_ "BuildDelphiXE8.bat" que se encontra na pasta "C:\development\eagleerp\setup".

Este _script_ realizará todas a tarefas e ações necessárias para a construção do projeto bem como geração dos arquivos de instalação e atualização.

Durante sua execução poderá ser solicitado ao operador que se realize alguma tarefa não automatizada, por tanto, sua execução deverá ser acompanhada de perto pelo desenvolvedor responsável pela liberação da versão.

Ao término da compilação os arquivos de instalação e de atualização serão gerados no diretório "C:\development\eagleerp\setup\Output". Neste ponto o desenvolvedor deverá realizar a publicação da versão.

A seguir será descrito as etapas do processo de _build_ bem como possíveis problemas e correções.

### Compilação dos Projetos e Geração dos Executáveis

Nesta etapa são executas todas as tarefas de geração dos arquivos de recurso e executáveis que compõem o sistema Eagle Gestão. 

As tarefas executas durante esta etapa sâo:

1. Geração do arquivo de recurso dos relatórios
2. Geração do arquivo de recurso das imagens utilizadas para estilização de cada expertise
3. Compilação do projeto via [MSBuild](https://github.com/Microsoft/msbuild)

<a name="compactacao-dos-executaveis"></a>
### Compactação dos Executáveis

Nesta etapa os executáveis gerados pela etapa de compilação serão comprimidos pelo utilitário [upx](https://upx.github.io/). Está compactação embora não seja obrigatório para o funcionamento do sistema reduz consideravelmente o tamanho final do executáveis.

Esta compactação é de extrema importância para o suporte, um vez que a grande maioria do suporte aos clientes é realizado de forma remota e as atualizações se faz por meio deste canal de atendimento. De tal forma, executáveis menores podem ser transferidos de forma mais rápida para os clientes.

### Assinatura dos Executáveis

Nesta etapa será realizado a assinatura dos executáveis que compõem instalação do Eagle Gestão para evitar problemas com antivírus e ferramentas de diagnóstico utilizadas para aceso a site de bancos.

Todos os executáveis serão assinados com o certificado da Eagle Tecnologia.

Para detalhamento do processo de instalação e configuração das ferramentas envolvidas acesse [aqui](../instalacao-do-ambiente-de-desenvolvimento-em-delphi#configurar-utilitrio-de-assinatura-digital).

### Geração do Instalador

Nesta etapa será gerado o instalador do sistema Eagle Gestão por meio do utilitário [Inno Setup](../instalacao-do-ambiente-de-desenvolvimento-em-delphi#instalao-do-utilitrio-inno-setup).

O Inno Setup utilizará o arquivo de configurações "C:\development\eagleerp\setup\INSTALL.iss" para gerar o Instalador.

### Geração do Atualizador

Nesta etapa será gerado o utilitário Updater que é responsável por atualizar uma instalação do Eagle Gestão.

A geração do Updater se dar em 4 fazes:

1. Geração do executável de atualização da instalação<br/>
Este executável é gerado por meio do utilitário Inno Setup que utilizará o arquivo de configuração "C:\development\eagleerp\setup\UPDATE.iss".

2. Geração do arquivo de recurso com os scripts de atualização do banco de dados<br/>
Por meio do utilitário brcc32, executa-se a compilação do arquivo de recursos que possuirá os _scripts_ de atualização do banco de dados.

3. Geração do Utilitário Updater<br/>
Após a geração do executável de atualização da instalação e o arquivo de recursos, o utilitário Updater será compilado, incorporando o arquivo de recurso e o executável.

4. Compressão do Utilitário Updater<br/>
Para a redução do tanho do executável do utilitário Updater, é executado uma [compressão via upx](#compactacao-dos-executaveis).

## Publicando Instalador e Atualizador

Ao término do processo de buid o desenvolvedor responsável pela liberação da versão deverá publicar os executáveis de instalação e atualização do sistema.
Tal ação deverá seguir procedimentos distintos a depender do tipo de liberação que está sendo realizada.

Tipos de liberação de versão:

<a name="versao-de-teste-e-homologacao"></a>
* **Versão de Teste e Homologação**<br/>
Versão liberada com o intuido de ser testada pelo setor de qualidade ou homologado pelo **_Product Owner_**.<br/>
Os arquivos deverão ser cópiados para a pasta "\\\192.168.1.2\desenvolvimento\..."

* **Versão Interna (Não aplicável e clientes ou parceiros)**<br/>
Versão liberada com o intuido de limitar o tamanho do atualizador do banco de dados ou pelo processo de desenvolvimento ter excedido o tempo máximo de desenvolvimento.<br/>
Os arquivos deverão ser cópiados para a pasta "\\\192.168.1.2\desenvolvimento\..."

<a name="versao-final-de-producao"></a>
* **Versão Final de Produção**<br/>
Versão final estável e funcional que poderá ser utilizada pelos clientes finais.<br/>
Os arquivos deverão ser cópiados para a pasta "\\\192.168.1.2\devsup\..."

Após a publicação dos executáveis deverá ser comunicado aos setor de qualidade ou **_Product Owner_** tal fato.
