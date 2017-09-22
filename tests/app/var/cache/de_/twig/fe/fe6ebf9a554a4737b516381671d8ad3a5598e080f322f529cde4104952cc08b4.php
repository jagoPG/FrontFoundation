<?php

/* node_modules/resolve/test/precedence.js */
class __TwigTemplate_7617b0f3c773a3452c75f32ccc20ff78385c5051220bc987e9467ed72d753fc0 extends Twig_Template
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
        $__internal_2733dd4c1c47f2c71d619ee005d15d95e38ba5b2a4804fbe33e7d8617f7369b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2733dd4c1c47f2c71d619ee005d15d95e38ba5b2a4804fbe33e7d8617f7369b8->enter($__internal_2733dd4c1c47f2c71d619ee005d15d95e38ba5b2a4804fbe33e7d8617f7369b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/precedence.js"));

        // line 1
        echo "var path = require('path');
var test = require('tape');
var resolve = require('../');

test('precedence', function (t) {
    t.plan(3);
    var dir = path.join(__dirname, 'precedence/aaa');

    resolve('./', { basedir: dir }, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, 'index.js'));
        t.equal(pkg.name, 'resolve');
    });
});

test('./ should not load \${dir}.js', function (t) { // eslint-disable-line no-template-curly-in-string
    t.plan(1);
    var dir = path.join(__dirname, 'precedence/bbb');

    resolve('./', { basedir: dir }, function (err, res, pkg) {
        t.ok(err);
    });
});
";
        
        $__internal_2733dd4c1c47f2c71d619ee005d15d95e38ba5b2a4804fbe33e7d8617f7369b8->leave($__internal_2733dd4c1c47f2c71d619ee005d15d95e38ba5b2a4804fbe33e7d8617f7369b8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/precedence.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var path = require('path');
var test = require('tape');
var resolve = require('../');

test('precedence', function (t) {
    t.plan(3);
    var dir = path.join(__dirname, 'precedence/aaa');

    resolve('./', { basedir: dir }, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, 'index.js'));
        t.equal(pkg.name, 'resolve');
    });
});

test('./ should not load \${dir}.js', function (t) { // eslint-disable-line no-template-curly-in-string
    t.plan(1);
    var dir = path.join(__dirname, 'precedence/bbb');

    resolve('./', { basedir: dir }, function (err, res, pkg) {
        t.ok(err);
    });
});
", "node_modules/resolve/test/precedence.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/precedence.js");
    }
}
