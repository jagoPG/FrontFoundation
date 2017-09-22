<?php

/* node_modules/tape/test/require/b.js */
class __TwigTemplate_fa6ba72d8f712000e8d2becedd828499e5b39514d71ed636959f86df138fc9f1 extends Twig_Template
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
        $__internal_e98662151d66467e3955d00142044f8c0fc056b3482544c12f4c9c5d79dcabcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98662151d66467e3955d00142044f8c0fc056b3482544c12f4c9c5d79dcabcf->enter($__internal_e98662151d66467e3955d00142044f8c0fc056b3482544c12f4c9c5d79dcabcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/require/b.js"));

        // line 1
        echo "var tape = require('../..');

tape.test('module-b', function(t) {
  t.plan(1)
  t.pass('loaded module b')
})

global.module_b = true";
        
        $__internal_e98662151d66467e3955d00142044f8c0fc056b3482544c12f4c9c5d79dcabcf->leave($__internal_e98662151d66467e3955d00142044f8c0fc056b3482544c12f4c9c5d79dcabcf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/require/b.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tape = require('../..');

tape.test('module-b', function(t) {
  t.plan(1)
  t.pass('loaded module b')
})

global.module_b = true", "node_modules/tape/test/require/b.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/require/b.js");
    }
}
