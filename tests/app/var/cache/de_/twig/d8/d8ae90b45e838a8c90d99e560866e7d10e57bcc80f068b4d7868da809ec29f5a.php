<?php

/* node_modules/core-js/library/fn/dom-collections/index.js */
class __TwigTemplate_8317fb5daee4c687ff0678938d9b614032a6a8f389fb0593608bc9f736b1b722 extends Twig_Template
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
        $__internal_71c7d10eaecafcbcfbe3d46008a7c36bfcafbcd34df7b9554c48337eb4dddd1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c7d10eaecafcbcfbe3d46008a7c36bfcafbcd34df7b9554c48337eb4dddd1f->enter($__internal_71c7d10eaecafcbcfbe3d46008a7c36bfcafbcd34df7b9554c48337eb4dddd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/dom-collections/index.js"));

        // line 1
        echo "require('../../modules/web.dom.iterable');
var \$iterators = require('../../modules/es6.array.iterator');
module.exports = {
  keys: \$iterators.keys,
  values: \$iterators.values,
  entries: \$iterators.entries,
  iterator: \$iterators.values
};
";
        
        $__internal_71c7d10eaecafcbcfbe3d46008a7c36bfcafbcd34df7b9554c48337eb4dddd1f->leave($__internal_71c7d10eaecafcbcfbe3d46008a7c36bfcafbcd34df7b9554c48337eb4dddd1f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/dom-collections/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/web.dom.iterable');
var \$iterators = require('../../modules/es6.array.iterator');
module.exports = {
  keys: \$iterators.keys,
  values: \$iterators.values,
  entries: \$iterators.entries,
  iterator: \$iterators.values
};
", "node_modules/core-js/library/fn/dom-collections/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/dom-collections/index.js");
    }
}
