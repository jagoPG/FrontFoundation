<?php

/* node_modules/fsevents/node_modules/isstream/README.md */
class __TwigTemplate_27b8aaa1ede8ee71f01fabac524aad9ab368f692c2120cd87ccbe2ecaebcc6b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8954853e5714678e4f395869015dbbee7143ebce71f3e9ccbbf5145afb6e577b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8954853e5714678e4f395869015dbbee7143ebce71f3e9ccbbf5145afb6e577b->enter($__internal_8954853e5714678e4f395869015dbbee7143ebce71f3e9ccbbf5145afb6e577b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/isstream/README.md"));

        // line 1
        echo "# isStream

[![Build Status](https://secure.travis-ci.org/rvagg/isstream.png)](http://travis-ci.org/rvagg/isstream)

**Test if an object is a `Stream`**

[![NPM](https://nodei.co/npm/isstream.svg)](https://nodei.co/npm/isstream/)

The missing `Stream.isStream(obj)`: determine if an object is standard Node.js `Stream`. Works for Node-core `Stream` objects (for 0.8, 0.10, 0.11, and in theory, older and newer versions) and all versions of **[readable-stream](https://github.com/isaacs/readable-stream)**.

## Usage:

```js
var isStream = require('isstream')
var Stream = require('stream')

isStream(new Stream()) // true

isStream({}) // false

isStream(new Stream.Readable())    // true
isStream(new Stream.Writable())    // true
isStream(new Stream.Duplex())      // true
isStream(new Stream.Transform())   // true
isStream(new Stream.PassThrough()) // true
```

## But wait! There's more!

You can also test for `isReadable(obj)`, `isWritable(obj)` and `isDuplex(obj)` to test for implementations of Streams2 (and Streams3) base classes.

```js
var isReadable = require('isstream').isReadable
var isWritable = require('isstream').isWritable
var isDuplex = require('isstream').isDuplex
var Stream = require('stream')

isReadable(new Stream()) // false
isWritable(new Stream()) // false
isDuplex(new Stream())   // false

isReadable(new Stream.Readable())    // true
isReadable(new Stream.Writable())    // false
isReadable(new Stream.Duplex())      // true
isReadable(new Stream.Transform())   // true
isReadable(new Stream.PassThrough()) // true

isWritable(new Stream.Readable())    // false
isWritable(new Stream.Writable())    // true
isWritable(new Stream.Duplex())      // true
isWritable(new Stream.Transform())   // true
isWritable(new Stream.PassThrough()) // true

isDuplex(new Stream.Readable())    // false
isDuplex(new Stream.Writable())    // false
isDuplex(new Stream.Duplex())      // true
isDuplex(new Stream.Transform())   // true
isDuplex(new Stream.PassThrough()) // true
```

*Reminder: when implementing your own streams, please [use **readable-stream** rather than core streams](http://r.va.gg/2014/06/why-i-dont-use-nodes-core-stream-module.html).*


## License

**isStream** is Copyright (c) 2015 Rod Vagg [@rvagg](https://twitter.com/rvagg) and licenced under the MIT licence. All rights not explicitly granted in the MIT license are reserved. See the included LICENSE.md file for more details.
";
        
        $__internal_8954853e5714678e4f395869015dbbee7143ebce71f3e9ccbbf5145afb6e577b->leave($__internal_8954853e5714678e4f395869015dbbee7143ebce71f3e9ccbbf5145afb6e577b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/isstream/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# isStream

[![Build Status](https://secure.travis-ci.org/rvagg/isstream.png)](http://travis-ci.org/rvagg/isstream)

**Test if an object is a `Stream`**

[![NPM](https://nodei.co/npm/isstream.svg)](https://nodei.co/npm/isstream/)

The missing `Stream.isStream(obj)`: determine if an object is standard Node.js `Stream`. Works for Node-core `Stream` objects (for 0.8, 0.10, 0.11, and in theory, older and newer versions) and all versions of **[readable-stream](https://github.com/isaacs/readable-stream)**.

## Usage:

```js
var isStream = require('isstream')
var Stream = require('stream')

isStream(new Stream()) // true

isStream({}) // false

isStream(new Stream.Readable())    // true
isStream(new Stream.Writable())    // true
isStream(new Stream.Duplex())      // true
isStream(new Stream.Transform())   // true
isStream(new Stream.PassThrough()) // true
```

## But wait! There's more!

You can also test for `isReadable(obj)`, `isWritable(obj)` and `isDuplex(obj)` to test for implementations of Streams2 (and Streams3) base classes.

```js
var isReadable = require('isstream').isReadable
var isWritable = require('isstream').isWritable
var isDuplex = require('isstream').isDuplex
var Stream = require('stream')

isReadable(new Stream()) // false
isWritable(new Stream()) // false
isDuplex(new Stream())   // false

isReadable(new Stream.Readable())    // true
isReadable(new Stream.Writable())    // false
isReadable(new Stream.Duplex())      // true
isReadable(new Stream.Transform())   // true
isReadable(new Stream.PassThrough()) // true

isWritable(new Stream.Readable())    // false
isWritable(new Stream.Writable())    // true
isWritable(new Stream.Duplex())      // true
isWritable(new Stream.Transform())   // true
isWritable(new Stream.PassThrough()) // true

isDuplex(new Stream.Readable())    // false
isDuplex(new Stream.Writable())    // false
isDuplex(new Stream.Duplex())      // true
isDuplex(new Stream.Transform())   // true
isDuplex(new Stream.PassThrough()) // true
```

*Reminder: when implementing your own streams, please [use **readable-stream** rather than core streams](http://r.va.gg/2014/06/why-i-dont-use-nodes-core-stream-module.html).*


## License

**isStream** is Copyright (c) 2015 Rod Vagg [@rvagg](https://twitter.com/rvagg) and licenced under the MIT licence. All rights not explicitly granted in the MIT license are reserved. See the included LICENSE.md file for more details.
", "node_modules/fsevents/node_modules/isstream/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/isstream/README.md");
    }
}
