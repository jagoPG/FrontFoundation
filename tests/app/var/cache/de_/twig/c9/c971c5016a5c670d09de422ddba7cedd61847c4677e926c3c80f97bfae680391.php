<?php

/* node_modules/fsevents/node_modules/hawk/lib/index.js */
class __TwigTemplate_5fa43b67456076de86d08ffb50dddc725cad8bd16783e57494724b922709a701 extends Twig_Template
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
        $__internal_9e90be25d7bccb2862ad687a7b9899564475b4d3e4e3922eb701c5b39f372a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e90be25d7bccb2862ad687a7b9899564475b4d3e4e3922eb701c5b39f372a9d->enter($__internal_9e90be25d7bccb2862ad687a7b9899564475b4d3e4e3922eb701c5b39f372a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/hawk/lib/index.js"));

        // line 1
        echo "// Export sub-modules

exports.error = exports.Error = require('boom');
exports.sntp = require('sntp');

exports.server = require('./server');
exports.client = require('./client');
exports.crypto = require('./crypto');
exports.utils = require('./utils');

exports.uri = {
    authenticate: exports.server.authenticateBewit,
    getBewit: exports.client.getBewit
};

";
        
        $__internal_9e90be25d7bccb2862ad687a7b9899564475b4d3e4e3922eb701c5b39f372a9d->leave($__internal_9e90be25d7bccb2862ad687a7b9899564475b4d3e4e3922eb701c5b39f372a9d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/hawk/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Export sub-modules

exports.error = exports.Error = require('boom');
exports.sntp = require('sntp');

exports.server = require('./server');
exports.client = require('./client');
exports.crypto = require('./crypto');
exports.utils = require('./utils');

exports.uri = {
    authenticate: exports.server.authenticateBewit,
    getBewit: exports.client.getBewit
};

", "node_modules/fsevents/node_modules/hawk/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/hawk/lib/index.js");
    }
}
