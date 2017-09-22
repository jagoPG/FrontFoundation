<?php

/* node_modules/core-js/library/fn/regexp/constructor.js */
class __TwigTemplate_6c4a78ddafd5ab6db4bed5fbf2300fd56f1c97a6017c394a23152405538513b3 extends Twig_Template
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
        $__internal_40b0eb50670e3bddfb0652a9ed20bdced6521857ab3e0348d5072eabe86cac92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b0eb50670e3bddfb0652a9ed20bdced6521857ab3e0348d5072eabe86cac92->enter($__internal_40b0eb50670e3bddfb0652a9ed20bdced6521857ab3e0348d5072eabe86cac92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/regexp/constructor.js"));

        // line 1
        echo "require('../../modules/es6.regexp.constructor');
module.exports = RegExp;
";
        
        $__internal_40b0eb50670e3bddfb0652a9ed20bdced6521857ab3e0348d5072eabe86cac92->leave($__internal_40b0eb50670e3bddfb0652a9ed20bdced6521857ab3e0348d5072eabe86cac92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/regexp/constructor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.regexp.constructor');
module.exports = RegExp;
", "node_modules/core-js/library/fn/regexp/constructor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/regexp/constructor.js");
    }
}
