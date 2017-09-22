<?php

/* node_modules/regenerator-transform/src/index.js */
class __TwigTemplate_3498715cf7598e0c8dc4bf6125cb07e147feb411b3253308eee78a050dad5062 extends Twig_Template
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
        $__internal_c0096edf8fb9192d729a36d719d0b438c32fcb142bb7e38b61dc65ad9696c379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0096edf8fb9192d729a36d719d0b438c32fcb142bb7e38b61dc65ad9696c379->enter($__internal_c0096edf8fb9192d729a36d719d0b438c32fcb142bb7e38b61dc65ad9696c379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerator-transform/src/index.js"));

        // line 1
        echo "/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * https://raw.github.com/facebook/regenerator/master/LICENSE file. An
 * additional grant of patent rights can be found in the PATENTS file in
 * the same directory.
 */

export default function (context) {
  const plugin = {
    visitor: require(\"./visit\").visitor,
  };

  // Some presets manually call child presets, but fail to pass along the
  // context object. Out of an abundance of caution, we verify that it
  // exists first to avoid causing unnecessary breaking changes.
  const version = context && context.version;

  // The \"name\" property is not allowed in older versions of Babel (6.x)
  // and will cause the plugin validator to throw an exception.
  if (version && parseInt(version, 10) >= 7) {
    plugin.name = \"regenerator-transform\";
  }

  return plugin;
}
";
        
        $__internal_c0096edf8fb9192d729a36d719d0b438c32fcb142bb7e38b61dc65ad9696c379->leave($__internal_c0096edf8fb9192d729a36d719d0b438c32fcb142bb7e38b61dc65ad9696c379_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerator-transform/src/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * https://raw.github.com/facebook/regenerator/master/LICENSE file. An
 * additional grant of patent rights can be found in the PATENTS file in
 * the same directory.
 */

export default function (context) {
  const plugin = {
    visitor: require(\"./visit\").visitor,
  };

  // Some presets manually call child presets, but fail to pass along the
  // context object. Out of an abundance of caution, we verify that it
  // exists first to avoid causing unnecessary breaking changes.
  const version = context && context.version;

  // The \"name\" property is not allowed in older versions of Babel (6.x)
  // and will cause the plugin validator to throw an exception.
  if (version && parseInt(version, 10) >= 7) {
    plugin.name = \"regenerator-transform\";
  }

  return plugin;
}
", "node_modules/regenerator-transform/src/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerator-transform/src/index.js");
    }
}
