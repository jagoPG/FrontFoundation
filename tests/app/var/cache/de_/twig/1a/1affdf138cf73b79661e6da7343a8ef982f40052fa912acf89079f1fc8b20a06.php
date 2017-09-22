<?php

/* node_modules/lin3s-front-foundation/dist/js/browser/isIE11.js */
class __TwigTemplate_459cd5aeca04cd2be059fa1aa31e017a4ecfb0699d299ab62ce5d03d874e6852 extends Twig_Template
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
        $__internal_c6684499a642d84769ea56f08f40bfa384ab60f76b693ed89cd2ceb0dd654b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6684499a642d84769ea56f08f40bfa384ab60f76b693ed89cd2ceb0dd654b84->enter($__internal_c6684499a642d84769ea56f08f40bfa384ab60f76b693ed89cd2ceb0dd654b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/js/browser/isIE11.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */

exports.default = function () {
  var ua = window.navigator.userAgent,
      trident = ua.indexOf('Trident/');

  var result = false;
  if (trident > 0) {
    var rv = ua.indexOf('rv:');

    result = parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
  }

  return result === 11;
};";
        
        $__internal_c6684499a642d84769ea56f08f40bfa384ab60f76b693ed89cd2ceb0dd654b84->leave($__internal_c6684499a642d84769ea56f08f40bfa384ab60f76b693ed89cd2ceb0dd654b84_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/js/browser/isIE11.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */

exports.default = function () {
  var ua = window.navigator.userAgent,
      trident = ua.indexOf('Trident/');

  var result = false;
  if (trident > 0) {
    var rv = ua.indexOf('rv:');

    result = parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
  }

  return result === 11;
};", "node_modules/lin3s-front-foundation/dist/js/browser/isIE11.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/js/browser/isIE11.js");
    }
}
