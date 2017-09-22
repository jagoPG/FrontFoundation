<?php

/* node_modules/tape/test/add-subtest-async.js */
class __TwigTemplate_27ec9270ba298feccfd33413a811f50082ae28c45dcebe104cef53a4f7057588 extends Twig_Template
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
        $__internal_b63394a0f9493f5c5f5d93c61421ca9ec6587d2d165d38b2850911bef114112e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63394a0f9493f5c5f5d93c61421ca9ec6587d2d165d38b2850911bef114112e->enter($__internal_b63394a0f9493f5c5f5d93c61421ca9ec6587d2d165d38b2850911bef114112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/add-subtest-async.js"));

        // line 1
        echo "var test = require('../')

test('parent', function (t) {
  t.pass('parent');
  setTimeout(function () {
    t.test('child', function (t) {
      t.pass('child');
      t.end();
    });
  }, 100)
})
";
        
        $__internal_b63394a0f9493f5c5f5d93c61421ca9ec6587d2d165d38b2850911bef114112e->leave($__internal_b63394a0f9493f5c5f5d93c61421ca9ec6587d2d165d38b2850911bef114112e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/add-subtest-async.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../')

test('parent', function (t) {
  t.pass('parent');
  setTimeout(function () {
    t.test('child', function (t) {
      t.pass('child');
      t.end();
    });
  }, 100)
})
", "node_modules/tape/test/add-subtest-async.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/add-subtest-async.js");
    }
}
