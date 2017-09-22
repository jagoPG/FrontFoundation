<?php

/* node_modules/es5-ext/test/math/hypot/is-implemented.js */
class __TwigTemplate_500e0a807d280e4ff469c99cc6e7fd9e4a39ebcc76a0ab259a775c45c6ba1c22 extends Twig_Template
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
        $__internal_70971cee044b011e9707a4723fd6784bd9a4f9b2ceef80f549c67ddae004eb12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70971cee044b011e9707a4723fd6784bd9a4f9b2ceef80f549c67ddae004eb12->enter($__internal_70971cee044b011e9707a4723fd6784bd9a4f9b2ceef80f549c67ddae004eb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/hypot/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_70971cee044b011e9707a4723fd6784bd9a4f9b2ceef80f549c67ddae004eb12->leave($__internal_70971cee044b011e9707a4723fd6784bd9a4f9b2ceef80f549c67ddae004eb12_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/hypot/is-implemented.js";
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
", "node_modules/es5-ext/test/math/hypot/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/hypot/is-implemented.js");
    }
}
