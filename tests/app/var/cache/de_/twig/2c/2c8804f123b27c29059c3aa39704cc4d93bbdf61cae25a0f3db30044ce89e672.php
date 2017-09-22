<?php

/* node_modules/object-inspect/test/inspect.js */
class __TwigTemplate_7f4ba8f55eeea5a110c4bed3b8d0489e77578f7d3f9c66260dba6d4cd51d9222 extends Twig_Template
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
        $__internal_2bc69f0784e03b326fd49c6763551bdbf91a751aff43862f7ce5e94206cfedd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc69f0784e03b326fd49c6763551bdbf91a751aff43862f7ce5e94206cfedd3->enter($__internal_2bc69f0784e03b326fd49c6763551bdbf91a751aff43862f7ce5e94206cfedd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test/inspect.js"));

        // line 1
        echo "var inspect = require('../');
var test = require('tape');

test('inspect', function (t) {
    t.plan(1);
    var obj = [ { inspect: function () { return '!XYZ¡' } }, [] ];
    t.equal(inspect(obj), '[ !XYZ¡, [] ]');
});
";
        
        $__internal_2bc69f0784e03b326fd49c6763551bdbf91a751aff43862f7ce5e94206cfedd3->leave($__internal_2bc69f0784e03b326fd49c6763551bdbf91a751aff43862f7ce5e94206cfedd3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test/inspect.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../');
var test = require('tape');

test('inspect', function (t) {
    t.plan(1);
    var obj = [ { inspect: function () { return '!XYZ¡' } }, [] ];
    t.equal(inspect(obj), '[ !XYZ¡, [] ]');
});
", "node_modules/object-inspect/test/inspect.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test/inspect.js");
    }
}
