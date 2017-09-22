<?php

/* node_modules/es5-ext/math/clz32/index.js */
class __TwigTemplate_33e36c6a6040a338b3d9653694637c1b9258725b4655d582a0a5d98aeb47176d extends Twig_Template
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
        $__internal_ce344dd9d7a23a6e778b43f114ba8d89324383a75bbfd7055f72d551b88f888c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce344dd9d7a23a6e778b43f114ba8d89324383a75bbfd7055f72d551b88f888c->enter($__internal_ce344dd9d7a23a6e778b43f114ba8d89324383a75bbfd7055f72d551b88f888c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/clz32/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.clz32
\t: require(\"./shim\");
";
        
        $__internal_ce344dd9d7a23a6e778b43f114ba8d89324383a75bbfd7055f72d551b88f888c->leave($__internal_ce344dd9d7a23a6e778b43f114ba8d89324383a75bbfd7055f72d551b88f888c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/clz32/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.clz32
\t: require(\"./shim\");
", "node_modules/es5-ext/math/clz32/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/clz32/index.js");
    }
}
