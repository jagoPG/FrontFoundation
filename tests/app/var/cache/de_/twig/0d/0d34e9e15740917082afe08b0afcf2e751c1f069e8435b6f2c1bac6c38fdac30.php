<?php

/* node_modules/babel-types/lib/react.js */
class __TwigTemplate_611a85c6be3f7f8a16ebfec215dcd02e8a04fe45f822c476819ca258e3acc409 extends Twig_Template
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
        $__internal_2aa8a6877ea6728cb60b1a188490fc5e5e1e39aa541def32a9e521b5ecb5a298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa8a6877ea6728cb60b1a188490fc5e5e1e39aa541def32a9e521b5ecb5a298->enter($__internal_2aa8a6877ea6728cb60b1a188490fc5e5e1e39aa541def32a9e521b5ecb5a298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-types/lib/react.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;
exports.isReactComponent = undefined;
exports.isCompatTag = isCompatTag;
exports.buildChildren = buildChildren;

var _index = require(\"./index\");

var t = _interopRequireWildcard(_index);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var isReactComponent = exports.isReactComponent = t.buildMatchMemberExpression(\"React.Component\");

function isCompatTag(tagName) {
  return !!tagName && /^[a-z]|\\-/.test(tagName);
}

function cleanJSXElementLiteralChild(child, args) {
  var lines = child.value.split(/\\r\\n|\\n|\\r/);

  var lastNonEmptyLine = 0;

  for (var i = 0; i < lines.length; i++) {
    if (lines[i].match(/[^ \\t]/)) {
      lastNonEmptyLine = i;
    }
  }

  var str = \"\";

  for (var _i = 0; _i < lines.length; _i++) {
    var line = lines[_i];

    var isFirstLine = _i === 0;
    var isLastLine = _i === lines.length - 1;
    var isLastNonEmptyLine = _i === lastNonEmptyLine;

    var trimmedLine = line.replace(/\\t/g, \" \");

    if (!isFirstLine) {
      trimmedLine = trimmedLine.replace(/^[ ]+/, \"\");
    }

    if (!isLastLine) {
      trimmedLine = trimmedLine.replace(/[ ]+\$/, \"\");
    }

    if (trimmedLine) {
      if (!isLastNonEmptyLine) {
        trimmedLine += \" \";
      }

      str += trimmedLine;
    }
  }

  if (str) args.push(t.stringLiteral(str));
}

function buildChildren(node) {
  var elems = [];

  for (var i = 0; i < node.children.length; i++) {
    var child = node.children[i];

    if (t.isJSXText(child)) {
      cleanJSXElementLiteralChild(child, elems);
      continue;
    }

    if (t.isJSXExpressionContainer(child)) child = child.expression;
    if (t.isJSXEmptyExpression(child)) continue;

    elems.push(child);
  }

  return elems;
}";
        
        $__internal_2aa8a6877ea6728cb60b1a188490fc5e5e1e39aa541def32a9e521b5ecb5a298->leave($__internal_2aa8a6877ea6728cb60b1a188490fc5e5e1e39aa541def32a9e521b5ecb5a298_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-types/lib/react.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;
exports.isReactComponent = undefined;
exports.isCompatTag = isCompatTag;
exports.buildChildren = buildChildren;

var _index = require(\"./index\");

var t = _interopRequireWildcard(_index);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var isReactComponent = exports.isReactComponent = t.buildMatchMemberExpression(\"React.Component\");

function isCompatTag(tagName) {
  return !!tagName && /^[a-z]|\\-/.test(tagName);
}

function cleanJSXElementLiteralChild(child, args) {
  var lines = child.value.split(/\\r\\n|\\n|\\r/);

  var lastNonEmptyLine = 0;

  for (var i = 0; i < lines.length; i++) {
    if (lines[i].match(/[^ \\t]/)) {
      lastNonEmptyLine = i;
    }
  }

  var str = \"\";

  for (var _i = 0; _i < lines.length; _i++) {
    var line = lines[_i];

    var isFirstLine = _i === 0;
    var isLastLine = _i === lines.length - 1;
    var isLastNonEmptyLine = _i === lastNonEmptyLine;

    var trimmedLine = line.replace(/\\t/g, \" \");

    if (!isFirstLine) {
      trimmedLine = trimmedLine.replace(/^[ ]+/, \"\");
    }

    if (!isLastLine) {
      trimmedLine = trimmedLine.replace(/[ ]+\$/, \"\");
    }

    if (trimmedLine) {
      if (!isLastNonEmptyLine) {
        trimmedLine += \" \";
      }

      str += trimmedLine;
    }
  }

  if (str) args.push(t.stringLiteral(str));
}

function buildChildren(node) {
  var elems = [];

  for (var i = 0; i < node.children.length; i++) {
    var child = node.children[i];

    if (t.isJSXText(child)) {
      cleanJSXElementLiteralChild(child, elems);
      continue;
    }

    if (t.isJSXExpressionContainer(child)) child = child.expression;
    if (t.isJSXEmptyExpression(child)) continue;

    elems.push(child);
  }

  return elems;
}", "node_modules/babel-types/lib/react.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-types/lib/react.js");
    }
}
