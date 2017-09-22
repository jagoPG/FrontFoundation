<?php

/* node_modules/core-js/fn/string/virtual/iterator.js */
class __TwigTemplate_6394dd77afa70319d717fa1f03c991a63af36344c0190f621e032502e9b965cb extends Twig_Template
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
        $__internal_d6028ee56fddb389d3efc71f0fb24289c445190418c7a94ab115574a40eac0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6028ee56fddb389d3efc71f0fb24289c445190418c7a94ab115574a40eac0a9->enter($__internal_d6028ee56fddb389d3efc71f0fb24289c445190418c7a94ab115574a40eac0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/iterator.js"));

        // line 1
        echo "require('../../../modules/es6.string.iterator');
module.exports = require('../../../modules/_iterators').String;
";
        
        $__internal_d6028ee56fddb389d3efc71f0fb24289c445190418c7a94ab115574a40eac0a9->leave($__internal_d6028ee56fddb389d3efc71f0fb24289c445190418c7a94ab115574a40eac0a9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.iterator');
module.exports = require('../../../modules/_iterators').String;
", "node_modules/core-js/fn/string/virtual/iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/iterator.js");
    }
}
