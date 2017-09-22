<?php

/* node_modules/process-nextick-args/readme.md */
class __TwigTemplate_003ef63422f04aae18a13fc9aa08b1bd1c6f1af76e4fec84354119fa23444635 extends Twig_Template
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
        $__internal_b636f92c855fcc989d84c5d49230640d379eb6e3c20d80ccdb0675740ff5c062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b636f92c855fcc989d84c5d49230640d379eb6e3c20d80ccdb0675740ff5c062->enter($__internal_b636f92c855fcc989d84c5d49230640d379eb6e3c20d80ccdb0675740ff5c062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/process-nextick-args/readme.md"));

        // line 1
        echo "process-nextick-args
=====

[![Build Status](https://travis-ci.org/calvinmetcalf/process-nextick-args.svg?branch=master)](https://travis-ci.org/calvinmetcalf/process-nextick-args)

```bash
npm install --save process-nextick-args
```

Always be able to pass arguments to process.nextTick, no matter the platform

```js
var nextTick = require('process-nextick-args');

nextTick(function (a, b, c) {
  console.log(a, b, c);
}, 'step', 3,  'profit');
```
";
        
        $__internal_b636f92c855fcc989d84c5d49230640d379eb6e3c20d80ccdb0675740ff5c062->leave($__internal_b636f92c855fcc989d84c5d49230640d379eb6e3c20d80ccdb0675740ff5c062_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/process-nextick-args/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("process-nextick-args
=====

[![Build Status](https://travis-ci.org/calvinmetcalf/process-nextick-args.svg?branch=master)](https://travis-ci.org/calvinmetcalf/process-nextick-args)

```bash
npm install --save process-nextick-args
```

Always be able to pass arguments to process.nextTick, no matter the platform

```js
var nextTick = require('process-nextick-args');

nextTick(function (a, b, c) {
  console.log(a, b, c);
}, 'step', 3,  'profit');
```
", "node_modules/process-nextick-args/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/process-nextick-args/readme.md");
    }
}
