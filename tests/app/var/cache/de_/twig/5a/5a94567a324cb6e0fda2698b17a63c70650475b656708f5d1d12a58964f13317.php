<?php

/* node_modules/core-js/library/fn/object/create.js */
class __TwigTemplate_0c474e0ed3458e3b8b85fca04d05a61ab1f4f02e5bc569fe8f1d3b541dbc7116 extends Twig_Template
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
        $__internal_e0e5f070bff1e89206fe6088f8c3e1cc9937d5084d1f39f10a2d681c056b7a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e5f070bff1e89206fe6088f8c3e1cc9937d5084d1f39f10a2d681c056b7a6d->enter($__internal_e0e5f070bff1e89206fe6088f8c3e1cc9937d5084d1f39f10a2d681c056b7a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/create.js"));

        // line 1
        echo "require('../../modules/es6.object.create');
var \$Object = require('../../modules/_core').Object;
module.exports = function create(P, D) {
  return \$Object.create(P, D);
};
";
        
        $__internal_e0e5f070bff1e89206fe6088f8c3e1cc9937d5084d1f39f10a2d681c056b7a6d->leave($__internal_e0e5f070bff1e89206fe6088f8c3e1cc9937d5084d1f39f10a2d681c056b7a6d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/create.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.create');
var \$Object = require('../../modules/_core').Object;
module.exports = function create(P, D) {
  return \$Object.create(P, D);
};
", "node_modules/core-js/library/fn/object/create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/create.js");
    }
}
