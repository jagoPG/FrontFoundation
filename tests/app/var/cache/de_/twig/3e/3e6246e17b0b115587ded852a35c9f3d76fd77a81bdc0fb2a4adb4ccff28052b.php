<?php

/* node_modules/p-limit/index.js */
class __TwigTemplate_ec6626861a7297e70db29624c075afcd8259cee17f87e911a89a9009bc67242e extends Twig_Template
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
        $__internal_a12d6816556743839c402597867ff9bd487811159dc145005a62c4bfa063d81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12d6816556743839c402597867ff9bd487811159dc145005a62c4bfa063d81a->enter($__internal_a12d6816556743839c402597867ff9bd487811159dc145005a62c4bfa063d81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/p-limit/index.js"));

        // line 1
        echo "'use strict';
module.exports = concurrency => {
\tif (concurrency < 1) {
\t\tthrow new TypeError('Expected `concurrency` to be a number from 1 and up');
\t}

\tconst queue = [];
\tlet activeCount = 0;

\tconst next = () => {
\t\tactiveCount--;

\t\tif (queue.length > 0) {
\t\t\tqueue.shift()();
\t\t}
\t};

\treturn fn => new Promise((resolve, reject) => {
\t\tconst run = () => {
\t\t\tactiveCount++;

\t\t\tfn().then(
\t\t\t\tval => {
\t\t\t\t\tresolve(val);
\t\t\t\t\tnext();
\t\t\t\t},
\t\t\t\terr => {
\t\t\t\t\treject(err);
\t\t\t\t\tnext();
\t\t\t\t}
\t\t\t);
\t\t};

\t\tif (activeCount < concurrency) {
\t\t\trun();
\t\t} else {
\t\t\tqueue.push(run);
\t\t}
\t});
};
";
        
        $__internal_a12d6816556743839c402597867ff9bd487811159dc145005a62c4bfa063d81a->leave($__internal_a12d6816556743839c402597867ff9bd487811159dc145005a62c4bfa063d81a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/p-limit/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = concurrency => {
\tif (concurrency < 1) {
\t\tthrow new TypeError('Expected `concurrency` to be a number from 1 and up');
\t}

\tconst queue = [];
\tlet activeCount = 0;

\tconst next = () => {
\t\tactiveCount--;

\t\tif (queue.length > 0) {
\t\t\tqueue.shift()();
\t\t}
\t};

\treturn fn => new Promise((resolve, reject) => {
\t\tconst run = () => {
\t\t\tactiveCount++;

\t\t\tfn().then(
\t\t\t\tval => {
\t\t\t\t\tresolve(val);
\t\t\t\t\tnext();
\t\t\t\t},
\t\t\t\terr => {
\t\t\t\t\treject(err);
\t\t\t\t\tnext();
\t\t\t\t}
\t\t\t);
\t\t};

\t\tif (activeCount < concurrency) {
\t\t\trun();
\t\t} else {
\t\t\tqueue.push(run);
\t\t}
\t});
};
", "node_modules/p-limit/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/p-limit/index.js");
    }
}
