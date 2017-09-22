<?php

/* node_modules/babel-runtime/helpers/_tagged-template-literal.js */
class __TwigTemplate_1337122421ab2b345ab707ee37a80565f4019a00492799456d8a1254d4490a48 extends Twig_Template
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
        $__internal_9b5e955ab0a5d59ec6288e3174cebda22bf855475d6f42ac4664416eac3199fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5e955ab0a5d59ec6288e3174cebda22bf855475d6f42ac4664416eac3199fa->enter($__internal_9b5e955ab0a5d59ec6288e3174cebda22bf855475d6f42ac4664416eac3199fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_tagged-template-literal.js"));

        // line 1
        echo "module.exports = require(\"./taggedTemplateLiteral.js\");";
        
        $__internal_9b5e955ab0a5d59ec6288e3174cebda22bf855475d6f42ac4664416eac3199fa->leave($__internal_9b5e955ab0a5d59ec6288e3174cebda22bf855475d6f42ac4664416eac3199fa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_tagged-template-literal.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./taggedTemplateLiteral.js\");", "node_modules/babel-runtime/helpers/_tagged-template-literal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_tagged-template-literal.js");
    }
}
