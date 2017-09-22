<?php

/* node_modules/es5-ext/test/reg-exp/#/match/shim.js */
class __TwigTemplate_225750a5771b54a653057fa72b1206bf30c709bfb51339eeda17e0f07e976788 extends Twig_Template
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
        $__internal_0f3cb499d15ca33442141ceabffa1dd278d94502de417ee1113bb982b97d4ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3cb499d15ca33442141ceabffa1dd278d94502de417ee1113bb982b97d4ba4->enter($__internal_0f3cb499d15ca33442141ceabffa1dd278d94502de417ee1113bb982b97d4ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/match/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar result = [\"foo\"];
\tresult.index = 0;
\tresult.input = \"foobar\";
\ta.deep(t.call(/foo/, \"foobar\"), result);
};
";
        
        $__internal_0f3cb499d15ca33442141ceabffa1dd278d94502de417ee1113bb982b97d4ba4->leave($__internal_0f3cb499d15ca33442141ceabffa1dd278d94502de417ee1113bb982b97d4ba4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/match/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar result = [\"foo\"];
\tresult.index = 0;
\tresult.input = \"foobar\";
\ta.deep(t.call(/foo/, \"foobar\"), result);
};
", "node_modules/es5-ext/test/reg-exp/#/match/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/match/shim.js");
    }
}
