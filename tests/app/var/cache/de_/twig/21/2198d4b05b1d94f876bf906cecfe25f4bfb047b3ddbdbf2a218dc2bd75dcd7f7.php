<?php

/* node_modules/core-js/library/fn/string/raw.js */
class __TwigTemplate_a9e16c961ddba07dff7ed4633d703e9356cdea567ab212c692e58ebbe95663d5 extends Twig_Template
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
        $__internal_ff2ed9011d9d36493bc835011fe08f3445b6928244ab579b9eaf929e63619b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2ed9011d9d36493bc835011fe08f3445b6928244ab579b9eaf929e63619b20->enter($__internal_ff2ed9011d9d36493bc835011fe08f3445b6928244ab579b9eaf929e63619b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/raw.js"));

        // line 1
        echo "require('../../modules/es6.string.raw');
module.exports = require('../../modules/_core').String.raw;
";
        
        $__internal_ff2ed9011d9d36493bc835011fe08f3445b6928244ab579b9eaf929e63619b20->leave($__internal_ff2ed9011d9d36493bc835011fe08f3445b6928244ab579b9eaf929e63619b20_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/raw.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.raw');
module.exports = require('../../modules/_core').String.raw;
", "node_modules/core-js/library/fn/string/raw.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/raw.js");
    }
}
