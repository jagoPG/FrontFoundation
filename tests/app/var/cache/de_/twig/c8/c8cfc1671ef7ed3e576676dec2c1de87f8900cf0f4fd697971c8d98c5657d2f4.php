<?php

/* node_modules/core-js/fn/weak-map/index.js */
class __TwigTemplate_92994261dd59fdfe1a8915525f3a5f74ee1276f657d7caf41a608222893fb04e extends Twig_Template
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
        $__internal_59cd5a892c5a269854d899c9c1093b14dfd7766db284dcf3dc35792215f1ff40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cd5a892c5a269854d899c9c1093b14dfd7766db284dcf3dc35792215f1ff40->enter($__internal_59cd5a892c5a269854d899c9c1093b14dfd7766db284dcf3dc35792215f1ff40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/weak-map/index.js"));

        // line 1
        echo "require('../../modules/es6.object.to-string');
require('../../modules/web.dom.iterable');
require('../../modules/es6.weak-map');
require('../../modules/es7.weak-map.of');
require('../../modules/es7.weak-map.from');
module.exports = require('../../modules/_core').WeakMap;
";
        
        $__internal_59cd5a892c5a269854d899c9c1093b14dfd7766db284dcf3dc35792215f1ff40->leave($__internal_59cd5a892c5a269854d899c9c1093b14dfd7766db284dcf3dc35792215f1ff40_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/weak-map/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.to-string');
require('../../modules/web.dom.iterable');
require('../../modules/es6.weak-map');
require('../../modules/es7.weak-map.of');
require('../../modules/es7.weak-map.from');
module.exports = require('../../modules/_core').WeakMap;
", "node_modules/core-js/fn/weak-map/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/weak-map/index.js");
    }
}
