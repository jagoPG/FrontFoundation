<?php

/* node_modules/object.omit/index.js */
class __TwigTemplate_d0f05d5b1d69feb4149a0e69b2de81680fbf53f97e6dfd0ded60371d21d09fc3 extends Twig_Template
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
        $__internal_90da3f4737a3d9ea65e247654703071397737147adffd5ee8734917b1a2485fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90da3f4737a3d9ea65e247654703071397737147adffd5ee8734917b1a2485fc->enter($__internal_90da3f4737a3d9ea65e247654703071397737147adffd5ee8734917b1a2485fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object.omit/index.js"));

        // line 1
        echo "/*!
 * object.omit <https://github.com/jonschlinkert/object.omit>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var isObject = require('is-extendable');
var forOwn = require('for-own');

module.exports = function omit(obj, keys) {
  if (!isObject(obj)) return {};

  keys = [].concat.apply([], [].slice.call(arguments, 1));
  var last = keys[keys.length - 1];
  var res = {}, fn;

  if (typeof last === 'function') {
    fn = keys.pop();
  }

  var isFunction = typeof fn === 'function';
  if (!keys.length && !isFunction) {
    return obj;
  }

  forOwn(obj, function(value, key) {
    if (keys.indexOf(key) === -1) {

      if (!isFunction) {
        res[key] = value;
      } else if (fn(value, key, obj)) {
        res[key] = value;
      }
    }
  });
  return res;
};
";
        
        $__internal_90da3f4737a3d9ea65e247654703071397737147adffd5ee8734917b1a2485fc->leave($__internal_90da3f4737a3d9ea65e247654703071397737147adffd5ee8734917b1a2485fc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object.omit/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * object.omit <https://github.com/jonschlinkert/object.omit>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var isObject = require('is-extendable');
var forOwn = require('for-own');

module.exports = function omit(obj, keys) {
  if (!isObject(obj)) return {};

  keys = [].concat.apply([], [].slice.call(arguments, 1));
  var last = keys[keys.length - 1];
  var res = {}, fn;

  if (typeof last === 'function') {
    fn = keys.pop();
  }

  var isFunction = typeof fn === 'function';
  if (!keys.length && !isFunction) {
    return obj;
  }

  forOwn(obj, function(value, key) {
    if (keys.indexOf(key) === -1) {

      if (!isFunction) {
        res[key] = value;
      } else if (fn(value, key, obj)) {
        res[key] = value;
      }
    }
  });
  return res;
};
", "node_modules/object.omit/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object.omit/index.js");
    }
}
