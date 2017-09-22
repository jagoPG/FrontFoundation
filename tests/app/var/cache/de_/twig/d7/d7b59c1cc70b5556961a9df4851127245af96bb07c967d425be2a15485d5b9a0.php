<?php

/* node_modules/es5-ext/test/function/#/spread.js */
class __TwigTemplate_0f3e31db7d2a3e17e69c57064ce25ec14486e38c3593e1350efdd390fc7c95b6 extends Twig_Template
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
        $__internal_f562e81acebd06bbc480e55d1b352c61356088c60a95395398e3599bda43f993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f562e81acebd06bbc480e55d1b352c61356088c60a95395398e3599bda43f993->enter($__internal_f562e81acebd06bbc480e55d1b352c61356088c60a95395398e3599bda43f993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/#/spread.js"));

        // line 1
        echo "\"use strict\";

var f = function (a, b) {
 return this[a] + this[b];
}
  , o = { a: 3, b: 4 };

module.exports = function (t, a) {
\ta(t.call(f).call(o, [\"a\", \"b\"]), 7);
};
";
        
        $__internal_f562e81acebd06bbc480e55d1b352c61356088c60a95395398e3599bda43f993->leave($__internal_f562e81acebd06bbc480e55d1b352c61356088c60a95395398e3599bda43f993_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/#/spread.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var f = function (a, b) {
 return this[a] + this[b];
}
  , o = { a: 3, b: 4 };

module.exports = function (t, a) {
\ta(t.call(f).call(o, [\"a\", \"b\"]), 7);
};
", "node_modules/es5-ext/test/function/#/spread.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/#/spread.js");
    }
}
