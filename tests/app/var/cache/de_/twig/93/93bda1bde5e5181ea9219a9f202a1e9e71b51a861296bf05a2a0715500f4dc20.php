<?php

/* node_modules/core-js/es6/weak-set.js */
class __TwigTemplate_63b5e55103ff67cf9a8dda1a1546e8a9aaffbcf2339c5904204922786a637727 extends Twig_Template
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
        $__internal_1db1bb035a046658b36cd62f74584bb951d58d5a8c87bd51852615aeb4024b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db1bb035a046658b36cd62f74584bb951d58d5a8c87bd51852615aeb4024b80->enter($__internal_1db1bb035a046658b36cd62f74584bb951d58d5a8c87bd51852615aeb4024b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es6/weak-set.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/web.dom.iterable');
require('../modules/es6.weak-set');
module.exports = require('../modules/_core').WeakSet;
";
        
        $__internal_1db1bb035a046658b36cd62f74584bb951d58d5a8c87bd51852615aeb4024b80->leave($__internal_1db1bb035a046658b36cd62f74584bb951d58d5a8c87bd51852615aeb4024b80_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es6/weak-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.object.to-string');
require('../modules/web.dom.iterable');
require('../modules/es6.weak-set');
module.exports = require('../modules/_core').WeakSet;
", "node_modules/core-js/es6/weak-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es6/weak-set.js");
    }
}
