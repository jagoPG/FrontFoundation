<?php

/* node_modules/es5-ext/number/is-safe-integer/index.js */
class __TwigTemplate_9a1153765e3537cad13250ca12c4d0c68c1d0e5d6e5f011da2dcab4609bd6cfc extends Twig_Template
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
        $__internal_762baf0b6a0e8bc3368da273c57b3166ed13484144c860407d26338e008cb0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762baf0b6a0e8bc3368da273c57b3166ed13484144c860407d26338e008cb0c8->enter($__internal_762baf0b6a0e8bc3368da273c57b3166ed13484144c860407d26338e008cb0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-safe-integer/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Number.isSafeInteger
\t: require(\"./shim\");
";
        
        $__internal_762baf0b6a0e8bc3368da273c57b3166ed13484144c860407d26338e008cb0c8->leave($__internal_762baf0b6a0e8bc3368da273c57b3166ed13484144c860407d26338e008cb0c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-safe-integer/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Number.isSafeInteger
\t: require(\"./shim\");
", "node_modules/es5-ext/number/is-safe-integer/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-safe-integer/index.js");
    }
}
