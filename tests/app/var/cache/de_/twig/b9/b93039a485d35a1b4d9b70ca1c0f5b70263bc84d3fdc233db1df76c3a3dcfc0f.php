<?php

/* node_modules/core-js/library/core/function.js */
class __TwigTemplate_ed4d1ad82d4e3aff6ddc65a835d43ece67460ad0b9bd798038180d273ca740d1 extends Twig_Template
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
        $__internal_86318975e837aaffa475acadd0f75d29d5c47134d6ca7e5dfa0546351c4138aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86318975e837aaffa475acadd0f75d29d5c47134d6ca7e5dfa0546351c4138aa->enter($__internal_86318975e837aaffa475acadd0f75d29d5c47134d6ca7e5dfa0546351c4138aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/core/function.js"));

        // line 1
        echo "require('../modules/core.function.part');
module.exports = require('../modules/_core').Function;
";
        
        $__internal_86318975e837aaffa475acadd0f75d29d5c47134d6ca7e5dfa0546351c4138aa->leave($__internal_86318975e837aaffa475acadd0f75d29d5c47134d6ca7e5dfa0546351c4138aa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/core/function.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.function.part');
module.exports = require('../modules/_core').Function;
", "node_modules/core-js/library/core/function.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/core/function.js");
    }
}
