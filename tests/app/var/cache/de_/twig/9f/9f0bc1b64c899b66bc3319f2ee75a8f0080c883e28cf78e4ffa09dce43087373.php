<?php

/* node_modules/rc/browser.js */
class __TwigTemplate_5a64028e967cdaef9f88c48366e133ec4686d488f863721ecb3ace3bb1d8bc3e extends Twig_Template
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
        $__internal_ec9477f9e1e860a12712cd8796c920cb17ee2a0863f1968823fcf2422856f205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9477f9e1e860a12712cd8796c920cb17ee2a0863f1968823fcf2422856f205->enter($__internal_ec9477f9e1e860a12712cd8796c920cb17ee2a0863f1968823fcf2422856f205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/rc/browser.js"));

        // line 1
        echo "
// when this is loaded into the browser, 
// just use the defaults...

module.exports = function (name, defaults) {
  return defaults
}
";
        
        $__internal_ec9477f9e1e860a12712cd8796c920cb17ee2a0863f1968823fcf2422856f205->leave($__internal_ec9477f9e1e860a12712cd8796c920cb17ee2a0863f1968823fcf2422856f205_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/rc/browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
// when this is loaded into the browser, 
// just use the defaults...

module.exports = function (name, defaults) {
  return defaults
}
", "node_modules/rc/browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/rc/browser.js");
    }
}
