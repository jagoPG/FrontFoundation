<?php

/* node_modules/es5-ext/math/cosh/is-implemented.js */
class __TwigTemplate_e7ff3cfd4c6bed87511e76ae2f857fa1775dffa0a85c290cd25221d4e4469f22 extends Twig_Template
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
        $__internal_4c6c2e18a7893cc16d4b7446dd66d26df1d1de7550068fd8aad18d1321cceccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6c2e18a7893cc16d4b7446dd66d26df1d1de7550068fd8aad18d1321cceccc->enter($__internal_4c6c2e18a7893cc16d4b7446dd66d26df1d1de7550068fd8aad18d1321cceccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/cosh/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar cosh = Math.cosh;
\tif (typeof cosh !== \"function\") return false;
\treturn cosh(1) === 1.5430806348152437;
};
";
        
        $__internal_4c6c2e18a7893cc16d4b7446dd66d26df1d1de7550068fd8aad18d1321cceccc->leave($__internal_4c6c2e18a7893cc16d4b7446dd66d26df1d1de7550068fd8aad18d1321cceccc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/cosh/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar cosh = Math.cosh;
\tif (typeof cosh !== \"function\") return false;
\treturn cosh(1) === 1.5430806348152437;
};
", "node_modules/es5-ext/math/cosh/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/cosh/is-implemented.js");
    }
}
