<?php

/* node_modules/core-js/library/fn/weak-set/from.js */
class __TwigTemplate_08a4d83a806d76787665e2a14d61fc91490213145be20d1bd46814ee72bf032a extends Twig_Template
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
        $__internal_7093d66496cb11dd5fbedbad0c558f2014770907ee2b010dd5c18afafe60665a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7093d66496cb11dd5fbedbad0c558f2014770907ee2b010dd5c18afafe60665a->enter($__internal_7093d66496cb11dd5fbedbad0c558f2014770907ee2b010dd5c18afafe60665a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/weak-set/from.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.weak-set');
require('../../modules/es7.weak-set.from');
var \$WeakSet = require('../../modules/_core').WeakSet;
var \$from = \$WeakSet.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$WeakSet, source, mapFn, thisArg);
};
";
        
        $__internal_7093d66496cb11dd5fbedbad0c558f2014770907ee2b010dd5c18afafe60665a->leave($__internal_7093d66496cb11dd5fbedbad0c558f2014770907ee2b010dd5c18afafe60665a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/weak-set/from.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.weak-set');
require('../../modules/es7.weak-set.from');
var \$WeakSet = require('../../modules/_core').WeakSet;
var \$from = \$WeakSet.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$WeakSet, source, mapFn, thisArg);
};
", "node_modules/core-js/library/fn/weak-set/from.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/weak-set/from.js");
    }
}
