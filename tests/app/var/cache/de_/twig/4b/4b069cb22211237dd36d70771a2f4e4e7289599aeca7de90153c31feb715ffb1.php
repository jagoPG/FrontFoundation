<?php

/* node_modules/fsevents/node_modules/minimist/test/parse_modified.js */
class __TwigTemplate_713eb233749f09991a03e93769ea9dce1b487370234d5a589b2154b37fc2fb81 extends Twig_Template
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
        $__internal_084321ab66222cf473d71e28fa690c319d9cc45ccaab27741d41494f897f70ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084321ab66222cf473d71e28fa690c319d9cc45ccaab27741d41494f897f70ee->enter($__internal_084321ab66222cf473d71e28fa690c319d9cc45ccaab27741d41494f897f70ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/minimist/test/parse_modified.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('parse with modifier functions' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-b', '123' ], { boolean: 'b' });
    t.deepEqual(argv, { b: true, _: ['123'] });
});
";
        
        $__internal_084321ab66222cf473d71e28fa690c319d9cc45ccaab27741d41494f897f70ee->leave($__internal_084321ab66222cf473d71e28fa690c319d9cc45ccaab27741d41494f897f70ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/minimist/test/parse_modified.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('parse with modifier functions' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-b', '123' ], { boolean: 'b' });
    t.deepEqual(argv, { b: true, _: ['123'] });
});
", "node_modules/fsevents/node_modules/minimist/test/parse_modified.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/minimist/test/parse_modified.js");
    }
}
