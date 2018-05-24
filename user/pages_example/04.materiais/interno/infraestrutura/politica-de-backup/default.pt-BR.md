---
title: 'Política de Backup'
taxonomy:
    categoria:
        - 'Políticas e Regras'
anchors:
    active: true
menuright: true
tagtitle: h2
---

===

Para garantir a integridade e segurança dos dados, a Eagle Tecnologia possui uma política de backup que é feita de forma automática utilizando 3 mídias de armazenanmento, sendo duas locais e uma em Nuvem.

A Eagle Tecnologia possui 2 Storages no qual um deles é usado para acesso direto pelos colaboradores e o outro para fazer o backup espelhado dele.

## Especificações dos Storages

### Storage ShareCenter by D-link

Usado para leitura, escrita e gravação de dados gerados em todos os setores da Eagle Tecnologia. Cada colaborador tem seu acesso restrito à pasta do setor no Storage. Caso ainda não tenha o acesso, favor entrar em contato com a Diretoria para obter o acesso.

**Informações do Disco**

* **Endereço de Rede**: 192.168.1.2
* **Nome**: Storage
* **Nome do Volume**: Volume_1
* **Tipo de Volume**: RAID 1
* **Capacidade**: 500GB

**Pastas Mapeadas em Volume_1**

* ADMINISTRATIVO
* COMERCIAL
* DESENVOLVIMENTO
* DEVSUP
* DIRETORIA
* MANUTENCAO
* PUBLICO
* REVENDAS
* SUPORTE

### Storage Seagate Personal Cloud

Usado para fazer o backup de dados da Eagle Tecnologia. O Personal Cloud mantém as rotinas de backup automático do _Storage ShareCenter by D-link_ e dos Servidores de Desenvolvimento.

**Informações do Disco**

* **Endereço de Rede**: 192.168.1.4
* **Nome**: Seagate Personal Cloud
* **Capacidade**: 3TB

## Backup pastas dos Setores

Todos os backups para o Personal Cloud são feitos diariamente com excessão do domingo depois do expediente de forma espelhada, ou seja, é feita uma cópia idêntica dos dados de origem.

### Rotinas de Backup Local

Backups realizados dentro da rede interna da Eagle.

|Nome|Pasta de Origem|Pasta de Destino|Horário|Descrição|
|----|---------------|----------------|-----------------|
|SECTORS_bkp|`STORAGE/Volume_1/`|`administrador/EAGLE_Backup/SECTORS_bkp`|21:00|Backup de todos os dados do Storage ShareCenter by D-link|

### Rotinas de Backup na Nuvem

Backup realizados para a Amazon S3. Essa rotina é feita do Personal Cloud para a Amazon, ela não acessa qualquer outra mídia interna. O Bucket utilizado para o backup é `storage-eagletec`. Para ter acesso a API do S3 para realizar backups via linha de comando, favor entrar em contato com a Gerência de Desenvolvimento.

! Os backups enviados para nuvem não deletam arquivos no destino.

|Nome|Pasta de Origem|Pasta de Destino|Horário|Descrição|
|----|---------------|----------------|-----------------|
|sectors_bkp|`administrador/EAGLE_Backup/SECTORS_bkp`|`AWS-S3/storage-eagletec/sectors_bkp`|Aos sábados às 13:00|Backup dos arquivos gerados nos Setores da Eagle Tecnologia para as Nuvens AWS-S3.|

!! O processo de backup do Personal Cloud para a AWS ainda não está funcionando. Está acontecendo algum problema que ainda não foi identificado.

! Para criar uma rotina de backup será necessário entrar em contato com a Gerência de Desenvolvimento e Diretoria para agendar uma reunião e decidi a viabilidade e ocorrência do backup.

Ao criar uma rotina, manter sempre o padrão de nomes implementados no Personal Cloud. Ex: `<nome>_bkp`.

## Backup Banco de Dados Falcon FV

O backup é feito diariamente durante 5 períodos do dia e sincronizado diretamente para nuvem `AWS S3` para bucket `storage-eagletec` no prefixo `falconfv_bkp`.

|Pasta de Origem|Pasta de Destino|Horário|Descrição|
|---------------|----------------|-----------------|
|`~/backups/falcon_fv`|AWS-S3/storage-eagletec/falconfv_bkp|00:00, 09:00, 12:00, 15:00 e 18:00|Backup banco de dados do Falcon FV|

O script de backup está localizado na pasta `~/cronjobs/backup_db_falconfv.sh`. Quando rodado é feito uma conexão com o banco de dados da aplicação, realiza o comando para gerar o arquivo `.sql` com o backup e finalmente é zipado e enviado para `AWS S3`. É mantido os 25 backups mais recentes.

## Backup volumes dos containers Docker

Backup dos serviços hospedados no servidor `192.168.1.10`. Todos os serviços são gerenciados através do [Docker](https://www.docker.com/). Acesse a [documentação dos serviços docker](https://ajuda.eagletecnologia.com/materiais/interno/desenvolvimento-web/servidores) para saber mais.

O backup é feito diariamente e diretamente para nuvem `AWS S3` para bucket `storage-eagletec` no prefixo `docker_bkp`.

|Pasta de Origem|Pasta de Destino|Horário|Descrição|
|---------------|----------------|-----------------|
|`~/docker/backup`|AWS-S3/storage-eagletec/docker_bkp|00:00h|Backup completo volumes dos Containers Docker|

O script de backup está localizado na pasta `~/cronjobs/backupcontainersvolumes.sh`. Quando rodado ele executa uma compactação da pasta `~/docker` em formato `zip`, depois limita a quantidade de arquivos em somente os 3 mais recentes e faz a sincronização dos arquivos compactados para `AWS S3`.

## Backup GitLab

O backup é feito diariamente e diretamente para nuvem `AWS S3` para bucket `storage-eagletec` no prefixo `gitlab_bkp`.

|Pasta de Origem|Pasta de Destino|Horário|Descrição|
|---------------|----------------|-----------------|
|`~/docker/volumes/gitlab/data/backups`|AWS-S3/storage-eagletec/gitlab_bkp|19:00h|Backup completo de dados do Gitlab|

O script de backup está localizado na pasta `~/cronjobs/backup_gitlab.sh`. Quando rodado ele executa o comando para criar o backup no container e faz a sincronização dos arquivos da pasta `~/docker/volumes/gitlab/data/backups` para `AWS S3`. O Gitlab mantém os 3 backups mais recentes.

## Backup Jira

O backup é feito diariamente e diretamente para nuvem `AWS S3` para bucket `storage-eagletec` no prefixo `jira_bkp`.

|Pasta de Origem|Pasta de Destino|Horário|Descrição|
|---------------|----------------|-----------------|
|`~/backups/jira_software`|AWS-S3/storage-eagletec/jira_bkp|20:00h|Backup completo de dados do Jira|

O script de backup está localizado na pasta `~/cronjobs/backup_jira.sh`. Quando rodado ele copia os últimos backups do dia gerados automaticamente pelo container do Jira (Jira gera dois backups por dia automaticamente sendo um 00:00 e outro 12:00) e faz a sincronização dos arquivos da pasta `~/backups/jira_software` para `AWS S3`. Esse script também executa uma correção dos arquivos de backup para que sejam restaurados e mantém somente os 7 backups mais novos

## Backup Base de Conhecimento

Para a Base de Conhecimento, o backup é feito diariamente e diretamente para nuvem `AWS S3` para bucket `storage-eagletec` no prefixo `knowledgebaseapp_bkp`. A Base de Conhecimento está hospedada em uma [instâncea EC2](https://aws.amazon.com/pt/ec2/).

|Pasta de Origem|Pasta de Destino|Horário|Descrição|
|---------------|----------------|-----------------|
|`/var/www/knowledgebaseapp/backup`|AWS-S3/storage-eagletec/knowledgebaseapp_bkp|19:00h|Backup completo do projeto Base de Conhecimento|

O script de backup está localizado na pasta `~/cronjobs/backupknowledgebase.sh`. Quando rodado ele executa a cópia inteira do projeto para a pasta `backup` do projeto mantendo sempre 2 backups por rotina e depois inicia o envio dos arquivos para `AWS S3`.

**Restauração**

A restauração do backup da Base de Conhecimento é muito simples, basta baixar o arquivo compactado gerado, descompactar em um **servidor web com PHP 7.0+** e realizar o acesso. O projeto não utiliza qualquer integração com banco de dados, tudo é baseado em arquivos.

## Configuração de Ciclo de Vida da AWS S3

A configuração de ciclo de vida é uma configuração da `AWS S3` para excluir os backups automaticamente na nuvem. Essa configuração é definida por prefixo que equivale às pastas dentro do bucket `storage-eagletec`. Essa configuação move os arquivos para outras [classes de armazenamento](https://aws.amazon.com/pt/s3/storage-classes/) durante um certo período de tempo após criado para economia no faturamento do serviço. Após essa transição os arquivos serão excluídos permanentemente depois de um período definido.

#### Configuração volumes dos containers Docker, GitLab, Jira e BD Falcon FV

Para o prefixo `sectors_bkp` a configuração está definida da seguinte forma:

**Para versões atuais dos objetos**[^1]: O objeto é movido para o `Standard-IA` depois de 30 dias do objeto criado, é movido para o `Amazon Glacier` depois de 60 dias do objeto criado.

**Para versões antigas dos objetos**[^2]: O objeto é movido para o `Standard-IA` depois de 30 dias do objeto criado, é movido para o `Amazon Glacier` depois de 60 dias do objeto criado.

**Tempo de expiração/exclusão permanente**: Para as versões atuais, os objetos irão ser excluídos após **120**, já para as versões antigas dos objetos irão ser excluídos após **80 dias após sua criação**.

#### Configuração Base de Conhecimento

Para o prefixo `knowledgebaseapp_bkp` a configuração está definida da seguinte forma:

**Para versões atuais dos objetos**: O objeto é movido para o `Standard-IA` depois de 30 dias do objeto criado, é movido para o `Amazon Glacier` depois de 60 dias do objeto criado.

**Para versões antigas dos objetos**: O objeto é movido para o `Standard-IA` depois de 30 dias do objeto criado, é movido para o `Amazon Glacier` depois de 60 dias do objeto criado.

**Tempo de expiração/exclusão permanente**: Para as versões atuais, os objetos irão ser excluídos após **365 dias após sua criação**, já para as versões antigas dos objetos irão ser excluídos após **100 dias após sua criação**.

[^1]: Objetos que foram criados diretamente no bucket, ou seja, objetos que aparecem diretamente na listagem.
[^2]: Objetos que foram excluídos do bucket, recebem uma tag de versionamento para que seja restaurado futuramente. Não aparece diretamente na listagem.