## What are statics
- When you think static, think share
- Unless you can justify why to use statics, don't use them

## When to use statics?
- When you don't need to instantiate the class
- You don't mind it being a global function
- They're usually lower level classes. e.g: Str::camel()

## When to not use statics
- When it make a bunch of calls to other classes
- On most property cases, because static properties are shared. It'll break encapsulation

## When to use const?
- When the variable absolutely must not change