<?php

/* node_modules/core-js/library/fn/function/virtual/index.js */
class __TwigTemplate_8be1d6d322a6c2185f8c53fee0859d989cf086465c64923e260b758d5f821421 extends Twig_Template
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
        $__internal_5b34cca608e57be3d2bc9260bc98078250929c840cc048170cf691b859b9724e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b34cca608e57be3d2bc9260bc98078250929c840cc048170cf691b859b9724e->enter($__internal_5b34cca608e57be3d2bc9260bc98078250929c840cc048170cf691b859b9724e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/function/virtual/index.js"));

        // line 1
        echo "require('../../../modules/es6.function.bind');
require('../../../modules/core.function.part');
module.exports = require('../../../modules/_entry-virtual')('Function');
";
        
        $__internal_5b34cca608e57be3d2bc9260bc98078250929c840cc048170cf691b859b9724e->leave($__internal_5b34cca608e57be3d2bc9260bc98078250929c840cc048170cf691b859b9724e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/function/virtual/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.function.bind');
require('../../../modules/core.function.part');
module.exports = require('../../../modules/_entry-virtual')('Function');
", "node_modules/core-js/library/fn/function/virtual/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/function/virtual/index.js");
    }
}
