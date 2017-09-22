<?php

/* node_modules/es5-ext/test/date/#/floor-month.js */
class __TwigTemplate_12645ad6b7c3250a04bd0ce2e918f952fb23fdb996807197bc74cac707d2d941 extends Twig_Template
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
        $__internal_0c61e2c96dc9e24edea28a194472d052dc640ec551773be5e41b9673351e196d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c61e2c96dc9e24edea28a194472d052dc640ec551773be5e41b9673351e196d->enter($__internal_0c61e2c96dc9e24edea28a194472d052dc640ec551773be5e41b9673351e196d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/date/#/floor-month.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(new Date(2000, 0, 15, 13, 32, 34, 234)).valueOf(),
\t\tnew Date(2000, 0, 1).valueOf());
};
";
        
        $__internal_0c61e2c96dc9e24edea28a194472d052dc640ec551773be5e41b9673351e196d->leave($__internal_0c61e2c96dc9e24edea28a194472d052dc640ec551773be5e41b9673351e196d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/date/#/floor-month.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(new Date(2000, 0, 15, 13, 32, 34, 234)).valueOf(),
\t\tnew Date(2000, 0, 1).valueOf());
};
", "node_modules/es5-ext/test/date/#/floor-month.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/date/#/floor-month.js");
    }
}
