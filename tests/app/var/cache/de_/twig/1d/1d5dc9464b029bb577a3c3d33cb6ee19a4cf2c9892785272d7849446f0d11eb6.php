<?php

/* node_modules/es5-ext/number/max-safe-integer/is-implemented.js */
class __TwigTemplate_032f03b33ca6d4ff5052faa222ce1ea374f4e2f9ef295a72a70657cda9da9948 extends Twig_Template
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
        $__internal_a8e3789ec5db2e20a76c0435df9e846e33efe00a14d64802c690c8b6a463f5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e3789ec5db2e20a76c0435df9e846e33efe00a14d64802c690c8b6a463f5b3->enter($__internal_a8e3789ec5db2e20a76c0435df9e846e33efe00a14d64802c690c8b6a463f5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/max-safe-integer/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\treturn typeof Number.MAX_SAFE_INTEGER === \"number\";
};
";
        
        $__internal_a8e3789ec5db2e20a76c0435df9e846e33efe00a14d64802c690c8b6a463f5b3->leave($__internal_a8e3789ec5db2e20a76c0435df9e846e33efe00a14d64802c690c8b6a463f5b3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/max-safe-integer/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\treturn typeof Number.MAX_SAFE_INTEGER === \"number\";
};
", "node_modules/es5-ext/number/max-safe-integer/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/max-safe-integer/is-implemented.js");
    }
}
