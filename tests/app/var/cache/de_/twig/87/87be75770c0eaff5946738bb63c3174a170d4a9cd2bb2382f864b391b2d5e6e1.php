<?php

/* node_modules/resolve/test/filter.js */
class __TwigTemplate_bab5a01581ce5ada2d0fd9b65dba7c24dddbd81451907a4801f22adf6542cb83 extends Twig_Template
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
        $__internal_832e962af7d849c73c4bbb044dbd47bce96f422329228ce9097bd06f7c130c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832e962af7d849c73c4bbb044dbd47bce96f422329228ce9097bd06f7c130c02->enter($__internal_832e962af7d849c73c4bbb044dbd47bce96f422329228ce9097bd06f7c130c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/filter.js"));

        // line 1
        echo "var path = require('path');
var test = require('tape');
var resolve = require('../');

test('filter', function (t) {
    t.plan(2);
    var dir = path.join(__dirname, 'resolver');
    resolve('./baz', {
        basedir: dir,
        packageFilter: function (pkg) {
            pkg.main = 'doom';
            return pkg;
        }
    }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'baz/doom.js'));
        t.equal(pkg.main, 'doom');
    });
});
";
        
        $__internal_832e962af7d849c73c4bbb044dbd47bce96f422329228ce9097bd06f7c130c02->leave($__internal_832e962af7d849c73c4bbb044dbd47bce96f422329228ce9097bd06f7c130c02_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/filter.js";
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

test('filter', function (t) {
    t.plan(2);
    var dir = path.join(__dirname, 'resolver');
    resolve('./baz', {
        basedir: dir,
        packageFilter: function (pkg) {
            pkg.main = 'doom';
            return pkg;
        }
    }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'baz/doom.js'));
        t.equal(pkg.main, 'doom');
    });
});
", "node_modules/resolve/test/filter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/filter.js");
    }
}
