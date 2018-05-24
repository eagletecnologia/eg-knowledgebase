---
title: 'REQUISITOS MÍNIMOS EXIGIDOS DO CLIENTE'
taxonomy:
    categoria:
        - Revenda
anchors:
    active: false
menuright: false
tagtitle: h2
---

===

## OBJETIVOS
Orientar profissinais do setor de Suporte e Revendas quanto aos requisitos mínimos de hardware,  estrutura física e lógica para evitar problemas de desempenho, ausência de funcionalidades, impressão inadequada ou falha de comunicação caso a estrutura mínima exigida seja inferior à especificada neste documento.

## ACR UM - INTERNET
Os sistemas desenvolvidos pela EAGLE necessitam de acesso à internet banda larga com velocidade mínima de 1MB, para instalação e atualizações, e constantes acessos à internet para que possa capturar, emitir, validar e, eventualmente, armazenar remotamente os arquivos digitais, sendo que a estrutura para se comunicar através do ambiente de internet e as despesas com os meios de comunicação necessários para navegar e executar os uploads e downloads serão de responsabilidade do CLIENTE.

## ACR DOIS - SERVIDOR
1. **Processador**: 3.0GHz Quad-core ou superior;
1. **Memória**: 8GB PC3-12800 DDR3 SDRAM 1600 MHz ou superior;
1. **Disco Rígido**: 500GB 7200 rpm com espaço mínimo de 10GB;
1. **Rede**: Conexão cabeada GB;
1. **Nobreak**: 1300VA ou dimensionado para o hardware;
1. **Sistema Operacional**: Windows Server 2008 ou superior;
1. **Área de Trabalho Remota**: Habilitada;
1. **Firewall**: Ativado com exceção na porta 3050 do Firebird;
1. **Configurações de Energia**: Alterar configurações de energia para Nunca;
1. **Antivirus**: Configurar exceção na pasta de instalação do sistema. Não utilizar Avira. 
1. **Acesso Remoto**: Configurar acesso remoto permanente. 

## ACR TRES - TERMINAIS E PDV
1. **Processador**: 2.5GHz Dual-core ou superior;
1. **Memória**: 4.0GB PC3-12800 DDR3 SDRAM 1600 MHz ou superior;
1. **Disco Rígido**: 500GB 7200 rpm com espaço mínimo de 10GB;
1. **Rede**: Conexão cabeada GB;
1. **Porta Serial**: Onboard para a instalação da impressora;
1. **Nobreak**: 600VA ou dimensionado para o hardware;
1. **Sistema Operacional**: Windows 7 Ultimate Service Pack 1 ou superior com .Net Framework 4.5.1.;

## ACR CINCO - IMPRESSORAS
1. Todas as impressoras com exceção da impressora fiscal devem estar ligadas direto na rede elétrica;
1. Caso e empresa possua mais de 3 computadores em sua rede é recomendável que as impressoras possuam placa de rede;
1. A impressora fiscal deve estar ligada a um Nobreak para evitar desligamentos incorretos, assim como os demais componentes.

## ACR SEIS - IMPRESSORAS FISCAIS
1. Daruma (FS345, FS2000, FS600);
1. Bematech; 
1. Sweda; 
1. Schalter (3.0 ou superior); 
1. Mecaf OEM (Elgin, Digiarte, Zanthus, Acr, Aoki, Chronos, Promcomp, TrendsSTS, Unigraph);
1. FiscNET (ZPM) Urano Logger II, Elgin MFD, Olivetti MFD;
1. Epson.

## ACR SETE - AUTOMAÇÃO COMERCIAL
1. **Balanças Seriais ou de Rede:** Todos modelos das marcas Toledo, Filizola ou Urano ou qualquer outro modelo compatível com o padrão MGV5/MGV6;
1. **Balanças de checkout:** Todos modelos das marcas Toledo ou Filizola;
1. **Busca Preço:** Todos modelos das marcas Gertec ou Tanca;
1. **Leitore de código de barras:** Todos modelos compatíveis com EAN13
1. **Gavetas de dinheiro:** Todos modelos integrados com impressoras fiscais e não fiscais.

## ACR OITO - DOS REQUISITOS PARA APARELHOS MOBILE
1. Smartphone ou tablet com sistema Android® 4.4 KitKat ou superior exceto a 4.1;
1. Recurso GPS;

## ACR NOVE - DOS REQUISITOS DE REDE FÍSICA
1. A rede de computadores deve ser cabeada CAT5E partindo de um único ponto central;
1. Caso o cliente utilize mais de uma internet utilizar Load Balance ou Mikrotik;
1. Caso a rede tenha mais de 4 computadores utilizar Switch de no mímino 16 portas;
1. Todos ativos de rede (roteadores, switches) devem estar ligados em um nobreak;
1. Todos ativos de rede (roteadores, switches) devem estar acomodados em um rack;
1. Todas as tomadas velhas, frouxas, queimadas e de padrão velho devem ser trocadas tomadas do padrão novo;
1. Os móveis onde fiquem os computadores devem estar livres de poeira e bem ventilados.
1. Caso a empresa possua câmeras de segurança é recomendável que a mesma esteja utilizando redes e internet separada da rede de computadores;
1. Não é recomendado o uso de computadores na rede por meio de Wireless;
1. Não é recomendado ligar estabilizadores em nobreaks.

## ACR DEZ - DOS REQUISITOS DE REDE LÓGICA
1. Padronizar nomes das máquinas (Servidor, Fiscal, Financeiro, Administrativo);
1. Colocar máquinas no mesmo grupo de trabalho;
1. Configurar DHCP nos terminais para evitar conflitos de IP com smartphones;
1. Configurar IP fixo no Servidor;
1. Definir rede corporativa;
1. Ativar descoberta de rede;
1. Ativar compartilhamento de arquivo e impressora;
1. Desativar compartilhamento protegido por senha.

!!!! Seguindo estas orientações corretamente, fará com que o setor de suporte não perca tempo com problemas decorrentes de estrutura deficiente no cliente. 