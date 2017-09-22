<?php

/* node_modules/resolve/test/core.js */
class __TwigTemplate_bda1d2cd3b9e22a0654ebc597f3393536595877a70666ca37dd31ae2e697400b extends Twig_Template
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
        $__internal_b07156996c16e71a4d237bcb2fd49d5039801abacaf8bc03d001dcc9cca44e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07156996c16e71a4d237bcb2fd49d5039801abacaf8bc03d001dcc9cca44e0c->enter($__internal_b07156996c16e71a4d237bcb2fd49d5039801abacaf8bc03d001dcc9cca44e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/core.js"));

        // line 1
        echo "var test = require('tape');
var resolve = require('../');

test('core modules', function (t) {
    t.test('isCore()', function (st) {
        st.ok(resolve.isCore('fs'));
        st.ok(resolve.isCore('net'));
        st.ok(resolve.isCore('http'));

        st.ok(!resolve.isCore('seq'));
        st.ok(!resolve.isCore('../'));
        st.end();
    });

    t.test('core list', function (st) {
        st.plan(resolve.core.length);

        for (var i = 0; i < resolve.core.length; ++i) {
            st.doesNotThrow(
                function () { require(resolve.core[i]); }, // eslint-disable-line no-loop-func
                'requiring ' + resolve.core[i] + ' does not throw'
            );
        }

        st.end();
    });

    t.end();
});
";
        
        $__internal_b07156996c16e71a4d237bcb2fd49d5039801abacaf8bc03d001dcc9cca44e0c->leave($__internal_b07156996c16e71a4d237bcb2fd49d5039801abacaf8bc03d001dcc9cca44e0c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/core.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var resolve = require('../');

test('core modules', function (t) {
    t.test('isCore()', function (st) {
        st.ok(resolve.isCore('fs'));
        st.ok(resolve.isCore('net'));
        st.ok(resolve.isCore('http'));

        st.ok(!resolve.isCore('seq'));
        st.ok(!resolve.isCore('../'));
        st.end();
    });

    t.test('core list', function (st) {
        st.plan(resolve.core.length);

        for (var i = 0; i < resolve.core.length; ++i) {
            st.doesNotThrow(
                function () { require(resolve.core[i]); }, // eslint-disable-line no-loop-func
                'requiring ' + resolve.core[i] + ' does not throw'
            );
        }

        st.end();
    });

    t.end();
});
", "node_modules/resolve/test/core.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/core.js");
    }
}
