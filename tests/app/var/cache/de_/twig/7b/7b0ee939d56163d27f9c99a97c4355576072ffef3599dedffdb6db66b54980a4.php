<?php

/* node_modules/babel-traverse/lib/path/conversion.js */
class __TwigTemplate_acaeafeff38eb58ec41da1c87fbb4142f6fe6be1e1e3d29842039e6cfff60beb extends Twig_Template
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
        $__internal_3f06d6194593b6d8f495a8d75fbce05994f9c9c2cde665b9132fba6db93aa8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f06d6194593b6d8f495a8d75fbce05994f9c9c2cde665b9132fba6db93aa8e7->enter($__internal_3f06d6194593b6d8f495a8d75fbce05994f9c9c2cde665b9132fba6db93aa8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-traverse/lib/path/conversion.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;
exports.toComputedKey = toComputedKey;
exports.ensureBlock = ensureBlock;
exports.arrowFunctionToShadowed = arrowFunctionToShadowed;

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function toComputedKey() {
  var node = this.node;

  var key = void 0;
  if (this.isMemberExpression()) {
    key = node.property;
  } else if (this.isProperty() || this.isMethod()) {
    key = node.key;
  } else {
    throw new ReferenceError(\"todo\");
  }

  if (!node.computed) {
    if (t.isIdentifier(key)) key = t.stringLiteral(key.name);
  }

  return key;
}

function ensureBlock() {
  return t.ensureBlock(this.node);
}

function arrowFunctionToShadowed() {
  if (!this.isArrowFunctionExpression()) return;

  this.ensureBlock();

  var node = this.node;

  node.expression = false;
  node.type = \"FunctionExpression\";
  node.shadow = node.shadow || true;
}";
        
        $__internal_3f06d6194593b6d8f495a8d75fbce05994f9c9c2cde665b9132fba6db93aa8e7->leave($__internal_3f06d6194593b6d8f495a8d75fbce05994f9c9c2cde665b9132fba6db93aa8e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-traverse/lib/path/conversion.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;
exports.toComputedKey = toComputedKey;
exports.ensureBlock = ensureBlock;
exports.arrowFunctionToShadowed = arrowFunctionToShadowed;

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function toComputedKey() {
  var node = this.node;

  var key = void 0;
  if (this.isMemberExpression()) {
    key = node.property;
  } else if (this.isProperty() || this.isMethod()) {
    key = node.key;
  } else {
    throw new ReferenceError(\"todo\");
  }

  if (!node.computed) {
    if (t.isIdentifier(key)) key = t.stringLiteral(key.name);
  }

  return key;
}

function ensureBlock() {
  return t.ensureBlock(this.node);
}

function arrowFunctionToShadowed() {
  if (!this.isArrowFunctionExpression()) return;

  this.ensureBlock();

  var node = this.node;

  node.expression = false;
  node.type = \"FunctionExpression\";
  node.shadow = node.shadow || true;
}", "node_modules/babel-traverse/lib/path/conversion.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-traverse/lib/path/conversion.js");
    }
}
