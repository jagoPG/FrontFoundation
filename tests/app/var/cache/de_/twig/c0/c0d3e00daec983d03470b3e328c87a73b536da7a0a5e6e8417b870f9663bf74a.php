<?php

/* node_modules/resolve/test/subdirs.js */
class __TwigTemplate_655ddeadbdd9c93eedf3384840ed3ab98550201260a79ad287216d2c5012e579 extends Twig_Template
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
        $__internal_6ca879b62b81a7727b14248fb92a7216309a0762a560b03f7f46f8441700a640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca879b62b81a7727b14248fb92a7216309a0762a560b03f7f46f8441700a640->enter($__internal_6ca879b62b81a7727b14248fb92a7216309a0762a560b03f7f46f8441700a640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/subdirs.js"));

        // line 1
        echo "var test = require('tape');
var resolve = require('../');
var path = require('path');

test('subdirs', function (t) {
    t.plan(2);

    var dir = path.join(__dirname, '/subdirs');
    resolve('a/b/c/x.json', { basedir: dir }, function (err, res) {
        t.ifError(err);
        t.equal(res, path.join(dir, 'node_modules/a/b/c/x.json'));
    });
});
";
        
        $__internal_6ca879b62b81a7727b14248fb92a7216309a0762a560b03f7f46f8441700a640->leave($__internal_6ca879b62b81a7727b14248fb92a7216309a0762a560b03f7f46f8441700a640_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/subdirs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var resolve = require('../');
var path = require('path');

test('subdirs', function (t) {
    t.plan(2);

    var dir = path.join(__dirname, '/subdirs');
    resolve('a/b/c/x.json', { basedir: dir }, function (err, res) {
        t.ifError(err);
        t.equal(res, path.join(dir, 'node_modules/a/b/c/x.json'));
    });
});
", "node_modules/resolve/test/subdirs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/subdirs.js");
    }
}
