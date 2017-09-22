<?php

/* node_modules/core-js/es6/weak-map.js */
class __TwigTemplate_551c81fbebe01b3adce9c621177c19ad2c6e527059f36bea7c7c0df36d9c00db extends Twig_Template
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
        $__internal_ff1fd1bdab0f8746753bbf34c3799a23e37b3eabda0000283acfa30b25faa448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1fd1bdab0f8746753bbf34c3799a23e37b3eabda0000283acfa30b25faa448->enter($__internal_ff1fd1bdab0f8746753bbf34c3799a23e37b3eabda0000283acfa30b25faa448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es6/weak-map.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/es6.array.iterator');
require('../modules/es6.weak-map');
module.exports = require('../modules/_core').WeakMap;
";
        
        $__internal_ff1fd1bdab0f8746753bbf34c3799a23e37b3eabda0000283acfa30b25faa448->leave($__internal_ff1fd1bdab0f8746753bbf34c3799a23e37b3eabda0000283acfa30b25faa448_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es6/weak-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.object.to-string');
require('../modules/es6.array.iterator');
require('../modules/es6.weak-map');
module.exports = require('../modules/_core').WeakMap;
", "node_modules/core-js/es6/weak-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es6/weak-map.js");
    }
}
