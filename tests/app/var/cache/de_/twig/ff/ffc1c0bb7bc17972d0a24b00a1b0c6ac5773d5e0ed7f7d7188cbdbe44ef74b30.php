<?php

/* node_modules/es6-set/test/index.js */
class __TwigTemplate_a72b4f732016ee5c1d361fa74baf4c88b6d2f1ffe9281f086124aa656db46cd5 extends Twig_Template
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
        $__internal_917863a1bbe30b3df59b719fa898dd8bc19f0c79e94f923551b22f5bb7139443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917863a1bbe30b3df59b719fa898dd8bc19f0c79e94f923551b22f5bb7139443->enter($__internal_917863a1bbe30b3df59b719fa898dd8bc19f0c79e94f923551b22f5bb7139443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/index.js"));

        // line 1
        echo "'use strict';

module.exports = function (T, a) { a((new T(['raz', 'dwa'])).size, 2); };
";
        
        $__internal_917863a1bbe30b3df59b719fa898dd8bc19f0c79e94f923551b22f5bb7139443->leave($__internal_917863a1bbe30b3df59b719fa898dd8bc19f0c79e94f923551b22f5bb7139443_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (T, a) { a((new T(['raz', 'dwa'])).size, 2); };
", "node_modules/es6-set/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/index.js");
    }
}
