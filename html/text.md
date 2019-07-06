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


ul, li -  unordered list
        
        <ul>
                <li>Down the Rabbit-Hole</li>
                <li>The Pool Of Tears</li>
                <li>A Caucus-Race And A Long Tale</li>
                <li>The Rabbit Sends In A Little Bill</li>
         <ul>
         
ol, li - ordered list

         <ol>
                <li>Down the Rabbit-Hole</li>
                <li>The Pool Of Tears</li>
                <li>A Caucus-Race And A Long Tale</li>
                <li>The Rabbit Sends In A Little Bill</li>
         <ol>


## Elements to Mark Emphasis

The **strong** element : used to indicate text that is more important than the rest of the text.

The **em** element: used for stress emphasis. It does not indicate importance but alters the meaning of the sentence. 

The **b** element: does not convey importance or meaning. It is used to offset part of the text from the normal text without conveying any extra importance.

The **i** element: does not convey importance or meaning. It is used to offset part of the text from the normal text without conveying any extra importance.


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
