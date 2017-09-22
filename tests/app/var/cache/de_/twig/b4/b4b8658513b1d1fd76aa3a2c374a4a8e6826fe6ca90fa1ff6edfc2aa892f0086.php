<?php

/* node_modules/resolve/test/filter_sync.js */
class __TwigTemplate_40521f77bdea9159c53278edf264767a554c92ec668a02ab8a673f21665ea3af extends Twig_Template
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
        $__internal_fcdcd3243e2e253ba55352d7ab7c6e4296aa97972d9c24a6104f40fbc4d0ecae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdcd3243e2e253ba55352d7ab7c6e4296aa97972d9c24a6104f40fbc4d0ecae->enter($__internal_fcdcd3243e2e253ba55352d7ab7c6e4296aa97972d9c24a6104f40fbc4d0ecae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/filter_sync.js"));

        // line 1
        echo "var path = require('path');
var test = require('tape');
var resolve = require('../');

test('filter', function (t) {
    var dir = path.join(__dirname, 'resolver');
    var res = resolve.sync('./baz', {
        basedir: dir,
        packageFilter: function (pkg) {
            pkg.main = 'doom';
            return pkg;
        }
    });
    t.equal(res, path.join(dir, 'baz/doom.js'));
    t.end();
});
";
        
        $__internal_fcdcd3243e2e253ba55352d7ab7c6e4296aa97972d9c24a6104f40fbc4d0ecae->leave($__internal_fcdcd3243e2e253ba55352d7ab7c6e4296aa97972d9c24a6104f40fbc4d0ecae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/filter_sync.js";
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
    var dir = path.join(__dirname, 'resolver');
    var res = resolve.sync('./baz', {
        basedir: dir,
        packageFilter: function (pkg) {
            pkg.main = 'doom';
            return pkg;
        }
    });
    t.equal(res, path.join(dir, 'baz/doom.js'));
    t.end();
});
", "node_modules/resolve/test/filter_sync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/filter_sync.js");
    }
}
