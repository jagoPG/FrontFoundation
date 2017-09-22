<?php

/* node_modules/es5-ext/test/reg-exp/escape.js */
class __TwigTemplate_37e690e542a61199fa424cd2f146294cb33c3ab2c57f9fd488e2aaa145d25054 extends Twig_Template
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
        $__internal_837c42694be30839e7dd134014a923dfe810f14eea013eed93cbf1dfc6441d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837c42694be30839e7dd134014a923dfe810f14eea013eed93cbf1dfc6441d66->enter($__internal_837c42694be30839e7dd134014a923dfe810f14eea013eed93cbf1dfc6441d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/escape.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar str = \"(?:^te|er)s{2}t\\\\[raz]+\$\";
\ta(RegExp(\"^\" + t(str) + \"\$\").test(str), true);
};
";
        
        $__internal_837c42694be30839e7dd134014a923dfe810f14eea013eed93cbf1dfc6441d66->leave($__internal_837c42694be30839e7dd134014a923dfe810f14eea013eed93cbf1dfc6441d66_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/escape.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar str = \"(?:^te|er)s{2}t\\\\[raz]+\$\";
\ta(RegExp(\"^\" + t(str) + \"\$\").test(str), true);
};
", "node_modules/es5-ext/test/reg-exp/escape.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/escape.js");
    }
}
