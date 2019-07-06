---
site: MMP 460
---

## Nesting, Parents, Children and inheritance

When an HTML element is 'nested' inside another element, such as in the code below, it is considered a child of the nesting element.
 
    <div>
     <p>lorem ipsum</p>
    </div>
  
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
    
**inheritance**

Child elements will inherit some CSS styles from their parents. For example, the *font* property is inheritable, as well as the *text-align* and the *width* properties. Some properties are not inheritable such as the *background-color* property.
