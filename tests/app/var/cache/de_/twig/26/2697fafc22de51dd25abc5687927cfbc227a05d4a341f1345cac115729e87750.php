<?php

/* node_modules/es5-ext/math/trunc/shim.js */
class __TwigTemplate_689fbd0f2313527ce0bf7158f46025973dc5968a27892020e0b4c0333fa8c744 extends Twig_Template
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
        $__internal_8267ade7774b55e18f7b7851e46343c84ce88d64359ef86b3a96438fae1667cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8267ade7774b55e18f7b7851e46343c84ce88d64359ef86b3a96438fae1667cf->enter($__internal_8267ade7774b55e18f7b7851e46343c84ce88d64359ef86b3a96438fae1667cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/trunc/shim.js"));

        // line 1
        echo "\"use strict\";

var floor = Math.floor;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (value === Infinity) return Infinity;
\tif (value === -Infinity) return -Infinity;
\tif (value > 0) return floor(value);
\treturn -floor(-value);
};
";
        
        $__internal_8267ade7774b55e18f7b7851e46343c84ce88d64359ef86b3a96438fae1667cf->leave($__internal_8267ade7774b55e18f7b7851e46343c84ce88d64359ef86b3a96438fae1667cf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/trunc/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var floor = Math.floor;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (value === Infinity) return Infinity;
\tif (value === -Infinity) return -Infinity;
\tif (value > 0) return floor(value);
\treturn -floor(-value);
};
", "node_modules/es5-ext/math/trunc/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/trunc/shim.js");
    }
}
