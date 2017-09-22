<?php

/* node_modules/ajv-keywords/index.js */
class __TwigTemplate_edb638b5a9f0738342a780211e4239dce54c4835e3196ba010767970ddf6a91e extends Twig_Template
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
        $__internal_e7083d9abd1f07750eb1ae4fa1d14054987a25d7e65f6cee174d6dc377a544f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7083d9abd1f07750eb1ae4fa1d14054987a25d7e65f6cee174d6dc377a544f3->enter($__internal_e7083d9abd1f07750eb1ae4fa1d14054987a25d7e65f6cee174d6dc377a544f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv-keywords/index.js"));

        // line 1
        echo "'use strict';

var KEYWORDS = require('./keywords');

module.exports = defineKeywords;


/**
 * Defines one or several keywords in ajv instance
 * @param  {Ajv} ajv validator instance
 * @param  {String|Array<String>|undefined} keyword keyword(s) to define
 * @return {Ajv} ajv instance (for chaining)
 */
function defineKeywords(ajv, keyword) {
  if (Array.isArray(keyword)) {
    for (var i=0; i<keyword.length; i++)
      get(keyword[i])(ajv);
    return ajv;
  }
  if (keyword) {
    get(keyword)(ajv);
    return ajv;
  }
  for (keyword in KEYWORDS) get(keyword)(ajv);
  return ajv;
}


defineKeywords.get = get;

function get(keyword) {
  var defFunc = KEYWORDS[keyword];
  if (!defFunc) throw new Error('Unknown keyword ' + keyword);
  return defFunc;
}
";
        
        $__internal_e7083d9abd1f07750eb1ae4fa1d14054987a25d7e65f6cee174d6dc377a544f3->leave($__internal_e7083d9abd1f07750eb1ae4fa1d14054987a25d7e65f6cee174d6dc377a544f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv-keywords/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var KEYWORDS = require('./keywords');

module.exports = defineKeywords;


/**
 * Defines one or several keywords in ajv instance
 * @param  {Ajv} ajv validator instance
 * @param  {String|Array<String>|undefined} keyword keyword(s) to define
 * @return {Ajv} ajv instance (for chaining)
 */
function defineKeywords(ajv, keyword) {
  if (Array.isArray(keyword)) {
    for (var i=0; i<keyword.length; i++)
      get(keyword[i])(ajv);
    return ajv;
  }
  if (keyword) {
    get(keyword)(ajv);
    return ajv;
  }
  for (keyword in KEYWORDS) get(keyword)(ajv);
  return ajv;
}


defineKeywords.get = get;

function get(keyword) {
  var defFunc = KEYWORDS[keyword];
  if (!defFunc) throw new Error('Unknown keyword ' + keyword);
  return defFunc;
}
", "node_modules/ajv-keywords/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv-keywords/index.js");
    }
}
