<?php

/* node_modules/es5-ext/test/math/log1p/shim.js */
class __TwigTemplate_0431ca0dfc1a1e63e6ab49679d00e77b4d1b18abd4776da35107f1201dad2f76 extends Twig_Template
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
        $__internal_9089f60fd08ad01320c5f563e865ca08cf1bc0ee82c6ff0a5cd3c2d9d4a37d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9089f60fd08ad01320c5f563e865ca08cf1bc0ee82c6ff0a5cd3c2d9d4a37d1e->enter($__internal_9089f60fd08ad01320c5f563e865ca08cf1bc0ee82c6ff0a5cd3c2d9d4a37d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/log1p/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(-1.5), NaN, \"Less than -1\");
\ta(t(-1), -Infinity, \"-1\");
\ta(t(0), 0, \"0\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(1), 0.6931471805599453, \"Other\");
};
";
        
        $__internal_9089f60fd08ad01320c5f563e865ca08cf1bc0ee82c6ff0a5cd3c2d9d4a37d1e->leave($__internal_9089f60fd08ad01320c5f563e865ca08cf1bc0ee82c6ff0a5cd3c2d9d4a37d1e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/log1p/shim.js";
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
\ta(t(-1.5), NaN, \"Less than -1\");
\ta(t(-1), -Infinity, \"-1\");
\ta(t(0), 0, \"0\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(1), 0.6931471805599453, \"Other\");
};
", "node_modules/es5-ext/test/math/log1p/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/log1p/shim.js");
    }
}
