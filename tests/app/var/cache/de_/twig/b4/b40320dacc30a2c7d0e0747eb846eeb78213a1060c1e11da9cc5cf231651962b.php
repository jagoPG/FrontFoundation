<?php

/* node_modules/es5-ext/array/#/find/shim.js */
class __TwigTemplate_a6010c1cb3d5e2d1ef2c733af2de8423ce4e17675a167e79d5eadc8090383a46 extends Twig_Template
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
        $__internal_56b31ba2c062d929f5fa9adeff910d351c68b19c232d166d4a85d1930f2c1330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b31ba2c062d929f5fa9adeff910d351c68b19c232d166d4a85d1930f2c1330->enter($__internal_56b31ba2c062d929f5fa9adeff910d351c68b19c232d166d4a85d1930f2c1330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/find/shim.js"));

        // line 1
        echo "\"use strict\";

var findIndex = require(\"../find-index/shim\");

// eslint-disable-next-line no-unused-vars
module.exports = function (predicate /*, thisArg*/) {
\tvar index = findIndex.apply(this, arguments);
\treturn index === -1 ? undefined : this[index];
};
";
        
        $__internal_56b31ba2c062d929f5fa9adeff910d351c68b19c232d166d4a85d1930f2c1330->leave($__internal_56b31ba2c062d929f5fa9adeff910d351c68b19c232d166d4a85d1930f2c1330_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/find/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var findIndex = require(\"../find-index/shim\");

// eslint-disable-next-line no-unused-vars
module.exports = function (predicate /*, thisArg*/) {
\tvar index = findIndex.apply(this, arguments);
\treturn index === -1 ? undefined : this[index];
};
", "node_modules/es5-ext/array/#/find/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/find/shim.js");
    }
}
