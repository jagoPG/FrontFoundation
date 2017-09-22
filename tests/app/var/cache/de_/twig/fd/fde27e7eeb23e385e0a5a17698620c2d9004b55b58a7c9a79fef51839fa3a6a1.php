<?php

/* node_modules/core-js/library/core/number.js */
class __TwigTemplate_bb0c9a28620a5bdd7138bd96dd7aed63d5b0ca7da05d4371cc82f2c2534dbf8f extends Twig_Template
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
        $__internal_865f8f9da6358e2cf1275ecbafcb54923c2443fbe6d749b9642b5ea4d4f069d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865f8f9da6358e2cf1275ecbafcb54923c2443fbe6d749b9642b5ea4d4f069d5->enter($__internal_865f8f9da6358e2cf1275ecbafcb54923c2443fbe6d749b9642b5ea4d4f069d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/core/number.js"));

        // line 1
        echo "require('../modules/core.number.iterator');
module.exports = require('../modules/_core').Number;
";
        
        $__internal_865f8f9da6358e2cf1275ecbafcb54923c2443fbe6d749b9642b5ea4d4f069d5->leave($__internal_865f8f9da6358e2cf1275ecbafcb54923c2443fbe6d749b9642b5ea4d4f069d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/core/number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.number.iterator');
module.exports = require('../modules/_core').Number;
", "node_modules/core-js/library/core/number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/core/number.js");
    }
}
