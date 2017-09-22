<?php

/* node_modules/json-stable-stringify/example/key_cmp.js */
class __TwigTemplate_5eb5be7f53a1bc0f1e7bb2c99e561c97e86ce30403e7aec71b8ccd26acf75183 extends Twig_Template
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
        $__internal_8b33e254d5db1ee23cbb7a83c1d9048780fa022a902a364caccc9b8cb1f56997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b33e254d5db1ee23cbb7a83c1d9048780fa022a902a364caccc9b8cb1f56997->enter($__internal_8b33e254d5db1ee23cbb7a83c1d9048780fa022a902a364caccc9b8cb1f56997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-stable-stringify/example/key_cmp.js"));

        // line 1
        echo "var stringify = require('../');

var obj = { c: 8, b: [{z:6,y:5,x:4},7], a: 3 };
var s = stringify(obj, function (a, b) {
    return a.key < b.key ? 1 : -1;
});
console.log(s);
";
        
        $__internal_8b33e254d5db1ee23cbb7a83c1d9048780fa022a902a364caccc9b8cb1f56997->leave($__internal_8b33e254d5db1ee23cbb7a83c1d9048780fa022a902a364caccc9b8cb1f56997_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-stable-stringify/example/key_cmp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var stringify = require('../');

var obj = { c: 8, b: [{z:6,y:5,x:4},7], a: 3 };
var s = stringify(obj, function (a, b) {
    return a.key < b.key ? 1 : -1;
});
console.log(s);
", "node_modules/json-stable-stringify/example/key_cmp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-stable-stringify/example/key_cmp.js");
    }
}
