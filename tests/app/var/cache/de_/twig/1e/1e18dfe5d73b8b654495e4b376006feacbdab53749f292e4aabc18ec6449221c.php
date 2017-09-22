<?php

/* node_modules/core-js/core/regexp.js */
class __TwigTemplate_e148306684c04fee1c1220f16269e34bccd144f859e50c3b1b90cb83792881bd extends Twig_Template
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
        $__internal_d5415e429404cebaff335235675bb4dc8bf7fb696f63afca7d2720b4b422e147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5415e429404cebaff335235675bb4dc8bf7fb696f63afca7d2720b4b422e147->enter($__internal_d5415e429404cebaff335235675bb4dc8bf7fb696f63afca7d2720b4b422e147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/core/regexp.js"));

        // line 1
        echo "require('../modules/core.regexp.escape');
module.exports = require('../modules/_core').RegExp;
";
        
        $__internal_d5415e429404cebaff335235675bb4dc8bf7fb696f63afca7d2720b4b422e147->leave($__internal_d5415e429404cebaff335235675bb4dc8bf7fb696f63afca7d2720b4b422e147_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/core/regexp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.regexp.escape');
module.exports = require('../modules/_core').RegExp;
", "node_modules/core-js/core/regexp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/core/regexp.js");
    }
}
