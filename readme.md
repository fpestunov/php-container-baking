# An understanding of Inversion of Control

```
composer init
```

https://daylerees.com/container-baking/
https://github.com/daylerees/container-example

## First step

We’ll implement the container feature by feature. The first thing we need to do is make it store and retrieve instances of services. This will actually make it more of a ‘service locator’, but it’s a good start point.

To make it store and retrieve instances, we’ll simply use an internal array to hold them. 

