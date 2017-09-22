<?php

/* node_modules/es5-ext/test/number/min-safe-integer/is-implemented.js */
class __TwigTemplate_2cdea7167dff31be87ea39f38a9ca2ab61c0bdadd88720f486c68a3d9a054b1c extends Twig_Template
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
        $__internal_dc294c83c1b9e64ca2eefb63cf257f10bb42fd03659386bf1917f1da021b1222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc294c83c1b9e64ca2eefb63cf257f10bb42fd03659386bf1917f1da021b1222->enter($__internal_dc294c83c1b9e64ca2eefb63cf257f10bb42fd03659386bf1917f1da021b1222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/min-safe-integer/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_dc294c83c1b9e64ca2eefb63cf257f10bb42fd03659386bf1917f1da021b1222->leave($__internal_dc294c83c1b9e64ca2eefb63cf257f10bb42fd03659386bf1917f1da021b1222_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/min-safe-integer/is-implemented.js";
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
", "node_modules/es5-ext/test/number/min-safe-integer/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/min-safe-integer/is-implemented.js");
    }
}
