<?php

/* node_modules/babel-template/README.md */
class __TwigTemplate_2da8689c6a0ca39ef4b8612f5ca339fd074c8345a7dffd84acce26cf00d5313d extends Twig_Template
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
        $__internal_0885a1ff13a137076a6279670ded249369de494de371bdbc038d8aa911fd5a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0885a1ff13a137076a6279670ded249369de494de371bdbc038d8aa911fd5a60->enter($__internal_0885a1ff13a137076a6279670ded249369de494de371bdbc038d8aa911fd5a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-template/README.md"));

        // line 1
        echo "# babel-template

> Generate an AST from a string template.

In computer science, this is known as an implementation of quasiquotes.

## Install

```sh
npm install --save-dev babel-template
```

## Usage

```js
import template from \"babel-template\";
import generate from \"babel-generator\";
import * as t from \"babel-types\";

const buildRequire = template(`
  var IMPORT_NAME = require(SOURCE);
`);

const ast = buildRequire({
  IMPORT_NAME: t.identifier(\"myModule\"),
  SOURCE: t.stringLiteral(\"my-module\")
});

console.log(generate(ast).code);
```

```js
const myModule = require(\"my-module\");
```

## API

### `template(code, [opts])`

#### code

Type: `string`

#### options

`babel-template` accepts all of the options from [babylon], and specifies
some defaults of its own:

* `allowReturnOutsideFunction` is set to `true` by default.
* `allowSuperOutsideMethod` is set to `true` by default.

##### preserveComments

Type: `boolean`
Default: `false`

Set this to `true` to preserve any comments from the `code` parameter.

#### Return value

`babel-template` returns a `function` which is invoked with an optional object
of replacements. See the usage section for an example.

[babylon]: https://github.com/babel/babylon#options
";
        
        $__internal_0885a1ff13a137076a6279670ded249369de494de371bdbc038d8aa911fd5a60->leave($__internal_0885a1ff13a137076a6279670ded249369de494de371bdbc038d8aa911fd5a60_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-template/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-template

> Generate an AST from a string template.

In computer science, this is known as an implementation of quasiquotes.

## Install

```sh
npm install --save-dev babel-template
```

## Usage

```js
import template from \"babel-template\";
import generate from \"babel-generator\";
import * as t from \"babel-types\";

const buildRequire = template(`
  var IMPORT_NAME = require(SOURCE);
`);

const ast = buildRequire({
  IMPORT_NAME: t.identifier(\"myModule\"),
  SOURCE: t.stringLiteral(\"my-module\")
});

console.log(generate(ast).code);
```

```js
const myModule = require(\"my-module\");
```

## API

### `template(code, [opts])`

#### code

Type: `string`

#### options

`babel-template` accepts all of the options from [babylon], and specifies
some defaults of its own:

* `allowReturnOutsideFunction` is set to `true` by default.
* `allowSuperOutsideMethod` is set to `true` by default.

##### preserveComments

Type: `boolean`
Default: `false`

Set this to `true` to preserve any comments from the `code` parameter.

#### Return value

`babel-template` returns a `function` which is invoked with an optional object
of replacements. See the usage section for an example.

[babylon]: https://github.com/babel/babylon#options
", "node_modules/babel-template/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-template/README.md");
    }
}
