<?php

/* node_modules/es5-ext/test/string/#/ends-with/implement.js */
class __TwigTemplate_6219aa14d2c373b3b3a7cd0950d1e9db0426513f4259f355570030e21bfbfa34 extends Twig_Template
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
        $__internal_7b051fd6a690e335c8cd5d59839c7c080fac229d423bae84d8267a0c14d9c94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b051fd6a690e335c8cd5d59839c7c080fac229d423bae84d8267a0c14d9c94d->enter($__internal_7b051fd6a690e335c8cd5d59839c7c080fac229d423bae84d8267a0c14d9c94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/ends-with/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../string/#/ends-with/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_7b051fd6a690e335c8cd5d59839c7c080fac229d423bae84d8267a0c14d9c94d->leave($__internal_7b051fd6a690e335c8cd5d59839c7c080fac229d423bae84d8267a0c14d9c94d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/ends-with/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../string/#/ends-with/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/string/#/ends-with/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/ends-with/implement.js");
    }
}
