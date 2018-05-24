---
title: 'Como resolver quando ao tentar abrir ou atualizar o sistema aparece a mensagem Não existe permissão de escrita no diretório'
published: true
taxonomy:
    tag:
        - diretório
        - regedit
        - permissão
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

Esta mensagem aparece caso o usuário local não tenha controle total sobre a pasta de instalação do Eagle Gestão.

**Procedimentos:**

* Para solucionar este problema acesse a pasta raiz do Eagle Gestão, acesse as propriedades da pasta e na aba segurança clique em editar, selecione o usuário local e marque a opção controle total no campo permissões para Usuários. Adicione também o usuário Todos na pasta e dê controle total também.

* É necessário alterar as permissões da pasta no regedit. Para isso acesse o regedit, procure o caminho HKEY_LOCAL_MACHINE\SOFTWARE\Wow6432Node\Eagle (para 64 bits) ou HKEY_LOCAL_MACHINE\SOFTWARE\Eagle (para 32 bits), clique com o botão direito do mouse e selecione a opção Permissões, selecione o usuário local da máquina e dê controle total a ele. Da mesma forma adicione o usuário Todos a pasta e dê controle total também.
