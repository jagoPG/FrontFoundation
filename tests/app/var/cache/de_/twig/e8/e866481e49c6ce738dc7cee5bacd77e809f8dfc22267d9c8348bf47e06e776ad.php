<?php

/* node_modules/tape/test/messages/defaults.js */
class __TwigTemplate_0c081b05189e21f3db7a742448ed21155569a80f535100817da9501cd340e2f6 extends Twig_Template
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
        $__internal_d890349c2cf95650f0cd05acf3b3b9479079b1d313b85500175a22e9b03131ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d890349c2cf95650f0cd05acf3b3b9479079b1d313b85500175a22e9b03131ad->enter($__internal_d890349c2cf95650f0cd05acf3b3b9479079b1d313b85500175a22e9b03131ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/messages/defaults.js"));

        // line 1
        echo "var test = require('../../');

test('default messages', function (t) {
  t.plan(7);
  t.ok(true);
  t.notOk(false);
  t.equal(true, true);
  t.notEqual(true, false);
  t.deepEqual(true, true);
  t.deepLooseEqual(true, true);
  t.notDeepLooseEqual(true, false);
});
";
        
        $__internal_d890349c2cf95650f0cd05acf3b3b9479079b1d313b85500175a22e9b03131ad->leave($__internal_d890349c2cf95650f0cd05acf3b3b9479079b1d313b85500175a22e9b03131ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/messages/defaults.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../../');

test('default messages', function (t) {
  t.plan(7);
  t.ok(true);
  t.notOk(false);
  t.equal(true, true);
  t.notEqual(true, false);
  t.deepEqual(true, true);
  t.deepLooseEqual(true, true);
  t.notDeepLooseEqual(true, false);
});
", "node_modules/tape/test/messages/defaults.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/messages/defaults.js");
    }
}
