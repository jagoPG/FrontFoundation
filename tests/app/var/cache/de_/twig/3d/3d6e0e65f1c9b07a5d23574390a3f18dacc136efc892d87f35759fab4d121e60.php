<?php

/* node_modules/es5-ext/object/unserialize.js */
class __TwigTemplate_73c2c85654444cadd656a3acae2b46e945b88f57b362a17510e6f8512cc156a7 extends Twig_Template
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
        $__internal_ebd405b60347f8f7ef834255e328e082dd9c5ff37b4637936a5c5ad20bcaff5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd405b60347f8f7ef834255e328e082dd9c5ff37b4637936a5c5ad20bcaff5a->enter($__internal_ebd405b60347f8f7ef834255e328e082dd9c5ff37b4637936a5c5ad20bcaff5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/unserialize.js"));

        // line 1
        echo "\"use strict\";

var value = require(\"./valid-value\");

module.exports = exports = function (code) {
\t// eslint-disable-next-line no-new-func
\treturn new Function(\"return \" + value(code))();
};
";
        
        $__internal_ebd405b60347f8f7ef834255e328e082dd9c5ff37b4637936a5c5ad20bcaff5a->leave($__internal_ebd405b60347f8f7ef834255e328e082dd9c5ff37b4637936a5c5ad20bcaff5a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/unserialize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value = require(\"./valid-value\");

module.exports = exports = function (code) {
\t// eslint-disable-next-line no-new-func
\treturn new Function(\"return \" + value(code))();
};
", "node_modules/es5-ext/object/unserialize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/unserialize.js");
    }
}
