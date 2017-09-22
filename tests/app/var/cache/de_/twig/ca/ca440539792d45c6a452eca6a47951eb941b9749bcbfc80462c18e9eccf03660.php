<?php

/* node_modules/es5-ext/test/number/is-integer/shim.js */
class __TwigTemplate_383707bba8ea736eedb6764b5cbfa77a0d85729835fced0537cfe69d39c8002c extends Twig_Template
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
        $__internal_aaa9a04b736cffe34e79f4708fe07524dd049610c0a0f8792f2b0d27d1507cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa9a04b736cffe34e79f4708fe07524dd049610c0a0f8792f2b0d27d1507cea->enter($__internal_aaa9a04b736cffe34e79f4708fe07524dd049610c0a0f8792f2b0d27d1507cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-integer/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(2), true, \"Number\");
\ta(t(2.34), false, \"Float\");
\ta(t(\"23\"), false, \"Not numeric\");
\ta(t(NaN), false, \"NaN\");
\ta(t(Infinity), false, \"Infinity\");
};
";
        
        $__internal_aaa9a04b736cffe34e79f4708fe07524dd049610c0a0f8792f2b0d27d1507cea->leave($__internal_aaa9a04b736cffe34e79f4708fe07524dd049610c0a0f8792f2b0d27d1507cea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-integer/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(2), true, \"Number\");
\ta(t(2.34), false, \"Float\");
\ta(t(\"23\"), false, \"Not numeric\");
\ta(t(NaN), false, \"NaN\");
\ta(t(Infinity), false, \"Infinity\");
};
", "node_modules/es5-ext/test/number/is-integer/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-integer/shim.js");
    }
}
