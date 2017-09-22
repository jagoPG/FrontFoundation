<?php

/* node_modules/core-js/library/fn/string/virtual/repeat.js */
class __TwigTemplate_209674d9b600c33470d690b5583a97d318bb7a7da1f28cec78deea54bda7df5b extends Twig_Template
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
        $__internal_b868e404ecd51b4cea5be211f0df17707631b6af7bc10e472c00115456cbdd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b868e404ecd51b4cea5be211f0df17707631b6af7bc10e472c00115456cbdd7b->enter($__internal_b868e404ecd51b4cea5be211f0df17707631b6af7bc10e472c00115456cbdd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/repeat.js"));

        // line 1
        echo "require('../../../modules/es6.string.repeat');
module.exports = require('../../../modules/_entry-virtual')('String').repeat;
";
        
        $__internal_b868e404ecd51b4cea5be211f0df17707631b6af7bc10e472c00115456cbdd7b->leave($__internal_b868e404ecd51b4cea5be211f0df17707631b6af7bc10e472c00115456cbdd7b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/repeat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.repeat');
module.exports = require('../../../modules/_entry-virtual')('String').repeat;
", "node_modules/core-js/library/fn/string/virtual/repeat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/repeat.js");
    }
}
