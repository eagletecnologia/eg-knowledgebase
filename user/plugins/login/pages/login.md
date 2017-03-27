---
title: Login

login_redirect_here: false

form:
    name: login
    action:
    method: post
    login:
        forgot_button: false

    fields:
        - name: username
          label: Usuário
          type: text
          id: username
          placeholder: Username
          label: PLUGIN_LOGIN.USERNAME_EMAIL
          autofocus: true

        - name: password
          label: Senha
          type: password
          id: password
          placeholder: Password
          label: PLUGIN_LOGIN.PASSWORD
---
