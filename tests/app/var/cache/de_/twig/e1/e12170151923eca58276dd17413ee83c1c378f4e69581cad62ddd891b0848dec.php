<?php

/* node_modules/fsevents/node_modules/verror/examples/levels-werror.js */
class __TwigTemplate_b831bc5fb5b399e5e356ffdcf88363df4dd783623849e61aed8716f7b68bfaac extends Twig_Template
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
        $__internal_07ec8449823fa9f2372180929567855eb80ceb2e0d6aec54c66fedb46a676a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ec8449823fa9f2372180929567855eb80ceb2e0d6aec54c66fedb46a676a87->enter($__internal_07ec8449823fa9f2372180929567855eb80ceb2e0d6aec54c66fedb46a676a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/verror/examples/levels-werror.js"));

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
\t\t\t/* Wrap the \"checkFile\" error. */
\t\t\treturn (callback(new verror.WError(
\t\t\t    err, 'request failed')));

\t\t/* ... */
\t\treturn (callback());
\t});
}

handleRequest('/nonexistent', function (err) {
\tif (err) {
\t\tconsole.log(err.message);
\t\tconsole.log(err.toString());
\t}
});
";
        
        $__internal_07ec8449823fa9f2372180929567855eb80ceb2e0d6aec54c66fedb46a676a87->leave($__internal_07ec8449823fa9f2372180929567855eb80ceb2e0d6aec54c66fedb46a676a87_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/verror/examples/levels-werror.js";
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
\t\t\t/* Wrap the \"checkFile\" error. */
\t\t\treturn (callback(new verror.WError(
\t\t\t    err, 'request failed')));

\t\t/* ... */
\t\treturn (callback());
\t});
}

handleRequest('/nonexistent', function (err) {
\tif (err) {
\t\tconsole.log(err.message);
\t\tconsole.log(err.toString());
\t}
});
", "node_modules/fsevents/node_modules/verror/examples/levels-werror.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/verror/examples/levels-werror.js");
    }
}
