<?php

/* node_modules/ee-first/README.md */
class __TwigTemplate_fa676499add0e623f641012ee8987b2bb9ada6bcfb37fec76389478081fb16ef extends Twig_Template
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
        $__internal_7034f61e3698e1180fc93d5de98325f34397a05ba99469057334d9c484dbe89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7034f61e3698e1180fc93d5de98325f34397a05ba99469057334d9c484dbe89f->enter($__internal_7034f61e3698e1180fc93d5de98325f34397a05ba99469057334d9c484dbe89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ee-first/README.md"));

        // line 1
        echo "# EE First

[![NPM version][npm-image]][npm-url]
[![Build status][travis-image]][travis-url]
[![Test coverage][coveralls-image]][coveralls-url]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]
[![Gittip][gittip-image]][gittip-url]

Get the first event in a set of event emitters and event pairs,
then clean up after itself.

## Install

```sh
\$ npm install ee-first
```

## API

```js
var first = require('ee-first')
```

### first(arr, listener)

Invoke `listener` on the first event from the list specified in `arr`. `arr` is
an array of arrays, with each array in the format `[ee, ...event]`. `listener`
will be called only once, the first time any of the given events are emitted. If
`error` is one of the listened events, then if that fires first, the `listener`
will be given the `err` argument.

The `listener` is invoked as `listener(err, ee, event, args)`, where `err` is the
first argument emitted from an `error` event, if applicable; `ee` is the event
emitter that fired; `event` is the string event name that fired; and `args` is an
array of the arguments that were emitted on the event.

```js
var ee1 = new EventEmitter()
var ee2 = new EventEmitter()

first([
  [ee1, 'close', 'end', 'error'],
  [ee2, 'error']
], function (err, ee, event, args) {
  // listener invoked
})
```

#### .cancel()

The group of listeners can be cancelled before being invoked and have all the event
listeners removed from the underlying event emitters.

```js
var thunk = first([
  [ee1, 'close', 'end', 'error'],
  [ee2, 'error']
], function (err, ee, event, args) {
  // listener invoked
})

// cancel and clean up
thunk.cancel()
```

[npm-image]: https://img.shields.io/npm/v/ee-first.svg?style=flat-square
[npm-url]: https://npmjs.org/package/ee-first
[github-tag]: http://img.shields.io/github/tag/jonathanong/ee-first.svg?style=flat-square
[github-url]: https://github.com/jonathanong/ee-first/tags
[travis-image]: https://img.shields.io/travis/jonathanong/ee-first.svg?style=flat-square
[travis-url]: https://travis-ci.org/jonathanong/ee-first
[coveralls-image]: https://img.shields.io/coveralls/jonathanong/ee-first.svg?style=flat-square
[coveralls-url]: https://coveralls.io/r/jonathanong/ee-first?branch=master
[license-image]: http://img.shields.io/npm/l/ee-first.svg?style=flat-square
[license-url]: LICENSE.md
[downloads-image]: http://img.shields.io/npm/dm/ee-first.svg?style=flat-square
[downloads-url]: https://npmjs.org/package/ee-first
[gittip-image]: https://img.shields.io/gittip/jonathanong.svg?style=flat-square
[gittip-url]: https://www.gittip.com/jonathanong/
";
        
        $__internal_7034f61e3698e1180fc93d5de98325f34397a05ba99469057334d9c484dbe89f->leave($__internal_7034f61e3698e1180fc93d5de98325f34397a05ba99469057334d9c484dbe89f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ee-first/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# EE First

[![NPM version][npm-image]][npm-url]
[![Build status][travis-image]][travis-url]
[![Test coverage][coveralls-image]][coveralls-url]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]
[![Gittip][gittip-image]][gittip-url]

Get the first event in a set of event emitters and event pairs,
then clean up after itself.

## Install

```sh
\$ npm install ee-first
```

## API

```js
var first = require('ee-first')
```

### first(arr, listener)

Invoke `listener` on the first event from the list specified in `arr`. `arr` is
an array of arrays, with each array in the format `[ee, ...event]`. `listener`
will be called only once, the first time any of the given events are emitted. If
`error` is one of the listened events, then if that fires first, the `listener`
will be given the `err` argument.

The `listener` is invoked as `listener(err, ee, event, args)`, where `err` is the
first argument emitted from an `error` event, if applicable; `ee` is the event
emitter that fired; `event` is the string event name that fired; and `args` is an
array of the arguments that were emitted on the event.

```js
var ee1 = new EventEmitter()
var ee2 = new EventEmitter()

first([
  [ee1, 'close', 'end', 'error'],
  [ee2, 'error']
], function (err, ee, event, args) {
  // listener invoked
})
```

#### .cancel()

The group of listeners can be cancelled before being invoked and have all the event
listeners removed from the underlying event emitters.

```js
var thunk = first([
  [ee1, 'close', 'end', 'error'],
  [ee2, 'error']
], function (err, ee, event, args) {
  // listener invoked
})

// cancel and clean up
thunk.cancel()
```

[npm-image]: https://img.shields.io/npm/v/ee-first.svg?style=flat-square
[npm-url]: https://npmjs.org/package/ee-first
[github-tag]: http://img.shields.io/github/tag/jonathanong/ee-first.svg?style=flat-square
[github-url]: https://github.com/jonathanong/ee-first/tags
[travis-image]: https://img.shields.io/travis/jonathanong/ee-first.svg?style=flat-square
[travis-url]: https://travis-ci.org/jonathanong/ee-first
[coveralls-image]: https://img.shields.io/coveralls/jonathanong/ee-first.svg?style=flat-square
[coveralls-url]: https://coveralls.io/r/jonathanong/ee-first?branch=master
[license-image]: http://img.shields.io/npm/l/ee-first.svg?style=flat-square
[license-url]: LICENSE.md
[downloads-image]: http://img.shields.io/npm/dm/ee-first.svg?style=flat-square
[downloads-url]: https://npmjs.org/package/ee-first
[gittip-image]: https://img.shields.io/gittip/jonathanong.svg?style=flat-square
[gittip-url]: https://www.gittip.com/jonathanong/
", "node_modules/ee-first/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ee-first/README.md");
    }
}
