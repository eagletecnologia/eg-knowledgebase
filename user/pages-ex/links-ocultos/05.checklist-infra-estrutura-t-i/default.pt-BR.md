---
title: 'Checklist Infra Estrutura T.I'
taxonomy:
    categoria:
        - Links-ocultos
    tag:
        - Checklist
        - 'Infra Estrutura'
        - Preventiva
anchors:
    active: true
menuright: true
tagtitle: h2
---

## Introdução
Este checklist tem por objetivo assegurar que a infra estrutura de TI de pequenas empresas estejam em conformidade para instalação dos sitemas de gestão empresarial desenvolvidos pela Eagle Tecnologia.

## Rede
 * Padronizar nomes das maquinas (Servidor, Fiscal, Financeiro01, Caixa01, Balcao01)
 * Colocar maquinas com mesmo grupo de trabalho
 * Configurar DHCP nos terminais para evitar conflitos de IP com smartphones
 * Configurar IP fixo no Servidor
 * Definir Rede Coorporativa.
 * Colocar computadores na mesma rede alterando o nome para "Rede" e Mesclar/Excluir redes antigas (Windows 7)
 * Ativar descoberta de rede
 * Ativar compartilhamento de arquivo e impressora
 * Ativar compartilhamento de pasta pública
 * Desativar compartilhamento protegido por senha

## Painel de Controle
 * Alterar configurações de energia para Nunca
 * Alterar configuraçoes de controle de conta de usuário para nunca notificar em "control userpasswords2"
 * Ativar Firewall
 
## Padronizar Usuários
 * Ativar conta de Administrador
 * Desativar conta de convidado
 * Configurar senha para nunca expirar
 * Configurar login direto na conta do usuario em "control userpasswords2"
 * Colocar atalhos comuns no Desktop Público

## Geral 
 * Realizar limpeza de disco do Windows
 * Desistalar programas superfulos utilizando CCleaner
 * Deixar somente o necessário na inicializacao do Windows utilizando CCLeaner
 * Verificar erros de registro utilizando CCleaner
 * Limpar restauracao do sistema utilizando CCLeaner
 * Realizar teste de disco rígido utilizando Crystal Disk Info
 * Atualizar Antivirus, Navegadores Chrome e Mozilla, Net Framework, 7zip, Foxit / Adobe Reader,
 * Google Drive, Team Viewer e Skype utilizando o Ninite
 * Verificar se existem Drivers desatualizados ou nao instalados e corrigir
 * Desativar Windows Update e Windows Defender em "services.msc"
 * Configurar acesso remoto local via Team Viewer, inicialização junto com o Windows e Senha Padrão
 * Salvar ID e Senha de acesso do Team Viewer de todos computadores nos Comentários no CRM
 * Verificar cadastro de ativo no CRM

## Servidor
 * Exigir um servidor dedicado para empresas com mais de 3 computadores
 * Configurar Área de Trabalho Remota (Windows Server)
 * Configurar Active Directory (clientes maiores) (Windows Server)
 * Criar usuarios para acesso a Área de Trabalho Remota (Windows Server)
 * Criar compartilhamento Eagle$ para armazenar Programas, Drivers e Documentos
 * Mapear pasta Pública do Servidor nos Terminais

## Impressoras
 * Instalar Impressoras e compartilhar com exceção a impressora fiscal e testar no Eagle Gestão
 * Implantar impressoras compartilhadas nos terminais utilizando o "gpedit.msc"
 * Recomendar que todas as impressoras sejam ligadas direto na rede elétrica
 * Recomendar impressoras com placa de rede para empresas maiores
 * Instalar e compartilhar Impressora de etiqueta e testar no Eagle Gestão

## Estrutura Física
 * Trocar todas as tomadas velhas, frouxas, queimadas e de padrão velho por tomadas do padrão novo
 * Recomendar que todos os computadores tenham nobreak
 * Tentar ligar o computador com o nobreak desligado da tomada para verificar se a bateria está com carga
 * Retirar estabilizadores ligados nos nobreaks
 * Ligar roteadores e switches no nobreak
 * Recomendar que TODOS os computadores estejam em rede cabeada partindo de um ponto central
 * Caso o cliente utilize mais de uma internet utilizar Load Balance
 * Nao permitir uso de computadores na rede por meio de Wireless
 * Recomendar que os moveis onde fiquem os computadores estejam livres de poeira e bem ventilados

## Integração de Hardware com Eagle Gestão
 * Trocar todas as tomadas velhas, frouxas, queimadas e de padrão velho por tomadas do padrão novo
 * Recomendar que todos os computadores tenham nobreak
 * Tentar ligar o computador com o nobreak desligado da tomada para verificar se a bateria está com carga
 * Retirar estabilizadores ligados nos nobreaks
 * Ligar roteadores e switches no nobreak
 * Recomendar que TODOS os computadores estejam em rede cabeada partindo de um ponto central
 * Caso o cliente utilize mais de uma internet utilizar Load Balance
 * Nao permitir uso de computadores na rede por meio de Wireless
 * Recomendar que os moveis onde fiquem os computadores estejam livres de poeira e bem ventilados

!!!! Seguindo todas estas orientações dificilmente o cliente ligará com problemas referentes a infra estrutura de TI.