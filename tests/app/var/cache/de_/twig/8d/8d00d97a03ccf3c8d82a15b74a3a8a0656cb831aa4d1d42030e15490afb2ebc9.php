<?php

/* node_modules/es5-ext/number/min-safe-integer/is-implemented.js */
class __TwigTemplate_47e0789c93d1b770dc62c5339524eb346bcec4dea32034e82044e7049f541ce6 extends Twig_Template
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
        $__internal_3ca883a2a0a07d243ad8a91c0376b9d7bb74e31bbd5b236f59dd462eb9db2b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca883a2a0a07d243ad8a91c0376b9d7bb74e31bbd5b236f59dd462eb9db2b2c->enter($__internal_3ca883a2a0a07d243ad8a91c0376b9d7bb74e31bbd5b236f59dd462eb9db2b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/min-safe-integer/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\treturn typeof Number.MIN_SAFE_INTEGER === \"number\";
};
";
        
        $__internal_3ca883a2a0a07d243ad8a91c0376b9d7bb74e31bbd5b236f59dd462eb9db2b2c->leave($__internal_3ca883a2a0a07d243ad8a91c0376b9d7bb74e31bbd5b236f59dd462eb9db2b2c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/min-safe-integer/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\treturn typeof Number.MIN_SAFE_INTEGER === \"number\";
};
", "node_modules/es5-ext/number/min-safe-integer/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/min-safe-integer/is-implemented.js");
    }
}
