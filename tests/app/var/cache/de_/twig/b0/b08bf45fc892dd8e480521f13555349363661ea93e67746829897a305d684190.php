<?php

/* node_modules/es5-ext/test/string/#/code-point-at/implement.js */
class __TwigTemplate_02dbfff82fe208e6c1ac669f3c719ea08e2e01d0447ff935fe6354b1eb1860df extends Twig_Template
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
        $__internal_428da38163041661979561a5797d8b0be1fbabe13e586f0279e4f700ee6922e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428da38163041661979561a5797d8b0be1fbabe13e586f0279e4f700ee6922e8->enter($__internal_428da38163041661979561a5797d8b0be1fbabe13e586f0279e4f700ee6922e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/code-point-at/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented =
\trequire(\"../../../../string/#/code-point-at/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_428da38163041661979561a5797d8b0be1fbabe13e586f0279e4f700ee6922e8->leave($__internal_428da38163041661979561a5797d8b0be1fbabe13e586f0279e4f700ee6922e8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/code-point-at/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented =
\trequire(\"../../../../string/#/code-point-at/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/string/#/code-point-at/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/code-point-at/implement.js");
    }
}
