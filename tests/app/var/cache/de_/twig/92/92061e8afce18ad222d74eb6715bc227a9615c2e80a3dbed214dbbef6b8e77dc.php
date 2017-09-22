<?php

/* node_modules/spdx-expression-parse/index.js */
class __TwigTemplate_af29919376c7a0dafc322909f2cb9f628c39ce6ed6502eebf6bccf69267a5309 extends Twig_Template
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
        $__internal_e49575a461b70519f9b2bc1191e731ab98644030d23089eec3b81839d4cec0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49575a461b70519f9b2bc1191e731ab98644030d23089eec3b81839d4cec0a3->enter($__internal_e49575a461b70519f9b2bc1191e731ab98644030d23089eec3b81839d4cec0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/spdx-expression-parse/index.js"));

        // line 1
        echo "var parser = require('./parser').parser

module.exports = function (argument) {
  return parser.parse(argument)
}
";
        
        $__internal_e49575a461b70519f9b2bc1191e731ab98644030d23089eec3b81839d4cec0a3->leave($__internal_e49575a461b70519f9b2bc1191e731ab98644030d23089eec3b81839d4cec0a3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/spdx-expression-parse/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parser = require('./parser').parser

module.exports = function (argument) {
  return parser.parse(argument)
}
", "node_modules/spdx-expression-parse/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/spdx-expression-parse/index.js");
    }
}
