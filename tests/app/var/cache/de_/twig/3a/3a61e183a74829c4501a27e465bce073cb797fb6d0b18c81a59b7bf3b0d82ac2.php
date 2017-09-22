<?php

/* node_modules/es5-ext/array/to-array.js */
class __TwigTemplate_958a358623731372c43ef3ee24c1b1275ab3d9474a58ccdf913223956434adf3 extends Twig_Template
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
        $__internal_15a2ac991ce2a6fecf22d7ecfc2e7a2631f598924067c4bdf1fcbb8cbfc83149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a2ac991ce2a6fecf22d7ecfc2e7a2631f598924067c4bdf1fcbb8cbfc83149->enter($__internal_15a2ac991ce2a6fecf22d7ecfc2e7a2631f598924067c4bdf1fcbb8cbfc83149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/to-array.js"));

        // line 1
        echo "\"use strict\";

var from = require(\"./from\")

  , isArray = Array.isArray;

module.exports = function (arrayLike) {
\treturn isArray(arrayLike) ? arrayLike : from(arrayLike);
};
";
        
        $__internal_15a2ac991ce2a6fecf22d7ecfc2e7a2631f598924067c4bdf1fcbb8cbfc83149->leave($__internal_15a2ac991ce2a6fecf22d7ecfc2e7a2631f598924067c4bdf1fcbb8cbfc83149_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/to-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var from = require(\"./from\")

  , isArray = Array.isArray;

module.exports = function (arrayLike) {
\treturn isArray(arrayLike) ? arrayLike : from(arrayLike);
};
", "node_modules/es5-ext/array/to-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/to-array.js");
    }
}
