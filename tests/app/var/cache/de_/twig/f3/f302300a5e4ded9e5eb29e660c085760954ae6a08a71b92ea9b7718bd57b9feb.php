<?php

/* node_modules/es6-symbol/test/is-native-implemented.js */
class __TwigTemplate_8ef5b6a067be73f69ceba24e1d6d6c22a44cb7fa91004eef30bbd101e9291c16 extends Twig_Template
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
        $__internal_2c1989aacd1c4f4b03f149729bcab339032179a899e4a5c04bcd2c0e5ef10d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1989aacd1c4f4b03f149729bcab339032179a899e4a5c04bcd2c0e5ef10d9c->enter($__internal_2c1989aacd1c4f4b03f149729bcab339032179a899e4a5c04bcd2c0e5ef10d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/test/is-native-implemented.js"));

        // line 1
        echo "'use strict';

module.exports = function (t, a) { a(typeof t, 'boolean'); };
";
        
        $__internal_2c1989aacd1c4f4b03f149729bcab339032179a899e4a5c04bcd2c0e5ef10d9c->leave($__internal_2c1989aacd1c4f4b03f149729bcab339032179a899e4a5c04bcd2c0e5ef10d9c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/test/is-native-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (t, a) { a(typeof t, 'boolean'); };
", "node_modules/es6-symbol/test/is-native-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/test/is-native-implemented.js");
    }
}
