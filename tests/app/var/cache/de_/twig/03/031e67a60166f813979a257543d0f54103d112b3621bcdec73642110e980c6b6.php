<?php

/* node_modules/fsevents/node_modules/gauge/spin.js */
class __TwigTemplate_f1ba42e5f6c6983d91c4450d50117d069f8c4b8e6b0fe323ad0909fefb2a3d55 extends Twig_Template
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
        $__internal_c02857b737334cd68b274eacd7e24cdf0fd92f17fb3a976d0e4518b353253981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02857b737334cd68b274eacd7e24cdf0fd92f17fb3a976d0e4518b353253981->enter($__internal_c02857b737334cd68b274eacd7e24cdf0fd92f17fb3a976d0e4518b353253981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/gauge/spin.js"));

        // line 1
        echo "'use strict'

module.exports = function spin (spinstr, spun) {
  return spinstr[spun % spinstr.length]
}
";
        
        $__internal_c02857b737334cd68b274eacd7e24cdf0fd92f17fb3a976d0e4518b353253981->leave($__internal_c02857b737334cd68b274eacd7e24cdf0fd92f17fb3a976d0e4518b353253981_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/gauge/spin.js";
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
", "node_modules/fsevents/node_modules/gauge/spin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/gauge/spin.js");
    }
}
