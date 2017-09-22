<?php

/* node_modules/mkdirp/node_modules/minimist/test/parse_modified.js */
class __TwigTemplate_3793b5cadcf57f793dddfaab05c68ac93a864adbcc6f97df85990c4e06c188bf extends Twig_Template
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
        $__internal_2cb09cec97dc4654bfa21eb66d24bc740fddcb88a8e8f7ad79f93889fed8c051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb09cec97dc4654bfa21eb66d24bc740fddcb88a8e8f7ad79f93889fed8c051->enter($__internal_2cb09cec97dc4654bfa21eb66d24bc740fddcb88a8e8f7ad79f93889fed8c051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/node_modules/minimist/test/parse_modified.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('parse with modifier functions' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-b', '123' ], { boolean: 'b' });
    t.deepEqual(argv, { b: true, _: ['123'] });
});
";
        
        $__internal_2cb09cec97dc4654bfa21eb66d24bc740fddcb88a8e8f7ad79f93889fed8c051->leave($__internal_2cb09cec97dc4654bfa21eb66d24bc740fddcb88a8e8f7ad79f93889fed8c051_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/node_modules/minimist/test/parse_modified.js";
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
", "node_modules/mkdirp/node_modules/minimist/test/parse_modified.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/node_modules/minimist/test/parse_modified.js");
    }
}
