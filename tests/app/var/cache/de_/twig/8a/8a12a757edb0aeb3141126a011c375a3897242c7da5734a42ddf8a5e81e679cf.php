<?php

/* node_modules/core-js/library/modules/es6.object.freeze.js */
class __TwigTemplate_1fe03ddc7a7aaf8121bd5e6b29719b0200bd88214f852857f64c71d9d3060798 extends Twig_Template
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
        $__internal_044534f94325e2af783526fa8c2a62d8ed16d5a7725bad0507418c594b4bcbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044534f94325e2af783526fa8c2a62d8ed16d5a7725bad0507418c594b4bcbc9->enter($__internal_044534f94325e2af783526fa8c2a62d8ed16d5a7725bad0507418c594b4bcbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.object.freeze.js"));

        // line 1
        echo "// 19.1.2.5 Object.freeze(O)
var isObject = require('./_is-object');
var meta = require('./_meta').onFreeze;

require('./_object-sap')('freeze', function (\$freeze) {
  return function freeze(it) {
    return \$freeze && isObject(it) ? \$freeze(meta(it)) : it;
  };
});
";
        
        $__internal_044534f94325e2af783526fa8c2a62d8ed16d5a7725bad0507418c594b4bcbc9->leave($__internal_044534f94325e2af783526fa8c2a62d8ed16d5a7725bad0507418c594b4bcbc9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.object.freeze.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.5 Object.freeze(O)
var isObject = require('./_is-object');
var meta = require('./_meta').onFreeze;

require('./_object-sap')('freeze', function (\$freeze) {
  return function freeze(it) {
    return \$freeze && isObject(it) ? \$freeze(meta(it)) : it;
  };
});
", "node_modules/core-js/library/modules/es6.object.freeze.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.object.freeze.js");
    }
}
