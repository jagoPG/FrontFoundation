<?php

/* node_modules/tape/test/require/test-b.js */
class __TwigTemplate_0a36a7236d8e3e2b0d8ad92b9cb4981b2539d9ef2e47ce1ec25874a22b64c5db extends Twig_Template
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
        $__internal_53a91516e26daf519749a31aa8d43a10db53ad235a61436ceffcfd97986c5ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a91516e26daf519749a31aa8d43a10db53ad235a61436ceffcfd97986c5ac2->enter($__internal_53a91516e26daf519749a31aa8d43a10db53ad235a61436ceffcfd97986c5ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/require/test-b.js"));

        // line 1
        echo "var tape = require('../..');

tape.test('test-b', function(t) {
  t.ok(global.module_b, 'module-b loaded in same context')
  t.pass('test ran after module-b was loaded')
  t.end()
})";
        
        $__internal_53a91516e26daf519749a31aa8d43a10db53ad235a61436ceffcfd97986c5ac2->leave($__internal_53a91516e26daf519749a31aa8d43a10db53ad235a61436ceffcfd97986c5ac2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/require/test-b.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tape = require('../..');

tape.test('test-b', function(t) {
  t.ok(global.module_b, 'module-b loaded in same context')
  t.pass('test ran after module-b was loaded')
  t.end()
})", "node_modules/tape/test/require/test-b.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/require/test-b.js");
    }
}
