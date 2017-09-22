<?php

/* node_modules/sha.js/index.js */
class __TwigTemplate_88f6c3ce531d743591f79c9cfef0e0970a057451819ee5df4f47e3a66ad06f74 extends Twig_Template
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
        $__internal_34ccd99234fac4d63fd4f1cefcea97187918288baae7ff7571cfb247b9250a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ccd99234fac4d63fd4f1cefcea97187918288baae7ff7571cfb247b9250a2f->enter($__internal_34ccd99234fac4d63fd4f1cefcea97187918288baae7ff7571cfb247b9250a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sha.js/index.js"));

        // line 1
        echo "var exports = module.exports = function SHA (algorithm) {
  algorithm = algorithm.toLowerCase()

  var Algorithm = exports[algorithm]
  if (!Algorithm) throw new Error(algorithm + ' is not supported (we accept pull requests)')

  return new Algorithm()
}

exports.sha = require('./sha')
exports.sha1 = require('./sha1')
exports.sha224 = require('./sha224')
exports.sha256 = require('./sha256')
exports.sha384 = require('./sha384')
exports.sha512 = require('./sha512')
";
        
        $__internal_34ccd99234fac4d63fd4f1cefcea97187918288baae7ff7571cfb247b9250a2f->leave($__internal_34ccd99234fac4d63fd4f1cefcea97187918288baae7ff7571cfb247b9250a2f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sha.js/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var exports = module.exports = function SHA (algorithm) {
  algorithm = algorithm.toLowerCase()

  var Algorithm = exports[algorithm]
  if (!Algorithm) throw new Error(algorithm + ' is not supported (we accept pull requests)')

  return new Algorithm()
}

exports.sha = require('./sha')
exports.sha1 = require('./sha1')
exports.sha224 = require('./sha224')
exports.sha256 = require('./sha256')
exports.sha384 = require('./sha384')
exports.sha512 = require('./sha512')
", "node_modules/sha.js/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sha.js/index.js");
    }
}
