<?php

/* node_modules/es6-map/implement.js */
class __TwigTemplate_90e1c587233cd59b50592865c0f272a9afc1a4d9c7ea3551232281a04e1dfdaf extends Twig_Template
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
        $__internal_85a0ef99b3e7fee90a674c4b339400f20b31560d8a3c07fa8ed551acc440ec08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a0ef99b3e7fee90a674c4b339400f20b31560d8a3c07fa8ed551acc440ec08->enter($__internal_85a0ef99b3e7fee90a674c4b339400f20b31560d8a3c07fa8ed551acc440ec08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/implement.js"));

        // line 1
        echo "'use strict';

if (!require('./is-implemented')()) {
\tObject.defineProperty(require('es5-ext/global'), 'Map',
\t\t{ value: require('./polyfill'), configurable: true, enumerable: false,
\t\t\twritable: true });
}
";
        
        $__internal_85a0ef99b3e7fee90a674c4b339400f20b31560d8a3c07fa8ed551acc440ec08->leave($__internal_85a0ef99b3e7fee90a674c4b339400f20b31560d8a3c07fa8ed551acc440ec08_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

if (!require('./is-implemented')()) {
\tObject.defineProperty(require('es5-ext/global'), 'Map',
\t\t{ value: require('./polyfill'), configurable: true, enumerable: false,
\t\t\twritable: true });
}
", "node_modules/es6-map/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/implement.js");
    }
}
