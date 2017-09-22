<?php

/* node_modules/es5-ext/test/math/sign/shim.js */
class __TwigTemplate_32e94f2b7ed7d2db057c2f53e606495cb4ed6a82ede7b6fd0ef459e81242b91b extends Twig_Template
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
        $__internal_a442d3928bd6a2d64f79d14ffa0c80d8be423e70a94f901da30fd8d917c01a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a442d3928bd6a2d64f79d14ffa0c80d8be423e70a94f901da30fd8d917c01a01->enter($__internal_a442d3928bd6a2d64f79d14ffa0c80d8be423e70a94f901da30fd8d917c01a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/sign/shim.js"));

        // line 1
        echo "\"use strict\";

var is = require(\"../../../object/is\");

module.exports = function (t, a) {
\ta(is(t(0), +0), true, \"+0\");
\ta(is(t(-0), -0), true, \"-0\");
\ta(t({}), NaN, true, \"NaN\");
\ta(t(-234234234), -1, \"Negative\");
\ta(t(234234234), 1, \"Positive\");
};
";
        
        $__internal_a442d3928bd6a2d64f79d14ffa0c80d8be423e70a94f901da30fd8d917c01a01->leave($__internal_a442d3928bd6a2d64f79d14ffa0c80d8be423e70a94f901da30fd8d917c01a01_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/sign/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var is = require(\"../../../object/is\");

module.exports = function (t, a) {
\ta(is(t(0), +0), true, \"+0\");
\ta(is(t(-0), -0), true, \"-0\");
\ta(t({}), NaN, true, \"NaN\");
\ta(t(-234234234), -1, \"Negative\");
\ta(t(234234234), 1, \"Positive\");
};
", "node_modules/es5-ext/test/math/sign/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/sign/shim.js");
    }
}
