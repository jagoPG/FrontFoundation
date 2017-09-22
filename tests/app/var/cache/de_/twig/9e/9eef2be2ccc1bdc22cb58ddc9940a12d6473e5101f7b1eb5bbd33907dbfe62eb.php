<?php

/* node_modules/is-equal-shallow/index.js */
class __TwigTemplate_1d9a2637d82d81dcec32522697df26ab283e087b75aed4a88474ebe3a149fca4 extends Twig_Template
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
        $__internal_bb0292ba861b4631e351ab3991742d3873119402291a4663203c401529615d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0292ba861b4631e351ab3991742d3873119402291a4663203c401529615d7e->enter($__internal_bb0292ba861b4631e351ab3991742d3873119402291a4663203c401529615d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-equal-shallow/index.js"));

        // line 1
        echo "/*!
 * is-equal-shallow <https://github.com/jonschlinkert/is-equal-shallow>
 *
 * Copyright (c) 2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var isPrimitive = require('is-primitive');

module.exports = function isEqual(a, b) {
  if (!a && !b) { return true; }
  if (!a && b || a && !b) { return false; }

  var numKeysA = 0, numKeysB = 0, key;
  for (key in b) {
    numKeysB++;
    if (!isPrimitive(b[key]) || !a.hasOwnProperty(key) || (a[key] !== b[key])) {
      return false;
    }
  }
  for (key in a) {
    numKeysA++;
  }
  return numKeysA === numKeysB;
};
";
        
        $__internal_bb0292ba861b4631e351ab3991742d3873119402291a4663203c401529615d7e->leave($__internal_bb0292ba861b4631e351ab3991742d3873119402291a4663203c401529615d7e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-equal-shallow/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * is-equal-shallow <https://github.com/jonschlinkert/is-equal-shallow>
 *
 * Copyright (c) 2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var isPrimitive = require('is-primitive');

module.exports = function isEqual(a, b) {
  if (!a && !b) { return true; }
  if (!a && b || a && !b) { return false; }

  var numKeysA = 0, numKeysB = 0, key;
  for (key in b) {
    numKeysB++;
    if (!isPrimitive(b[key]) || !a.hasOwnProperty(key) || (a[key] !== b[key])) {
      return false;
    }
  }
  for (key in a) {
    numKeysA++;
  }
  return numKeysA === numKeysB;
};
", "node_modules/is-equal-shallow/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-equal-shallow/index.js");
    }
}
