<?php

/* node_modules/es5-ext/object/valid-value.js */
class __TwigTemplate_e81dbb3216c3bdb404a9576f213c8e7c1ca46a66ce9d712649c15737c064603d extends Twig_Template
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
        $__internal_52ca81253df1b30c55a4b4255cc93af49f771fe62f34a8e432913fd2b1c5ca13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ca81253df1b30c55a4b4255cc93af49f771fe62f34a8e432913fd2b1c5ca13->enter($__internal_52ca81253df1b30c55a4b4255cc93af49f771fe62f34a8e432913fd2b1c5ca13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/valid-value.js"));

        // line 1
        echo "\"use strict\";

var isValue = require(\"./is-value\");

module.exports = function (value) {
\tif (!isValue(value)) throw new TypeError(\"Cannot use null or undefined\");
\treturn value;
};
";
        
        $__internal_52ca81253df1b30c55a4b4255cc93af49f771fe62f34a8e432913fd2b1c5ca13->leave($__internal_52ca81253df1b30c55a4b4255cc93af49f771fe62f34a8e432913fd2b1c5ca13_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/valid-value.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isValue = require(\"./is-value\");

module.exports = function (value) {
\tif (!isValue(value)) throw new TypeError(\"Cannot use null or undefined\");
\treturn value;
};
", "node_modules/es5-ext/object/valid-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/valid-value.js");
    }
}
