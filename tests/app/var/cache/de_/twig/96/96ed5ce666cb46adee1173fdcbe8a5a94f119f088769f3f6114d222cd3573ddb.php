<?php

/* node_modules/pbkdf2/browser.js */
class __TwigTemplate_dbd66951e28957caa51936994e671d212ec33f25db764f63f061b8be5971dbfd extends Twig_Template
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
        $__internal_261e9c562ffc2b9f91b4e436d08e80c3ebfa24cff5c88738a5f963569b1fb320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261e9c562ffc2b9f91b4e436d08e80c3ebfa24cff5c88738a5f963569b1fb320->enter($__internal_261e9c562ffc2b9f91b4e436d08e80c3ebfa24cff5c88738a5f963569b1fb320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pbkdf2/browser.js"));

        // line 1
        echo "
exports.pbkdf2 = require('./lib/async')

exports.pbkdf2Sync = require('./lib/sync')
";
        
        $__internal_261e9c562ffc2b9f91b4e436d08e80c3ebfa24cff5c88738a5f963569b1fb320->leave($__internal_261e9c562ffc2b9f91b4e436d08e80c3ebfa24cff5c88738a5f963569b1fb320_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pbkdf2/browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
exports.pbkdf2 = require('./lib/async')

exports.pbkdf2Sync = require('./lib/sync')
", "node_modules/pbkdf2/browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pbkdf2/browser.js");
    }
}
