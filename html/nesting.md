---
site: MMP 460
---

## Nesting, Parents and Children

When an HTML element is 'nested' inside another element, such as in the code below, it is considered a child of the nesting element.
 
  <div><p>lorem ipsum</p></div>
  
  Note that the closing tag of the child element appears before the closing tag of parent, so it is fully contained within the parent element.
  
 You may have several layers of nesting, such as:
  
  <body>
   <header>
    <div>
     <p>
      <a href="#">lorem ipsum</a>
     </p><
    </div>
   </header>
  </body>
