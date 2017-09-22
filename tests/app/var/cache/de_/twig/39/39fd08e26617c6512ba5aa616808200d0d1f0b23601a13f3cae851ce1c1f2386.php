<?php

/* node_modules/core-js/es7/set.js */
class __TwigTemplate_16b942eb49bd141851de679cb2e53bf6171994f9e07e61aa445c00a32494b714 extends Twig_Template
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
        $__internal_8d7ea7595e6c6460aa3a1da56ef4906209ed78d16639c77808a48a7ffd7c9022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7ea7595e6c6460aa3a1da56ef4906209ed78d16639c77808a48a7ffd7c9022->enter($__internal_8d7ea7595e6c6460aa3a1da56ef4906209ed78d16639c77808a48a7ffd7c9022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/set.js"));

        // line 1
        echo "require('../modules/es7.set.to-json');
require('../modules/es7.set.of');
require('../modules/es7.set.from');
module.exports = require('../modules/_core').Set;
";
        
        $__internal_8d7ea7595e6c6460aa3a1da56ef4906209ed78d16639c77808a48a7ffd7c9022->leave($__internal_8d7ea7595e6c6460aa3a1da56ef4906209ed78d16639c77808a48a7ffd7c9022_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.set.to-json');
require('../modules/es7.set.of');
require('../modules/es7.set.from');
module.exports = require('../modules/_core').Set;
", "node_modules/core-js/es7/set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/set.js");
    }
}
