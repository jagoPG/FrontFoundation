<?php

/* node_modules/es5-ext/number/is-finite/is-implemented.js */
class __TwigTemplate_63e34c145372debfc13031a93f3af403f77137ec2e227c112530abbc7edf475b extends Twig_Template
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
        $__internal_be130f84c492645e8752a0c3b3901388f2493180d899063f4c8b3ff3870bc4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be130f84c492645e8752a0c3b3901388f2493180d899063f4c8b3ff3870bc4c2->enter($__internal_be130f84c492645e8752a0c3b3901388f2493180d899063f4c8b3ff3870bc4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-finite/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar numberIsFinite = Number.isFinite;
\tif (typeof numberIsFinite !== \"function\") return false;
\treturn !numberIsFinite(\"23\") && numberIsFinite(34) && !numberIsFinite(Infinity);
};
";
        
        $__internal_be130f84c492645e8752a0c3b3901388f2493180d899063f4c8b3ff3870bc4c2->leave($__internal_be130f84c492645e8752a0c3b3901388f2493180d899063f4c8b3ff3870bc4c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-finite/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar numberIsFinite = Number.isFinite;
\tif (typeof numberIsFinite !== \"function\") return false;
\treturn !numberIsFinite(\"23\") && numberIsFinite(34) && !numberIsFinite(Infinity);
};
", "node_modules/es5-ext/number/is-finite/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-finite/is-implemented.js");
    }
}
