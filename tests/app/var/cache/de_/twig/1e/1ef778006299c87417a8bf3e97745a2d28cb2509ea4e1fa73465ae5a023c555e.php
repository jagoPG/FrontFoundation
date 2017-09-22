<?php

/* node_modules/gauge/spin.js */
class __TwigTemplate_ad1ab203b7fb8c8f0bb334bff1ee1e872955a722185a2bd5fbbb8693a3418ff9 extends Twig_Template
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
        $__internal_521e9ebb4ac411136c21b0cbf970a4fe9d0210df635ad0bb1c68baab70c22584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521e9ebb4ac411136c21b0cbf970a4fe9d0210df635ad0bb1c68baab70c22584->enter($__internal_521e9ebb4ac411136c21b0cbf970a4fe9d0210df635ad0bb1c68baab70c22584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/gauge/spin.js"));

        // line 1
        echo "'use strict'

module.exports = function spin (spinstr, spun) {
  return spinstr[spun % spinstr.length]
}
";
        
        $__internal_521e9ebb4ac411136c21b0cbf970a4fe9d0210df635ad0bb1c68baab70c22584->leave($__internal_521e9ebb4ac411136c21b0cbf970a4fe9d0210df635ad0bb1c68baab70c22584_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/gauge/spin.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

module.exports = function spin (spinstr, spun) {
  return spinstr[spun % spinstr.length]
}
", "node_modules/gauge/spin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/gauge/spin.js");
    }
}
