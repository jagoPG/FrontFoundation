<?php

/* node_modules/es6-weak-map/test/implement.js */
class __TwigTemplate_73c23240f29ef854f9a549bf83a075e6a10ead11abf6df106265357b5df3e5ba extends Twig_Template
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
        $__internal_4cf89893cf3607d8208655311bcfe92b65ed99fe1f0427bc5e133c4e9f824674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf89893cf3607d8208655311bcfe92b65ed99fe1f0427bc5e133c4e9f824674->enter($__internal_4cf89893cf3607d8208655311bcfe92b65ed99fe1f0427bc5e133c4e9f824674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/test/implement.js"));

        // line 1
        echo "'use strict';

module.exports = function (t, a) { a(typeof WeakMap, 'function'); };
";
        
        $__internal_4cf89893cf3607d8208655311bcfe92b65ed99fe1f0427bc5e133c4e9f824674->leave($__internal_4cf89893cf3607d8208655311bcfe92b65ed99fe1f0427bc5e133c4e9f824674_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/test/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (t, a) { a(typeof WeakMap, 'function'); };
", "node_modules/es6-weak-map/test/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/test/implement.js");
    }
}
