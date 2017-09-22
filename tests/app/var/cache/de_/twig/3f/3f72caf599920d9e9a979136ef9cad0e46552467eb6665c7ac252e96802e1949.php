<?php

/* node_modules/regenerator-transform/lib/util.js */
class __TwigTemplate_43647dcb08bad76f840c5d03b1d52c091cb1436afba2cb4caee4c9832101ce2b extends Twig_Template
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
        $__internal_8c7141880bb5414d41a1c33937823f53c64c5170be99bb7dfbe94536c94d180c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7141880bb5414d41a1c33937823f53c64c5170be99bb7dfbe94536c94d180c->enter($__internal_8c7141880bb5414d41a1c33937823f53c64c5170be99bb7dfbe94536c94d180c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerator-transform/lib/util.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;
exports.runtimeProperty = runtimeProperty;
exports.isReference = isReference;
exports.replaceWithOrRemove = replaceWithOrRemove;

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function runtimeProperty(name) {
  return t.memberExpression(t.identifier(\"regeneratorRuntime\"), t.identifier(name), false);
} /**
   * Copyright (c) 2014, Facebook, Inc.
   * All rights reserved.
   *
   * This source code is licensed under the BSD-style license found in the
   * https://raw.github.com/facebook/regenerator/master/LICENSE file. An
   * additional grant of patent rights can be found in the PATENTS file in
   * the same directory.
   */

function isReference(path) {
  return path.isReferenced() || path.parentPath.isAssignmentExpression({ left: path.node });
}

function replaceWithOrRemove(path, replacement) {
  if (replacement) {
    path.replaceWith(replacement);
  } else {
    path.remove();
  }
}";
        
        $__internal_8c7141880bb5414d41a1c33937823f53c64c5170be99bb7dfbe94536c94d180c->leave($__internal_8c7141880bb5414d41a1c33937823f53c64c5170be99bb7dfbe94536c94d180c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerator-transform/lib/util.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;
exports.runtimeProperty = runtimeProperty;
exports.isReference = isReference;
exports.replaceWithOrRemove = replaceWithOrRemove;

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function runtimeProperty(name) {
  return t.memberExpression(t.identifier(\"regeneratorRuntime\"), t.identifier(name), false);
} /**
   * Copyright (c) 2014, Facebook, Inc.
   * All rights reserved.
   *
   * This source code is licensed under the BSD-style license found in the
   * https://raw.github.com/facebook/regenerator/master/LICENSE file. An
   * additional grant of patent rights can be found in the PATENTS file in
   * the same directory.
   */

function isReference(path) {
  return path.isReferenced() || path.parentPath.isAssignmentExpression({ left: path.node });
}

function replaceWithOrRemove(path, replacement) {
  if (replacement) {
    path.replaceWith(replacement);
  } else {
    path.remove();
  }
}", "node_modules/regenerator-transform/lib/util.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerator-transform/lib/util.js");
    }
}
