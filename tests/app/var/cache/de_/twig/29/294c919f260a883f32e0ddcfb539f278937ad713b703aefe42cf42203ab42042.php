<?php

/* node_modules/es5-ext/test/math/expm1/shim.js */
class __TwigTemplate_c9affc4b23b4486ecb3ae7d582c433e7576c3aa3d4f5936cced1557075f46f5d extends Twig_Template
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
        $__internal_8de8feaaa47c2de869f70b12e8cfa8543aade22d98152794a2a1e5a1db29de21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de8feaaa47c2de869f70b12e8cfa8543aade22d98152794a2a1e5a1db29de21->enter($__internal_8de8feaaa47c2de869f70b12e8cfa8543aade22d98152794a2a1e5a1db29de21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/expm1/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(0), 0, \"Zero\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(-Infinity), -1, \"-Infinity\");
\ta(t(1).toFixed(15), \"1.718281828459045\", \"1\");
};
";
        
        $__internal_8de8feaaa47c2de869f70b12e8cfa8543aade22d98152794a2a1e5a1db29de21->leave($__internal_8de8feaaa47c2de869f70b12e8cfa8543aade22d98152794a2a1e5a1db29de21_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/expm1/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(0), 0, \"Zero\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(-Infinity), -1, \"-Infinity\");
\ta(t(1).toFixed(15), \"1.718281828459045\", \"1\");
};
", "node_modules/es5-ext/test/math/expm1/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/expm1/shim.js");
    }
}
