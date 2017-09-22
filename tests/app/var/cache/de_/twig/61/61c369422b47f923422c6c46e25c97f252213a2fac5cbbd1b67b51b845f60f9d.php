<?php

/* node_modules/core-js/library/fn/string/fontsize.js */
class __TwigTemplate_c1ebf079d47c1944e515bfffab888e38aabd0ff383db9ca224d849af127a611e extends Twig_Template
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
        $__internal_f14a46e254047d310e799e522470002cd9a137d513919b8146da6eac7472d8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14a46e254047d310e799e522470002cd9a137d513919b8146da6eac7472d8c9->enter($__internal_f14a46e254047d310e799e522470002cd9a137d513919b8146da6eac7472d8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/fontsize.js"));

        // line 1
        echo "require('../../modules/es6.string.fontsize');
module.exports = require('../../modules/_core').String.fontsize;
";
        
        $__internal_f14a46e254047d310e799e522470002cd9a137d513919b8146da6eac7472d8c9->leave($__internal_f14a46e254047d310e799e522470002cd9a137d513919b8146da6eac7472d8c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/fontsize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.fontsize');
module.exports = require('../../modules/_core').String.fontsize;
", "node_modules/core-js/library/fn/string/fontsize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/fontsize.js");
    }
}
