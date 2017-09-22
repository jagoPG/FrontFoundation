<?php

/* node_modules/core-js/fn/symbol/async-iterator.js */
class __TwigTemplate_888d9a45880d3eebb98fed8e0e11b97adf49445428031c5ee3999646bc210e1f extends Twig_Template
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
        $__internal_329ed2f9cfca42b8dc3a0b827a01ead85fc97927f03e804ef2e565b2552e66ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329ed2f9cfca42b8dc3a0b827a01ead85fc97927f03e804ef2e565b2552e66ac->enter($__internal_329ed2f9cfca42b8dc3a0b827a01ead85fc97927f03e804ef2e565b2552e66ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/symbol/async-iterator.js"));

        // line 1
        echo "require('../../modules/es7.symbol.async-iterator');
module.exports = require('../../modules/_wks-ext').f('asyncIterator');
";
        
        $__internal_329ed2f9cfca42b8dc3a0b827a01ead85fc97927f03e804ef2e565b2552e66ac->leave($__internal_329ed2f9cfca42b8dc3a0b827a01ead85fc97927f03e804ef2e565b2552e66ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/symbol/async-iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.symbol.async-iterator');
module.exports = require('../../modules/_wks-ext').f('asyncIterator');
", "node_modules/core-js/fn/symbol/async-iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/symbol/async-iterator.js");
    }
}
