<?php

/* node_modules/babel-plugin-check-es2015-constants/README.md */
class __TwigTemplate_0252c5cb802d87b7a5e733b541650a15ff18f909e16d922d66e0743ee3228843 extends Twig_Template
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
        $__internal_4d6a4a88baeb7f06f28694e28756d4f64e4fda9765a456516d18751bad17d439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6a4a88baeb7f06f28694e28756d4f64e4fda9765a456516d18751bad17d439->enter($__internal_4d6a4a88baeb7f06f28694e28756d4f64e4fda9765a456516d18751bad17d439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-check-es2015-constants/README.md"));

        // line 1
        echo "# babel-plugin-check-es2015-constants

Validate ES2015 constants (prevents reassignment of const variables).

## Example

**In**

```js
const a = 1;
a = 2;
```

**Out**

```bash
repl: \"a\" is read-only
  1 | const a = 1;
> 2 | a = 2;
    | ^
```

[Try in REPL](http://babeljs.io/repl/#?babili=false&evaluate=true&lineWrap=false&presets=es2015&experimental=false&loose=false&spec=false&code=const%20a%20%3D%201%3B%0Aa%20%3D%202%3B&playground=true)

## Installation

```sh
npm install --save-dev babel-plugin-check-es2015-constants
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"check-es2015-constants\"]
}
```

### Via CLI

```sh
babel --plugins check-es2015-constants script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"check-es2015-constants\"]
});
```

## Note

This check will only validate consts. If you need it to compile down to `var` then you must also install and enable [`transform-es2015-block-scoping`](http://babeljs.io/docs/plugins/transform-es2015-block-scoping/).
";
        
        $__internal_4d6a4a88baeb7f06f28694e28756d4f64e4fda9765a456516d18751bad17d439->leave($__internal_4d6a4a88baeb7f06f28694e28756d4f64e4fda9765a456516d18751bad17d439_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-check-es2015-constants/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-check-es2015-constants

Validate ES2015 constants (prevents reassignment of const variables).

## Example

**In**

```js
const a = 1;
a = 2;
```

**Out**

```bash
repl: \"a\" is read-only
  1 | const a = 1;
> 2 | a = 2;
    | ^
```

[Try in REPL](http://babeljs.io/repl/#?babili=false&evaluate=true&lineWrap=false&presets=es2015&experimental=false&loose=false&spec=false&code=const%20a%20%3D%201%3B%0Aa%20%3D%202%3B&playground=true)

## Installation

```sh
npm install --save-dev babel-plugin-check-es2015-constants
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"check-es2015-constants\"]
}
```

### Via CLI

```sh
babel --plugins check-es2015-constants script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"check-es2015-constants\"]
});
```

## Note

This check will only validate consts. If you need it to compile down to `var` then you must also install and enable [`transform-es2015-block-scoping`](http://babeljs.io/docs/plugins/transform-es2015-block-scoping/).
", "node_modules/babel-plugin-check-es2015-constants/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-check-es2015-constants/README.md");
    }
}
