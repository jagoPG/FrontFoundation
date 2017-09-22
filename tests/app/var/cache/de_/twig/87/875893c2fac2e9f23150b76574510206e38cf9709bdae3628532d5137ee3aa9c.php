<?php

/* node_modules/arr-flatten/index.js */
class __TwigTemplate_95cdb7aef1898c434f0e5dd489dee677989cc5b6be2727b65690eda52f160f03 extends Twig_Template
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
        $__internal_d2bf5096683847c4892038998fc1d1bee658a5a85c5c993d23c3fd0e8196a371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bf5096683847c4892038998fc1d1bee658a5a85c5c993d23c3fd0e8196a371->enter($__internal_d2bf5096683847c4892038998fc1d1bee658a5a85c5c993d23c3fd0e8196a371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/arr-flatten/index.js"));

        // line 1
        echo "/*!
 * arr-flatten <https://github.com/jonschlinkert/arr-flatten>
 *
 * Copyright (c) 2014-2017, Jon Schlinkert.
 * Released under the MIT License.
 */

'use strict';

module.exports = function (arr) {
  return flat(arr, []);
};

function flat(arr, res) {
  var i = 0, cur;
  var len = arr.length;
  for (; i < len; i++) {
    cur = arr[i];
    Array.isArray(cur) ? flat(cur, res) : res.push(cur);
  }
  return res;
}
";
        
        $__internal_d2bf5096683847c4892038998fc1d1bee658a5a85c5c993d23c3fd0e8196a371->leave($__internal_d2bf5096683847c4892038998fc1d1bee658a5a85c5c993d23c3fd0e8196a371_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/arr-flatten/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * arr-flatten <https://github.com/jonschlinkert/arr-flatten>
 *
 * Copyright (c) 2014-2017, Jon Schlinkert.
 * Released under the MIT License.
 */

'use strict';

module.exports = function (arr) {
  return flat(arr, []);
};

function flat(arr, res) {
  var i = 0, cur;
  var len = arr.length;
  for (; i < len; i++) {
    cur = arr[i];
    Array.isArray(cur) ? flat(cur, res) : res.push(cur);
  }
  return res;
}
", "node_modules/arr-flatten/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/arr-flatten/index.js");
    }
}
