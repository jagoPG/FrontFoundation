<?php

/* node_modules/es5-ext/function/valid-function.js */
class __TwigTemplate_80a9b19cc744ec622724141f43d25f7754ad7d57ae7d1deede5bec4fbb657faa extends Twig_Template
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
        $__internal_8ee4bc720f5aa07c117cda316aaff73a2367c17a528507c242a812a5fd6e7c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee4bc720f5aa07c117cda316aaff73a2367c17a528507c242a812a5fd6e7c69->enter($__internal_8ee4bc720f5aa07c117cda316aaff73a2367c17a528507c242a812a5fd6e7c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/valid-function.js"));

        // line 1
        echo "\"use strict\";

var isFunction = require(\"./is-function\");

module.exports = function (value) {
\tif (!isFunction(value)) throw new TypeError(value + \" is not a function\");
\treturn value;
};
";
        
        $__internal_8ee4bc720f5aa07c117cda316aaff73a2367c17a528507c242a812a5fd6e7c69->leave($__internal_8ee4bc720f5aa07c117cda316aaff73a2367c17a528507c242a812a5fd6e7c69_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/valid-function.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isFunction = require(\"./is-function\");

module.exports = function (value) {
\tif (!isFunction(value)) throw new TypeError(value + \" is not a function\");
\treturn value;
};
", "node_modules/es5-ext/function/valid-function.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/valid-function.js");
    }
}
