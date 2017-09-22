<?php

/* node_modules/d/test/lazy.js */
class __TwigTemplate_9d99f156c9b76894b0828a34b28935a252dd6c7c912837624d5993a80286d355 extends Twig_Template
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
        $__internal_da818884df6e7361eb15333ee59dccbb21b4f18f02b9075523e680f0922a0306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da818884df6e7361eb15333ee59dccbb21b4f18f02b9075523e680f0922a0306->enter($__internal_da818884df6e7361eb15333ee59dccbb21b4f18f02b9075523e680f0922a0306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/d/test/lazy.js"));

        // line 1
        echo "'use strict';

var d = require('../')

  , getOwnPropertyDescriptor = Object.getOwnPropertyDescriptor;

module.exports = function (t, a) {
\tvar Foo = function () {}, i = 1, o, o2, desc;
\tObject.defineProperties(Foo.prototype, t({
\t\tbar: d(function () { return ++i; }),
\t\tbar2: d(function () { return this.bar + 23; }),
\t\tbar3: d(function () { return this.bar2 + 34; }, { desc: 'ew' }),
\t\tbar4: d(function () { return this.bar3 + 12; }, { cacheName: '_bar4_' }),
\t\tbar5: d(function () { return this.bar4 + 3; },
\t\t\t{ cacheName: '_bar5_', desc: 'e' })
\t}));

\tdesc = getOwnPropertyDescriptor(Foo.prototype, 'bar');
\ta(desc.configurable, true, \"Configurable: default\");
\ta(desc.enumerable, false, \"Enumerable: default\");

\to = new Foo();
\ta.deep([o.bar, o.bar2, o.bar3, o.bar4, o.bar5], [2, 25, 59, 71, 74],
\t\t\"Values\");

\ta.deep(getOwnPropertyDescriptor(o, 'bar3'), { configurable: false,
\t\tenumerable: true, writable: true, value: 59 }, \"Desc\");
\ta(o.hasOwnProperty('bar4'), false, \"Cache not exposed\");
\tdesc = getOwnPropertyDescriptor(o, 'bar5');
\ta.deep(desc, { configurable: false,
\t\tenumerable: true, get: desc.get, set: desc.set }, \"Cache & Desc: desc\");

\to2 = Object.create(o);
\to2.bar = 30;
\to2.bar3 = 100;

\ta.deep([o2.bar, o2.bar2, o2.bar3, o2.bar4, o2.bar5], [30, 25, 100, 112, 115],
\t\t\"Extension Values\");

\tFoo = function () {};
\tObject.defineProperties(Foo.prototype, t({
\t\ttest: d('w', function () { return 'raz'; }),
\t\ttest2: d('', function () { return 'raz'; }, { desc: 'w' }),
\t\ttest3: d('', function () { return 'raz'; },
\t\t\t{ cacheName: '__test3__', desc: 'w' }),
\t\ttest4: d('w', 'bar')
\t}));

\to = new Foo();
\to.test = 'marko';
\ta.deep(getOwnPropertyDescriptor(o, 'test'),
\t\t{ configurable: false, enumerable: false, writable: true, value: 'marko' },
\t\t\"Set before get\");
\to.test2 = 'marko2';
\ta.deep(getOwnPropertyDescriptor(o, 'test2'),
\t\t{ configurable: false, enumerable: false, writable: true, value: 'marko2' },
\t\t\"Set before get: Custom desc\");
\to.test3 = 'marko3';
\ta.deep(getOwnPropertyDescriptor(o, '__test3__'),
\t\t{ configurable: false, enumerable: false, writable: true, value: 'marko3' },
\t\t\"Set before get: Custom cache name\");
\ta(o.test4, 'bar', \"Resolve by value\");

\ta.h1(\"Flat\");
\tObject.defineProperties(Foo.prototype, t({
\t\tflat: d(function () { return 'foo'; }, { flat: true }),
\t\tflat2: d(function () { return 'bar'; }, { flat: true })
\t}));

\ta.h2(\"Instance\");
\ta(o.flat, 'foo', \"Value\");
\ta(o.hasOwnProperty('flat'), false, \"Instance\");
\ta(Foo.prototype.flat, 'foo', \"Prototype\");

\ta.h2(\"Direct\");
\ta(Foo.prototype.flat2, 'bar');

\ta.h2(\"Reset direct\");
\tObject.defineProperties(Foo.prototype, t({ testResetDirect: d(false) }));

\ta.throws(function () { Foo.prototype.testResetDirect = false; }, TypeError);
};
";
        
        $__internal_da818884df6e7361eb15333ee59dccbb21b4f18f02b9075523e680f0922a0306->leave($__internal_da818884df6e7361eb15333ee59dccbb21b4f18f02b9075523e680f0922a0306_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/d/test/lazy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var d = require('../')

  , getOwnPropertyDescriptor = Object.getOwnPropertyDescriptor;

module.exports = function (t, a) {
\tvar Foo = function () {}, i = 1, o, o2, desc;
\tObject.defineProperties(Foo.prototype, t({
\t\tbar: d(function () { return ++i; }),
\t\tbar2: d(function () { return this.bar + 23; }),
\t\tbar3: d(function () { return this.bar2 + 34; }, { desc: 'ew' }),
\t\tbar4: d(function () { return this.bar3 + 12; }, { cacheName: '_bar4_' }),
\t\tbar5: d(function () { return this.bar4 + 3; },
\t\t\t{ cacheName: '_bar5_', desc: 'e' })
\t}));

\tdesc = getOwnPropertyDescriptor(Foo.prototype, 'bar');
\ta(desc.configurable, true, \"Configurable: default\");
\ta(desc.enumerable, false, \"Enumerable: default\");

\to = new Foo();
\ta.deep([o.bar, o.bar2, o.bar3, o.bar4, o.bar5], [2, 25, 59, 71, 74],
\t\t\"Values\");

\ta.deep(getOwnPropertyDescriptor(o, 'bar3'), { configurable: false,
\t\tenumerable: true, writable: true, value: 59 }, \"Desc\");
\ta(o.hasOwnProperty('bar4'), false, \"Cache not exposed\");
\tdesc = getOwnPropertyDescriptor(o, 'bar5');
\ta.deep(desc, { configurable: false,
\t\tenumerable: true, get: desc.get, set: desc.set }, \"Cache & Desc: desc\");

\to2 = Object.create(o);
\to2.bar = 30;
\to2.bar3 = 100;

\ta.deep([o2.bar, o2.bar2, o2.bar3, o2.bar4, o2.bar5], [30, 25, 100, 112, 115],
\t\t\"Extension Values\");

\tFoo = function () {};
\tObject.defineProperties(Foo.prototype, t({
\t\ttest: d('w', function () { return 'raz'; }),
\t\ttest2: d('', function () { return 'raz'; }, { desc: 'w' }),
\t\ttest3: d('', function () { return 'raz'; },
\t\t\t{ cacheName: '__test3__', desc: 'w' }),
\t\ttest4: d('w', 'bar')
\t}));

\to = new Foo();
\to.test = 'marko';
\ta.deep(getOwnPropertyDescriptor(o, 'test'),
\t\t{ configurable: false, enumerable: false, writable: true, value: 'marko' },
\t\t\"Set before get\");
\to.test2 = 'marko2';
\ta.deep(getOwnPropertyDescriptor(o, 'test2'),
\t\t{ configurable: false, enumerable: false, writable: true, value: 'marko2' },
\t\t\"Set before get: Custom desc\");
\to.test3 = 'marko3';
\ta.deep(getOwnPropertyDescriptor(o, '__test3__'),
\t\t{ configurable: false, enumerable: false, writable: true, value: 'marko3' },
\t\t\"Set before get: Custom cache name\");
\ta(o.test4, 'bar', \"Resolve by value\");

\ta.h1(\"Flat\");
\tObject.defineProperties(Foo.prototype, t({
\t\tflat: d(function () { return 'foo'; }, { flat: true }),
\t\tflat2: d(function () { return 'bar'; }, { flat: true })
\t}));

\ta.h2(\"Instance\");
\ta(o.flat, 'foo', \"Value\");
\ta(o.hasOwnProperty('flat'), false, \"Instance\");
\ta(Foo.prototype.flat, 'foo', \"Prototype\");

\ta.h2(\"Direct\");
\ta(Foo.prototype.flat2, 'bar');

\ta.h2(\"Reset direct\");
\tObject.defineProperties(Foo.prototype, t({ testResetDirect: d(false) }));

\ta.throws(function () { Foo.prototype.testResetDirect = false; }, TypeError);
};
", "node_modules/d/test/lazy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/d/test/lazy.js");
    }
}
