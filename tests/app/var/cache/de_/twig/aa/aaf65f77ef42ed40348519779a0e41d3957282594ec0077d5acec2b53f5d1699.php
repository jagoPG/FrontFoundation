<?php

/* node_modules/es5-ext/test/array/is-plain-array.js */
class __TwigTemplate_111a39bde9450d0b82ae29314dd2fddaf1757cde0124b688d8de3c98c257bf68 extends Twig_Template
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
        $__internal_5ec40812366200a0065239f482e18e3d1214cd38c2059bfa2e3f54efa888f6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec40812366200a0065239f482e18e3d1214cd38c2059bfa2e3f54efa888f6c2->enter($__internal_5ec40812366200a0065239f482e18e3d1214cd38c2059bfa2e3f54efa888f6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/is-plain-array.js"));

        // line 1
        echo "\"use strict\";

var SubArray = require(\"../../array/_sub-array-dummy-safe\");

module.exports = function (t, a) {
\tvar arr = [1, 2, 3];
\ta(t(arr), true, \"Array\");
\ta(t(null), false, \"Null\");
\ta(t(), false, \"Undefined\");
\ta(t(\"234\"), false, \"String\");
\ta(t(23), false, \"Number\");
\ta(t({}), false, \"Plain object\");
\ta(t({ length: 1, 0: \"raz\" }), false, \"Array-like\");
\ta(t(Object.create(arr)), false, \"Array extension\");
\tif (!SubArray) return;
\ta(t(new SubArray(23)), false, \"Subclass instance\");
\ta(t(Array.prototype), false, \"Array.prototype\");
};
";
        
        $__internal_5ec40812366200a0065239f482e18e3d1214cd38c2059bfa2e3f54efa888f6c2->leave($__internal_5ec40812366200a0065239f482e18e3d1214cd38c2059bfa2e3f54efa888f6c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/is-plain-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var SubArray = require(\"../../array/_sub-array-dummy-safe\");

module.exports = function (t, a) {
\tvar arr = [1, 2, 3];
\ta(t(arr), true, \"Array\");
\ta(t(null), false, \"Null\");
\ta(t(), false, \"Undefined\");
\ta(t(\"234\"), false, \"String\");
\ta(t(23), false, \"Number\");
\ta(t({}), false, \"Plain object\");
\ta(t({ length: 1, 0: \"raz\" }), false, \"Array-like\");
\ta(t(Object.create(arr)), false, \"Array extension\");
\tif (!SubArray) return;
\ta(t(new SubArray(23)), false, \"Subclass instance\");
\ta(t(Array.prototype), false, \"Array.prototype\");
};
", "node_modules/es5-ext/test/array/is-plain-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/is-plain-array.js");
    }
}
