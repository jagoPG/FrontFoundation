<?php

/* node_modules/tape/test/deep.js */
class __TwigTemplate_9433ba2a4deba1c656dd3872208f232bf291b76ccf56074b939c5f600e02166b extends Twig_Template
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
        $__internal_25a891803ae628feb155ec85592b149d42ae8a953a67c38ea1ac732ed07ec043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a891803ae628feb155ec85592b149d42ae8a953a67c38ea1ac732ed07ec043->enter($__internal_25a891803ae628feb155ec85592b149d42ae8a953a67c38ea1ac732ed07ec043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/deep.js"));

        // line 1
        echo "var test = require('../');

test('deep strict equal', function (t) {
    t.notDeepEqual(
        [ { a: '3' } ],
        [ { a: 3 } ]
    );
    t.end();
});

test('deep loose equal', function (t) {
    t.deepLooseEqual(
        [ { a: '3' } ],
        [ { a: 3 } ]
    );
    t.end();
});
";
        
        $__internal_25a891803ae628feb155ec85592b149d42ae8a953a67c38ea1ac732ed07ec043->leave($__internal_25a891803ae628feb155ec85592b149d42ae8a953a67c38ea1ac732ed07ec043_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/deep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('deep strict equal', function (t) {
    t.notDeepEqual(
        [ { a: '3' } ],
        [ { a: 3 } ]
    );
    t.end();
});

test('deep loose equal', function (t) {
    t.deepLooseEqual(
        [ { a: '3' } ],
        [ { a: 3 } ]
    );
    t.end();
});
", "node_modules/tape/test/deep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/deep.js");
    }
}
