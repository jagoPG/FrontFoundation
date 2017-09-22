<?php

/* node_modules/core-js/es6/promise.js */
class __TwigTemplate_6f6611d4fdb7abff1c8a25545b5104c4c1c1db2434d39cbc2ec7cf1c5ab24f00 extends Twig_Template
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
        $__internal_836116fe8f34fd60559e56d10619c2863b66be5635b64ab7a8c5714f1cbe0935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836116fe8f34fd60559e56d10619c2863b66be5635b64ab7a8c5714f1cbe0935->enter($__internal_836116fe8f34fd60559e56d10619c2863b66be5635b64ab7a8c5714f1cbe0935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es6/promise.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.promise');
module.exports = require('../modules/_core').Promise;
";
        
        $__internal_836116fe8f34fd60559e56d10619c2863b66be5635b64ab7a8c5714f1cbe0935->leave($__internal_836116fe8f34fd60559e56d10619c2863b66be5635b64ab7a8c5714f1cbe0935_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es6/promise.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.promise');
module.exports = require('../modules/_core').Promise;
", "node_modules/core-js/es6/promise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es6/promise.js");
    }
}
