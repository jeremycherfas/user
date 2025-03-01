---
title: Contact Form
form:
    name: contact
    classes: 'contact'
    fields:
        -
            name: name
            label: Name
            placeholder: 'Please enter your name'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
            classes: ' '
        -
            name: email
            label: Email
            placeholder: 'Your email address'
            type: text
            validate:
                rule: email
                required: true
            classes: ' '
        -
            name: message
            label: Message
            placeholder: 'Your message'
            type: textarea
            validate:
                required: true
            classes: ' '
    buttons:
        -
            type: submit
            value: Send it
            classes: ' '
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for your feedback!'
        -
            display: thankyou
---


