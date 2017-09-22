<?php

/* node_modules/es5-ext/math/clz32/shim.js */
class __TwigTemplate_d29c87529f350d9145ecd9385c3e93b34b2e2d63ac769b7554251c3bffdf56de extends Twig_Template
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
        $__internal_878c9af0246a37ecd75730523a52dacab5064545b461ba3dcf4d7c4915a394c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878c9af0246a37ecd75730523a52dacab5064545b461ba3dcf4d7c4915a394c6->enter($__internal_878c9af0246a37ecd75730523a52dacab5064545b461ba3dcf4d7c4915a394c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/clz32/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (value) {
\t// eslint-disable-next-line no-bitwise
\tvalue >>>= 0;
\treturn value ? 32 - value.toString(2).length : 32;
};
";
        
        $__internal_878c9af0246a37ecd75730523a52dacab5064545b461ba3dcf4d7c4915a394c6->leave($__internal_878c9af0246a37ecd75730523a52dacab5064545b461ba3dcf4d7c4915a394c6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/clz32/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (value) {
\t// eslint-disable-next-line no-bitwise
\tvalue >>>= 0;
\treturn value ? 32 - value.toString(2).length : 32;
};
", "node_modules/es5-ext/math/clz32/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/clz32/shim.js");
    }
}
