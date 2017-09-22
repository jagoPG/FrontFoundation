<?php

/* node_modules/fsevents/node_modules/verror/tests/tst.inherit.js */
class __TwigTemplate_f96c608d96b6fc3edaadac9abfcbbb70e59a7d01ea28fc94f80e2967b5504e6f extends Twig_Template
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
        $__internal_b18a6366710f338707ee2142af1e3a4b6f2fe198ef2d86c36f61670d9ea899ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18a6366710f338707ee2142af1e3a4b6f2fe198ef2d86c36f61670d9ea899ba->enter($__internal_b18a6366710f338707ee2142af1e3a4b6f2fe198ef2d86c36f61670d9ea899ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/verror/tests/tst.inherit.js"));

        // line 1
        echo "/*
 * tst.inherit.js: test that inheriting from VError and WError work as expected.
 */

var mod_assert = require('assert');
var mod_util = require('util');

var mod_verror = require('../lib/verror');

var VError = mod_verror.VError;
var WError = mod_verror.WError;
var err, suberr;

function VErrorChild()
{
\tVError.apply(this, Array.prototype.slice.call(arguments));
}

mod_util.inherits(VErrorChild, VError);
VErrorChild.prototype.name = 'VErrorChild';


function WErrorChild()
{
\tWError.apply(this, Array.prototype.slice.call(arguments));
}

mod_util.inherits(WErrorChild, WError);
WErrorChild.prototype.name = 'WErrorChild';


suberr = new Error('root cause');
err = new VErrorChild(suberr, 'top');
mod_assert.ok(err instanceof Error);
mod_assert.ok(err instanceof VError);
mod_assert.ok(err instanceof VErrorChild);
mod_assert.equal(err.cause(), suberr);
mod_assert.equal(err.message, 'top: root cause');
mod_assert.equal(err.toString(), 'VErrorChild: top: root cause');
mod_assert.equal(err.stack.split('\\n')[0], 'VErrorChild: top: root cause');

suberr = new Error('root cause');
err = new WErrorChild(suberr, 'top');
mod_assert.ok(err instanceof Error);
mod_assert.ok(err instanceof WError);
mod_assert.ok(err instanceof WErrorChild);
mod_assert.equal(err.cause(), suberr);
mod_assert.equal(err.message, 'top');
mod_assert.equal(err.toString(),
\t'WErrorChild: top; caused by Error: root cause');
mod_assert.equal(err.stack.split('\\n')[0],
\t'WErrorChild: top; caused by Error: root cause');


// Test that `<Ctor>.toString()` uses the ctor name. I.e. setting
// `<Ctor>.prototype.name` isn't necessary.
function VErrorChildNoName() {
\tVError.apply(this, Array.prototype.slice.call(arguments));
}
mod_util.inherits(VErrorChildNoName, VError);
err = new VErrorChildNoName('top');
mod_assert.equal(err.toString(), 'VErrorChildNoName: top');

function WErrorChildNoName() {
\tWError.apply(this, Array.prototype.slice.call(arguments));
}
mod_util.inherits(WErrorChildNoName, WError);
err = new WErrorChildNoName('top');
mod_assert.equal(err.toString(), 'WErrorChildNoName: top');


// Test that `<Ctor>.prototype.name` can be used for the `.toString()`
// when the ctor is anonymous.
var VErrorChildAnon = function () {
\tVError.apply(this, Array.prototype.slice.call(arguments));
};
mod_util.inherits(VErrorChildAnon, VError);
VErrorChildAnon.prototype.name = 'VErrorChildAnon';
err = new VErrorChildAnon('top');
mod_assert.equal(err.toString(), 'VErrorChildAnon: top');

var WErrorChildAnon = function () {
\tWError.apply(this, Array.prototype.slice.call(arguments));
};
mod_util.inherits(WErrorChildAnon, WError);
WErrorChildAnon.prototype.name = 'WErrorChildAnon';
err = new WErrorChildAnon('top');
mod_assert.equal(err.toString(), 'WErrorChildAnon: top');


// Test get appropriate exception name in `.toString()` when reconstituting
// an error instance a la:
//    https://github.com/mcavage/node-fast/blob/master/lib/client.js#L215
err = new VError('top');
err.name = 'CustomNameError';
mod_assert.equal(err.toString(), 'CustomNameError: top');

err = new WError('top');
err.name = 'CustomNameError';
mod_assert.equal(err.toString(), 'CustomNameError: top');
";
        
        $__internal_b18a6366710f338707ee2142af1e3a4b6f2fe198ef2d86c36f61670d9ea899ba->leave($__internal_b18a6366710f338707ee2142af1e3a4b6f2fe198ef2d86c36f61670d9ea899ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/verror/tests/tst.inherit.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
 * tst.inherit.js: test that inheriting from VError and WError work as expected.
 */

var mod_assert = require('assert');
var mod_util = require('util');

var mod_verror = require('../lib/verror');

var VError = mod_verror.VError;
var WError = mod_verror.WError;
var err, suberr;

function VErrorChild()
{
\tVError.apply(this, Array.prototype.slice.call(arguments));
}

mod_util.inherits(VErrorChild, VError);
VErrorChild.prototype.name = 'VErrorChild';


function WErrorChild()
{
\tWError.apply(this, Array.prototype.slice.call(arguments));
}

mod_util.inherits(WErrorChild, WError);
WErrorChild.prototype.name = 'WErrorChild';


suberr = new Error('root cause');
err = new VErrorChild(suberr, 'top');
mod_assert.ok(err instanceof Error);
mod_assert.ok(err instanceof VError);
mod_assert.ok(err instanceof VErrorChild);
mod_assert.equal(err.cause(), suberr);
mod_assert.equal(err.message, 'top: root cause');
mod_assert.equal(err.toString(), 'VErrorChild: top: root cause');
mod_assert.equal(err.stack.split('\\n')[0], 'VErrorChild: top: root cause');

suberr = new Error('root cause');
err = new WErrorChild(suberr, 'top');
mod_assert.ok(err instanceof Error);
mod_assert.ok(err instanceof WError);
mod_assert.ok(err instanceof WErrorChild);
mod_assert.equal(err.cause(), suberr);
mod_assert.equal(err.message, 'top');
mod_assert.equal(err.toString(),
\t'WErrorChild: top; caused by Error: root cause');
mod_assert.equal(err.stack.split('\\n')[0],
\t'WErrorChild: top; caused by Error: root cause');


// Test that `<Ctor>.toString()` uses the ctor name. I.e. setting
// `<Ctor>.prototype.name` isn't necessary.
function VErrorChildNoName() {
\tVError.apply(this, Array.prototype.slice.call(arguments));
}
mod_util.inherits(VErrorChildNoName, VError);
err = new VErrorChildNoName('top');
mod_assert.equal(err.toString(), 'VErrorChildNoName: top');

function WErrorChildNoName() {
\tWError.apply(this, Array.prototype.slice.call(arguments));
}
mod_util.inherits(WErrorChildNoName, WError);
err = new WErrorChildNoName('top');
mod_assert.equal(err.toString(), 'WErrorChildNoName: top');


// Test that `<Ctor>.prototype.name` can be used for the `.toString()`
// when the ctor is anonymous.
var VErrorChildAnon = function () {
\tVError.apply(this, Array.prototype.slice.call(arguments));
};
mod_util.inherits(VErrorChildAnon, VError);
VErrorChildAnon.prototype.name = 'VErrorChildAnon';
err = new VErrorChildAnon('top');
mod_assert.equal(err.toString(), 'VErrorChildAnon: top');

var WErrorChildAnon = function () {
\tWError.apply(this, Array.prototype.slice.call(arguments));
};
mod_util.inherits(WErrorChildAnon, WError);
WErrorChildAnon.prototype.name = 'WErrorChildAnon';
err = new WErrorChildAnon('top');
mod_assert.equal(err.toString(), 'WErrorChildAnon: top');


// Test get appropriate exception name in `.toString()` when reconstituting
// an error instance a la:
//    https://github.com/mcavage/node-fast/blob/master/lib/client.js#L215
err = new VError('top');
err.name = 'CustomNameError';
mod_assert.equal(err.toString(), 'CustomNameError: top');

err = new WError('top');
err.name = 'CustomNameError';
mod_assert.equal(err.toString(), 'CustomNameError: top');
", "node_modules/fsevents/node_modules/verror/tests/tst.inherit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/verror/tests/tst.inherit.js");
    }
}
