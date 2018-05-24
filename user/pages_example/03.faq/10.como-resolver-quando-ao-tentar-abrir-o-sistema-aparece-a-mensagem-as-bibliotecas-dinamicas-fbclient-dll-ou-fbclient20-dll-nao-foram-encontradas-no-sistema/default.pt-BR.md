---
title: 'Como resolver quando ao tentar abrir o sistema aparece a mensagem As bibliotecas dinâmicas  fbclient.dll ou fbclient20.dll não foram encontradas no sistema'
published: true
taxonomy:
    tag:
        - firebird
        - bibliotecas
external_links:
    title: true
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

Esta mensagem aparece quando a instalação do firebird não foi feita da forma correta.

**Procedimentos:**

Para solucionar este problema o firebird deve ser desinstalado e instalado novamente e durante sua instalação deve se marcar a opção: Copiar a biblioteca do cliente Firebird para a pasta de system?

![Firebird Bibliotecas ](Firebird%20Biblioteca.PNG)