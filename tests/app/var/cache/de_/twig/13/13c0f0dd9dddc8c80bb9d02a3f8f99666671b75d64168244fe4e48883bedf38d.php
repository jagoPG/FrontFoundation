<?php

/* node_modules/hawk/lib/index.js */
class __TwigTemplate_7575e0d2dc5da9f338652e7add17a8e11ea45b95493dc95fe8bbe46f28cf7d64 extends Twig_Template
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
        $__internal_134239eff534032e3956350c96c8d1cd65dee9bd3c7f0c4b8b97c31549d64200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134239eff534032e3956350c96c8d1cd65dee9bd3c7f0c4b8b97c31549d64200->enter($__internal_134239eff534032e3956350c96c8d1cd65dee9bd3c7f0c4b8b97c31549d64200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hawk/lib/index.js"));

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
        
        $__internal_134239eff534032e3956350c96c8d1cd65dee9bd3c7f0c4b8b97c31549d64200->leave($__internal_134239eff534032e3956350c96c8d1cd65dee9bd3c7f0c4b8b97c31549d64200_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hawk/lib/index.js";
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

", "node_modules/hawk/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hawk/lib/index.js");
    }
}
