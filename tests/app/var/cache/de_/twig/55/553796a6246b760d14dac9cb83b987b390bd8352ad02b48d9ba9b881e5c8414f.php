<?php

/* node_modules/es6-symbol/test/implement.js */
class __TwigTemplate_a3c6a8d7fb37edf88af3e311973a6f9021310d94fe19c0939c3c53e084a2b458 extends Twig_Template
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
        $__internal_a223ac5be6c39f1ffe78038bd711536eed49ed011415341073845a8034cbcb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a223ac5be6c39f1ffe78038bd711536eed49ed011415341073845a8034cbcb4c->enter($__internal_a223ac5be6c39f1ffe78038bd711536eed49ed011415341073845a8034cbcb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/test/implement.js"));

        // line 1
        echo "'use strict';

module.exports = function (t, a) { a(typeof Symbol, 'function'); };
";
        
        $__internal_a223ac5be6c39f1ffe78038bd711536eed49ed011415341073845a8034cbcb4c->leave($__internal_a223ac5be6c39f1ffe78038bd711536eed49ed011415341073845a8034cbcb4c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/test/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (t, a) { a(typeof Symbol, 'function'); };
", "node_modules/es6-symbol/test/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/test/implement.js");
    }
}
