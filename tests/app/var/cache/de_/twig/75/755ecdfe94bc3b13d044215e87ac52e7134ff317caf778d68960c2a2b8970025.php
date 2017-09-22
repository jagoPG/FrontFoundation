<?php

/* node_modules/es5-ext/number/is-integer/is-implemented.js */
class __TwigTemplate_c3420b04ef3a04f3a501830070b016dad66fd43d48710ecc413a54eec63ab7e4 extends Twig_Template
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
        $__internal_a21e58d4dd4ce2fa00f671522e5678dc7179861596e1f6b53b4635233a0febda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21e58d4dd4ce2fa00f671522e5678dc7179861596e1f6b53b4635233a0febda->enter($__internal_a21e58d4dd4ce2fa00f671522e5678dc7179861596e1f6b53b4635233a0febda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-integer/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar isInteger = Number.isInteger;
\tif (typeof isInteger !== \"function\") return false;
\treturn !isInteger(\"23\") && isInteger(34) && !isInteger(32.34);
};
";
        
        $__internal_a21e58d4dd4ce2fa00f671522e5678dc7179861596e1f6b53b4635233a0febda->leave($__internal_a21e58d4dd4ce2fa00f671522e5678dc7179861596e1f6b53b4635233a0febda_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-integer/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar isInteger = Number.isInteger;
\tif (typeof isInteger !== \"function\") return false;
\treturn !isInteger(\"23\") && isInteger(34) && !isInteger(32.34);
};
", "node_modules/es5-ext/number/is-integer/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-integer/is-implemented.js");
    }
}
