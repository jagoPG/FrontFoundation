<?php

/* node_modules/regenerator-transform/lib/replaceShorthandObjectMethod.js */
class __TwigTemplate_f2eebc69e19494252917a892b4b9c0d446c62bf4372992184ed2a2067cd45c9a extends Twig_Template
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
        $__internal_edf660b1c45761b58e4d3dedd62d9dc03290e05c6cb40b72576bc9bc39f896db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf660b1c45761b58e4d3dedd62d9dc03290e05c6cb40b72576bc9bc39f896db->enter($__internal_edf660b1c45761b58e4d3dedd62d9dc03290e05c6cb40b72576bc9bc39f896db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerator-transform/lib/replaceShorthandObjectMethod.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;
exports.default = replaceShorthandObjectMethod;

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

var _util = require(\"./util\");

var util = _interopRequireWildcard(_util);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

// this function converts a shorthand object generator method into a normal
// (non-shorthand) object property which is a generator function expression. for
// example, this:
//
//  var foo = {
//    *bar(baz) { return 5; }
//  }
//
// should be replaced with:
//
//  var foo = {
//    bar: function*(baz) { return 5; }
//  }
//
// to do this, it clones the parameter array and the body of the object generator
// method into a new FunctionExpression.
//
// this method can be passed any Function AST node path, and it will return
// either:
//   a) the path that was passed in (iff the path did not need to be replaced) or
//   b) the path of the new FunctionExpression that was created as a replacement
//     (iff the path did need to be replaced)
//
// In either case, though, the caller can count on the fact that the return value
// is a Function AST node path.
//
// If this function is called with an AST node path that is not a Function (or with an
// argument that isn't an AST node path), it will throw an error.
function replaceShorthandObjectMethod(path) {
  if (!path.node || !t.isFunction(path.node)) {
    throw new Error(\"replaceShorthandObjectMethod can only be called on Function AST node paths.\");
  }

  // this function only replaces shorthand object methods (called ObjectMethod
  // in Babel-speak).
  if (!t.isObjectMethod(path.node)) {
    return path;
  }

  // this function only replaces generators.
  if (!path.node.generator) {
    return path;
  }

  var parameters = path.node.params.map(function (param) {
    return t.cloneDeep(param);
  });

  var functionExpression = t.functionExpression(null, // id
  parameters, // params
  t.cloneDeep(path.node.body), // body
  path.node.generator, path.node.async);

  util.replaceWithOrRemove(path, t.objectProperty(t.cloneDeep(path.node.key), // key
  functionExpression, //value
  path.node.computed, // computed
  false // shorthand
  ));

  // path now refers to the ObjectProperty AST node path, but we want to return a
  // Function AST node path for the function expression we created. we know that
  // the FunctionExpression we just created is the value of the ObjectProperty,
  // so return the \"value\" path off of this path.
  return path.get(\"value\");
}";
        
        $__internal_edf660b1c45761b58e4d3dedd62d9dc03290e05c6cb40b72576bc9bc39f896db->leave($__internal_edf660b1c45761b58e4d3dedd62d9dc03290e05c6cb40b72576bc9bc39f896db_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerator-transform/lib/replaceShorthandObjectMethod.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;
exports.default = replaceShorthandObjectMethod;

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

var _util = require(\"./util\");

var util = _interopRequireWildcard(_util);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

// this function converts a shorthand object generator method into a normal
// (non-shorthand) object property which is a generator function expression. for
// example, this:
//
//  var foo = {
//    *bar(baz) { return 5; }
//  }
//
// should be replaced with:
//
//  var foo = {
//    bar: function*(baz) { return 5; }
//  }
//
// to do this, it clones the parameter array and the body of the object generator
// method into a new FunctionExpression.
//
// this method can be passed any Function AST node path, and it will return
// either:
//   a) the path that was passed in (iff the path did not need to be replaced) or
//   b) the path of the new FunctionExpression that was created as a replacement
//     (iff the path did need to be replaced)
//
// In either case, though, the caller can count on the fact that the return value
// is a Function AST node path.
//
// If this function is called with an AST node path that is not a Function (or with an
// argument that isn't an AST node path), it will throw an error.
function replaceShorthandObjectMethod(path) {
  if (!path.node || !t.isFunction(path.node)) {
    throw new Error(\"replaceShorthandObjectMethod can only be called on Function AST node paths.\");
  }

  // this function only replaces shorthand object methods (called ObjectMethod
  // in Babel-speak).
  if (!t.isObjectMethod(path.node)) {
    return path;
  }

  // this function only replaces generators.
  if (!path.node.generator) {
    return path;
  }

  var parameters = path.node.params.map(function (param) {
    return t.cloneDeep(param);
  });

  var functionExpression = t.functionExpression(null, // id
  parameters, // params
  t.cloneDeep(path.node.body), // body
  path.node.generator, path.node.async);

  util.replaceWithOrRemove(path, t.objectProperty(t.cloneDeep(path.node.key), // key
  functionExpression, //value
  path.node.computed, // computed
  false // shorthand
  ));

  // path now refers to the ObjectProperty AST node path, but we want to return a
  // Function AST node path for the function expression we created. we know that
  // the FunctionExpression we just created is the value of the ObjectProperty,
  // so return the \"value\" path off of this path.
  return path.get(\"value\");
}", "node_modules/regenerator-transform/lib/replaceShorthandObjectMethod.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerator-transform/lib/replaceShorthandObjectMethod.js");
    }
}
