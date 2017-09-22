<?php

/* node_modules/core-js/library/fn/regexp/flags.js */
class __TwigTemplate_d4698fdf563d07f9d6f506f6e97b27bd2aff19135b9c3cfac9bd773d40725ea7 extends Twig_Template
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
        $__internal_1ec7c7eeea0a55ef4ec8dce063cee56388f76771f0f43b6581f5b5d0c1ac716b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec7c7eeea0a55ef4ec8dce063cee56388f76771f0f43b6581f5b5d0c1ac716b->enter($__internal_1ec7c7eeea0a55ef4ec8dce063cee56388f76771f0f43b6581f5b5d0c1ac716b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/regexp/flags.js"));

        // line 1
        echo "require('../../modules/es6.regexp.flags');
var flags = require('../../modules/_flags');
module.exports = function (it) {
  return flags.call(it);
};
";
        
        $__internal_1ec7c7eeea0a55ef4ec8dce063cee56388f76771f0f43b6581f5b5d0c1ac716b->leave($__internal_1ec7c7eeea0a55ef4ec8dce063cee56388f76771f0f43b6581f5b5d0c1ac716b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/regexp/flags.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.regexp.flags');
var flags = require('../../modules/_flags');
module.exports = function (it) {
  return flags.call(it);
};
", "node_modules/core-js/library/fn/regexp/flags.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/regexp/flags.js");
    }
}
