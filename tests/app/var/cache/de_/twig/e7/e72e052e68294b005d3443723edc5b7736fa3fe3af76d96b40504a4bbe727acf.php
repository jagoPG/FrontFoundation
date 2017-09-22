<?php

/* node_modules/es5-ext/test/math/log10/is-implemented.js */
class __TwigTemplate_028445280f219e8ab361b06935c042e3be0f4b9497c301fe4f37e19f51ffca2d extends Twig_Template
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
        $__internal_5c64f64531407ae9a3437d254b5cedf194605bb870e3fef694fd5db86d73120e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c64f64531407ae9a3437d254b5cedf194605bb870e3fef694fd5db86d73120e->enter($__internal_5c64f64531407ae9a3437d254b5cedf194605bb870e3fef694fd5db86d73120e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/log10/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_5c64f64531407ae9a3437d254b5cedf194605bb870e3fef694fd5db86d73120e->leave($__internal_5c64f64531407ae9a3437d254b5cedf194605bb870e3fef694fd5db86d73120e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/log10/is-implemented.js";
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
", "node_modules/es5-ext/test/math/log10/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/log10/is-implemented.js");
    }
}
