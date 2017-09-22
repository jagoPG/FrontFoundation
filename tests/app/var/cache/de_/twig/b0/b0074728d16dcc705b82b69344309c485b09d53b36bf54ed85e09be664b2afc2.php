<?php

/* node_modules/es5-ext/array/#/concat/is-implemented.js */
class __TwigTemplate_f22da6460099446c4e1e249d9a2f55ae52ed717d0a6ad76a09e9e5380615e101 extends Twig_Template
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
        $__internal_7f58303a0c4da3996b338b5bbc6808fc2469d01a8903af1ed5458388cdd17b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f58303a0c4da3996b338b5bbc6808fc2469d01a8903af1ed5458388cdd17b10->enter($__internal_7f58303a0c4da3996b338b5bbc6808fc2469d01a8903af1ed5458388cdd17b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/concat/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var SubArray = require(\"../../_sub-array-dummy-safe\");

module.exports = function () {
\treturn (new SubArray()).concat(\"foo\") instanceof SubArray;
};
";
        
        $__internal_7f58303a0c4da3996b338b5bbc6808fc2469d01a8903af1ed5458388cdd17b10->leave($__internal_7f58303a0c4da3996b338b5bbc6808fc2469d01a8903af1ed5458388cdd17b10_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/concat/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var SubArray = require(\"../../_sub-array-dummy-safe\");

module.exports = function () {
\treturn (new SubArray()).concat(\"foo\") instanceof SubArray;
};
", "node_modules/es5-ext/array/#/concat/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/concat/is-implemented.js");
    }
}
