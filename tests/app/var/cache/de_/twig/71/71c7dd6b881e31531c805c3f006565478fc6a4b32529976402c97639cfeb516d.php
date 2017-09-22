<?php

/* node_modules/for-in/index.js */
class __TwigTemplate_a67b195d03412d3188069f418ca499bb286570fdd77918559f7d1fc4d19851b8 extends Twig_Template
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
        $__internal_82b6d188a61eccb1d8615ac0d1ee6f61c893062ed5a50b38ec069a83527cc712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b6d188a61eccb1d8615ac0d1ee6f61c893062ed5a50b38ec069a83527cc712->enter($__internal_82b6d188a61eccb1d8615ac0d1ee6f61c893062ed5a50b38ec069a83527cc712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/for-in/index.js"));

        // line 1
        echo "/*!
 * for-in <https://github.com/jonschlinkert/for-in>
 *
 * Copyright (c) 2014-2017, Jon Schlinkert.
 * Released under the MIT License.
 */

'use strict';

module.exports = function forIn(obj, fn, thisArg) {
  for (var key in obj) {
    if (fn.call(thisArg, obj[key], key, obj) === false) {
      break;
    }
  }
};
";
        
        $__internal_82b6d188a61eccb1d8615ac0d1ee6f61c893062ed5a50b38ec069a83527cc712->leave($__internal_82b6d188a61eccb1d8615ac0d1ee6f61c893062ed5a50b38ec069a83527cc712_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/for-in/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * for-in <https://github.com/jonschlinkert/for-in>
 *
 * Copyright (c) 2014-2017, Jon Schlinkert.
 * Released under the MIT License.
 */

'use strict';

module.exports = function forIn(obj, fn, thisArg) {
  for (var key in obj) {
    if (fn.call(thisArg, obj[key], key, obj) === false) {
      break;
    }
  }
};
", "node_modules/for-in/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/for-in/index.js");
    }
}
