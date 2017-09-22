<?php

/* node_modules/repeat-element/index.js */
class __TwigTemplate_2e845a6c1086ae8a852e0c47547ece4169c23f9d8b1dac97c779574779fe09f2 extends Twig_Template
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
        $__internal_8f591317b5392d441f13b607f554837795f69a78ba7e22cb848670d5f7ce9183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f591317b5392d441f13b607f554837795f69a78ba7e22cb848670d5f7ce9183->enter($__internal_8f591317b5392d441f13b607f554837795f69a78ba7e22cb848670d5f7ce9183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/repeat-element/index.js"));

        // line 1
        echo "/*!
 * repeat-element <https://github.com/jonschlinkert/repeat-element>
 *
 * Copyright (c) 2015 Jon Schlinkert.
 * Licensed under the MIT license.
 */

'use strict';

module.exports = function repeat(ele, num) {
  var arr = new Array(num);

  for (var i = 0; i < num; i++) {
    arr[i] = ele;
  }

  return arr;
};
";
        
        $__internal_8f591317b5392d441f13b607f554837795f69a78ba7e22cb848670d5f7ce9183->leave($__internal_8f591317b5392d441f13b607f554837795f69a78ba7e22cb848670d5f7ce9183_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/repeat-element/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * repeat-element <https://github.com/jonschlinkert/repeat-element>
 *
 * Copyright (c) 2015 Jon Schlinkert.
 * Licensed under the MIT license.
 */

'use strict';

module.exports = function repeat(ele, num) {
  var arr = new Array(num);

  for (var i = 0; i < num; i++) {
    arr[i] = ele;
  }

  return arr;
};
", "node_modules/repeat-element/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/repeat-element/index.js");
    }
}
