<?php

/* node_modules/parse-json/index.js */
class __TwigTemplate_c124362d461738e22f4b94782ec3434504a592f78697c729805c5f6fa48b253f extends Twig_Template
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
        $__internal_3e533f910ca53aacf5fdabad1d73f3601b68b884c062762cdc2fb676748fe2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e533f910ca53aacf5fdabad1d73f3601b68b884c062762cdc2fb676748fe2f7->enter($__internal_3e533f910ca53aacf5fdabad1d73f3601b68b884c062762cdc2fb676748fe2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parse-json/index.js"));

        // line 1
        echo "'use strict';
var errorEx = require('error-ex');
var fallback = require('./vendor/parse');

var JSONError = errorEx('JSONError', {
\tfileName: errorEx.append('in %s')
});

module.exports = function (x, reviver, filename) {
\tif (typeof reviver === 'string') {
\t\tfilename = reviver;
\t\treviver = null;
\t}

\ttry {
\t\ttry {
\t\t\treturn JSON.parse(x, reviver);
\t\t} catch (err) {
\t\t\tfallback.parse(x, {
\t\t\t\tmode: 'json',
\t\t\t\treviver: reviver
\t\t\t});

\t\t\tthrow err;
\t\t}
\t} catch (err) {
\t\tvar jsonErr = new JSONError(err);

\t\tif (filename) {
\t\t\tjsonErr.fileName = filename;
\t\t}

\t\tthrow jsonErr;
\t}
};
";
        
        $__internal_3e533f910ca53aacf5fdabad1d73f3601b68b884c062762cdc2fb676748fe2f7->leave($__internal_3e533f910ca53aacf5fdabad1d73f3601b68b884c062762cdc2fb676748fe2f7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parse-json/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var errorEx = require('error-ex');
var fallback = require('./vendor/parse');

var JSONError = errorEx('JSONError', {
\tfileName: errorEx.append('in %s')
});

module.exports = function (x, reviver, filename) {
\tif (typeof reviver === 'string') {
\t\tfilename = reviver;
\t\treviver = null;
\t}

\ttry {
\t\ttry {
\t\t\treturn JSON.parse(x, reviver);
\t\t} catch (err) {
\t\t\tfallback.parse(x, {
\t\t\t\tmode: 'json',
\t\t\t\treviver: reviver
\t\t\t});

\t\t\tthrow err;
\t\t}
\t} catch (err) {
\t\tvar jsonErr = new JSONError(err);

\t\tif (filename) {
\t\t\tjsonErr.fileName = filename;
\t\t}

\t\tthrow jsonErr;
\t}
};
", "node_modules/parse-json/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parse-json/index.js");
    }
}
