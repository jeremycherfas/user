---
title: Contact Form
form:
    name: contact
    classes: ' md:text-lg'
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
            classes: 'w-full border-2 pl-2 '
        -
            name: email
            label: Email
            placeholder: 'Your email address'
            type: text
            validate:
                rule: email
                required: true
            classes: 'w-full border-2 pl-2 '
        -
            name: message
            label: Message
            size: long
            placeholder: 'Your message'
            type: textarea
            validate:
                required: true
            classes: ' w-full border-2 pl-2 h-32'
    buttons:
        -
            type: submit
            value: Send it
            classes: 'block text-center justify-center hover:bg-orange-200 text-orange-800 font-semibold hover:text-blue-700 py-2 w-1/4 m-auto border border-blue-700 hover:border-transparent rounded'
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


