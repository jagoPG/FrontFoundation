<?php

/* node_modules/randomatic/node_modules/is-number/index.js */
class __TwigTemplate_8a76c93a24e03f9321c9ea7b592c17ccc5c2c4c61468b2e42f6ec118e9073495 extends Twig_Template
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
        $__internal_63a7daf37768d98bac1e3d6e7d2dec8d3c0cc6a43fe210d3a0985c60c4e3b702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a7daf37768d98bac1e3d6e7d2dec8d3c0cc6a43fe210d3a0985c60c4e3b702->enter($__internal_63a7daf37768d98bac1e3d6e7d2dec8d3c0cc6a43fe210d3a0985c60c4e3b702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/randomatic/node_modules/is-number/index.js"));

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

  if (type === 'string') {
    if (!num.trim()) return false;
  } else if (type !== 'number') {
    return false;
  }

  return (num - num + 1) >= 0;
};
";
        
        $__internal_63a7daf37768d98bac1e3d6e7d2dec8d3c0cc6a43fe210d3a0985c60c4e3b702->leave($__internal_63a7daf37768d98bac1e3d6e7d2dec8d3c0cc6a43fe210d3a0985c60c4e3b702_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/randomatic/node_modules/is-number/index.js";
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

  if (type === 'string') {
    if (!num.trim()) return false;
  } else if (type !== 'number') {
    return false;
  }

  return (num - num + 1) >= 0;
};
", "node_modules/randomatic/node_modules/is-number/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/randomatic/node_modules/is-number/index.js");
    }
}
