---
title: 'Solving the Stupid Word Game'
published: true
date: '07-05-2022 12:55'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: " "
header_image: '0'
---

🔙🟩

Stupid 127 1/1/2

Very happy indeed to have met the challenge I set myself yesterday, of programming help to solve the [Stupid Word Game](https://stupidwordgame.com/) invented by [Colin Devroe](https://cdevroe.com/). It annoyed me that my guess could be correct, in that it used all the letters and a chosen mystery letter, but still wrong if it wasn’t the particular word that the stupid word game had chosen. I program best when I have a concrete goal, and this was a very tractable goal. Along the way I learned a few good things.

[Get a list of all English words](https://www.datasciencebytes.com/bytes/2014/11/03/get-a-list-of-all-english-words-in-python/) introduced me to [NLTK](https://www.nltk.org/) although I could not for the life of me get the code examples to work. So I went primitive and just downloaded the whole list of words. It is only 2.5MB.

Extracting all the words of the correct length is easy.

Passing the target letters into the program led me to learn about `sys.argv` which I know will come in handy for other things I want to be able to do.

Extracting only those words that contain the target letters (in any order) led me into a few dead ends. Python `sets` are no good because they do not allow duplicate elements. In the end it proved remarkably easy, once I discovered how to search for a list within a list.

```
    if (all(x in word_list for x in target_list)):
        final_list.append(word)
```

I don't consider it a total cheat, because there is still some skill involved. Today's puzzle, for example, could have been any one of thicken, kenotic, kitchen, necktie, ketonic, snicket, kinetic or tickney. (Note to self: sort that list.) So the choice of first letter makes a difference. I'm sure there will be occasions on which even with my little helper I will fail to solve the stupid thing, but for now I am well pleased.
