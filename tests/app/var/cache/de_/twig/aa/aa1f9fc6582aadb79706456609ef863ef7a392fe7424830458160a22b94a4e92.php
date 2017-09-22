<?php

/* node_modules/core-js/library/fn/global.js */
class __TwigTemplate_f385c719e8952dbad9bcae8600e41a62ed246a801bd979e0f82ef3a64153d2c3 extends Twig_Template
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
        $__internal_914db2f7b5f24e532b4210f78d9c0d4cb67c6e38cdf5947589829bda4a9cd06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914db2f7b5f24e532b4210f78d9c0d4cb67c6e38cdf5947589829bda4a9cd06e->enter($__internal_914db2f7b5f24e532b4210f78d9c0d4cb67c6e38cdf5947589829bda4a9cd06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/global.js"));

        // line 1
        echo "require('../modules/es7.global');
module.exports = require('../modules/_core').global;
";
        
        $__internal_914db2f7b5f24e532b4210f78d9c0d4cb67c6e38cdf5947589829bda4a9cd06e->leave($__internal_914db2f7b5f24e532b4210f78d9c0d4cb67c6e38cdf5947589829bda4a9cd06e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.global');
module.exports = require('../modules/_core').global;
", "node_modules/core-js/library/fn/global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/global.js");
    }
}
