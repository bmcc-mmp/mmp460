---
layout: class
site: MMP 200 Multimedia Design
categories: bootstrap
title: Carousel Slideshow with Bootstrap
---
To use any of bootstrap JS plugins you need to link your HTML file to the bootstrap.js and jQuery If you started with [Bootstrap basic template](https://getbootstrap.com/docs/4.3/getting-started/introduction/#starter-template) these links are already there at the bottom of the code:

         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-      q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

The carousel code is made up of the following parts:

1. A **wrapper div** that contains all of the slideshow code. The id name is the one that will be the value of the data-target of the indicators and the value of the href of the controls.

        <div id="carousel-example" class="carousel slide" data-ride="carousel">

1. **Indicators**: the little dots that enable direct access to slides.
1. **Slides** and captions
1. **Controls**: the next and back arrows

[Complete carousel code](https://getbootstrap.com/docs/3.3/javascript/#carousel)
