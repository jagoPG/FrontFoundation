<?php

/* node_modules/resolve/test/faulty_basedir.js */
class __TwigTemplate_d00b53f60bbf5e73c4879b90e72eb3dae7c0a5546b1dc24dc2e3517919a9bcfe extends Twig_Template
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
        $__internal_a5bc4ad58e191babcb160db19c67484d8050ec9efbded6eb7bbfb83a7895e770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5bc4ad58e191babcb160db19c67484d8050ec9efbded6eb7bbfb83a7895e770->enter($__internal_a5bc4ad58e191babcb160db19c67484d8050ec9efbded6eb7bbfb83a7895e770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/faulty_basedir.js"));

        // line 1
        echo "var test = require('tape');
var resolve = require('../');

test('faulty basedir must produce error in windows', { skip: process.platform !== 'win32' }, function (t) {
    t.plan(1);

    var resolverDir = 'C:\\\\a\\\\b\\\\c\\\\d';

    resolve('tape/lib/test.js', { basedir: resolverDir }, function (err, res, pkg) {
        t.equal(true, !!err);
    });

});
";
        
        $__internal_a5bc4ad58e191babcb160db19c67484d8050ec9efbded6eb7bbfb83a7895e770->leave($__internal_a5bc4ad58e191babcb160db19c67484d8050ec9efbded6eb7bbfb83a7895e770_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/faulty_basedir.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var resolve = require('../');

test('faulty basedir must produce error in windows', { skip: process.platform !== 'win32' }, function (t) {
    t.plan(1);

    var resolverDir = 'C:\\\\a\\\\b\\\\c\\\\d';

    resolve('tape/lib/test.js', { basedir: resolverDir }, function (err, res, pkg) {
        t.equal(true, !!err);
    });

});
", "node_modules/resolve/test/faulty_basedir.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/faulty_basedir.js");
    }
}
