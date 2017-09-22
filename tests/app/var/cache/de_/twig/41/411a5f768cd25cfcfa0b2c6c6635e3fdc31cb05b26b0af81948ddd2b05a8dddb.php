<?php

/* node_modules/core-js/library/fn/math/trunc.js */
class __TwigTemplate_28ed1875c1b8daeb77b6ea26e330448b0f88001b7a42e3d17f68f8c89fcf698c extends Twig_Template
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
        $__internal_1c6bce1977ef8910c63542e21aa619ac6c169f1dbe8d64f1366973b3efbeec50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6bce1977ef8910c63542e21aa619ac6c169f1dbe8d64f1366973b3efbeec50->enter($__internal_1c6bce1977ef8910c63542e21aa619ac6c169f1dbe8d64f1366973b3efbeec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/math/trunc.js"));

        // line 1
        echo "require('../../modules/es6.math.trunc');
module.exports = require('../../modules/_core').Math.trunc;
";
        
        $__internal_1c6bce1977ef8910c63542e21aa619ac6c169f1dbe8d64f1366973b3efbeec50->leave($__internal_1c6bce1977ef8910c63542e21aa619ac6c169f1dbe8d64f1366973b3efbeec50_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/math/trunc.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.math.trunc');
module.exports = require('../../modules/_core').Math.trunc;
", "node_modules/core-js/library/fn/math/trunc.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/math/trunc.js");
    }
}
