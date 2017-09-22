<?php

/* node_modules/pbkdf2/index.js */
class __TwigTemplate_c88984f6d3800fd5e178d2435530d9489da5cd2999cde0a57d74d3443384c8c7 extends Twig_Template
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
        $__internal_5ab3ba782926a938938f15fa9b29b65bf2434a5dcdbaed38cb5248641ba91263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab3ba782926a938938f15fa9b29b65bf2434a5dcdbaed38cb5248641ba91263->enter($__internal_5ab3ba782926a938938f15fa9b29b65bf2434a5dcdbaed38cb5248641ba91263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pbkdf2/index.js"));

        // line 1
        echo "var crypto = require('crypto')
/* istanbul ignore next */
if (crypto && (!crypto.pbkdf2Sync || crypto.pbkdf2Sync.toString().indexOf('keylen, digest') === -1)) {
  exports.pbkdf2 = require('./lib/async')
  exports.pbkdf2Sync = require('./lib/sync')
} else {
  exports.pbkdf2Sync = crypto.pbkdf2Sync
  exports.pbkdf2 = crypto.pbkdf2
}
";
        
        $__internal_5ab3ba782926a938938f15fa9b29b65bf2434a5dcdbaed38cb5248641ba91263->leave($__internal_5ab3ba782926a938938f15fa9b29b65bf2434a5dcdbaed38cb5248641ba91263_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pbkdf2/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var crypto = require('crypto')
/* istanbul ignore next */
if (crypto && (!crypto.pbkdf2Sync || crypto.pbkdf2Sync.toString().indexOf('keylen, digest') === -1)) {
  exports.pbkdf2 = require('./lib/async')
  exports.pbkdf2Sync = require('./lib/sync')
} else {
  exports.pbkdf2Sync = crypto.pbkdf2Sync
  exports.pbkdf2 = crypto.pbkdf2
}
", "node_modules/pbkdf2/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pbkdf2/index.js");
    }
}
