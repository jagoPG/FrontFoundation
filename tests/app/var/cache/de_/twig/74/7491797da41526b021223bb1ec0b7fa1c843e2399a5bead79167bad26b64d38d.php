<?php

/* node_modules/es5-ext/math/tanh/is-implemented.js */
class __TwigTemplate_95d6bb19ae1b4974473496c054dd39da4093067ae34b3c43e2348e4197109199 extends Twig_Template
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
        $__internal_aeb86625edc2892f5838a2ad8fdcfa1211c1b48a54c5bdea509c59ed25f1e494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb86625edc2892f5838a2ad8fdcfa1211c1b48a54c5bdea509c59ed25f1e494->enter($__internal_aeb86625edc2892f5838a2ad8fdcfa1211c1b48a54c5bdea509c59ed25f1e494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/tanh/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar tanh = Math.tanh;
\tif (typeof tanh !== \"function\") return false;
\treturn (tanh(1) === 0.7615941559557649) && (tanh(Number.MAX_VALUE) === 1);
};
";
        
        $__internal_aeb86625edc2892f5838a2ad8fdcfa1211c1b48a54c5bdea509c59ed25f1e494->leave($__internal_aeb86625edc2892f5838a2ad8fdcfa1211c1b48a54c5bdea509c59ed25f1e494_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/tanh/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar tanh = Math.tanh;
\tif (typeof tanh !== \"function\") return false;
\treturn (tanh(1) === 0.7615941559557649) && (tanh(Number.MAX_VALUE) === 1);
};
", "node_modules/es5-ext/math/tanh/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/tanh/is-implemented.js");
    }
}
