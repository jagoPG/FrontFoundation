<?php

/* node_modules/es5-ext/math/cbrt/shim.js */
class __TwigTemplate_df33fc07f3ddc2b61c119475b791b58db143cf3119092e1e429d35bd785901c4 extends Twig_Template
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
        $__internal_9409891ec32616baaf707a62ba97f2b421cfc9c03678153462dd6e0fc1e8a9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9409891ec32616baaf707a62ba97f2b421cfc9c03678153462dd6e0fc1e8a9a3->enter($__internal_9409891ec32616baaf707a62ba97f2b421cfc9c03678153462dd6e0fc1e8a9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/cbrt/shim.js"));

        // line 1
        echo "\"use strict\";

var pow = Math.pow;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (!isFinite(value)) return value;
\tif (value < 0) return -pow(-value, 1 / 3);
\treturn pow(value, 1 / 3);
};
";
        
        $__internal_9409891ec32616baaf707a62ba97f2b421cfc9c03678153462dd6e0fc1e8a9a3->leave($__internal_9409891ec32616baaf707a62ba97f2b421cfc9c03678153462dd6e0fc1e8a9a3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/cbrt/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var pow = Math.pow;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (!isFinite(value)) return value;
\tif (value < 0) return -pow(-value, 1 / 3);
\treturn pow(value, 1 / 3);
};
", "node_modules/es5-ext/math/cbrt/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/cbrt/shim.js");
    }
}
