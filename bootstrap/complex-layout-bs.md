---
site: MMP 460
categories: bootstrap
title: Complex CSS layout with Bootstrap
---

**Review**

- Rows must be placed within a div with the class *container* (fixed-width) or *container-fluid* (full-width) for proper alignment and padding.
- Use rows to create horizontal groups of columns. To create a row create a div and assign it the class *row*.
- The bootstrap grid is based on 12 columns. To span columns use divisors of 12, for example, col-3 will create a column that spans a fourth of the container.
- For columns that never collapse use the col- classes.
- For columns that collapse in viewport sizes smaller than 576px (Mobile size) use the col-sm- classes.
- For columns that collapse in viewport sizes smaller than 768px (tablet size) use the col-md- classes. 
- For columns that collapse in viewport sizes smaller than 992px (desktop size) use the col-lg- classes.
- For columns that collapse in viewport sizes smaller than 1200px (large monitor sizes) use the col-xl- classes. 

**Using multiple grid class for different column arrangement in different viewports**

You can specify the number of columns you want in each break point. For example the following code creates 6 columns in viewports bigger than or equal to 576px and 3 columns in viewport sizes smaller than 576px.
        
        <div class="row">
                <div class="col-4 col-sm-2">......</div>
                <div class="col-4 col-sm-2">......</div>
                <div class="col-4 col-sm-2">......</div>
                <div class="col-4 col-sm-2">......</div>
                <div class="col-4 col-sm-2">......</div>
                <div class="col-4 col-sm-2">......</div>
        </div>

**Nesting columns**

The following code shows how to create a layout similar to the image below. The nested grid is inside one of the columns. Full code is [here](nested-grid.html).

![nested-grid](nested-grid.gif)

        <div class="container">
          <div class="row">
            <div class="col-sm-8">
            <!-- *******   nested columns ******* -->
              <div class="row">
                <div class="col-sm-12">....</div>
              </div> <!-- .row --> 
              <div class="row"> 
                <div class="col-sm-4">....</div> 
                <div class="col-sm-4"> </div>
                <div class="col-sm-4"> </div>  
              </div><!-- .row --> 
            </div> <!-- .col-sm-8 --> 	
            <div class="col-sm-4">....</div> 
          </div> <!-- .row --> 
        </div> <!-- .container -->
