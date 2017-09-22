<?php

/* node_modules/es5-ext/object/is-finite-number.js */
class __TwigTemplate_9c9efe38d4e72726c58d4a8dfe6629dcaeee26cfb394533d6992d2bae23d1b18 extends Twig_Template
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
        $__internal_f9568f69d6f16f2fc1a85bdceea83ae459d31cb460aec599bb9740d05035015f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9568f69d6f16f2fc1a85bdceea83ae459d31cb460aec599bb9740d05035015f->enter($__internal_f9568f69d6f16f2fc1a85bdceea83ae459d31cb460aec599bb9740d05035015f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/is-finite-number.js"));

        // line 1
        echo "\"use strict\";

var isNumber = require(\"./is-number-value\");

module.exports = function (value) {
\treturn isNumber(value) && isFinite(value);
};
";
        
        $__internal_f9568f69d6f16f2fc1a85bdceea83ae459d31cb460aec599bb9740d05035015f->leave($__internal_f9568f69d6f16f2fc1a85bdceea83ae459d31cb460aec599bb9740d05035015f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/is-finite-number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isNumber = require(\"./is-number-value\");

module.exports = function (value) {
\treturn isNumber(value) && isFinite(value);
};
", "node_modules/es5-ext/object/is-finite-number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/is-finite-number.js");
    }
}
