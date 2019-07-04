---
site: MMP 460
categories: bootstrap
title: Responsive layout with Bootstrap Grid
---

## Quick 3 columns responsive layout with Bootstrap

To create a 3-column based layout that collapses into one column in viewports smaller than 540px do the following:

Start with [HTML from Bootstrap basic template](https://getbootstrap.com/docs/4.3/getting-started/introduction/#starter-template).
Add a ‘container’ div that has the class ‘container’ or ‘container-fluid’

        <div class="container">
        </div>

Add a div that will hold a row of 3 columns. Give it a class ‘row’.

        <div class="container">
          <div class="row">
          </div>
        </div
        
Add the divs that hold the columns:

        <div class="container">
          <div class="row">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>

Add the class col to each of the column divs. 

        <div class="container">
          <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
          </div>
        </div>
   
This creates a layout with 3 equal width columns. 

**Columns of Different Width**

The Bootstrap grid is a 12-columns grid. With 3 equal-width columns, each column spans over 4 of the 12-columns grid. Another way to create the layout above is this:

        <div class="container">
          <div class="row">
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
          </div>
        </div>
        
To vary the width of the columns, change the numbers after the col- and make sure that they all add up to 12. For example:

        <div class="container">
          <div class="row">
            <div class="col-6"></div>
            <div class="col-3"></div>
            <div class="col-3"></div>
          </div>
        </div>

Or,
        
        <div class="container">
          <div class="row">
            <div class="col-8"></div>
            <div class="col-4"></div>
          </div>
        </div>

**Responsive Layout**

The layout we created so far will stay the same in all screen sizes. We can modify the classes to indicate when we want the layout to collapse o one column. For example the following 3 columns will collapse to one when screen size is smaller than 576px:

        <div class="container">
          <div class="row">
            <div class="col-4-sm"><div>
            <div class="col-4-sm"><div>
            <div class="col-4-sm"><div>
          </div>
        </div>

More about responsive breakpoints [here](https://getbootstrap.com/docs/4.0/layout/overview/#responsive-breakpoints).

Learn more about the Bootstrap grid system [here](https://getbootstrap.com/docs/4.0/layout/grid/).
