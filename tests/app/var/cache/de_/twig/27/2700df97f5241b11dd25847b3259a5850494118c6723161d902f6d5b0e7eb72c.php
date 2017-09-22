<?php

/* node_modules/core-js/fn/set/of.js */
class __TwigTemplate_f3ec641c24536be9ddf9cc654d8ee59282ce3da42796085b35e50fdb86e1abef extends Twig_Template
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
        $__internal_1c9febc60c7058e6750f1869398ea41d6a3b744f32bc8f2e92d3a2debc24f7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9febc60c7058e6750f1869398ea41d6a3b744f32bc8f2e92d3a2debc24f7a8->enter($__internal_1c9febc60c7058e6750f1869398ea41d6a3b744f32bc8f2e92d3a2debc24f7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/set/of.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.set');
require('../../modules/es7.set.of');
var \$Set = require('../../modules/_core').Set;
var \$of = \$Set.of;
module.exports = function of() {
  return \$of.apply(typeof this === 'function' ? this : \$Set, arguments);
};
";
        
        $__internal_1c9febc60c7058e6750f1869398ea41d6a3b744f32bc8f2e92d3a2debc24f7a8->leave($__internal_1c9febc60c7058e6750f1869398ea41d6a3b744f32bc8f2e92d3a2debc24f7a8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/set/of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.set');
require('../../modules/es7.set.of');
var \$Set = require('../../modules/_core').Set;
var \$of = \$Set.of;
module.exports = function of() {
  return \$of.apply(typeof this === 'function' ? this : \$Set, arguments);
};
", "node_modules/core-js/fn/set/of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/set/of.js");
    }
}
