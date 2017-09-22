<?php

/* node_modules/array-unique/index.js */
class __TwigTemplate_7690f9a816ccdb886b1bb8743cf35aced3fa6ec69342ed1a7b11af282aff97fc extends Twig_Template
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
        $__internal_8d739060eea9ad933dd30f428710564156bcddf8546cef2f6aa8c975c89ab8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d739060eea9ad933dd30f428710564156bcddf8546cef2f6aa8c975c89ab8fc->enter($__internal_8d739060eea9ad933dd30f428710564156bcddf8546cef2f6aa8c975c89ab8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/array-unique/index.js"));

        // line 1
        echo "/*!
 * array-unique <https://github.com/jonschlinkert/array-unique>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

module.exports = function unique(arr) {
  if (!Array.isArray(arr)) {
    throw new TypeError('array-unique expects an array.');
  }

  var len = arr.length;
  var i = -1;

  while (i++ < len) {
    var j = i + 1;

    for (; j < arr.length; ++j) {
      if (arr[i] === arr[j]) {
        arr.splice(j--, 1);
      }
    }
  }
  return arr;
};
";
        
        $__internal_8d739060eea9ad933dd30f428710564156bcddf8546cef2f6aa8c975c89ab8fc->leave($__internal_8d739060eea9ad933dd30f428710564156bcddf8546cef2f6aa8c975c89ab8fc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/array-unique/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * array-unique <https://github.com/jonschlinkert/array-unique>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

module.exports = function unique(arr) {
  if (!Array.isArray(arr)) {
    throw new TypeError('array-unique expects an array.');
  }

  var len = arr.length;
  var i = -1;

  while (i++ < len) {
    var j = i + 1;

    for (; j < arr.length; ++j) {
      if (arr[i] === arr[j]) {
        arr.splice(j--, 1);
      }
    }
  }
  return arr;
};
", "node_modules/array-unique/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/array-unique/index.js");
    }
}
