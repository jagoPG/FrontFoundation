<?php

/* node_modules/core-js/fn/string/virtual/starts-with.js */
class __TwigTemplate_80388ae1942e195f9e9c944cf97f4c6a14c4e424e222c3e49c6cd00533bced0d extends Twig_Template
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
        $__internal_f105004ac6b41a7a86a3051cb12f44d525750f12eba48fc5dde879d640125432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f105004ac6b41a7a86a3051cb12f44d525750f12eba48fc5dde879d640125432->enter($__internal_f105004ac6b41a7a86a3051cb12f44d525750f12eba48fc5dde879d640125432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/starts-with.js"));

        // line 1
        echo "require('../../../modules/es6.string.starts-with');
module.exports = require('../../../modules/_entry-virtual')('String').startsWith;
";
        
        $__internal_f105004ac6b41a7a86a3051cb12f44d525750f12eba48fc5dde879d640125432->leave($__internal_f105004ac6b41a7a86a3051cb12f44d525750f12eba48fc5dde879d640125432_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/starts-with.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.starts-with');
module.exports = require('../../../modules/_entry-virtual')('String').startsWith;
", "node_modules/core-js/fn/string/virtual/starts-with.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/starts-with.js");
    }
}
