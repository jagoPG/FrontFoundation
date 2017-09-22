<?php

/* node_modules/object-inspect/example/all.js */
class __TwigTemplate_26fca5bc3dee2e94589a2925652bb8569b78d91723d0215ae0cf085ef3c32409 extends Twig_Template
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
        $__internal_88c5e3ce57de5158e32a241ec1719d20029bf6332b5caff911af97b839b8cfdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c5e3ce57de5158e32a241ec1719d20029bf6332b5caff911af97b839b8cfdd->enter($__internal_88c5e3ce57de5158e32a241ec1719d20029bf6332b5caff911af97b839b8cfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/example/all.js"));

        // line 1
        echo "var inspect = require('../');
var holes = [ 'a', 'b' ];
holes[4] = 'e', holes[6] = 'g';
var obj = {
    a: 1,
    b: [ 3, 4, undefined, null ],
    c: undefined,
    d: null,
    e: {
        regex: /^x/i,
        buf: new Buffer('abc'),
        holes: holes
    },
    now: new Date
};
obj.self = obj;
console.log(inspect(obj));
";
        
        $__internal_88c5e3ce57de5158e32a241ec1719d20029bf6332b5caff911af97b839b8cfdd->leave($__internal_88c5e3ce57de5158e32a241ec1719d20029bf6332b5caff911af97b839b8cfdd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/example/all.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../');
var holes = [ 'a', 'b' ];
holes[4] = 'e', holes[6] = 'g';
var obj = {
    a: 1,
    b: [ 3, 4, undefined, null ],
    c: undefined,
    d: null,
    e: {
        regex: /^x/i,
        buf: new Buffer('abc'),
        holes: holes
    },
    now: new Date
};
obj.self = obj;
console.log(inspect(obj));
", "node_modules/object-inspect/example/all.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/example/all.js");
    }
}
