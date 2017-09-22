<?php

/* node_modules/es5-ext/string/#/@@iterator/shim.js */
class __TwigTemplate_5799d2a197a1607a8b7cfb596c963f63197e5b16c288acc8c43e50c649c9e84c extends Twig_Template
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
        $__internal_31d9841315335e9bf84c6b5bbc05903030f0dfc17e9f33acbf781f00365a9b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d9841315335e9bf84c6b5bbc05903030f0dfc17e9f33acbf781f00365a9b43->enter($__internal_31d9841315335e9bf84c6b5bbc05903030f0dfc17e9f33acbf781f00365a9b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/@@iterator/shim.js"));

        // line 1
        echo "\"use strict\";

var StringIterator = require(\"es6-iterator/string\")
  , value          = require(\"../../../object/valid-value\");

module.exports = function () {
 return new StringIterator(value(this));
};
";
        
        $__internal_31d9841315335e9bf84c6b5bbc05903030f0dfc17e9f33acbf781f00365a9b43->leave($__internal_31d9841315335e9bf84c6b5bbc05903030f0dfc17e9f33acbf781f00365a9b43_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/@@iterator/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var StringIterator = require(\"es6-iterator/string\")
  , value          = require(\"../../../object/valid-value\");

module.exports = function () {
 return new StringIterator(value(this));
};
", "node_modules/es5-ext/string/#/@@iterator/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/@@iterator/shim.js");
    }
}
