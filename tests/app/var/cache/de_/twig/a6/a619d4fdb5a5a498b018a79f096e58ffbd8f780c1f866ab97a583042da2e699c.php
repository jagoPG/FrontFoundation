<?php

/* node_modules/is-glob/index.js */
class __TwigTemplate_85cc829b784077701a77082e54b7d6f1838ef73112b29e9f7b120e0425af5f4b extends Twig_Template
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
        $__internal_907ea2bfcff58cbc381c8e0d49897740c0101ec81ae4978e4f505a28d384a3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907ea2bfcff58cbc381c8e0d49897740c0101ec81ae4978e4f505a28d384a3fe->enter($__internal_907ea2bfcff58cbc381c8e0d49897740c0101ec81ae4978e4f505a28d384a3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-glob/index.js"));

        // line 1
        echo "/*!
 * is-glob <https://github.com/jonschlinkert/is-glob>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

var isExtglob = require('is-extglob');

module.exports = function isGlob(str) {
  return typeof str === 'string'
    && (/[*!?{}(|)[\\]]/.test(str)
     || isExtglob(str));
};";
        
        $__internal_907ea2bfcff58cbc381c8e0d49897740c0101ec81ae4978e4f505a28d384a3fe->leave($__internal_907ea2bfcff58cbc381c8e0d49897740c0101ec81ae4978e4f505a28d384a3fe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-glob/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * is-glob <https://github.com/jonschlinkert/is-glob>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

var isExtglob = require('is-extglob');

module.exports = function isGlob(str) {
  return typeof str === 'string'
    && (/[*!?{}(|)[\\]]/.test(str)
     || isExtglob(str));
};", "node_modules/is-glob/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-glob/index.js");
    }
}
