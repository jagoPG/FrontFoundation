<?php

/* node_modules/es5-ext/test/date/#/floor-day.js */
class __TwigTemplate_fc98923b0cd28d357e21cff80ab08593b9269306a0f8dcc2e4a556ee6fb0b7f6 extends Twig_Template
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
        $__internal_070077f11d4138e3599473b916bcd1cc59d105248e93a3bcad5eb77a28b404d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070077f11d4138e3599473b916bcd1cc59d105248e93a3bcad5eb77a28b404d5->enter($__internal_070077f11d4138e3599473b916bcd1cc59d105248e93a3bcad5eb77a28b404d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/date/#/floor-day.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(new Date(2000, 0, 1, 13, 32, 34, 234)).valueOf(),
\t\tnew Date(2000, 0, 1).valueOf());
};
";
        
        $__internal_070077f11d4138e3599473b916bcd1cc59d105248e93a3bcad5eb77a28b404d5->leave($__internal_070077f11d4138e3599473b916bcd1cc59d105248e93a3bcad5eb77a28b404d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/date/#/floor-day.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(new Date(2000, 0, 1, 13, 32, 34, 234)).valueOf(),
\t\tnew Date(2000, 0, 1).valueOf());
};
", "node_modules/es5-ext/test/date/#/floor-day.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/date/#/floor-day.js");
    }
}
