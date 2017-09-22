<?php

/* node_modules/is-number/index.js */
class __TwigTemplate_6adb6b57d0c8818bce314325b121414ab8ffe04bf3a7d4d49f9e8f915c888d8f extends Twig_Template
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
        $__internal_4463ef3bb70e60ae03e3dcec40aa65f4546559c83669a00e37dc3cb8e46b2570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4463ef3bb70e60ae03e3dcec40aa65f4546559c83669a00e37dc3cb8e46b2570->enter($__internal_4463ef3bb70e60ae03e3dcec40aa65f4546559c83669a00e37dc3cb8e46b2570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-number/index.js"));

        // line 1
        echo "/*!
 * is-number <https://github.com/jonschlinkert/is-number>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var typeOf = require('kind-of');

module.exports = function isNumber(num) {
  var type = typeOf(num);
  if (type !== 'number' && type !== 'string') {
    return false;
  }
  var n = +num;
  return (n - n + 1) >= 0 && num !== '';
};
";
        
        $__internal_4463ef3bb70e60ae03e3dcec40aa65f4546559c83669a00e37dc3cb8e46b2570->leave($__internal_4463ef3bb70e60ae03e3dcec40aa65f4546559c83669a00e37dc3cb8e46b2570_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-number/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * is-number <https://github.com/jonschlinkert/is-number>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var typeOf = require('kind-of');

module.exports = function isNumber(num) {
  var type = typeOf(num);
  if (type !== 'number' && type !== 'string') {
    return false;
  }
  var n = +num;
  return (n - n + 1) >= 0 && num !== '';
};
", "node_modules/is-number/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-number/index.js");
    }
}
