<?php

/* node_modules/core-js/fn/number/virtual/iterator.js */
class __TwigTemplate_afc07c3aac23b80b8e100d235da15395d34b69b3eb1b976be23b1454f3ea7816 extends Twig_Template
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
        $__internal_8febf6642cf813943901b14aab0c6bd38655254fdc25373e066b8ab57f2e82f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8febf6642cf813943901b14aab0c6bd38655254fdc25373e066b8ab57f2e82f5->enter($__internal_8febf6642cf813943901b14aab0c6bd38655254fdc25373e066b8ab57f2e82f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/number/virtual/iterator.js"));

        // line 1
        echo "require('../../../modules/core.number.iterator');
module.exports = require('../../../modules/_iterators').Number;
";
        
        $__internal_8febf6642cf813943901b14aab0c6bd38655254fdc25373e066b8ab57f2e82f5->leave($__internal_8febf6642cf813943901b14aab0c6bd38655254fdc25373e066b8ab57f2e82f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/number/virtual/iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/core.number.iterator');
module.exports = require('../../../modules/_iterators').Number;
", "node_modules/core-js/fn/number/virtual/iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/number/virtual/iterator.js");
    }
}
