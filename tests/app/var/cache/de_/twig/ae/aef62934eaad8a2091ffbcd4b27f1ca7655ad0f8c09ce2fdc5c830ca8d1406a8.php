<?php

/* node_modules/fsevents/node_modules/verror/examples/levels-verror.js */
class __TwigTemplate_983ecdf864cd4e55be669f63a6d43a7765d9e819c9c19f495c754dd34b4d7b9c extends Twig_Template
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
        $__internal_180b9e8f4c0116f6f5593d8d307056a4657d4cbd346c4c31d93639929cc126f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180b9e8f4c0116f6f5593d8d307056a4657d4cbd346c4c31d93639929cc126f3->enter($__internal_180b9e8f4c0116f6f5593d8d307056a4657d4cbd346c4c31d93639929cc126f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/verror/examples/levels-verror.js"));

        // line 1
        echo "var extsprintf = require('extsprintf');
var fs = require('fs');
var verror = require('../lib/verror');

function checkFile(filename, callback) {
\tfs.stat(filename, function (err) {
\t\tif (err)
\t\t\t/* Annotate the \"stat\" error with what we were doing. */
\t\t\treturn (callback(new verror.VError(err,
\t\t\t    'failed to check \"%s\"', filename)));

\t\t/* ... */
\t\treturn (callback());
\t});
}

function handleRequest(filename, callback) {
\tcheckFile('/nonexistent', function (err) {
\t\tif (err)
\t\t\t/* Annotate the \"checkFile\" error. */
\t\t\treturn (callback(new verror.VError(
\t\t\t    err, 'request failed')));

\t\t/* ... */
\t\treturn (callback());
\t});
}

handleRequest('/nonexistent', function (err) {
\tif (err) {
\t\tconsole.log(err.message);
\t\tconsole.log(extsprintf.sprintf('%r', err));
\t}

    /* ... */
});
";
        
        $__internal_180b9e8f4c0116f6f5593d8d307056a4657d4cbd346c4c31d93639929cc126f3->leave($__internal_180b9e8f4c0116f6f5593d8d307056a4657d4cbd346c4c31d93639929cc126f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/verror/examples/levels-verror.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var extsprintf = require('extsprintf');
var fs = require('fs');
var verror = require('../lib/verror');

function checkFile(filename, callback) {
\tfs.stat(filename, function (err) {
\t\tif (err)
\t\t\t/* Annotate the \"stat\" error with what we were doing. */
\t\t\treturn (callback(new verror.VError(err,
\t\t\t    'failed to check \"%s\"', filename)));

\t\t/* ... */
\t\treturn (callback());
\t});
}

function handleRequest(filename, callback) {
\tcheckFile('/nonexistent', function (err) {
\t\tif (err)
\t\t\t/* Annotate the \"checkFile\" error. */
\t\t\treturn (callback(new verror.VError(
\t\t\t    err, 'request failed')));

\t\t/* ... */
\t\treturn (callback());
\t});
}

handleRequest('/nonexistent', function (err) {
\tif (err) {
\t\tconsole.log(err.message);
\t\tconsole.log(extsprintf.sprintf('%r', err));
\t}

    /* ... */
});
", "node_modules/fsevents/node_modules/verror/examples/levels-verror.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/verror/examples/levels-verror.js");
    }
}
