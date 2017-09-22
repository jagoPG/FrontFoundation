<?php

/* node_modules/es6-set/test/is-native-implemented.js */
class __TwigTemplate_1dc981ee6c733a5d13d9a4b8e1a31808e8671d0728436ef34c64284519df07cc extends Twig_Template
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
        $__internal_dd4b9f7cfe6c6ccca00ebb7d618747cbe7a67a5aea4336fd13fed8dab4e9de5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4b9f7cfe6c6ccca00ebb7d618747cbe7a67a5aea4336fd13fed8dab4e9de5e->enter($__internal_dd4b9f7cfe6c6ccca00ebb7d618747cbe7a67a5aea4336fd13fed8dab4e9de5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/is-native-implemented.js"));

        // line 1
        echo "'use strict';

module.exports = function (t, a) { a(typeof t, 'boolean'); };
";
        
        $__internal_dd4b9f7cfe6c6ccca00ebb7d618747cbe7a67a5aea4336fd13fed8dab4e9de5e->leave($__internal_dd4b9f7cfe6c6ccca00ebb7d618747cbe7a67a5aea4336fd13fed8dab4e9de5e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/is-native-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (t, a) { a(typeof t, 'boolean'); };
", "node_modules/es6-set/test/is-native-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/is-native-implemented.js");
    }
}
