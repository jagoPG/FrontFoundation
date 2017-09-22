<?php

/* node_modules/core-js/library/modules/_object-gopn.js */
class __TwigTemplate_ea6753871f65b105106b793db05160a43fba4dd3b5cb942f961c355392f5800d extends Twig_Template
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
        $__internal_6516d1e5f98e1276754632050f187760ac6ea6668deaa9f51495896fd510221e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6516d1e5f98e1276754632050f187760ac6ea6668deaa9f51495896fd510221e->enter($__internal_6516d1e5f98e1276754632050f187760ac6ea6668deaa9f51495896fd510221e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_object-gopn.js"));

        // line 1
        echo "// 19.1.2.7 / 15.2.3.4 Object.getOwnPropertyNames(O)
var \$keys = require('./_object-keys-internal');
var hiddenKeys = require('./_enum-bug-keys').concat('length', 'prototype');

exports.f = Object.getOwnPropertyNames || function getOwnPropertyNames(O) {
  return \$keys(O, hiddenKeys);
};
";
        
        $__internal_6516d1e5f98e1276754632050f187760ac6ea6668deaa9f51495896fd510221e->leave($__internal_6516d1e5f98e1276754632050f187760ac6ea6668deaa9f51495896fd510221e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_object-gopn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.7 / 15.2.3.4 Object.getOwnPropertyNames(O)
var \$keys = require('./_object-keys-internal');
var hiddenKeys = require('./_enum-bug-keys').concat('length', 'prototype');

exports.f = Object.getOwnPropertyNames || function getOwnPropertyNames(O) {
  return \$keys(O, hiddenKeys);
};
", "node_modules/core-js/library/modules/_object-gopn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_object-gopn.js");
    }
}
