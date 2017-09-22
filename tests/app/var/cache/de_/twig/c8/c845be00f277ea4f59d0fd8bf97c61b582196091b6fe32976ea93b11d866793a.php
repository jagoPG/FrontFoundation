<?php

/* node_modules/es5-ext/test/math/atanh/shim.js */
class __TwigTemplate_f176cff62a3080fbc326d494b90edbc19a4b29140d57a85be8ba92d764a57f23 extends Twig_Template
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
        $__internal_1c17dbacc92e423a5af0498daafe1cc524348874c35ad40d1555a26233a9da06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c17dbacc92e423a5af0498daafe1cc524348874c35ad40d1555a26233a9da06->enter($__internal_1c17dbacc92e423a5af0498daafe1cc524348874c35ad40d1555a26233a9da06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/atanh/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(-2), NaN, \"Less than -1\");
\ta(t(2), NaN, \"Greater than 1\");
\ta(t(-1), -Infinity, \"-1\");
\ta(t(1), Infinity, \"1\");
\ta(t(0), 0, \"Zero\");
\ta(Math.round(t(0.5) * 1e15), 549306144334055, \"Other\");
};
";
        
        $__internal_1c17dbacc92e423a5af0498daafe1cc524348874c35ad40d1555a26233a9da06->leave($__internal_1c17dbacc92e423a5af0498daafe1cc524348874c35ad40d1555a26233a9da06_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/atanh/shim.js";
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
\ta(t(-2), NaN, \"Less than -1\");
\ta(t(2), NaN, \"Greater than 1\");
\ta(t(-1), -Infinity, \"-1\");
\ta(t(1), Infinity, \"1\");
\ta(t(0), 0, \"Zero\");
\ta(Math.round(t(0.5) * 1e15), 549306144334055, \"Other\");
};
", "node_modules/es5-ext/test/math/atanh/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/atanh/shim.js");
    }
}
