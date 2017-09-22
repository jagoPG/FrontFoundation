<?php

/* node_modules/core-js/library/fn/clear-immediate.js */
class __TwigTemplate_2a2dfaf70ecaf32bcac75ea5621e2ccadd4232ea7ebb942f5e3ff85a5557441c extends Twig_Template
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
        $__internal_fd099c6fd49b421d005f2b3afd44b778721a8de99901339386741d8cfeb3467f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd099c6fd49b421d005f2b3afd44b778721a8de99901339386741d8cfeb3467f->enter($__internal_fd099c6fd49b421d005f2b3afd44b778721a8de99901339386741d8cfeb3467f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/clear-immediate.js"));

        // line 1
        echo "require('../modules/web.immediate');
module.exports = require('../modules/_core').clearImmediate;
";
        
        $__internal_fd099c6fd49b421d005f2b3afd44b778721a8de99901339386741d8cfeb3467f->leave($__internal_fd099c6fd49b421d005f2b3afd44b778721a8de99901339386741d8cfeb3467f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/clear-immediate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.immediate');
module.exports = require('../modules/_core').clearImmediate;
", "node_modules/core-js/library/fn/clear-immediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/clear-immediate.js");
    }
}
