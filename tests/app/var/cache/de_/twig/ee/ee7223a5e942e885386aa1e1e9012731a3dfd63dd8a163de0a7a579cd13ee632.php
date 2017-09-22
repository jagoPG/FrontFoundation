<?php

/* node_modules/es5-ext/array/#/values/shim.js */
class __TwigTemplate_7f243eb437166090307cfdbda0e236d238be6bcdfb850dd0e415be8f73943d31 extends Twig_Template
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
        $__internal_eb3a4b119fd398a0e93b0542ea86df9af889e8f31229ae191f0af2ceabc50923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3a4b119fd398a0e93b0542ea86df9af889e8f31229ae191f0af2ceabc50923->enter($__internal_eb3a4b119fd398a0e93b0542ea86df9af889e8f31229ae191f0af2ceabc50923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/values/shim.js"));

        // line 1
        echo "\"use strict\";

var ArrayIterator = require(\"es6-iterator/array\");
module.exports = function () {
 return new ArrayIterator(this, \"value\");
};
";
        
        $__internal_eb3a4b119fd398a0e93b0542ea86df9af889e8f31229ae191f0af2ceabc50923->leave($__internal_eb3a4b119fd398a0e93b0542ea86df9af889e8f31229ae191f0af2ceabc50923_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/values/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var ArrayIterator = require(\"es6-iterator/array\");
module.exports = function () {
 return new ArrayIterator(this, \"value\");
};
", "node_modules/es5-ext/array/#/values/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/values/shim.js");
    }
}
