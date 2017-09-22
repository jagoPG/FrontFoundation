<?php

/* node_modules/es5-ext/array/#/_compare-by-length.js */
class __TwigTemplate_cb5bd09de1611604d0fba34a27f8b876b0ee7363b685a735272e10d24e033ecb extends Twig_Template
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
        $__internal_5a1c703d807b6a81d8ff1d4186f86beae0c9d02614cdbb9f39b2402f202bbc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1c703d807b6a81d8ff1d4186f86beae0c9d02614cdbb9f39b2402f202bbc6e->enter($__internal_5a1c703d807b6a81d8ff1d4186f86beae0c9d02614cdbb9f39b2402f202bbc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/_compare-by-length.js"));

        // line 1
        echo "// Used internally to sort array of lists by length

\"use strict\";

var toPosInt = require(\"../../number/to-pos-integer\");

module.exports = function (arr1, arr2) {
\treturn toPosInt(arr1.length) - toPosInt(arr2.length);
};
";
        
        $__internal_5a1c703d807b6a81d8ff1d4186f86beae0c9d02614cdbb9f39b2402f202bbc6e->leave($__internal_5a1c703d807b6a81d8ff1d4186f86beae0c9d02614cdbb9f39b2402f202bbc6e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/_compare-by-length.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Used internally to sort array of lists by length

\"use strict\";

var toPosInt = require(\"../../number/to-pos-integer\");

module.exports = function (arr1, arr2) {
\treturn toPosInt(arr1.length) - toPosInt(arr2.length);
};
", "node_modules/es5-ext/array/#/_compare-by-length.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/_compare-by-length.js");
    }
}
