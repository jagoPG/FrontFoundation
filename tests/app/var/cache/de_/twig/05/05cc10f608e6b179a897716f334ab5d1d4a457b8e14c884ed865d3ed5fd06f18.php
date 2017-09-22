<?php

/* node_modules/core-js/fn/string/virtual/repeat.js */
class __TwigTemplate_ae99e53648169d0aafc08c79d866b411808a5f1371a5b433eb2501f7ac45ceee extends Twig_Template
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
        $__internal_c545a3be5b500f89b60a309e9e7a9780ec60723bcf790f68ce26b7980aead214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c545a3be5b500f89b60a309e9e7a9780ec60723bcf790f68ce26b7980aead214->enter($__internal_c545a3be5b500f89b60a309e9e7a9780ec60723bcf790f68ce26b7980aead214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/repeat.js"));

        // line 1
        echo "require('../../../modules/es6.string.repeat');
module.exports = require('../../../modules/_entry-virtual')('String').repeat;
";
        
        $__internal_c545a3be5b500f89b60a309e9e7a9780ec60723bcf790f68ce26b7980aead214->leave($__internal_c545a3be5b500f89b60a309e9e7a9780ec60723bcf790f68ce26b7980aead214_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/repeat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.repeat');
module.exports = require('../../../modules/_entry-virtual')('String').repeat;
", "node_modules/core-js/fn/string/virtual/repeat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/repeat.js");
    }
}
