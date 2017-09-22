<?php

/* node_modules/tape/test/only3.js */
class __TwigTemplate_05ce1b8351203770af0fa0a2f94873f31ef391fdc44bec525b78ae9c376ec1a4 extends Twig_Template
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
        $__internal_171d7d8c8f22df36d507c89b21876672f12dc5c774deb338dafbd234f85c6179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171d7d8c8f22df36d507c89b21876672f12dc5c774deb338dafbd234f85c6179->enter($__internal_171d7d8c8f22df36d507c89b21876672f12dc5c774deb338dafbd234f85c6179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/only3.js"));

        // line 1
        echo "var test = require('../');

test('only3 test 1', function (t) {
    t.fail('not 1');
    t.end();
});

test.only('only3 test 2', function (t) {
    t.end();
});

test('only3 test 3', function (t) {
    t.fail('not 3');
    t.end();
});
";
        
        $__internal_171d7d8c8f22df36d507c89b21876672f12dc5c774deb338dafbd234f85c6179->leave($__internal_171d7d8c8f22df36d507c89b21876672f12dc5c774deb338dafbd234f85c6179_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/only3.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('only3 test 1', function (t) {
    t.fail('not 1');
    t.end();
});

test.only('only3 test 2', function (t) {
    t.end();
});

test('only3 test 3', function (t) {
    t.fail('not 3');
    t.end();
});
", "node_modules/tape/test/only3.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/only3.js");
    }
}
