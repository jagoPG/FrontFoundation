<?php

/* node_modules/tape/test/only4.js */
class __TwigTemplate_606af68283875323a453d3fcca5a22d8cae3674c9d99440795d0ea2000642658 extends Twig_Template
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
        $__internal_b25a02f97a836de47acce45b5a275f162d9224588a48ec8c468b59305297c039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25a02f97a836de47acce45b5a275f162d9224588a48ec8c468b59305297c039->enter($__internal_b25a02f97a836de47acce45b5a275f162d9224588a48ec8c468b59305297c039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/only4.js"));

        // line 1
        echo "var test = require('../');

test('only4 duplicate test name', function (t) {
    t.fail('not 1');
    t.end();
});

test.only('only4 duplicate test name', function (t) {
    t.end();
});
";
        
        $__internal_b25a02f97a836de47acce45b5a275f162d9224588a48ec8c468b59305297c039->leave($__internal_b25a02f97a836de47acce45b5a275f162d9224588a48ec8c468b59305297c039_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/only4.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('only4 duplicate test name', function (t) {
    t.fail('not 1');
    t.end();
});

test.only('only4 duplicate test name', function (t) {
    t.end();
});
", "node_modules/tape/test/only4.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/only4.js");
    }
}
