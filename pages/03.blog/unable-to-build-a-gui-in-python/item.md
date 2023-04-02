---
title: 'Unable to build a GUI in Python'
published: true
date: '02-04-2023 16:14'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "It’s not the tutorial, it’s me"
header_image: '0'
---

Good tutorials are worth their weight in gold, and some of the best, for me, come from [Programming Historian](https://programminghistorian.org), even though I am not an actual historian. A new one promised to show me how to [create GUIs in Python](https://programminghistorian.org/en/lessons/creating-guis-in-python-for-digital-humanities-projects), which I definitely could use. Alas, I fell at the first. The tutorial clearly warns that `PyQt5` would not easily be installed on my machine, which has an M1 chip. That proved correct. Nothing daunted, I tried to install `PyQt6` instead, and that worked a treat, except that …

===

When it came time to run the program, the line `        self.setDragDropMode(QtWidgets.QAbstractItemView.InternalMove)` resulted in `AttributeError: type object 'QAbstractItemView' has no attribute 'InternalMove'`. This is absolutely true, as I confirmed with `dir(QtWidgets.QAbstractItemView)`, a trick I recently learned.

Presumably this is a change from `PyQt5` but I am now, alas at the end of being able to fix. Casting around at the [Qt documentation](https://doc.qt.io/qt-6/model-view-programming.html#using-drag-and-drop-with-item-views) I found suggestions to try something like `listWidget->setDragDropMode(QAbstractItemView::InternalMove);` but a straightforward substitution in my code just gave a syntax error. I snooped around a bit, and I think that the key change is something to do with enums and classes, but I haven't got any further than that.

I will keep looking, and in the meanwhile the other big issue is that I'm not sure how to give any kind of feedback to Programming Historian. I can [see the page on GitHub](https://github.com/programminghistorian/jekyll/blob/gh-pages/en/lessons/creating-guis-in-python-for-digital-humanities-projects.md) but, probably because I have not done this before, I cannot see how to raise an issue specific to that page. I'll send an email instead, which is actually Option 1 offered for feedback.
