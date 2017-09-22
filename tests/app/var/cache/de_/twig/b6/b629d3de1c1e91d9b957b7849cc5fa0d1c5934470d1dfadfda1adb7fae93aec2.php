<?php

/* node_modules/node-pre-gyp/lib/util/s3_setup.js */
class __TwigTemplate_1b3263903b9c24ea040111ed07bbba3db2ea387e31f80c02853a94e2aad87453 extends Twig_Template
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
        $__internal_36a2ef97d4fd831aea4b90679c389270639da24f9238c79bd2a567f99b4e48f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a2ef97d4fd831aea4b90679c389270639da24f9238c79bd2a567f99b4e48f4->enter($__internal_36a2ef97d4fd831aea4b90679c389270639da24f9238c79bd2a567f99b4e48f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/lib/util/s3_setup.js"));

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
        
        $__internal_36a2ef97d4fd831aea4b90679c389270639da24f9238c79bd2a567f99b4e48f4->leave($__internal_36a2ef97d4fd831aea4b90679c389270639da24f9238c79bd2a567f99b4e48f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/lib/util/s3_setup.js";
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
", "node_modules/node-pre-gyp/lib/util/s3_setup.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/lib/util/s3_setup.js");
    }
}
