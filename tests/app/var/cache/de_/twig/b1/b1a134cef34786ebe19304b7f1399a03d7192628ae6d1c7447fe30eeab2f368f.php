<?php

/* node_modules/es5-ext/test/math/clz32/is-implemented.js */
class __TwigTemplate_78fe25b2a675644909a788b027a4f5adf3473f2a0102be01a2f75e27d48c7b83 extends Twig_Template
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
        $__internal_87fdbeab004fb74add6eeef26b399aa0b204175a21ef96cb2c8db7def0077fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fdbeab004fb74add6eeef26b399aa0b204175a21ef96cb2c8db7def0077fae->enter($__internal_87fdbeab004fb74add6eeef26b399aa0b204175a21ef96cb2c8db7def0077fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/clz32/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_87fdbeab004fb74add6eeef26b399aa0b204175a21ef96cb2c8db7def0077fae->leave($__internal_87fdbeab004fb74add6eeef26b399aa0b204175a21ef96cb2c8db7def0077fae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/clz32/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
", "node_modules/es5-ext/test/math/clz32/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/clz32/is-implemented.js");
    }
}
