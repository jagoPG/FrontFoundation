<?php

/* node_modules/babel-helper-remap-async-to-generator/lib/for-await.js */
class __TwigTemplate_ff27e3485e480a1bdd0130df3dd79f86d347c1b80ec9c6a3dce4139dad095275 extends Twig_Template
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
        $__internal_bfa5467fa1b01db411b5ad14eabe3829cc295a409cb53d9555df5a82f1c5e7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa5467fa1b01db411b5ad14eabe3829cc295a409cb53d9555df5a82f1c5e7bd->enter($__internal_bfa5467fa1b01db411b5ad14eabe3829cc295a409cb53d9555df5a82f1c5e7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-helper-remap-async-to-generator/lib/for-await.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (path, helpers) {
  var node = path.node,
      scope = path.scope,
      parent = path.parent;


  var stepKey = scope.generateUidIdentifier(\"step\");
  var stepValue = scope.generateUidIdentifier(\"value\");
  var left = node.left;
  var declar = void 0;

  if (t.isIdentifier(left) || t.isPattern(left) || t.isMemberExpression(left)) {
    declar = t.expressionStatement(t.assignmentExpression(\"=\", left, stepValue));
  } else if (t.isVariableDeclaration(left)) {
    declar = t.variableDeclaration(left.kind, [t.variableDeclarator(left.declarations[0].id, stepValue)]);
  }

  var template = buildForAwait();

  (0, _babelTraverse2.default)(template, forAwaitVisitor, null, {
    ITERATOR_HAD_ERROR_KEY: scope.generateUidIdentifier(\"didIteratorError\"),
    ITERATOR_COMPLETION: scope.generateUidIdentifier(\"iteratorNormalCompletion\"),
    ITERATOR_ERROR_KEY: scope.generateUidIdentifier(\"iteratorError\"),
    ITERATOR_KEY: scope.generateUidIdentifier(\"iterator\"),
    GET_ITERATOR: helpers.getAsyncIterator,
    OBJECT: node.right,
    STEP_VALUE: stepValue,
    STEP_KEY: stepKey,
    AWAIT: helpers.wrapAwait
  });

  template = template.body.body;

  var isLabeledParent = t.isLabeledStatement(parent);
  var tryBody = template[3].block.body;
  var loop = tryBody[0];

  if (isLabeledParent) {
    tryBody[0] = t.labeledStatement(parent.label, loop);
  }

  return {
    replaceParent: isLabeledParent,
    node: template,
    declar: declar,
    loop: loop
  };
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

var _babelTemplate = require(\"babel-template\");

var _babelTemplate2 = _interopRequireDefault(_babelTemplate);

var _babelTraverse = require(\"babel-traverse\");

var _babelTraverse2 = _interopRequireDefault(_babelTraverse);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var buildForAwait = (0, _babelTemplate2.default)(\"\\n  function* wrapper() {\\n    var ITERATOR_COMPLETION = true;\\n    var ITERATOR_HAD_ERROR_KEY = false;\\n    var ITERATOR_ERROR_KEY = undefined;\\n    try {\\n      for (\\n        var ITERATOR_KEY = GET_ITERATOR(OBJECT), STEP_KEY, STEP_VALUE;\\n        (\\n          STEP_KEY = yield AWAIT(ITERATOR_KEY.next()),\\n          ITERATOR_COMPLETION = STEP_KEY.done,\\n          STEP_VALUE = yield AWAIT(STEP_KEY.value),\\n          !ITERATOR_COMPLETION\\n        );\\n        ITERATOR_COMPLETION = true) {\\n      }\\n    } catch (err) {\\n      ITERATOR_HAD_ERROR_KEY = true;\\n      ITERATOR_ERROR_KEY = err;\\n    } finally {\\n      try {\\n        if (!ITERATOR_COMPLETION && ITERATOR_KEY.return) {\\n          yield AWAIT(ITERATOR_KEY.return());\\n        }\\n      } finally {\\n        if (ITERATOR_HAD_ERROR_KEY) {\\n          throw ITERATOR_ERROR_KEY;\\n        }\\n      }\\n    }\\n  }\\n\");

var forAwaitVisitor = {
  noScope: true,

  Identifier: function Identifier(path, replacements) {
    if (path.node.name in replacements) {
      path.replaceInline(replacements[path.node.name]);
    }
  },
  CallExpression: function CallExpression(path, replacements) {
    var callee = path.node.callee;

    if (t.isIdentifier(callee) && callee.name === \"AWAIT\" && !replacements.AWAIT) {
      path.replaceWith(path.node.arguments[0]);
    }
  }
};

module.exports = exports[\"default\"];";
        
        $__internal_bfa5467fa1b01db411b5ad14eabe3829cc295a409cb53d9555df5a82f1c5e7bd->leave($__internal_bfa5467fa1b01db411b5ad14eabe3829cc295a409cb53d9555df5a82f1c5e7bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-helper-remap-async-to-generator/lib/for-await.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (path, helpers) {
  var node = path.node,
      scope = path.scope,
      parent = path.parent;


  var stepKey = scope.generateUidIdentifier(\"step\");
  var stepValue = scope.generateUidIdentifier(\"value\");
  var left = node.left;
  var declar = void 0;

  if (t.isIdentifier(left) || t.isPattern(left) || t.isMemberExpression(left)) {
    declar = t.expressionStatement(t.assignmentExpression(\"=\", left, stepValue));
  } else if (t.isVariableDeclaration(left)) {
    declar = t.variableDeclaration(left.kind, [t.variableDeclarator(left.declarations[0].id, stepValue)]);
  }

  var template = buildForAwait();

  (0, _babelTraverse2.default)(template, forAwaitVisitor, null, {
    ITERATOR_HAD_ERROR_KEY: scope.generateUidIdentifier(\"didIteratorError\"),
    ITERATOR_COMPLETION: scope.generateUidIdentifier(\"iteratorNormalCompletion\"),
    ITERATOR_ERROR_KEY: scope.generateUidIdentifier(\"iteratorError\"),
    ITERATOR_KEY: scope.generateUidIdentifier(\"iterator\"),
    GET_ITERATOR: helpers.getAsyncIterator,
    OBJECT: node.right,
    STEP_VALUE: stepValue,
    STEP_KEY: stepKey,
    AWAIT: helpers.wrapAwait
  });

  template = template.body.body;

  var isLabeledParent = t.isLabeledStatement(parent);
  var tryBody = template[3].block.body;
  var loop = tryBody[0];

  if (isLabeledParent) {
    tryBody[0] = t.labeledStatement(parent.label, loop);
  }

  return {
    replaceParent: isLabeledParent,
    node: template,
    declar: declar,
    loop: loop
  };
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

var _babelTemplate = require(\"babel-template\");

var _babelTemplate2 = _interopRequireDefault(_babelTemplate);

var _babelTraverse = require(\"babel-traverse\");

var _babelTraverse2 = _interopRequireDefault(_babelTraverse);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var buildForAwait = (0, _babelTemplate2.default)(\"\\n  function* wrapper() {\\n    var ITERATOR_COMPLETION = true;\\n    var ITERATOR_HAD_ERROR_KEY = false;\\n    var ITERATOR_ERROR_KEY = undefined;\\n    try {\\n      for (\\n        var ITERATOR_KEY = GET_ITERATOR(OBJECT), STEP_KEY, STEP_VALUE;\\n        (\\n          STEP_KEY = yield AWAIT(ITERATOR_KEY.next()),\\n          ITERATOR_COMPLETION = STEP_KEY.done,\\n          STEP_VALUE = yield AWAIT(STEP_KEY.value),\\n          !ITERATOR_COMPLETION\\n        );\\n        ITERATOR_COMPLETION = true) {\\n      }\\n    } catch (err) {\\n      ITERATOR_HAD_ERROR_KEY = true;\\n      ITERATOR_ERROR_KEY = err;\\n    } finally {\\n      try {\\n        if (!ITERATOR_COMPLETION && ITERATOR_KEY.return) {\\n          yield AWAIT(ITERATOR_KEY.return());\\n        }\\n      } finally {\\n        if (ITERATOR_HAD_ERROR_KEY) {\\n          throw ITERATOR_ERROR_KEY;\\n        }\\n      }\\n    }\\n  }\\n\");

var forAwaitVisitor = {
  noScope: true,

  Identifier: function Identifier(path, replacements) {
    if (path.node.name in replacements) {
      path.replaceInline(replacements[path.node.name]);
    }
  },
  CallExpression: function CallExpression(path, replacements) {
    var callee = path.node.callee;

    if (t.isIdentifier(callee) && callee.name === \"AWAIT\" && !replacements.AWAIT) {
      path.replaceWith(path.node.arguments[0]);
    }
  }
};

module.exports = exports[\"default\"];", "node_modules/babel-helper-remap-async-to-generator/lib/for-await.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-helper-remap-async-to-generator/lib/for-await.js");
    }
}
