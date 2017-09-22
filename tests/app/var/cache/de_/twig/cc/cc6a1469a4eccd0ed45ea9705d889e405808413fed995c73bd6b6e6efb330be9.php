<?php

/* node_modules/object-inspect/test/browser/dom.js */
class __TwigTemplate_37e776fa56c3d159199d3b48340f0bec90f1bd678f101aa800ac92d399b98e6a extends Twig_Template
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
        $__internal_cf394c49dab5ea9eefc0234bc10ec317aab9c7ab51d908799760bda4e5ee1dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf394c49dab5ea9eefc0234bc10ec317aab9c7ab51d908799760bda4e5ee1dba->enter($__internal_cf394c49dab5ea9eefc0234bc10ec317aab9c7ab51d908799760bda4e5ee1dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test/browser/dom.js"));

        // line 1
        echo "var inspect = require('../../');
var test = require('tape');

test('dom element', function (t) {
    t.plan(1);
    
    var d = document.createElement('div');
    d.setAttribute('id', 'beep');
    d.innerHTML = '<b>wooo</b><i>iiiii</i>';
    
    t.equal(
        inspect([ d, { a: 3, b : 4, c: [5,6,[7,[8,[9]]]] } ]),
        '[ <div id=\"beep\">...</div>, { a: 3, b: 4, c: [ 5, 6, [ 7, [ 8, [Object] ] ] ] } ]'
    );
});
";
        
        $__internal_cf394c49dab5ea9eefc0234bc10ec317aab9c7ab51d908799760bda4e5ee1dba->leave($__internal_cf394c49dab5ea9eefc0234bc10ec317aab9c7ab51d908799760bda4e5ee1dba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test/browser/dom.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../../');
var test = require('tape');

test('dom element', function (t) {
    t.plan(1);
    
    var d = document.createElement('div');
    d.setAttribute('id', 'beep');
    d.innerHTML = '<b>wooo</b><i>iiiii</i>';
    
    t.equal(
        inspect([ d, { a: 3, b : 4, c: [5,6,[7,[8,[9]]]] } ]),
        '[ <div id=\"beep\">...</div>, { a: 3, b: 4, c: [ 5, 6, [ 7, [ 8, [Object] ] ] ] } ]'
    );
});
", "node_modules/object-inspect/test/browser/dom.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test/browser/dom.js");
    }
}
