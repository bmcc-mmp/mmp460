---
site: MMP 200 Multimedia Design
title: HTML Text Elements
---

## HTML text elements

p - paragraph text

        <p>So she was considering in her own mind (as well as she could, for the
        day made her feel very sleepy and stupid), whether the pleasure of
        making a daisy-chain would be worth the trouble of getting up and
        picking the daisies, when suddenly a White Rabbit with pink eyes ran
        close by her. </p>

h1....h6 - titles

        <h1>Alice's Adventures in Wonderland</h1>
        <h2>Down the Rabbit-Hole</h2>


ul, li - unordered list (bullet list)
        
        <ul>
                <li>Alice</li>
                <li>White rabbit</li>
                <li>Caterpillar</li>
                <li>Queen</li>
         <ul>
         
ol, li - ordered list (number list)

         <ol>
                <li>Down the Rabbit-Hole</li>
                <li>The Pool Of Tears</li>
                <li>A Caucus-Race And A Long Tale</li>
                <li>The Rabbit Sends In A Little Bill</li>
         <ol>


## Elements to Mark Emphasis or Set Text Apart

The **strong** element is used to indicate text that is more important than the rest of the text. [More](https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-strong-element).

The **em** element is used for stress emphasis. It does not indicate importance but alters the meaning of the sentence. [More](https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-em-element).

The **b** element is used to offset part of the text for stylistic purposes. It does not convey importance or meaning. [More](https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-b-element).

The **i** element: used to indicate a different, voice, language or moood from the rest of the text.[More](https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-i-element).


### Quoting with the blockquote and q elements

**The blockquote element**

Use blockquote tags to quote a sentence or a passage. You can nest any other HTML tag inside it. For example:

        <blockquote>
          <p>The reports of my death have been greatly exaggerated.</p>
          <footer>-- Mark Twain</footer>
        </blockquote>

Note that the source of the quote, which is not part of the quote but tells us something about it, is appropriately inside a footer.

**The q element**

Use the q tags to insert a quote into a sentence or a paragraph, such as in:

        <p><q> Curiouser and curiouser!</q> cried Alice</p>

**The cite attribute**

The cite attribute can be used for both blockquote and q elements to indicate a source. The cite value must be a url. For example:

        <blockquote cite="http://www.yourquotesource/source.html">
