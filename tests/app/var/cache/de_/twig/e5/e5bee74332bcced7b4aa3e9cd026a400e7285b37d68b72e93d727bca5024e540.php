<?php

/* node_modules/lin3s-front-foundation/dist/js/async/cancelablePromise.js */
class __TwigTemplate_f7b23cc4265f1a5cb44f23884f95b9acf1fae912431b18918cde30752031a6aa extends Twig_Template
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
        $__internal_d405d8e127d9519fb9cb9c80e1ae4914a41cf762637a983002ad8f7f6ef59723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d405d8e127d9519fb9cb9c80e1ae4914a41cf762637a983002ad8f7f6ef59723->enter($__internal_d405d8e127d9519fb9cb9c80e1ae4914a41cf762637a983002ad8f7f6ef59723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/js/async/cancelablePromise.js"));

        // line 1
        echo "\"use strict\";

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

exports.default = function (promise) {
  var hasBeenCanceled = false;

  var wrappedPromise = new Promise(function (resolve, reject) {
    promise.then(function (value) {
      return hasBeenCanceled ? reject({ isCanceled: true }) : resolve(value);
    }).catch(function (error) {
      return hasBeenCanceled ? reject({ isCanceled: true }) : reject(error);
    });
  });

  return {
    promise: wrappedPromise,
    cancel: function cancel() {
      hasBeenCanceled = true;
    }
  };
};";
        
        $__internal_d405d8e127d9519fb9cb9c80e1ae4914a41cf762637a983002ad8f7f6ef59723->leave($__internal_d405d8e127d9519fb9cb9c80e1ae4914a41cf762637a983002ad8f7f6ef59723_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/js/async/cancelablePromise.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

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

exports.default = function (promise) {
  var hasBeenCanceled = false;

  var wrappedPromise = new Promise(function (resolve, reject) {
    promise.then(function (value) {
      return hasBeenCanceled ? reject({ isCanceled: true }) : resolve(value);
    }).catch(function (error) {
      return hasBeenCanceled ? reject({ isCanceled: true }) : reject(error);
    });
  });

  return {
    promise: wrappedPromise,
    cancel: function cancel() {
      hasBeenCanceled = true;
    }
  };
};", "node_modules/lin3s-front-foundation/dist/js/async/cancelablePromise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/js/async/cancelablePromise.js");
    }
}
