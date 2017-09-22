<?php

/* node_modules/babel-traverse/lib/path/removal.js */
class __TwigTemplate_68570818b375e4a16633a5d5eb6fd34f15866d30b7d9be472b046b337968f33f extends Twig_Template
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
        $__internal_77548bdd4164e5eeed4863e03444c63b14aa1d3a4f8925bfacf865ea8abdc341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77548bdd4164e5eeed4863e03444c63b14aa1d3a4f8925bfacf865ea8abdc341->enter($__internal_77548bdd4164e5eeed4863e03444c63b14aa1d3a4f8925bfacf865ea8abdc341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-traverse/lib/path/removal.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

exports.remove = remove;
exports._callRemovalHooks = _callRemovalHooks;
exports._remove = _remove;
exports._markRemoved = _markRemoved;
exports._assertUnremoved = _assertUnremoved;

var _removalHooks = require(\"./lib/removal-hooks\");

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function remove() {
  this._assertUnremoved();

  this.resync();

  if (this._callRemovalHooks()) {
    this._markRemoved();
    return;
  }

  this.shareCommentsWithSiblings();
  this._remove();
  this._markRemoved();
}

function _callRemovalHooks() {
  for (var _iterator = _removalHooks.hooks, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
    var _ref;

    if (_isArray) {
      if (_i >= _iterator.length) break;
      _ref = _iterator[_i++];
    } else {
      _i = _iterator.next();
      if (_i.done) break;
      _ref = _i.value;
    }

    var fn = _ref;

    if (fn(this, this.parentPath)) return true;
  }
}

function _remove() {
  if (Array.isArray(this.container)) {
    this.container.splice(this.key, 1);
    this.updateSiblingKeys(this.key, -1);
  } else {
    this._replaceWith(null);
  }
}

function _markRemoved() {
  this.shouldSkip = true;
  this.removed = true;
  this.node = null;
}

function _assertUnremoved() {
  if (this.removed) {
    throw this.buildCodeFrameError(\"NodePath has been removed so is read-only.\");
  }
}";
        
        $__internal_77548bdd4164e5eeed4863e03444c63b14aa1d3a4f8925bfacf865ea8abdc341->leave($__internal_77548bdd4164e5eeed4863e03444c63b14aa1d3a4f8925bfacf865ea8abdc341_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-traverse/lib/path/removal.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _getIterator2 = require(\"babel-runtime/core-js/get-iterator\");

var _getIterator3 = _interopRequireDefault(_getIterator2);

exports.remove = remove;
exports._callRemovalHooks = _callRemovalHooks;
exports._remove = _remove;
exports._markRemoved = _markRemoved;
exports._assertUnremoved = _assertUnremoved;

var _removalHooks = require(\"./lib/removal-hooks\");

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function remove() {
  this._assertUnremoved();

  this.resync();

  if (this._callRemovalHooks()) {
    this._markRemoved();
    return;
  }

  this.shareCommentsWithSiblings();
  this._remove();
  this._markRemoved();
}

function _callRemovalHooks() {
  for (var _iterator = _removalHooks.hooks, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : (0, _getIterator3.default)(_iterator);;) {
    var _ref;

    if (_isArray) {
      if (_i >= _iterator.length) break;
      _ref = _iterator[_i++];
    } else {
      _i = _iterator.next();
      if (_i.done) break;
      _ref = _i.value;
    }

    var fn = _ref;

    if (fn(this, this.parentPath)) return true;
  }
}

function _remove() {
  if (Array.isArray(this.container)) {
    this.container.splice(this.key, 1);
    this.updateSiblingKeys(this.key, -1);
  } else {
    this._replaceWith(null);
  }
}

function _markRemoved() {
  this.shouldSkip = true;
  this.removed = true;
  this.node = null;
}

function _assertUnremoved() {
  if (this.removed) {
    throw this.buildCodeFrameError(\"NodePath has been removed so is read-only.\");
  }
}", "node_modules/babel-traverse/lib/path/removal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-traverse/lib/path/removal.js");
    }
}
