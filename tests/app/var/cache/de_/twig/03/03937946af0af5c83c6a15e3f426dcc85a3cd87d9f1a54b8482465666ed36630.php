<?php

/* node_modules/har-schema/lib/index.js */
class __TwigTemplate_6c6170c6bcc23ebdb0cb1700c157e50b74d33ff664c803a562f56f3245f142ed extends Twig_Template
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
        $__internal_4104f88b0d25cb0c61ea3fcc47d1af2af27016426039037b743bbe085f89f6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4104f88b0d25cb0c61ea3fcc47d1af2af27016426039037b743bbe085f89f6ad->enter($__internal_4104f88b0d25cb0c61ea3fcc47d1af2af27016426039037b743bbe085f89f6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-schema/lib/index.js"));

        // line 1
        echo "'use strict'

module.exports = {
  afterRequest: require('./afterRequest.json'),
  beforeRequest: require('./beforeRequest.json'),
  browser: require('./browser.json'),
  cache: require('./cache.json'),
  content: require('./content.json'),
  cookie: require('./cookie.json'),
  creator: require('./creator.json'),
  entry: require('./entry.json'),
  har: require('./har.json'),
  header: require('./header.json'),
  log: require('./log.json'),
  page: require('./page.json'),
  pageTimings: require('./pageTimings.json'),
  postData: require('./postData.json'),
  query: require('./query.json'),
  request: require('./request.json'),
  response: require('./response.json'),
  timings: require('./timings.json')
}
";
        
        $__internal_4104f88b0d25cb0c61ea3fcc47d1af2af27016426039037b743bbe085f89f6ad->leave($__internal_4104f88b0d25cb0c61ea3fcc47d1af2af27016426039037b743bbe085f89f6ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-schema/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

module.exports = {
  afterRequest: require('./afterRequest.json'),
  beforeRequest: require('./beforeRequest.json'),
  browser: require('./browser.json'),
  cache: require('./cache.json'),
  content: require('./content.json'),
  cookie: require('./cookie.json'),
  creator: require('./creator.json'),
  entry: require('./entry.json'),
  har: require('./har.json'),
  header: require('./header.json'),
  log: require('./log.json'),
  page: require('./page.json'),
  pageTimings: require('./pageTimings.json'),
  postData: require('./postData.json'),
  query: require('./query.json'),
  request: require('./request.json'),
  response: require('./response.json'),
  timings: require('./timings.json')
}
", "node_modules/har-schema/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-schema/lib/index.js");
    }
}
