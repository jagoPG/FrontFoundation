<?php

/* node_modules/babel-traverse/README.md */
class __TwigTemplate_f96fee537a10846f7912bfa857db5ebe2351b17b0fa81ddce06c6b5b13a2a703 extends Twig_Template
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
        $__internal_a04afd09d4f585d81baaa280d6a65e9a8c79b12ba38ad8249fe9d6fb2918c4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04afd09d4f585d81baaa280d6a65e9a8c79b12ba38ad8249fe9d6fb2918c4a0->enter($__internal_a04afd09d4f585d81baaa280d6a65e9a8c79b12ba38ad8249fe9d6fb2918c4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-traverse/README.md"));

        // line 1
        echo "# babel-traverse

> babel-traverse maintains the overall tree state, and is responsible for replacing, removing, and adding nodes.

## Install

```sh
\$ npm install --save babel-traverse
```

## Usage

We can use it alongside Babylon to traverse and update nodes:

```js
import * as babylon from \"babylon\";
import traverse from \"babel-traverse\";

const code = `function square(n) {
  return n * n;
}`;

const ast = babylon.parse(code);

traverse(ast, {
  enter(path) {
    if (path.isIdentifier({ name: \"n\" })) {
      path.node.name = \"x\";
    }
  }
});
```
[:book: **Read the full docs here**](https://github.com/thejameskyle/babel-handbook/blob/master/translations/en/plugin-handbook.md#babel-traverse)
";
        
        $__internal_a04afd09d4f585d81baaa280d6a65e9a8c79b12ba38ad8249fe9d6fb2918c4a0->leave($__internal_a04afd09d4f585d81baaa280d6a65e9a8c79b12ba38ad8249fe9d6fb2918c4a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-traverse/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-traverse

> babel-traverse maintains the overall tree state, and is responsible for replacing, removing, and adding nodes.

## Install

```sh
\$ npm install --save babel-traverse
```

## Usage

We can use it alongside Babylon to traverse and update nodes:

```js
import * as babylon from \"babylon\";
import traverse from \"babel-traverse\";

const code = `function square(n) {
  return n * n;
}`;

const ast = babylon.parse(code);

traverse(ast, {
  enter(path) {
    if (path.isIdentifier({ name: \"n\" })) {
      path.node.name = \"x\";
    }
  }
});
```
[:book: **Read the full docs here**](https://github.com/thejameskyle/babel-handbook/blob/master/translations/en/plugin-handbook.md#babel-traverse)
", "node_modules/babel-traverse/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-traverse/README.md");
    }
}
