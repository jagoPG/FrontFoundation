<?php

/* node_modules/es6-symbol/implement.js */
class __TwigTemplate_cf4b9f25d59d12fbcf123153d02e887f92b5590d8e017a8483214b4a6c0fe70f extends Twig_Template
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
        $__internal_4f02b3feba8b3457573113e44bd367df2170615fc6baaa2074285131e94902b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f02b3feba8b3457573113e44bd367df2170615fc6baaa2074285131e94902b0->enter($__internal_4f02b3feba8b3457573113e44bd367df2170615fc6baaa2074285131e94902b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/implement.js"));

        // line 1
        echo "'use strict';

if (!require('./is-implemented')()) {
\tObject.defineProperty(require('es5-ext/global'), 'Symbol',
\t\t{ value: require('./polyfill'), configurable: true, enumerable: false,
\t\t\twritable: true });
}
";
        
        $__internal_4f02b3feba8b3457573113e44bd367df2170615fc6baaa2074285131e94902b0->leave($__internal_4f02b3feba8b3457573113e44bd367df2170615fc6baaa2074285131e94902b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

if (!require('./is-implemented')()) {
\tObject.defineProperty(require('es5-ext/global'), 'Symbol',
\t\t{ value: require('./polyfill'), configurable: true, enumerable: false,
\t\t\twritable: true });
}
", "node_modules/es6-symbol/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/implement.js");
    }
}
