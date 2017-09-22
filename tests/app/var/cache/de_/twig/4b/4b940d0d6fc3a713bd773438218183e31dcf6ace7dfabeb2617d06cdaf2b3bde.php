<?php

/* node_modules/resolve/test/pathfilter.js */
class __TwigTemplate_4edd56a1eee09710db993b8346e6aa9919017c9cf26b30f2bda08926da4c9a46 extends Twig_Template
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
        $__internal_68076e78baa50f2eef7d842630d1f67cb1cf567e8b45f8daa5f9b14b4f9898ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68076e78baa50f2eef7d842630d1f67cb1cf567e8b45f8daa5f9b14b4f9898ad->enter($__internal_68076e78baa50f2eef7d842630d1f67cb1cf567e8b45f8daa5f9b14b4f9898ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/pathfilter.js"));

        // line 1
        echo "var path = require('path');
var test = require('tape');
var resolve = require('../');

test('#62: deep module references and the pathFilter', function (t) {
    t.plan(9);

    var resolverDir = path.join(__dirname, '/pathfilter/deep_ref');
    var pathFilter = function (pkg, x, remainder) {
        t.equal(pkg.version, '1.2.3');
        t.equal(x, path.join(resolverDir, 'node_modules/deep/ref'));
        t.equal(remainder, 'ref');
        return 'alt';
    };

    resolve('deep/ref', { basedir: resolverDir }, function (err, res, pkg) {
        if (err) t.fail(err);

        t.equal(pkg.version, '1.2.3');
        t.equal(res, path.join(resolverDir, 'node_modules/deep/ref.js'));
    });

    resolve(
        'deep/deeper/ref',
        { basedir: resolverDir },
        function (err, res, pkg) {
            if (err) t.fail(err);
            t.notEqual(pkg, undefined);
            t.equal(pkg.version, '1.2.3');
            t.equal(res, path.join(resolverDir, 'node_modules/deep/deeper/ref.js'));
        }
    );

    resolve(
        'deep/ref',
        { basedir: resolverDir, pathFilter: pathFilter },
        function (err, res, pkg) {
            if (err) t.fail(err);
            t.equal(res, path.join(resolverDir, 'node_modules/deep/alt.js'));
        }
    );
});
";
        
        $__internal_68076e78baa50f2eef7d842630d1f67cb1cf567e8b45f8daa5f9b14b4f9898ad->leave($__internal_68076e78baa50f2eef7d842630d1f67cb1cf567e8b45f8daa5f9b14b4f9898ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/pathfilter.js";
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

test('#62: deep module references and the pathFilter', function (t) {
    t.plan(9);

    var resolverDir = path.join(__dirname, '/pathfilter/deep_ref');
    var pathFilter = function (pkg, x, remainder) {
        t.equal(pkg.version, '1.2.3');
        t.equal(x, path.join(resolverDir, 'node_modules/deep/ref'));
        t.equal(remainder, 'ref');
        return 'alt';
    };

    resolve('deep/ref', { basedir: resolverDir }, function (err, res, pkg) {
        if (err) t.fail(err);

        t.equal(pkg.version, '1.2.3');
        t.equal(res, path.join(resolverDir, 'node_modules/deep/ref.js'));
    });

    resolve(
        'deep/deeper/ref',
        { basedir: resolverDir },
        function (err, res, pkg) {
            if (err) t.fail(err);
            t.notEqual(pkg, undefined);
            t.equal(pkg.version, '1.2.3');
            t.equal(res, path.join(resolverDir, 'node_modules/deep/deeper/ref.js'));
        }
    );

    resolve(
        'deep/ref',
        { basedir: resolverDir, pathFilter: pathFilter },
        function (err, res, pkg) {
            if (err) t.fail(err);
            t.equal(res, path.join(resolverDir, 'node_modules/deep/alt.js'));
        }
    );
});
", "node_modules/resolve/test/pathfilter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/pathfilter.js");
    }
}
