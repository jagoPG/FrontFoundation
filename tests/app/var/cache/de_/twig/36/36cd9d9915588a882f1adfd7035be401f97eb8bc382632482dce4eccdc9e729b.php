<?php

/* node_modules/expand-range/index.js */
class __TwigTemplate_a2eb2c07302395a78f93db7c9f5aa5b566113410650417460afd09df02e0c1d7 extends Twig_Template
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
        $__internal_e1172f5c42ac0cd0d23e1579a601691497813de8a9b9fe1c1f1fda449d666e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1172f5c42ac0cd0d23e1579a601691497813de8a9b9fe1c1f1fda449d666e21->enter($__internal_e1172f5c42ac0cd0d23e1579a601691497813de8a9b9fe1c1f1fda449d666e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/expand-range/index.js"));

        // line 1
        echo "/*!
 * expand-range <https://github.com/jonschlinkert/expand-range>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT license.
 */

'use strict';

var fill = require('fill-range');

module.exports = function expandRange(str, options, fn) {
  if (typeof str !== 'string') {
    throw new TypeError('expand-range expects a string.');
  }

  if (typeof options === 'function') {
    fn = options;
    options = {};
  }

  if (typeof options === 'boolean') {
    options = {};
    options.makeRe = true;
  }

  // create arguments to pass to fill-range
  var opts = options || {};
  var args = str.split('..');
  var len = args.length;
  if (len > 3) { return str; }

  // if only one argument, it can't expand so return it
  if (len === 1) { return args; }

  // if `true`, tell fill-range to regexify the string
  if (typeof fn === 'boolean' && fn === true) {
    opts.makeRe = true;
  }

  args.push(opts);
  return fill.apply(null, args.concat(fn));
};
";
        
        $__internal_e1172f5c42ac0cd0d23e1579a601691497813de8a9b9fe1c1f1fda449d666e21->leave($__internal_e1172f5c42ac0cd0d23e1579a601691497813de8a9b9fe1c1f1fda449d666e21_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/expand-range/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * expand-range <https://github.com/jonschlinkert/expand-range>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT license.
 */

'use strict';

var fill = require('fill-range');

module.exports = function expandRange(str, options, fn) {
  if (typeof str !== 'string') {
    throw new TypeError('expand-range expects a string.');
  }

  if (typeof options === 'function') {
    fn = options;
    options = {};
  }

  if (typeof options === 'boolean') {
    options = {};
    options.makeRe = true;
  }

  // create arguments to pass to fill-range
  var opts = options || {};
  var args = str.split('..');
  var len = args.length;
  if (len > 3) { return str; }

  // if only one argument, it can't expand so return it
  if (len === 1) { return args; }

  // if `true`, tell fill-range to regexify the string
  if (typeof fn === 'boolean' && fn === true) {
    opts.makeRe = true;
  }

  args.push(opts);
  return fill.apply(null, args.concat(fn));
};
", "node_modules/expand-range/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/expand-range/index.js");
    }
}
