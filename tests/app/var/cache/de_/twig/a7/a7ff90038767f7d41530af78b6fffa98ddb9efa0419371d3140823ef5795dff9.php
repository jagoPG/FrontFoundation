<?php

/* node_modules/p-locate/index.js */
class __TwigTemplate_d3420ab8af244c6c47fac293f06a7f0298d528ba94ac2003643a6eb9480a5dd5 extends Twig_Template
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
        $__internal_6dcb593f70bc78b9642fcf1c2b9aa1efb7df719fb6d1d4251d5847eabf93d470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcb593f70bc78b9642fcf1c2b9aa1efb7df719fb6d1d4251d5847eabf93d470->enter($__internal_6dcb593f70bc78b9642fcf1c2b9aa1efb7df719fb6d1d4251d5847eabf93d470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/p-locate/index.js"));

        // line 1
        echo "'use strict';
const pLimit = require('p-limit');

class EndError extends Error {
\tconstructor(value) {
\t\tsuper();
\t\tthis.value = value;
\t}
}

// the input can also be a promise, so we `Promise.all()` them both
const finder = el => Promise.all(el).then(val => val[1] === true && Promise.reject(new EndError(val[0])));

module.exports = (iterable, tester, opts) => {
\topts = Object.assign({
\t\tconcurrency: Infinity,
\t\tpreserveOrder: true
\t}, opts);

\tconst limit = pLimit(opts.concurrency);

\t// start all the promises concurrently with optional limit
\tconst items = Array.from(iterable).map(el => [el, limit(() => Promise.resolve(el).then(tester))]);

\t// check the promises either serially or concurrently
\tconst checkLimit = pLimit(opts.preserveOrder ? 1 : Infinity);

\treturn Promise.all(items.map(el => checkLimit(() => finder(el))))
\t\t.then(() => {})
\t\t.catch(err => err instanceof EndError ? err.value : Promise.reject(err));
};
";
        
        $__internal_6dcb593f70bc78b9642fcf1c2b9aa1efb7df719fb6d1d4251d5847eabf93d470->leave($__internal_6dcb593f70bc78b9642fcf1c2b9aa1efb7df719fb6d1d4251d5847eabf93d470_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/p-locate/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const pLimit = require('p-limit');

class EndError extends Error {
\tconstructor(value) {
\t\tsuper();
\t\tthis.value = value;
\t}
}

// the input can also be a promise, so we `Promise.all()` them both
const finder = el => Promise.all(el).then(val => val[1] === true && Promise.reject(new EndError(val[0])));

module.exports = (iterable, tester, opts) => {
\topts = Object.assign({
\t\tconcurrency: Infinity,
\t\tpreserveOrder: true
\t}, opts);

\tconst limit = pLimit(opts.concurrency);

\t// start all the promises concurrently with optional limit
\tconst items = Array.from(iterable).map(el => [el, limit(() => Promise.resolve(el).then(tester))]);

\t// check the promises either serially or concurrently
\tconst checkLimit = pLimit(opts.preserveOrder ? 1 : Infinity);

\treturn Promise.all(items.map(el => checkLimit(() => finder(el))))
\t\t.then(() => {})
\t\t.catch(err => err instanceof EndError ? err.value : Promise.reject(err));
};
", "node_modules/p-locate/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/p-locate/index.js");
    }
}
