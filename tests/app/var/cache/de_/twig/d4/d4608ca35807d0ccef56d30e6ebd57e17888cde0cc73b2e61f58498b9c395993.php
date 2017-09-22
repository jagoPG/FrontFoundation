<?php

/* node_modules/es5-ext/number/is-nan/shim.js */
class __TwigTemplate_385fdd8d37ee11f5ca7708bb89e34c865865ed2e7ba1080b39225fd7e1a14305 extends Twig_Template
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
        $__internal_345a4aaf42ade44b1312e7ea8621beaa1248bcb47f01e96dcc6ddab2c842396a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345a4aaf42ade44b1312e7ea8621beaa1248bcb47f01e96dcc6ddab2c842396a->enter($__internal_345a4aaf42ade44b1312e7ea8621beaa1248bcb47f01e96dcc6ddab2c842396a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-nan/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (value) {
\t// eslint-disable-next-line no-self-compare
\treturn value !== value;
};
";
        
        $__internal_345a4aaf42ade44b1312e7ea8621beaa1248bcb47f01e96dcc6ddab2c842396a->leave($__internal_345a4aaf42ade44b1312e7ea8621beaa1248bcb47f01e96dcc6ddab2c842396a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-nan/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (value) {
\t// eslint-disable-next-line no-self-compare
\treturn value !== value;
};
", "node_modules/es5-ext/number/is-nan/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-nan/shim.js");
    }
}
