<?php

/* node_modules/d/index.js */
class __TwigTemplate_b826484d31b5f402e622fc44bde2b2b53d99deeb72f9085ceffdecf7b619e81a extends Twig_Template
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
        $__internal_fbb6ac0400148f7e6773e5b93cbc55779af7ad02bfc656fbca347f4245577b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb6ac0400148f7e6773e5b93cbc55779af7ad02bfc656fbca347f4245577b77->enter($__internal_fbb6ac0400148f7e6773e5b93cbc55779af7ad02bfc656fbca347f4245577b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/d/index.js"));

        // line 1
        echo "'use strict';

var assign        = require('es5-ext/object/assign')
  , normalizeOpts = require('es5-ext/object/normalize-options')
  , isCallable    = require('es5-ext/object/is-callable')
  , contains      = require('es5-ext/string/#/contains')

  , d;

d = module.exports = function (dscr, value/*, options*/) {
\tvar c, e, w, options, desc;
\tif ((arguments.length < 2) || (typeof dscr !== 'string')) {
\t\toptions = value;
\t\tvalue = dscr;
\t\tdscr = null;
\t} else {
\t\toptions = arguments[2];
\t}
\tif (dscr == null) {
\t\tc = w = true;
\t\te = false;
\t} else {
\t\tc = contains.call(dscr, 'c');
\t\te = contains.call(dscr, 'e');
\t\tw = contains.call(dscr, 'w');
\t}

\tdesc = { value: value, configurable: c, enumerable: e, writable: w };
\treturn !options ? desc : assign(normalizeOpts(options), desc);
};

d.gs = function (dscr, get, set/*, options*/) {
\tvar c, e, options, desc;
\tif (typeof dscr !== 'string') {
\t\toptions = set;
\t\tset = get;
\t\tget = dscr;
\t\tdscr = null;
\t} else {
\t\toptions = arguments[3];
\t}
\tif (get == null) {
\t\tget = undefined;
\t} else if (!isCallable(get)) {
\t\toptions = get;
\t\tget = set = undefined;
\t} else if (set == null) {
\t\tset = undefined;
\t} else if (!isCallable(set)) {
\t\toptions = set;
\t\tset = undefined;
\t}
\tif (dscr == null) {
\t\tc = true;
\t\te = false;
\t} else {
\t\tc = contains.call(dscr, 'c');
\t\te = contains.call(dscr, 'e');
\t}

\tdesc = { get: get, set: set, configurable: c, enumerable: e };
\treturn !options ? desc : assign(normalizeOpts(options), desc);
};
";
        
        $__internal_fbb6ac0400148f7e6773e5b93cbc55779af7ad02bfc656fbca347f4245577b77->leave($__internal_fbb6ac0400148f7e6773e5b93cbc55779af7ad02bfc656fbca347f4245577b77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/d/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var assign        = require('es5-ext/object/assign')
  , normalizeOpts = require('es5-ext/object/normalize-options')
  , isCallable    = require('es5-ext/object/is-callable')
  , contains      = require('es5-ext/string/#/contains')

  , d;

d = module.exports = function (dscr, value/*, options*/) {
\tvar c, e, w, options, desc;
\tif ((arguments.length < 2) || (typeof dscr !== 'string')) {
\t\toptions = value;
\t\tvalue = dscr;
\t\tdscr = null;
\t} else {
\t\toptions = arguments[2];
\t}
\tif (dscr == null) {
\t\tc = w = true;
\t\te = false;
\t} else {
\t\tc = contains.call(dscr, 'c');
\t\te = contains.call(dscr, 'e');
\t\tw = contains.call(dscr, 'w');
\t}

\tdesc = { value: value, configurable: c, enumerable: e, writable: w };
\treturn !options ? desc : assign(normalizeOpts(options), desc);
};

d.gs = function (dscr, get, set/*, options*/) {
\tvar c, e, options, desc;
\tif (typeof dscr !== 'string') {
\t\toptions = set;
\t\tset = get;
\t\tget = dscr;
\t\tdscr = null;
\t} else {
\t\toptions = arguments[3];
\t}
\tif (get == null) {
\t\tget = undefined;
\t} else if (!isCallable(get)) {
\t\toptions = get;
\t\tget = set = undefined;
\t} else if (set == null) {
\t\tset = undefined;
\t} else if (!isCallable(set)) {
\t\toptions = set;
\t\tset = undefined;
\t}
\tif (dscr == null) {
\t\tc = true;
\t\te = false;
\t} else {
\t\tc = contains.call(dscr, 'c');
\t\te = contains.call(dscr, 'e');
\t}

\tdesc = { get: get, set: set, configurable: c, enumerable: e };
\treturn !options ? desc : assign(normalizeOpts(options), desc);
};
", "node_modules/d/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/d/index.js");
    }
}
