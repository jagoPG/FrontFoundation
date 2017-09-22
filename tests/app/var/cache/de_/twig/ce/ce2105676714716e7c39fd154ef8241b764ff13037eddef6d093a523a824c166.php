<?php

/* node_modules/es6-weak-map/implement.js */
class __TwigTemplate_ea7e85f356c936db7b2d4c086f6dcba68d68d2e825f42c59d0ca4932223c19bd extends Twig_Template
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
        $__internal_9b259e1718e5b7f25f47b011616c4e976ce1084b061cd7863c969efeb8fdd88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b259e1718e5b7f25f47b011616c4e976ce1084b061cd7863c969efeb8fdd88c->enter($__internal_9b259e1718e5b7f25f47b011616c4e976ce1084b061cd7863c969efeb8fdd88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/implement.js"));

        // line 1
        echo "'use strict';

if (!require('./is-implemented')()) {
\tObject.defineProperty(require('es5-ext/global'), 'WeakMap',
\t\t{ value: require('./polyfill'), configurable: true, enumerable: false,
\t\t\twritable: true });
}
";
        
        $__internal_9b259e1718e5b7f25f47b011616c4e976ce1084b061cd7863c969efeb8fdd88c->leave($__internal_9b259e1718e5b7f25f47b011616c4e976ce1084b061cd7863c969efeb8fdd88c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

if (!require('./is-implemented')()) {
\tObject.defineProperty(require('es5-ext/global'), 'WeakMap',
\t\t{ value: require('./polyfill'), configurable: true, enumerable: false,
\t\t\twritable: true });
}
", "node_modules/es6-weak-map/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/implement.js");
    }
}
