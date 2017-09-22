<?php

/* node_modules/es5-ext/test/math/tanh/shim.js */
class __TwigTemplate_54e57b4c864858724b61017e263f4fedae17a32a5bf82dce8d24f3d1cf3e5f2b extends Twig_Template
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
        $__internal_4630311bad3a3a03cefd2d13ea3db404fb1e69d1eb040b1dcbb6b3c48d6915ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4630311bad3a3a03cefd2d13ea3db404fb1e69d1eb040b1dcbb6b3c48d6915ef->enter($__internal_4630311bad3a3a03cefd2d13ea3db404fb1e69d1eb040b1dcbb6b3c48d6915ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/tanh/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(0), 0, \"Zero\");
\ta(t(Infinity), 1, \"Infinity\");
\ta(t(-Infinity), -1, \"-Infinity\");
\ta(t(1), 0.7615941559557649, \"1\");
\ta(t(Number.MAX_VALUE), 1);
\ta(t(-Number.MAX_VALUE), -1);
};
";
        
        $__internal_4630311bad3a3a03cefd2d13ea3db404fb1e69d1eb040b1dcbb6b3c48d6915ef->leave($__internal_4630311bad3a3a03cefd2d13ea3db404fb1e69d1eb040b1dcbb6b3c48d6915ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/tanh/shim.js";
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
\ta(t(Infinity), 1, \"Infinity\");
\ta(t(-Infinity), -1, \"-Infinity\");
\ta(t(1), 0.7615941559557649, \"1\");
\ta(t(Number.MAX_VALUE), 1);
\ta(t(-Number.MAX_VALUE), -1);
};
", "node_modules/es5-ext/test/math/tanh/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/tanh/shim.js");
    }
}
