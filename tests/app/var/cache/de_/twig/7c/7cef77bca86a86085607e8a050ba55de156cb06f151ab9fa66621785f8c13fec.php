<?php

/* node_modules/resumer/readme.markdown */
class __TwigTemplate_ac1ada083eaf7b7c7461bfed0837d369c5e82a1f1fee617486db9476d5dfc345 extends Twig_Template
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
        $__internal_daf169bc63538e75e3c3208dd21bd3923efcc91d37715e862d61c44a7e6b00cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf169bc63538e75e3c3208dd21bd3923efcc91d37715e862d61c44a7e6b00cd->enter($__internal_daf169bc63538e75e3c3208dd21bd3923efcc91d37715e862d61c44a7e6b00cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resumer/readme.markdown"));

        // line 1
        echo "# resumer

Return a through stream that starts out paused and resumes on the next tick,
unless somebody called `.pause()`.

This module has the same signature as
[through](https://npmjs.com/package/through).

[![browser support](https://ci.testling.com/substack/resumer.png)](http://ci.testling.com/substack/resumer)

[![build status](https://secure.travis-ci.org/substack/resumer.png)](http://travis-ci.org/substack/resumer)

# example

``` js
var resumer = require('resumer');
var s = createStream();
s.pipe(process.stdout);

function createStream () {
    var stream = resumer();
    stream.queue('beep boop\\n');
    return stream;
}
```

```
\$ node example/resume.js
beep boop
```

# methods

``` js
var resumer = require('resumer')
```

## resumer(write, end)

Return a new through stream from `write` and `end`, which default to
pass-through `.queue()` functions if not specified.

The stream starts out paused and will be resumed on the next tick unless you
call `.pause()` first.

`write` and `end` get passed directly through to
[through](https://npmjs.com/package/through).

# install

With [npm](https://npmjs.org) do:

```
npm install resumer
```

# license

MIT
";
        
        $__internal_daf169bc63538e75e3c3208dd21bd3923efcc91d37715e862d61c44a7e6b00cd->leave($__internal_daf169bc63538e75e3c3208dd21bd3923efcc91d37715e862d61c44a7e6b00cd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resumer/readme.markdown";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# resumer

Return a through stream that starts out paused and resumes on the next tick,
unless somebody called `.pause()`.

This module has the same signature as
[through](https://npmjs.com/package/through).

[![browser support](https://ci.testling.com/substack/resumer.png)](http://ci.testling.com/substack/resumer)

[![build status](https://secure.travis-ci.org/substack/resumer.png)](http://travis-ci.org/substack/resumer)

# example

``` js
var resumer = require('resumer');
var s = createStream();
s.pipe(process.stdout);

function createStream () {
    var stream = resumer();
    stream.queue('beep boop\\n');
    return stream;
}
```

```
\$ node example/resume.js
beep boop
```

# methods

``` js
var resumer = require('resumer')
```

## resumer(write, end)

Return a new through stream from `write` and `end`, which default to
pass-through `.queue()` functions if not specified.

The stream starts out paused and will be resumed on the next tick unless you
call `.pause()` first.

`write` and `end` get passed directly through to
[through](https://npmjs.com/package/through).

# install

With [npm](https://npmjs.org) do:

```
npm install resumer
```

# license

MIT
", "node_modules/resumer/readme.markdown", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resumer/readme.markdown");
    }
}
