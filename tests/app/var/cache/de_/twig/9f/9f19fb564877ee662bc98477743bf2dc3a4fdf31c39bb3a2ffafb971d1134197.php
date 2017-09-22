<?php

/* node_modules/es6-symbol/test/polyfill.js */
class __TwigTemplate_22e4190d12549d6187575aab0203c730d2b00b8db6886fe9d5fdcfc539e80f03 extends Twig_Template
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
        $__internal_7f0a1064542b25c9f76b2e1ef9ca6b9d4620aeddb6fdab1be2f2f7ffb34f956d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0a1064542b25c9f76b2e1ef9ca6b9d4620aeddb6fdab1be2f2f7ffb34f956d->enter($__internal_7f0a1064542b25c9f76b2e1ef9ca6b9d4620aeddb6fdab1be2f2f7ffb34f956d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/test/polyfill.js"));

        // line 1
        echo "'use strict';

var d        = require('d')
  , isSymbol = require('../is-symbol')

  , defineProperty = Object.defineProperty;

module.exports = function (T, a) {
\tvar symbol = T('test'), x = {};
\tdefineProperty(x, symbol, d('foo'));
\ta(x.test, undefined, \"Name\");
\ta(x[symbol], 'foo', \"Get\");
\ta(x instanceof T, false);

\ta(isSymbol(symbol), true, \"Symbol\");
\ta(isSymbol(T.iterator), true, \"iterator\");
\ta(isSymbol(T.toStringTag), true, \"toStringTag\");

\tx = {};
\tx[symbol] = 'foo';
\tif (typeof symbol !== 'symbol') {
\t\ta.deep(Object.getOwnPropertyDescriptor(x, symbol), { configurable: true, enumerable: false,
\t\t\tvalue: 'foo', writable: true });
\t}
\tsymbol = T.for('marko');
\ta(isSymbol(symbol), true);
\ta(T.for('marko'), symbol);
\ta(T.keyFor(symbol), 'marko');
};
";
        
        $__internal_7f0a1064542b25c9f76b2e1ef9ca6b9d4620aeddb6fdab1be2f2f7ffb34f956d->leave($__internal_7f0a1064542b25c9f76b2e1ef9ca6b9d4620aeddb6fdab1be2f2f7ffb34f956d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/test/polyfill.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var d        = require('d')
  , isSymbol = require('../is-symbol')

  , defineProperty = Object.defineProperty;

module.exports = function (T, a) {
\tvar symbol = T('test'), x = {};
\tdefineProperty(x, symbol, d('foo'));
\ta(x.test, undefined, \"Name\");
\ta(x[symbol], 'foo', \"Get\");
\ta(x instanceof T, false);

\ta(isSymbol(symbol), true, \"Symbol\");
\ta(isSymbol(T.iterator), true, \"iterator\");
\ta(isSymbol(T.toStringTag), true, \"toStringTag\");

\tx = {};
\tx[symbol] = 'foo';
\tif (typeof symbol !== 'symbol') {
\t\ta.deep(Object.getOwnPropertyDescriptor(x, symbol), { configurable: true, enumerable: false,
\t\t\tvalue: 'foo', writable: true });
\t}
\tsymbol = T.for('marko');
\ta(isSymbol(symbol), true);
\ta(T.for('marko'), symbol);
\ta(T.keyFor(symbol), 'marko');
};
", "node_modules/es6-symbol/test/polyfill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/test/polyfill.js");
    }
}
