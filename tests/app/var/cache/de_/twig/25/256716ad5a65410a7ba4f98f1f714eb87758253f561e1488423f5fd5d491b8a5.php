<?php

/* node_modules/es5-ext/test/math/imul/shim.js */
class __TwigTemplate_0e6fa848cb3415b0ecd20a2d1051f918e147d1f68796e4b01b3ec5fde88cb010 extends Twig_Template
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
        $__internal_3b691e502b0f790aba6dd2ddd6c356cf582b2541b9aa8a2143a5b6a82a0d45fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b691e502b0f790aba6dd2ddd6c356cf582b2541b9aa8a2143a5b6a82a0d45fc->enter($__internal_3b691e502b0f790aba6dd2ddd6c356cf582b2541b9aa8a2143a5b6a82a0d45fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/imul/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(), 0, \"No arguments\");
\ta(t(0, 0), 0, \"Zeros\");
\ta(t(2, 4), 8, \"#1\");
\ta(t(-1, 8), -8, \"#2\");
\ta(t(0xfffffffe, 5), -10, \"#3\");
};
";
        
        $__internal_3b691e502b0f790aba6dd2ddd6c356cf582b2541b9aa8a2143a5b6a82a0d45fc->leave($__internal_3b691e502b0f790aba6dd2ddd6c356cf582b2541b9aa8a2143a5b6a82a0d45fc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/imul/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(), 0, \"No arguments\");
\ta(t(0, 0), 0, \"Zeros\");
\ta(t(2, 4), 8, \"#1\");
\ta(t(-1, 8), -8, \"#2\");
\ta(t(0xfffffffe, 5), -10, \"#3\");
};
", "node_modules/es5-ext/test/math/imul/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/imul/shim.js");
    }
}
