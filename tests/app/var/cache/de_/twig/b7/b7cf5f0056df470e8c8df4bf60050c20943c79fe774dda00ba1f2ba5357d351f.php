<?php

/* node_modules/es6-map/test/is-native-implemented.js */
class __TwigTemplate_62613d8788c3e8ef8baddddbeb4fdf26e47a35604a17e6ede1cfd30498a566c8 extends Twig_Template
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
        $__internal_74dd73e49a9d1b04619e813067ec1b85f70f9e338255b36bfd4a8fa63c3a3f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74dd73e49a9d1b04619e813067ec1b85f70f9e338255b36bfd4a8fa63c3a3f8c->enter($__internal_74dd73e49a9d1b04619e813067ec1b85f70f9e338255b36bfd4a8fa63c3a3f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/test/is-native-implemented.js"));

        // line 1
        echo "'use strict';

module.exports = function (t, a) { a(typeof t, 'boolean'); };
";
        
        $__internal_74dd73e49a9d1b04619e813067ec1b85f70f9e338255b36bfd4a8fa63c3a3f8c->leave($__internal_74dd73e49a9d1b04619e813067ec1b85f70f9e338255b36bfd4a8fa63c3a3f8c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/test/is-native-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (t, a) { a(typeof t, 'boolean'); };
", "node_modules/es6-map/test/is-native-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/test/is-native-implemented.js");
    }
}
