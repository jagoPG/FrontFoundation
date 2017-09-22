<?php

/* node_modules/es6-set/implement.js */
class __TwigTemplate_35f56974a5afd592d218a3d380d5a2ba497738d8709c24a66ef49e74ff3b9c72 extends Twig_Template
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
        $__internal_0511de34554d0fb9dd1ea5a545b2efd919359d98bc06b3e6c648019d47e9551e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0511de34554d0fb9dd1ea5a545b2efd919359d98bc06b3e6c648019d47e9551e->enter($__internal_0511de34554d0fb9dd1ea5a545b2efd919359d98bc06b3e6c648019d47e9551e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/implement.js"));

        // line 1
        echo "'use strict';

if (!require('./is-implemented')()) {
\tObject.defineProperty(require('es5-ext/global'), 'Set',
\t\t{ value: require('./polyfill'), configurable: true, enumerable: false,
\t\t\twritable: true });
}
";
        
        $__internal_0511de34554d0fb9dd1ea5a545b2efd919359d98bc06b3e6c648019d47e9551e->leave($__internal_0511de34554d0fb9dd1ea5a545b2efd919359d98bc06b3e6c648019d47e9551e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

if (!require('./is-implemented')()) {
\tObject.defineProperty(require('es5-ext/global'), 'Set',
\t\t{ value: require('./polyfill'), configurable: true, enumerable: false,
\t\t\twritable: true });
}
", "node_modules/es6-set/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/implement.js");
    }
}
