<?php

/* node_modules/tape/test/bound.js */
class __TwigTemplate_a9ac6761be2aafaf893b15b08cf531866e09e52074947000ba358baf6131dab2 extends Twig_Template
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
        $__internal_60dac0e68ac5e6694363f5349a621fb76090ecc557a09e380a8f854ceee0a68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60dac0e68ac5e6694363f5349a621fb76090ecc557a09e380a8f854ceee0a68c->enter($__internal_60dac0e68ac5e6694363f5349a621fb76090ecc557a09e380a8f854ceee0a68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/bound.js"));

        // line 1
        echo "var test = require('../');

test('bind works', function (t) {
  t.plan(2);
  var equal = t.equal;
  var deepEqual = t.deepEqual;
  equal(3, 3);
  deepEqual([4], [4]);
  t.end();
});
";
        
        $__internal_60dac0e68ac5e6694363f5349a621fb76090ecc557a09e380a8f854ceee0a68c->leave($__internal_60dac0e68ac5e6694363f5349a621fb76090ecc557a09e380a8f854ceee0a68c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/bound.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('bind works', function (t) {
  t.plan(2);
  var equal = t.equal;
  var deepEqual = t.deepEqual;
  equal(3, 3);
  deepEqual([4], [4]);
  t.end();
});
", "node_modules/tape/test/bound.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/bound.js");
    }
}
