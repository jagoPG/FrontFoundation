<?php

/* node_modules/es5-ext/array/#/entries/shim.js */
class __TwigTemplate_21096100e181e991bb84703f7e92321d8118be6dd9af552373badc56b6072558 extends Twig_Template
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
        $__internal_8ec4aaffdc7e13c3a5d39c05475e2fa92512beaa72bb2c6ff2e448d37d2ba776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec4aaffdc7e13c3a5d39c05475e2fa92512beaa72bb2c6ff2e448d37d2ba776->enter($__internal_8ec4aaffdc7e13c3a5d39c05475e2fa92512beaa72bb2c6ff2e448d37d2ba776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/entries/shim.js"));

        // line 1
        echo "\"use strict\";

var ArrayIterator = require(\"es6-iterator/array\");
module.exports = function () {
 return new ArrayIterator(this, \"key+value\");
};
";
        
        $__internal_8ec4aaffdc7e13c3a5d39c05475e2fa92512beaa72bb2c6ff2e448d37d2ba776->leave($__internal_8ec4aaffdc7e13c3a5d39c05475e2fa92512beaa72bb2c6ff2e448d37d2ba776_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/entries/shim.js";
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
 return new ArrayIterator(this, \"key+value\");
};
", "node_modules/es5-ext/array/#/entries/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/entries/shim.js");
    }
}
