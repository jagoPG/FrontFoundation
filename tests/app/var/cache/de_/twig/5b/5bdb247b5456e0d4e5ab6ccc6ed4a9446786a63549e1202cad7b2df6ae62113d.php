<?php

/* node_modules/core-js/library/fn/set/of.js */
class __TwigTemplate_49e7d4db83dd5d2936530fb03f5adbba0a1cf02b7899208428a31dd00218d9a7 extends Twig_Template
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
        $__internal_e530c45219a254c46fc2a5f7d616e3461c7cc7f44c38634b27dff0d98914688b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e530c45219a254c46fc2a5f7d616e3461c7cc7f44c38634b27dff0d98914688b->enter($__internal_e530c45219a254c46fc2a5f7d616e3461c7cc7f44c38634b27dff0d98914688b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/set/of.js"));

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
        
        $__internal_e530c45219a254c46fc2a5f7d616e3461c7cc7f44c38634b27dff0d98914688b->leave($__internal_e530c45219a254c46fc2a5f7d616e3461c7cc7f44c38634b27dff0d98914688b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/set/of.js";
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
", "node_modules/core-js/library/fn/set/of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/set/of.js");
    }
}
