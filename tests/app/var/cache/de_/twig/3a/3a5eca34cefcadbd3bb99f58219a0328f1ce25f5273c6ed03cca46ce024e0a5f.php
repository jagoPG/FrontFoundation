<?php

/* node_modules/es5-ext/array/valid-array.js */
class __TwigTemplate_2d4c0a9f41738607c6408cc6ff19546a584ff2579bdfe2ef3e21ebe997ab6b82 extends Twig_Template
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
        $__internal_cf320c05d7fd0c615efacb9af2f587d86ee9d07280e4c9fbbf015e72646e6621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf320c05d7fd0c615efacb9af2f587d86ee9d07280e4c9fbbf015e72646e6621->enter($__internal_cf320c05d7fd0c615efacb9af2f587d86ee9d07280e4c9fbbf015e72646e6621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/valid-array.js"));

        // line 1
        echo "\"use strict\";

var isArray = Array.isArray;

module.exports = function (value) {
\tif (isArray(value)) return value;
\tthrow new TypeError(value + \" is not an array\");
};
";
        
        $__internal_cf320c05d7fd0c615efacb9af2f587d86ee9d07280e4c9fbbf015e72646e6621->leave($__internal_cf320c05d7fd0c615efacb9af2f587d86ee9d07280e4c9fbbf015e72646e6621_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/valid-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isArray = Array.isArray;

module.exports = function (value) {
\tif (isArray(value)) return value;
\tthrow new TypeError(value + \" is not an array\");
};
", "node_modules/es5-ext/array/valid-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/valid-array.js");
    }
}
