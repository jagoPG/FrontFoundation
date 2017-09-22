<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/lib/util/s3_setup.js */
class __TwigTemplate_9be3e491d9d8d1699ad131f07ff54d0cdf25988e2a72fb84f25a826e71d9559d extends Twig_Template
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
        $__internal_25aa3964589976011226904668e2fdb2c3c72b4f20ff4fe0ae09ce03759e6067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25aa3964589976011226904668e2fdb2c3c72b4f20ff4fe0ae09ce03759e6067->enter($__internal_25aa3964589976011226904668e2fdb2c3c72b4f20ff4fe0ae09ce03759e6067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/lib/util/s3_setup.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports;

var url = require('url');

var URI_REGEX=\"^(.*)\\.(s3(?:-.*)?)\\.amazonaws\\.com\$\";

module.exports.detect = function(to,config) {
    var uri = url.parse(to);
    var hostname_matches = uri.hostname.match(URI_REGEX);
    config.prefix = (!uri.pathname || uri.pathname == '/') ? '' : uri.pathname.replace('/','');
    if(!hostname_matches) {
        return;
    }
    if (!config.bucket) {
        config.bucket = hostname_matches[1];
    }
    if (!config.region) {
        var s3_domain = hostname_matches[2];
        if (s3_domain.slice(0,3) == 's3-' &&
            s3_domain.length >= 3) {
            // it appears the region is explicit in the url
            config.region = s3_domain.replace('s3-','');
        }
    }
};
";
        
        $__internal_25aa3964589976011226904668e2fdb2c3c72b4f20ff4fe0ae09ce03759e6067->leave($__internal_25aa3964589976011226904668e2fdb2c3c72b4f20ff4fe0ae09ce03759e6067_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/lib/util/s3_setup.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports;

var url = require('url');

var URI_REGEX=\"^(.*)\\.(s3(?:-.*)?)\\.amazonaws\\.com\$\";

module.exports.detect = function(to,config) {
    var uri = url.parse(to);
    var hostname_matches = uri.hostname.match(URI_REGEX);
    config.prefix = (!uri.pathname || uri.pathname == '/') ? '' : uri.pathname.replace('/','');
    if(!hostname_matches) {
        return;
    }
    if (!config.bucket) {
        config.bucket = hostname_matches[1];
    }
    if (!config.region) {
        var s3_domain = hostname_matches[2];
        if (s3_domain.slice(0,3) == 's3-' &&
            s3_domain.length >= 3) {
            // it appears the region is explicit in the url
            config.region = s3_domain.replace('s3-','');
        }
    }
};
", "node_modules/fsevents/node_modules/node-pre-gyp/lib/util/s3_setup.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/lib/util/s3_setup.js");
    }
}
