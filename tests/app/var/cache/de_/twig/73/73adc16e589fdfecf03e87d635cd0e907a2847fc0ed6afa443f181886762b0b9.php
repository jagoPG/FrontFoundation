<?php

/* node_modules/public-encrypt/browser.js */
class __TwigTemplate_55c79ef3ecb8e420e02a87f18bbe6c10cd3e8eb210ba517ab90b25bf6ce85df4 extends Twig_Template
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
        $__internal_961c435012d2351e99f117602253857b4b8b748ba2ae0b4bdea28356b3c09cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961c435012d2351e99f117602253857b4b8b748ba2ae0b4bdea28356b3c09cf2->enter($__internal_961c435012d2351e99f117602253857b4b8b748ba2ae0b4bdea28356b3c09cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/public-encrypt/browser.js"));

        // line 1
        echo "exports.publicEncrypt = require('./publicEncrypt');
exports.privateDecrypt = require('./privateDecrypt');

exports.privateEncrypt = function privateEncrypt(key, buf) {
  return exports.publicEncrypt(key, buf, true);
};

exports.publicDecrypt = function publicDecrypt(key, buf) {
  return exports.privateDecrypt(key, buf, true);
};";
        
        $__internal_961c435012d2351e99f117602253857b4b8b748ba2ae0b4bdea28356b3c09cf2->leave($__internal_961c435012d2351e99f117602253857b4b8b748ba2ae0b4bdea28356b3c09cf2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/public-encrypt/browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.publicEncrypt = require('./publicEncrypt');
exports.privateDecrypt = require('./privateDecrypt');

exports.privateEncrypt = function privateEncrypt(key, buf) {
  return exports.publicEncrypt(key, buf, true);
};

exports.publicDecrypt = function publicDecrypt(key, buf) {
  return exports.privateDecrypt(key, buf, true);
};", "node_modules/public-encrypt/browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/public-encrypt/browser.js");
    }
}
