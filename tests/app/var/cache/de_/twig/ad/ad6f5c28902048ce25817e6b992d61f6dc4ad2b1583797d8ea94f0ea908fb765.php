<?php

/* node_modules/es5-ext/object/is-promise.js */
class __TwigTemplate_c542faaa0636fdc985f1d292baf3c0074ade37b2d8bdb79e081f13ca06b0d8a0 extends Twig_Template
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
        $__internal_c3afca14743c4680354071328cb3600306a33e195819646e9cde87fc642ddde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3afca14743c4680354071328cb3600306a33e195819646e9cde87fc642ddde4->enter($__internal_c3afca14743c4680354071328cb3600306a33e195819646e9cde87fc642ddde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/is-promise.js"));

        // line 1
        echo "\"use strict\";

var isCallable = require(\"./is-callable\")
  , isObject   = require(\"./is-object\");

module.exports = function (value) {
 return isObject(value) && isCallable(value.then);
};
";
        
        $__internal_c3afca14743c4680354071328cb3600306a33e195819646e9cde87fc642ddde4->leave($__internal_c3afca14743c4680354071328cb3600306a33e195819646e9cde87fc642ddde4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/is-promise.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isCallable = require(\"./is-callable\")
  , isObject   = require(\"./is-object\");

module.exports = function (value) {
 return isObject(value) && isCallable(value.then);
};
", "node_modules/es5-ext/object/is-promise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/is-promise.js");
    }
}
