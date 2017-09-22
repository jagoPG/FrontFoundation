<?php

/* node_modules/babel-runtime/helpers/temporalRef.js */
class __TwigTemplate_f1c25b982b5b0763e2843c6bc6a89f14377a94d36995f1d03b4ce5d180007605 extends Twig_Template
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
        $__internal_575a1de7bcbfba31302b053c489c5e4f9403f4b7bb9bd267385822b150b833cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575a1de7bcbfba31302b053c489c5e4f9403f4b7bb9bd267385822b150b833cc->enter($__internal_575a1de7bcbfba31302b053c489c5e4f9403f4b7bb9bd267385822b150b833cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/temporalRef.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (val, name, undef) {
  if (val === undef) {
    throw new ReferenceError(name + \" is not defined - temporal dead zone\");
  } else {
    return val;
  }
};";
        
        $__internal_575a1de7bcbfba31302b053c489c5e4f9403f4b7bb9bd267385822b150b833cc->leave($__internal_575a1de7bcbfba31302b053c489c5e4f9403f4b7bb9bd267385822b150b833cc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/temporalRef.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (val, name, undef) {
  if (val === undef) {
    throw new ReferenceError(name + \" is not defined - temporal dead zone\");
  } else {
    return val;
  }
};", "node_modules/babel-runtime/helpers/temporalRef.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/temporalRef.js");
    }
}
