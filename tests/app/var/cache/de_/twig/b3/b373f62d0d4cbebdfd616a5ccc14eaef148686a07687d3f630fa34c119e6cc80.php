<?php

/* node_modules/core-js/modules/es6.regexp.flags.js */
class __TwigTemplate_24a565dee4d75cb0a121672c5f4bfba69504255cf6e692e9a7edc311f375f64c extends Twig_Template
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
        $__internal_865ec24197afaae9f165fabc795a47c8291d87e1d55ba2e7181c3852e5c82fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865ec24197afaae9f165fabc795a47c8291d87e1d55ba2e7181c3852e5c82fee->enter($__internal_865ec24197afaae9f165fabc795a47c8291d87e1d55ba2e7181c3852e5c82fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.regexp.flags.js"));

        // line 1
        echo "// 21.2.5.3 get RegExp.prototype.flags()
if (require('./_descriptors') && /./g.flags != 'g') require('./_object-dp').f(RegExp.prototype, 'flags', {
  configurable: true,
  get: require('./_flags')
});
";
        
        $__internal_865ec24197afaae9f165fabc795a47c8291d87e1d55ba2e7181c3852e5c82fee->leave($__internal_865ec24197afaae9f165fabc795a47c8291d87e1d55ba2e7181c3852e5c82fee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.regexp.flags.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 21.2.5.3 get RegExp.prototype.flags()
if (require('./_descriptors') && /./g.flags != 'g') require('./_object-dp').f(RegExp.prototype, 'flags', {
  configurable: true,
  get: require('./_flags')
});
", "node_modules/core-js/modules/es6.regexp.flags.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.regexp.flags.js");
    }
}
