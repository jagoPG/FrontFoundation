<?php

/* node_modules/es5-ext/math/log2/shim.js */
class __TwigTemplate_031a96c4a075be2abfd72ed6e16343f11b78a1670e9b550ca56261e8a0f01b25 extends Twig_Template
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
        $__internal_5c325cb07e23173a30faf475cfe7450a93a049bc3b9b5fd0ef0441fcaaaa5215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c325cb07e23173a30faf475cfe7450a93a049bc3b9b5fd0ef0441fcaaaa5215->enter($__internal_5c325cb07e23173a30faf475cfe7450a93a049bc3b9b5fd0ef0441fcaaaa5215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/log2/shim.js"));

        // line 1
        echo "\"use strict\";

var log = Math.log, LOG2E = Math.LOG2E;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value < 0) return NaN;
\tif (value === 0) return -Infinity;
\tif (value === 1) return 0;
\tif (value === Infinity) return Infinity;

\treturn log(value) * LOG2E;
};
";
        
        $__internal_5c325cb07e23173a30faf475cfe7450a93a049bc3b9b5fd0ef0441fcaaaa5215->leave($__internal_5c325cb07e23173a30faf475cfe7450a93a049bc3b9b5fd0ef0441fcaaaa5215_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/log2/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var log = Math.log, LOG2E = Math.LOG2E;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value < 0) return NaN;
\tif (value === 0) return -Infinity;
\tif (value === 1) return 0;
\tif (value === Infinity) return Infinity;

\treturn log(value) * LOG2E;
};
", "node_modules/es5-ext/math/log2/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/log2/shim.js");
    }
}
