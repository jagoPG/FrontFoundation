<?php

/* node_modules/for-own/index.js */
class __TwigTemplate_79ef578b970b190c5d37d78cd68ffaaafb1403c37b424d75d03c4fbd36e3ab04 extends Twig_Template
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
        $__internal_0bd1e9ed7f158a2f85223f610b5affd8b53045f199c81163478e5bcbf2090fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd1e9ed7f158a2f85223f610b5affd8b53045f199c81163478e5bcbf2090fe0->enter($__internal_0bd1e9ed7f158a2f85223f610b5affd8b53045f199c81163478e5bcbf2090fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/for-own/index.js"));

        // line 1
        echo "/*!
 * for-own <https://github.com/jonschlinkert/for-own>
 *
 * Copyright (c) 2014-2017, Jon Schlinkert.
 * Released under the MIT License.
 */

'use strict';

var forIn = require('for-in');
var hasOwn = Object.prototype.hasOwnProperty;

module.exports = function forOwn(obj, fn, thisArg) {
  forIn(obj, function(val, key) {
    if (hasOwn.call(obj, key)) {
      return fn.call(thisArg, obj[key], key, obj);
    }
  });
};
";
        
        $__internal_0bd1e9ed7f158a2f85223f610b5affd8b53045f199c81163478e5bcbf2090fe0->leave($__internal_0bd1e9ed7f158a2f85223f610b5affd8b53045f199c81163478e5bcbf2090fe0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/for-own/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * for-own <https://github.com/jonschlinkert/for-own>
 *
 * Copyright (c) 2014-2017, Jon Schlinkert.
 * Released under the MIT License.
 */

'use strict';

var forIn = require('for-in');
var hasOwn = Object.prototype.hasOwnProperty;

module.exports = function forOwn(obj, fn, thisArg) {
  forIn(obj, function(val, key) {
    if (hasOwn.call(obj, key)) {
      return fn.call(thisArg, obj[key], key, obj);
    }
  });
};
", "node_modules/for-own/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/for-own/index.js");
    }
}
