<?php

/* node_modules/core-js/modules/es6.number.is-finite.js */
class __TwigTemplate_221db31928fba22422fc735933c0da7933e88ae16834267dec07f9e1d8ef659a extends Twig_Template
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
        $__internal_423e6edcfd3fec07d1ad3f338aa4c9ba32a812d28083ea560b7784a5f5737274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423e6edcfd3fec07d1ad3f338aa4c9ba32a812d28083ea560b7784a5f5737274->enter($__internal_423e6edcfd3fec07d1ad3f338aa4c9ba32a812d28083ea560b7784a5f5737274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.number.is-finite.js"));

        // line 1
        echo "// 20.1.2.2 Number.isFinite(number)
var \$export = require('./_export');
var _isFinite = require('./_global').isFinite;

\$export(\$export.S, 'Number', {
  isFinite: function isFinite(it) {
    return typeof it == 'number' && _isFinite(it);
  }
});
";
        
        $__internal_423e6edcfd3fec07d1ad3f338aa4c9ba32a812d28083ea560b7784a5f5737274->leave($__internal_423e6edcfd3fec07d1ad3f338aa4c9ba32a812d28083ea560b7784a5f5737274_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.number.is-finite.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.2 Number.isFinite(number)
var \$export = require('./_export');
var _isFinite = require('./_global').isFinite;

\$export(\$export.S, 'Number', {
  isFinite: function isFinite(it) {
    return typeof it == 'number' && _isFinite(it);
  }
});
", "node_modules/core-js/modules/es6.number.is-finite.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.number.is-finite.js");
    }
}
