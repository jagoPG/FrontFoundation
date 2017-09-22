<?php

/* node_modules/babel-helper-remap-async-to-generator/lib/index.js */
class __TwigTemplate_e102110e5974c1711bcafd6e2b85afe386a7d2b1fee921870734a1a88f8f83ff extends Twig_Template
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
        $__internal_6cd7647206d1c01e4367d3635bab5342467a80cfa8b3a85aa2dfdb05edcf0d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd7647206d1c01e4367d3635bab5342467a80cfa8b3a85aa2dfdb05edcf0d45->enter($__internal_6cd7647206d1c01e4367d3635bab5342467a80cfa8b3a85aa2dfdb05edcf0d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-helper-remap-async-to-generator/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (path, file, helpers) {
  if (!helpers) {
    helpers = { wrapAsync: file };
    file = null;
  }
  path.traverse(awaitVisitor, {
    file: file,
    wrapAwait: helpers.wrapAwait
  });

  if (path.isClassMethod() || path.isObjectMethod()) {
    classOrObjectMethod(path, helpers.wrapAsync);
  } else {
    plainFunction(path, helpers.wrapAsync);
  }
};

var _babelHelperFunctionName = require(\"babel-helper-function-name\");

var _babelHelperFunctionName2 = _interopRequireDefault(_babelHelperFunctionName);

var _babelTemplate = require(\"babel-template\");

var _babelTemplate2 = _interopRequireDefault(_babelTemplate);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

var _forAwait = require(\"./for-await\");

var _forAwait2 = _interopRequireDefault(_forAwait);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var buildWrapper = (0, _babelTemplate2.default)(\"\\n  (() => {\\n    var REF = FUNCTION;\\n    return function NAME(PARAMS) {\\n      return REF.apply(this, arguments);\\n    };\\n  })\\n\");

var namedBuildWrapper = (0, _babelTemplate2.default)(\"\\n  (() => {\\n    var REF = FUNCTION;\\n    function NAME(PARAMS) {\\n      return REF.apply(this, arguments);\\n    }\\n    return NAME;\\n  })\\n\");

var awaitVisitor = {
  Function: function Function(path) {
    if (path.isArrowFunctionExpression() && !path.node.async) {
      path.arrowFunctionToShadowed();
      return;
    }
    path.skip();
  },
  AwaitExpression: function AwaitExpression(_ref, _ref2) {
    var node = _ref.node;
    var wrapAwait = _ref2.wrapAwait;

    node.type = \"YieldExpression\";
    if (wrapAwait) {
      node.argument = t.callExpression(wrapAwait, [node.argument]);
    }
  },
  ForAwaitStatement: function ForAwaitStatement(path, _ref3) {
    var file = _ref3.file,
        wrapAwait = _ref3.wrapAwait;
    var node = path.node;


    var build = (0, _forAwait2.default)(path, {
      getAsyncIterator: file.addHelper(\"asyncIterator\"),
      wrapAwait: wrapAwait
    });

    var declar = build.declar,
        loop = build.loop;

    var block = loop.body;

    path.ensureBlock();

    if (declar) {
      block.body.push(declar);
    }

    block.body = block.body.concat(node.body.body);

    t.inherits(loop, node);
    t.inherits(loop.body, node.body);

    if (build.replaceParent) {
      path.parentPath.replaceWithMultiple(build.node);
      path.remove();
    } else {
      path.replaceWithMultiple(build.node);
    }
  }
};

function classOrObjectMethod(path, callId) {
  var node = path.node;
  var body = node.body;

  node.async = false;

  var container = t.functionExpression(null, [], t.blockStatement(body.body), true);
  container.shadow = true;
  body.body = [t.returnStatement(t.callExpression(t.callExpression(callId, [container]), []))];

  node.generator = false;
}

function plainFunction(path, callId) {
  var node = path.node;
  var isDeclaration = path.isFunctionDeclaration();
  var asyncFnId = node.id;
  var wrapper = buildWrapper;

  if (path.isArrowFunctionExpression()) {
    path.arrowFunctionToShadowed();
  } else if (!isDeclaration && asyncFnId) {
    wrapper = namedBuildWrapper;
  }

  node.async = false;
  node.generator = true;

  node.id = null;

  if (isDeclaration) {
    node.type = \"FunctionExpression\";
  }

  var built = t.callExpression(callId, [node]);
  var container = wrapper({
    NAME: asyncFnId,
    REF: path.scope.generateUidIdentifier(\"ref\"),
    FUNCTION: built,
    PARAMS: node.params.reduce(function (acc, param) {
      acc.done = acc.done || t.isAssignmentPattern(param) || t.isRestElement(param);

      if (!acc.done) {
        acc.params.push(path.scope.generateUidIdentifier(\"x\"));
      }

      return acc;
    }, {
      params: [],
      done: false
    }).params
  }).expression;

  if (isDeclaration) {
    var declar = t.variableDeclaration(\"let\", [t.variableDeclarator(t.identifier(asyncFnId.name), t.callExpression(container, []))]);
    declar._blockHoist = true;

    path.replaceWith(declar);
  } else {
    var retFunction = container.body.body[1].argument;
    if (!asyncFnId) {
      (0, _babelHelperFunctionName2.default)({
        node: retFunction,
        parent: path.parent,
        scope: path.scope
      });
    }

    if (!retFunction || retFunction.id || node.params.length) {
      path.replaceWith(t.callExpression(container, []));
    } else {
      path.replaceWith(built);
    }
  }
}

module.exports = exports[\"default\"];";
        
        $__internal_6cd7647206d1c01e4367d3635bab5342467a80cfa8b3a85aa2dfdb05edcf0d45->leave($__internal_6cd7647206d1c01e4367d3635bab5342467a80cfa8b3a85aa2dfdb05edcf0d45_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-helper-remap-async-to-generator/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (path, file, helpers) {
  if (!helpers) {
    helpers = { wrapAsync: file };
    file = null;
  }
  path.traverse(awaitVisitor, {
    file: file,
    wrapAwait: helpers.wrapAwait
  });

  if (path.isClassMethod() || path.isObjectMethod()) {
    classOrObjectMethod(path, helpers.wrapAsync);
  } else {
    plainFunction(path, helpers.wrapAsync);
  }
};

var _babelHelperFunctionName = require(\"babel-helper-function-name\");

var _babelHelperFunctionName2 = _interopRequireDefault(_babelHelperFunctionName);

var _babelTemplate = require(\"babel-template\");

var _babelTemplate2 = _interopRequireDefault(_babelTemplate);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

var _forAwait = require(\"./for-await\");

var _forAwait2 = _interopRequireDefault(_forAwait);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var buildWrapper = (0, _babelTemplate2.default)(\"\\n  (() => {\\n    var REF = FUNCTION;\\n    return function NAME(PARAMS) {\\n      return REF.apply(this, arguments);\\n    };\\n  })\\n\");

var namedBuildWrapper = (0, _babelTemplate2.default)(\"\\n  (() => {\\n    var REF = FUNCTION;\\n    function NAME(PARAMS) {\\n      return REF.apply(this, arguments);\\n    }\\n    return NAME;\\n  })\\n\");

var awaitVisitor = {
  Function: function Function(path) {
    if (path.isArrowFunctionExpression() && !path.node.async) {
      path.arrowFunctionToShadowed();
      return;
    }
    path.skip();
  },
  AwaitExpression: function AwaitExpression(_ref, _ref2) {
    var node = _ref.node;
    var wrapAwait = _ref2.wrapAwait;

    node.type = \"YieldExpression\";
    if (wrapAwait) {
      node.argument = t.callExpression(wrapAwait, [node.argument]);
    }
  },
  ForAwaitStatement: function ForAwaitStatement(path, _ref3) {
    var file = _ref3.file,
        wrapAwait = _ref3.wrapAwait;
    var node = path.node;


    var build = (0, _forAwait2.default)(path, {
      getAsyncIterator: file.addHelper(\"asyncIterator\"),
      wrapAwait: wrapAwait
    });

    var declar = build.declar,
        loop = build.loop;

    var block = loop.body;

    path.ensureBlock();

    if (declar) {
      block.body.push(declar);
    }

    block.body = block.body.concat(node.body.body);

    t.inherits(loop, node);
    t.inherits(loop.body, node.body);

    if (build.replaceParent) {
      path.parentPath.replaceWithMultiple(build.node);
      path.remove();
    } else {
      path.replaceWithMultiple(build.node);
    }
  }
};

function classOrObjectMethod(path, callId) {
  var node = path.node;
  var body = node.body;

  node.async = false;

  var container = t.functionExpression(null, [], t.blockStatement(body.body), true);
  container.shadow = true;
  body.body = [t.returnStatement(t.callExpression(t.callExpression(callId, [container]), []))];

  node.generator = false;
}

function plainFunction(path, callId) {
  var node = path.node;
  var isDeclaration = path.isFunctionDeclaration();
  var asyncFnId = node.id;
  var wrapper = buildWrapper;

  if (path.isArrowFunctionExpression()) {
    path.arrowFunctionToShadowed();
  } else if (!isDeclaration && asyncFnId) {
    wrapper = namedBuildWrapper;
  }

  node.async = false;
  node.generator = true;

  node.id = null;

  if (isDeclaration) {
    node.type = \"FunctionExpression\";
  }

  var built = t.callExpression(callId, [node]);
  var container = wrapper({
    NAME: asyncFnId,
    REF: path.scope.generateUidIdentifier(\"ref\"),
    FUNCTION: built,
    PARAMS: node.params.reduce(function (acc, param) {
      acc.done = acc.done || t.isAssignmentPattern(param) || t.isRestElement(param);

      if (!acc.done) {
        acc.params.push(path.scope.generateUidIdentifier(\"x\"));
      }

      return acc;
    }, {
      params: [],
      done: false
    }).params
  }).expression;

  if (isDeclaration) {
    var declar = t.variableDeclaration(\"let\", [t.variableDeclarator(t.identifier(asyncFnId.name), t.callExpression(container, []))]);
    declar._blockHoist = true;

    path.replaceWith(declar);
  } else {
    var retFunction = container.body.body[1].argument;
    if (!asyncFnId) {
      (0, _babelHelperFunctionName2.default)({
        node: retFunction,
        parent: path.parent,
        scope: path.scope
      });
    }

    if (!retFunction || retFunction.id || node.params.length) {
      path.replaceWith(t.callExpression(container, []));
    } else {
      path.replaceWith(built);
    }
  }
}

module.exports = exports[\"default\"];", "node_modules/babel-helper-remap-async-to-generator/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-helper-remap-async-to-generator/lib/index.js");
    }
}
