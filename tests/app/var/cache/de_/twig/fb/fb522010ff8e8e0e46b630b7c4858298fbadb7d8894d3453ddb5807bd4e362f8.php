<?php

/* node_modules/lin3s-front-foundation/dist/js/dom/loadScript.js */
class __TwigTemplate_a72f682649f0af8d4a21565c71e2829585323860205a5787410169bde0bc0442 extends Twig_Template
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
        $__internal_01380a7ea38cc930b1fae5720b988a38964ca4a6470a44a8e45f36af7f8e6201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01380a7ea38cc930b1fae5720b988a38964ca4a6470a44a8e45f36af7f8e6201->enter($__internal_01380a7ea38cc930b1fae5720b988a38964ca4a6470a44a8e45f36af7f8e6201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/js/dom/loadScript.js"));

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

exports.default = function (scriptPath) {
  var head = document.getElementsByTagName('head')[0];

  return new Promise(function (resolve) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = scriptPath;
    script.onload = function () {
      return resolve();
    };
    head.appendChild(script);
  });
};";
        
        $__internal_01380a7ea38cc930b1fae5720b988a38964ca4a6470a44a8e45f36af7f8e6201->leave($__internal_01380a7ea38cc930b1fae5720b988a38964ca4a6470a44a8e45f36af7f8e6201_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/js/dom/loadScript.js";
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

exports.default = function (scriptPath) {
  var head = document.getElementsByTagName('head')[0];

  return new Promise(function (resolve) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = scriptPath;
    script.onload = function () {
      return resolve();
    };
    head.appendChild(script);
  });
};", "node_modules/lin3s-front-foundation/dist/js/dom/loadScript.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/js/dom/loadScript.js");
    }
}
