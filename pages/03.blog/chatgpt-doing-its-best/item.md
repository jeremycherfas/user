---
title: 'ChatGPT doing its best'
published: true
date: '03-04-2023 09:44'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "The problem is still me"
header_image: '0'
---

[Professor Von Explaino](https://vonexplaino.com/) kindly steered me towards ChatGPT to solve the problem I was having [building a Python gui](https://www.jeremycherfas.net/blog/unable-to-build-a-gui-in-python). His solution worked, for that part of the problem, and made me realise that I ought to ensure that I ask ChatGPT as well as simple search. Having then got my gui up on screen, happy to receive files, for the next series of errors I asked ChatGPT myself.

Horror!

![Screenshot telling me ChatGPT has been disabled for users in Italy](chat.jpg){.center}

===

OK, Mullvad to the rescue, enabling me to continue our little chat from Sweden. That surfaced a few more errors that I was able to correct, but in the end I just kept going round and round in circles over this bit of code:

```
        options = QtWidgets.QFileDialog.Options()
        options |= QtWidgets.QFileDialog.DontUseNativeDialog
```

The suggestions I got from ChatGPT resulted in one of a few errors, quite often `TypeError: options(self): first argument of unbound method must have type ‘QFileDialog’`. Requests to fix that went back round to `options` rather than `Options` but that offered no resolution.

At one point ChatGPT did offer an entirely new program to merge PDF files, but it didn’t include the drag and drop file picker that is the whole point of the exercise.

At this point, I need to do other stuff and so will take a break. To be continued.
