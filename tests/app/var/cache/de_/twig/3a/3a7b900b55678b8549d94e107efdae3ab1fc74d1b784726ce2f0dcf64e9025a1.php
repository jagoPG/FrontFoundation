<?php

/* node_modules/core-js/library/fn/json/stringify.js */
class __TwigTemplate_709103d71bb9004958006216ee0a9824c5b6585647570b9c19437865a3ecfa5a extends Twig_Template
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
        $__internal_ff97846d57523d0b3d2af6a7d9960324ddf7021bdcd686d7b72652b30c35fd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff97846d57523d0b3d2af6a7d9960324ddf7021bdcd686d7b72652b30c35fd8c->enter($__internal_ff97846d57523d0b3d2af6a7d9960324ddf7021bdcd686d7b72652b30c35fd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/json/stringify.js"));

        // line 1
        echo "var core = require('../../modules/_core');
var \$JSON = core.JSON || (core.JSON = { stringify: JSON.stringify });
module.exports = function stringify(it) { // eslint-disable-line no-unused-vars
  return \$JSON.stringify.apply(\$JSON, arguments);
};
";
        
        $__internal_ff97846d57523d0b3d2af6a7d9960324ddf7021bdcd686d7b72652b30c35fd8c->leave($__internal_ff97846d57523d0b3d2af6a7d9960324ddf7021bdcd686d7b72652b30c35fd8c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/json/stringify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var core = require('../../modules/_core');
var \$JSON = core.JSON || (core.JSON = { stringify: JSON.stringify });
module.exports = function stringify(it) { // eslint-disable-line no-unused-vars
  return \$JSON.stringify.apply(\$JSON, arguments);
};
", "node_modules/core-js/library/fn/json/stringify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/json/stringify.js");
    }
}
