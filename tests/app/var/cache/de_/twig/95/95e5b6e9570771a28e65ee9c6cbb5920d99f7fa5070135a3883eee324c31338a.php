<?php

/* node_modules/has-flag/readme.md */
class __TwigTemplate_3402e812e01041a924eac97699d8e5b06debd9185a94e1dfd974a7143009e046 extends Twig_Template
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
        $__internal_63a62306bf1fe4df0badb09e5f45038c96e224d9cd55608ee2f379f31fe3df6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a62306bf1fe4df0badb09e5f45038c96e224d9cd55608ee2f379f31fe3df6c->enter($__internal_63a62306bf1fe4df0badb09e5f45038c96e224d9cd55608ee2f379f31fe3df6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/has-flag/readme.md"));

        // line 1
        echo "# has-flag [![Build Status](https://travis-ci.org/sindresorhus/has-flag.svg?branch=master)](https://travis-ci.org/sindresorhus/has-flag)

> Check if [`argv`](https://nodejs.org/docs/latest/api/process.html#process_process_argv) has a specific flag

Correctly stops looking after an `--` argument terminator.


## Install

```
\$ npm install --save has-flag
```


## Usage

```js
// foo.js
const hasFlag = require('has-flag');

hasFlag('unicorn');
//=> true

hasFlag('--unicorn');
//=> true

hasFlag('-f');
//=> true

hasFlag('foo=bar');
//=> true

hasFlag('foo');
//=> false

hasFlag('rainbow');
//=> false
```

```
\$ node foo.js -f --unicorn --foo=bar -- --rainbow
```


## API

### hasFlag(flag, [argv])

Returns a boolean whether the flag exists.

#### flag

Type: `string`

CLI flag to look for. The `--` prefix is optional.

#### argv

Type: `array`<br>
Default: `process.argv`

CLI arguments.


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_63a62306bf1fe4df0badb09e5f45038c96e224d9cd55608ee2f379f31fe3df6c->leave($__internal_63a62306bf1fe4df0badb09e5f45038c96e224d9cd55608ee2f379f31fe3df6c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/has-flag/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# has-flag [![Build Status](https://travis-ci.org/sindresorhus/has-flag.svg?branch=master)](https://travis-ci.org/sindresorhus/has-flag)

> Check if [`argv`](https://nodejs.org/docs/latest/api/process.html#process_process_argv) has a specific flag

Correctly stops looking after an `--` argument terminator.


## Install

```
\$ npm install --save has-flag
```


## Usage

```js
// foo.js
const hasFlag = require('has-flag');

hasFlag('unicorn');
//=> true

hasFlag('--unicorn');
//=> true

hasFlag('-f');
//=> true

hasFlag('foo=bar');
//=> true

hasFlag('foo');
//=> false

hasFlag('rainbow');
//=> false
```

```
\$ node foo.js -f --unicorn --foo=bar -- --rainbow
```


## API

### hasFlag(flag, [argv])

Returns a boolean whether the flag exists.

#### flag

Type: `string`

CLI flag to look for. The `--` prefix is optional.

#### argv

Type: `array`<br>
Default: `process.argv`

CLI arguments.


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/has-flag/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/has-flag/readme.md");
    }
}
