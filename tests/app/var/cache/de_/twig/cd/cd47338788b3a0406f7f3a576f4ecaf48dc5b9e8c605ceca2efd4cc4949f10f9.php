<?php

/* node_modules/core-js/fn/regexp/replace.js */
class __TwigTemplate_0b341a7e1f0721d12667846592b57a47bbaa7a8429ca1ec74770f9587306e7ca extends Twig_Template
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
        $__internal_8d047a184beba9f2fa8a5d5506dfd4c14d8c3ce71f93b2a9d0c4dd26cdc6e318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d047a184beba9f2fa8a5d5506dfd4c14d8c3ce71f93b2a9d0c4dd26cdc6e318->enter($__internal_8d047a184beba9f2fa8a5d5506dfd4c14d8c3ce71f93b2a9d0c4dd26cdc6e318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/regexp/replace.js"));

        // line 1
        echo "require('../../modules/es6.regexp.replace');
var REPLACE = require('../../modules/_wks')('replace');
module.exports = function (it, str, replacer) {
  return RegExp.prototype[REPLACE].call(it, str, replacer);
};
";
        
        $__internal_8d047a184beba9f2fa8a5d5506dfd4c14d8c3ce71f93b2a9d0c4dd26cdc6e318->leave($__internal_8d047a184beba9f2fa8a5d5506dfd4c14d8c3ce71f93b2a9d0c4dd26cdc6e318_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/regexp/replace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.regexp.replace');
var REPLACE = require('../../modules/_wks')('replace');
module.exports = function (it, str, replacer) {
  return RegExp.prototype[REPLACE].call(it, str, replacer);
};
", "node_modules/core-js/fn/regexp/replace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/regexp/replace.js");
    }
}
