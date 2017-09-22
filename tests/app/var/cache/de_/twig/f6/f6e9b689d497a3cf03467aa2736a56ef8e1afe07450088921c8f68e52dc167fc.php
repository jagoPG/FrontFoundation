<?php

/* node_modules/es5-ext/number/is-nan/is-implemented.js */
class __TwigTemplate_9f683ba97e4101e10a573ee51899dd2133fb5a95fe66076f669ad970218f9de3 extends Twig_Template
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
        $__internal_970a24fd93579d196a0db33171a6e1a857f7a09fb80c809ccedb6bd254210508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970a24fd93579d196a0db33171a6e1a857f7a09fb80c809ccedb6bd254210508->enter($__internal_970a24fd93579d196a0db33171a6e1a857f7a09fb80c809ccedb6bd254210508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-nan/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar numberIsNaN = Number.isNaN;
\tif (typeof numberIsNaN !== \"function\") return false;
\treturn !numberIsNaN({}) && numberIsNaN(NaN) && !numberIsNaN(34);
};
";
        
        $__internal_970a24fd93579d196a0db33171a6e1a857f7a09fb80c809ccedb6bd254210508->leave($__internal_970a24fd93579d196a0db33171a6e1a857f7a09fb80c809ccedb6bd254210508_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-nan/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar numberIsNaN = Number.isNaN;
\tif (typeof numberIsNaN !== \"function\") return false;
\treturn !numberIsNaN({}) && numberIsNaN(NaN) && !numberIsNaN(34);
};
", "node_modules/es5-ext/number/is-nan/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-nan/is-implemented.js");
    }
}
