---
title: 'More Accessibility Fun'
published: true
date: '31-01-2025 13:22'
taxonomy:
    category:
        - blog
    tag:
        - General
summary:
    enabled: '1'
subhead: "Tailwind doesn’t help "
header_image: '0'
---

Yesterday’s little [accessability adventure](https://www.jeremycherfas.net/blog/improved-accessibility) unsurprisingly opened a whole ‘nother can of worms. As I was showing off my work in [Front End Study Hall](https://indieweb.org/Front_End_Study_Hall) and learning how to check on dark mode easily in a browser, it became painfully obvious, to those who prefer dark mode, that this site doesn’t do dark mode. At all.

===

Friends pointed me to a great tutorial: [Come To The Light-dark() Side](https://css-tricks.com/come-to-the-light-dark-side/) at CSS Tricks. So this morning, I set to.

<details>
<summary>The basic changes, which I lifted wholesale, resulted in a marked improvement.
</summary>

New `html`:  
<code>
html {
	color-scheme: light dark;
	--black: oklch(0% 0 0);
	--white: oklch(100% 0 0);
	--background: light-dark(var(--white), var(--black));
	--text: light-dark(var(--black), var(--white);)
}
</code>

And then adding the required to `body`:
<code>
body {
    background-color: var(--background);
    color: var(--text)
}
</code>
</details>

There were still problems, notably with the header menu and footer and several bits of text. At this point I switched over to Firefox (which probably ought to become my favoured browser when I’m developing stuff) because it has an extension that will report on accessibility.

That made it clear that all the remaining problems could be traced back to my admittedly naive use of Tailwind and its method of using classes to define colours. Instead of being able to tweak `css` directly, I had to go into the templates that define how things look and edit those, a pretty hit and miss affair.

I’m now reasonably happy with the result. The Firefox extension still says that the menu has a contrast problem at 2.64, which is a long way from good enough. The honest truth is that I have spent a couple of hours trying to track that down and I can’t find an answer, so seeing as everything else seems to be OK I’m not going to bother.

The other reason not to bother is that I had already made a start on a redesign of the site from the ground up, to get rid of Tailwind and simplify matters in other ways. The good part is that I had not yet embarked on styling; I will be able to design for light and dark modes from the outset, rather than reactively.

That, however, raises another difficulty. I really have no aesthetic sense for dark mode design. Because I don’t like it or use it much myself, I have no way to judge some colourways as preferable to others. Perhaps there are samples out there, and perhaps I will have to go further in actually specifying the desired colours, but as the goal is to simply, I also hope that doesn’t become necessary.
