<?php

/* node_modules/event-emitter/test/index.js */
class __TwigTemplate_130599b9c94c3b196d5490ba8463d1a337345347d862d4d3b663f07094eeaef9 extends Twig_Template
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
        $__internal_764dbfd356fbcea6d89f7555dada5e0a781f3d86c28b3600a7f3b082ee0645f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764dbfd356fbcea6d89f7555dada5e0a781f3d86c28b3600a7f3b082ee0645f6->enter($__internal_764dbfd356fbcea6d89f7555dada5e0a781f3d86c28b3600a7f3b082ee0645f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/test/index.js"));

        // line 1
        echo "'use strict';

module.exports = function (t, a) {
\tvar x = t(), y, count, count2, count3, count4, test, listener1, listener2;

\tx.emit('none');

\ttest = \"Once: \";
\tcount = 0;
\tx.once('foo', function (a1, a2, a3) {
\t\ta(this, x, test + \"Context\");
\t\ta.deep([a1, a2, a3], ['foo', x, 15], test + \"Arguments\");
\t\t++count;
\t});

\tx.emit('foobar');
\ta(count, 0, test + \"Not invoked on other event\");
\tx.emit('foo', 'foo', x, 15);
\ta(count, 1, test + \"Emitted\");
\tx.emit('foo');
\ta(count, 1, test + \"Emitted once\");

\ttest = \"On & Once: \";
\tcount = 0;
\tx.on('foo', listener1 = function (a1, a2, a3) {
\t\ta(this, x, test + \"Context\");
\t\ta.deep([a1, a2, a3], ['foo', x, 15], test + \"Arguments\");
\t\t++count;
\t});
\tcount2 = 0;
\tx.once('foo', listener2 = function (a1, a2, a3) {
\t\ta(this, x, test + \"Context\");
\t\ta.deep([a1, a2, a3], ['foo', x, 15], test + \"Arguments\");
\t\t++count2;
\t});

\tx.emit('foobar');
\ta(count, 0, test + \"Not invoked on other event\");
\tx.emit('foo', 'foo', x, 15);
\ta(count, 1, test + \"Emitted\");
\tx.emit('foo', 'foo', x, 15);
\ta(count, 2, test + \"Emitted twice\");
\ta(count2, 1, test + \"Emitted once\");
\tx.off('foo', listener1);
\tx.emit('foo');
\ta(count, 2, test + \"Not emitter after off\");

\tcount = 0;
\tx.once('foo', listener1 = function () { ++count; });

\tx.off('foo', listener1);
\tx.emit('foo');
\ta(count, 0, \"Once Off: Not emitted\");

\tcount = 0;
\tx.on('foo', listener2 = function () {});
\tx.once('foo', listener1 = function () { ++count; });

\tx.off('foo', listener1);
\tx.emit('foo');
\ta(count, 0, \"Once Off (multi): Not emitted\");
\tx.off('foo', listener2);

\ttest = \"Prototype Share: \";

\ty = Object.create(x);

\tcount = 0;
\tcount2 = 0;
\tcount3 = 0;
\tcount4 = 0;
\tx.on('foo', function () {
\t\t++count;
\t});
\ty.on('foo', function () {
\t\t++count2;
\t});
\tx.once('foo', function () {
\t\t++count3;
\t});
\ty.once('foo', function () {
\t\t++count4;
\t});
\tx.emit('foo');
\ta(count, 1, test + \"x on count\");
\ta(count2, 0, test + \"y on count\");
\ta(count3, 1, test + \"x once count\");
\ta(count4, 0, test + \"y once count\");

\ty.emit('foo');
\ta(count, 1, test + \"x on count\");
\ta(count2, 1, test + \"y on count\");
\ta(count3, 1, test + \"x once count\");
\ta(count4, 1, test + \"y once count\");

\tx.emit('foo');
\ta(count, 2, test + \"x on count\");
\ta(count2, 1, test + \"y on count\");
\ta(count3, 1, test + \"x once count\");
\ta(count4, 1, test + \"y once count\");

\ty.emit('foo');
\ta(count, 2, test + \"x on count\");
\ta(count2, 2, test + \"y on count\");
\ta(count3, 1, test + \"x once count\");
\ta(count4, 1, test + \"y once count\");
};
";
        
        $__internal_764dbfd356fbcea6d89f7555dada5e0a781f3d86c28b3600a7f3b082ee0645f6->leave($__internal_764dbfd356fbcea6d89f7555dada5e0a781f3d86c28b3600a7f3b082ee0645f6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (t, a) {
\tvar x = t(), y, count, count2, count3, count4, test, listener1, listener2;

\tx.emit('none');

\ttest = \"Once: \";
\tcount = 0;
\tx.once('foo', function (a1, a2, a3) {
\t\ta(this, x, test + \"Context\");
\t\ta.deep([a1, a2, a3], ['foo', x, 15], test + \"Arguments\");
\t\t++count;
\t});

\tx.emit('foobar');
\ta(count, 0, test + \"Not invoked on other event\");
\tx.emit('foo', 'foo', x, 15);
\ta(count, 1, test + \"Emitted\");
\tx.emit('foo');
\ta(count, 1, test + \"Emitted once\");

\ttest = \"On & Once: \";
\tcount = 0;
\tx.on('foo', listener1 = function (a1, a2, a3) {
\t\ta(this, x, test + \"Context\");
\t\ta.deep([a1, a2, a3], ['foo', x, 15], test + \"Arguments\");
\t\t++count;
\t});
\tcount2 = 0;
\tx.once('foo', listener2 = function (a1, a2, a3) {
\t\ta(this, x, test + \"Context\");
\t\ta.deep([a1, a2, a3], ['foo', x, 15], test + \"Arguments\");
\t\t++count2;
\t});

\tx.emit('foobar');
\ta(count, 0, test + \"Not invoked on other event\");
\tx.emit('foo', 'foo', x, 15);
\ta(count, 1, test + \"Emitted\");
\tx.emit('foo', 'foo', x, 15);
\ta(count, 2, test + \"Emitted twice\");
\ta(count2, 1, test + \"Emitted once\");
\tx.off('foo', listener1);
\tx.emit('foo');
\ta(count, 2, test + \"Not emitter after off\");

\tcount = 0;
\tx.once('foo', listener1 = function () { ++count; });

\tx.off('foo', listener1);
\tx.emit('foo');
\ta(count, 0, \"Once Off: Not emitted\");

\tcount = 0;
\tx.on('foo', listener2 = function () {});
\tx.once('foo', listener1 = function () { ++count; });

\tx.off('foo', listener1);
\tx.emit('foo');
\ta(count, 0, \"Once Off (multi): Not emitted\");
\tx.off('foo', listener2);

\ttest = \"Prototype Share: \";

\ty = Object.create(x);

\tcount = 0;
\tcount2 = 0;
\tcount3 = 0;
\tcount4 = 0;
\tx.on('foo', function () {
\t\t++count;
\t});
\ty.on('foo', function () {
\t\t++count2;
\t});
\tx.once('foo', function () {
\t\t++count3;
\t});
\ty.once('foo', function () {
\t\t++count4;
\t});
\tx.emit('foo');
\ta(count, 1, test + \"x on count\");
\ta(count2, 0, test + \"y on count\");
\ta(count3, 1, test + \"x once count\");
\ta(count4, 0, test + \"y once count\");

\ty.emit('foo');
\ta(count, 1, test + \"x on count\");
\ta(count2, 1, test + \"y on count\");
\ta(count3, 1, test + \"x once count\");
\ta(count4, 1, test + \"y once count\");

\tx.emit('foo');
\ta(count, 2, test + \"x on count\");
\ta(count2, 1, test + \"y on count\");
\ta(count3, 1, test + \"x once count\");
\ta(count4, 1, test + \"y once count\");

\ty.emit('foo');
\ta(count, 2, test + \"x on count\");
\ta(count2, 2, test + \"y on count\");
\ta(count3, 1, test + \"x once count\");
\ta(count4, 1, test + \"y once count\");
};
", "node_modules/event-emitter/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/test/index.js");
    }
}
