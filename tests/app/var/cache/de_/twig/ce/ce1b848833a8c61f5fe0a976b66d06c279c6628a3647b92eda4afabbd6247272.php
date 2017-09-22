<?php

/* node_modules/core-js/library/fn/object/define-properties.js */
class __TwigTemplate_f440d0be1b2e281c07a98210890cdab99b7193d682daed97b56667a6b4b4528d extends Twig_Template
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
        $__internal_c1d302da8e8040bc2376bb7ffcf39ca735f4bf77172a029a516a8475f4d87e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d302da8e8040bc2376bb7ffcf39ca735f4bf77172a029a516a8475f4d87e1b->enter($__internal_c1d302da8e8040bc2376bb7ffcf39ca735f4bf77172a029a516a8475f4d87e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/define-properties.js"));

        // line 1
        echo "require('../../modules/es6.object.define-properties');
var \$Object = require('../../modules/_core').Object;
module.exports = function defineProperties(T, D) {
  return \$Object.defineProperties(T, D);
};
";
        
        $__internal_c1d302da8e8040bc2376bb7ffcf39ca735f4bf77172a029a516a8475f4d87e1b->leave($__internal_c1d302da8e8040bc2376bb7ffcf39ca735f4bf77172a029a516a8475f4d87e1b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/define-properties.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.define-properties');
var \$Object = require('../../modules/_core').Object;
module.exports = function defineProperties(T, D) {
  return \$Object.defineProperties(T, D);
};
", "node_modules/core-js/library/fn/object/define-properties.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/define-properties.js");
    }
}
