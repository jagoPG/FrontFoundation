<?php

/* node_modules/regenerator-transform/src/util.js */
class __TwigTemplate_40d07e410348c1eba4b4177eb981507b94dffc5fc9fc5b7a8d8947d76db4bae7 extends Twig_Template
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
        $__internal_ff12b896382112bcade5df296760a52b206e98e57fc51e2ee196922ebcec6f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff12b896382112bcade5df296760a52b206e98e57fc51e2ee196922ebcec6f8f->enter($__internal_ff12b896382112bcade5df296760a52b206e98e57fc51e2ee196922ebcec6f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerator-transform/src/util.js"));

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

import * as t from \"babel-types\";

export function runtimeProperty(name) {
  return t.memberExpression(
    t.identifier(\"regeneratorRuntime\"),
    t.identifier(name),
    false
  );
}

export function isReference(path) {
  return path.isReferenced() || path.parentPath.isAssignmentExpression({ left: path.node });
}

export function replaceWithOrRemove(path, replacement) {
  if (replacement) {
    path.replaceWith(replacement)
  } else {
    path.remove();
  }
}
";
        
        $__internal_ff12b896382112bcade5df296760a52b206e98e57fc51e2ee196922ebcec6f8f->leave($__internal_ff12b896382112bcade5df296760a52b206e98e57fc51e2ee196922ebcec6f8f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerator-transform/src/util.js";
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

import * as t from \"babel-types\";

export function runtimeProperty(name) {
  return t.memberExpression(
    t.identifier(\"regeneratorRuntime\"),
    t.identifier(name),
    false
  );
}

export function isReference(path) {
  return path.isReferenced() || path.parentPath.isAssignmentExpression({ left: path.node });
}

export function replaceWithOrRemove(path, replacement) {
  if (replacement) {
    path.replaceWith(replacement)
  } else {
    path.remove();
  }
}
", "node_modules/regenerator-transform/src/util.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerator-transform/src/util.js");
    }
}
