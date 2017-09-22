<?php

/* node_modules/through/readme.markdown */
class __TwigTemplate_43564bdb3e4d24f8c58d26c398aedf9fb77f3938498f13d867e42f944f7a9312 extends Twig_Template
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
        $__internal_6c8460e5a869370cb54d7a9f619d11d8f7778001b62fda50b0eda86d3afdbaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8460e5a869370cb54d7a9f619d11d8f7778001b62fda50b0eda86d3afdbaae->enter($__internal_6c8460e5a869370cb54d7a9f619d11d8f7778001b62fda50b0eda86d3afdbaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/through/readme.markdown"));

        // line 1
        echo "#through

[![build status](https://secure.travis-ci.org/dominictarr/through.png)](http://travis-ci.org/dominictarr/through)
[![testling badge](https://ci.testling.com/dominictarr/through.png)](https://ci.testling.com/dominictarr/through)

Easy way to create a `Stream` that is both `readable` and `writable`. 

* Pass in optional `write` and `end` methods.
* `through` takes care of pause/resume logic if you use `this.queue(data)` instead of `this.emit('data', data)`.
* Use `this.pause()` and `this.resume()` to manage flow.
* Check `this.paused` to see current flow state. (`write` always returns `!this.paused`).

This function is the basis for most of the synchronous streams in 
[event-stream](http://github.com/dominictarr/event-stream).

``` js
var through = require('through')

through(function write(data) {
    this.queue(data) //data *must* not be null
  },
  function end () { //optional
    this.queue(null)
  })
```

Or, can also be used _without_ buffering on pause, use `this.emit('data', data)`,
and this.emit('end')

``` js
var through = require('through')

through(function write(data) {
    this.emit('data', data)
    //this.pause() 
  },
  function end () { //optional
    this.emit('end')
  })
```

## Extended Options

You will probably not need these 99% of the time.

### autoDestroy=false

By default, `through` emits close when the writable
and readable side of the stream has ended.
If that is not desired, set `autoDestroy=false`.

``` js
var through = require('through')

//like this
var ts = through(write, end, {autoDestroy: false})
//or like this
var ts = through(write, end)
ts.autoDestroy = false
```

## License

MIT / Apache2
";
        
        $__internal_6c8460e5a869370cb54d7a9f619d11d8f7778001b62fda50b0eda86d3afdbaae->leave($__internal_6c8460e5a869370cb54d7a9f619d11d8f7778001b62fda50b0eda86d3afdbaae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/through/readme.markdown";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#through

[![build status](https://secure.travis-ci.org/dominictarr/through.png)](http://travis-ci.org/dominictarr/through)
[![testling badge](https://ci.testling.com/dominictarr/through.png)](https://ci.testling.com/dominictarr/through)

Easy way to create a `Stream` that is both `readable` and `writable`. 

* Pass in optional `write` and `end` methods.
* `through` takes care of pause/resume logic if you use `this.queue(data)` instead of `this.emit('data', data)`.
* Use `this.pause()` and `this.resume()` to manage flow.
* Check `this.paused` to see current flow state. (`write` always returns `!this.paused`).

This function is the basis for most of the synchronous streams in 
[event-stream](http://github.com/dominictarr/event-stream).

``` js
var through = require('through')

through(function write(data) {
    this.queue(data) //data *must* not be null
  },
  function end () { //optional
    this.queue(null)
  })
```

Or, can also be used _without_ buffering on pause, use `this.emit('data', data)`,
and this.emit('end')

``` js
var through = require('through')

through(function write(data) {
    this.emit('data', data)
    //this.pause() 
  },
  function end () { //optional
    this.emit('end')
  })
```

## Extended Options

You will probably not need these 99% of the time.

### autoDestroy=false

By default, `through` emits close when the writable
and readable side of the stream has ended.
If that is not desired, set `autoDestroy=false`.

``` js
var through = require('through')

//like this
var ts = through(write, end, {autoDestroy: false})
//or like this
var ts = through(write, end)
ts.autoDestroy = false
```

## License

MIT / Apache2
", "node_modules/through/readme.markdown", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/through/readme.markdown");
    }
}
