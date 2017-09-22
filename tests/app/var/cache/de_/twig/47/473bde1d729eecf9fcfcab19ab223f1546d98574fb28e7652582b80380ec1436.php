<?php

/* node_modules/lin3s-front-foundation/dist/js/dom/waitImagesLoadInDomNode.js */
class __TwigTemplate_2ab7faaa9848ca348b9b51dceadd652e25cdb2c0c449b0c61bd4642cb84a2567 extends Twig_Template
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
        $__internal_63b520adf4bf3ddb1b3761eb07a7aec762f90b7f84787c33ff98a7ae2f89620c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b520adf4bf3ddb1b3761eb07a7aec762f90b7f84787c33ff98a7ae2f89620c->enter($__internal_63b520adf4bf3ddb1b3761eb07a7aec762f90b7f84787c33ff98a7ae2f89620c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/js/dom/waitImagesLoadInDomNode.js"));

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

exports.default = function (domNode) {
  var images = domNode.querySelectorAll('img'),
      promises = Array.from(images).map(function (image) {
    return new Promise(function (resolve) {
      var imageToLoad = new Image();
      imageToLoad.addEventListener('load', function () {
        resolve('Image successfully loaded');
      });
      imageToLoad.src = image.src;
    });
  });

  return Promise.all(promises);
};";
        
        $__internal_63b520adf4bf3ddb1b3761eb07a7aec762f90b7f84787c33ff98a7ae2f89620c->leave($__internal_63b520adf4bf3ddb1b3761eb07a7aec762f90b7f84787c33ff98a7ae2f89620c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/js/dom/waitImagesLoadInDomNode.js";
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

exports.default = function (domNode) {
  var images = domNode.querySelectorAll('img'),
      promises = Array.from(images).map(function (image) {
    return new Promise(function (resolve) {
      var imageToLoad = new Image();
      imageToLoad.addEventListener('load', function () {
        resolve('Image successfully loaded');
      });
      imageToLoad.src = image.src;
    });
  });

  return Promise.all(promises);
};", "node_modules/lin3s-front-foundation/dist/js/dom/waitImagesLoadInDomNode.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/js/dom/waitImagesLoadInDomNode.js");
    }
}
