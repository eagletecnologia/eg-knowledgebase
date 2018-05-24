---
title: 'Cadastrar Usuário'
form:
    fields:
        -
            label: Usuário
            name: username
            type: text
            validate:
                required: true
                message: PLUGIN_LOGIN.USERNAME_NOT_VALID
                pattern: '^[a-z0-9_-]{3,16}$'
        -
            label: E-mail
            name: email
            type: text
            validate:
                required: true
                message: PLUGIN_LOGIN.EMAIL_VALIDATION_MESSAGE
        -
            label: Senha
            name: password1
            type: password
            validate:
                required: true
                message: PLUGIN_LOGIN.PASSWORD_VALIDATION_MESSAGE
                pattern: '(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'
        -
            label: 'Repita a Senha'
            name: password2
            type: password
            validate:
                required: true
                message: PLUGIN_LOGIN.PASSWORD_VALIDATION_MESSAGE
                pattern: '(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'
    buttons:
        -
            type: submit
            value: Cadastrar
    process:
        register_user: true
        display: /welcome
        message: 'Welcome to my site!'
---

Insira os dados abaixo para registrar um usuário.