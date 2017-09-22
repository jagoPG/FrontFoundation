<?php

/* node_modules/es5-ext/string/#/code-point-at/is-implemented.js */
class __TwigTemplate_c839b6a4516601e50f31f616955b44068d3d4359e2a997ba7b07fd260c86ac57 extends Twig_Template
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
        $__internal_45df545194fc5386db2e3ba6068b27f4c5186a28a5ab60c627c1fe2b5ebf32d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45df545194fc5386db2e3ba6068b27f4c5186a28a5ab60c627c1fe2b5ebf32d2->enter($__internal_45df545194fc5386db2e3ba6068b27f4c5186a28a5ab60c627c1fe2b5ebf32d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/code-point-at/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var str = \"abc\\uD834\\uDF06def\";

module.exports = function () {
\tif (typeof str.codePointAt !== \"function\") return false;
\treturn str.codePointAt(3) === 0x1D306;
};
";
        
        $__internal_45df545194fc5386db2e3ba6068b27f4c5186a28a5ab60c627c1fe2b5ebf32d2->leave($__internal_45df545194fc5386db2e3ba6068b27f4c5186a28a5ab60c627c1fe2b5ebf32d2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/code-point-at/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var str = \"abc\\uD834\\uDF06def\";

module.exports = function () {
\tif (typeof str.codePointAt !== \"function\") return false;
\treturn str.codePointAt(3) === 0x1D306;
};
", "node_modules/es5-ext/string/#/code-point-at/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/code-point-at/is-implemented.js");
    }
}
