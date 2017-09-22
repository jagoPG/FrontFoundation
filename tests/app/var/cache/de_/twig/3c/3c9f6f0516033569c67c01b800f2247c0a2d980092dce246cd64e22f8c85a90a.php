<?php

/* node_modules/core-js/fn/string/virtual/trim.js */
class __TwigTemplate_b926eea6c54fd14295672466ff41b248c102a5ab670ac8a1bd7864ccecd5b5e3 extends Twig_Template
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
        $__internal_d7025ad068ebdc191b31233c04f16ecfefbeed35452f27e3ec1b5532582a106c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7025ad068ebdc191b31233c04f16ecfefbeed35452f27e3ec1b5532582a106c->enter($__internal_d7025ad068ebdc191b31233c04f16ecfefbeed35452f27e3ec1b5532582a106c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/trim.js"));

        // line 1
        echo "require('../../../modules/es6.string.trim');
module.exports = require('../../../modules/_entry-virtual')('String').trim;
";
        
        $__internal_d7025ad068ebdc191b31233c04f16ecfefbeed35452f27e3ec1b5532582a106c->leave($__internal_d7025ad068ebdc191b31233c04f16ecfefbeed35452f27e3ec1b5532582a106c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/trim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.trim');
module.exports = require('../../../modules/_entry-virtual')('String').trim;
", "node_modules/core-js/fn/string/virtual/trim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/trim.js");
    }
}
