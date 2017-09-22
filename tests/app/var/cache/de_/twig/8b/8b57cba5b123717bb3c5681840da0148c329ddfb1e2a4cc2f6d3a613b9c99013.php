<?php

/* node_modules/babel-runtime/helpers/jsx.js */
class __TwigTemplate_53f31549478a911d890b395ebd2a1f058703c9d1ef2b955c21536945f2871ffc extends Twig_Template
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
        $__internal_e8a84eaf2c65004ac9cdaefc6e43430746aab495a99b16b7e918c326268921d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a84eaf2c65004ac9cdaefc6e43430746aab495a99b16b7e918c326268921d1->enter($__internal_e8a84eaf2c65004ac9cdaefc6e43430746aab495a99b16b7e918c326268921d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/jsx.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _for = require(\"../core-js/symbol/for\");

var _for2 = _interopRequireDefault(_for);

var _symbol = require(\"../core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function () {
  var REACT_ELEMENT_TYPE = typeof _symbol2.default === \"function\" && _for2.default && (0, _for2.default)(\"react.element\") || 0xeac7;
  return function createRawReactElement(type, props, key, children) {
    var defaultProps = type && type.defaultProps;
    var childrenLength = arguments.length - 3;

    if (!props && childrenLength !== 0) {
      props = {};
    }

    if (props && defaultProps) {
      for (var propName in defaultProps) {
        if (props[propName] === void 0) {
          props[propName] = defaultProps[propName];
        }
      }
    } else if (!props) {
      props = defaultProps || {};
    }

    if (childrenLength === 1) {
      props.children = children;
    } else if (childrenLength > 1) {
      var childArray = Array(childrenLength);

      for (var i = 0; i < childrenLength; i++) {
        childArray[i] = arguments[i + 3];
      }

      props.children = childArray;
    }

    return {
      \$\$typeof: REACT_ELEMENT_TYPE,
      type: type,
      key: key === undefined ? null : '' + key,
      ref: null,
      props: props,
      _owner: null
    };
  };
}();";
        
        $__internal_e8a84eaf2c65004ac9cdaefc6e43430746aab495a99b16b7e918c326268921d1->leave($__internal_e8a84eaf2c65004ac9cdaefc6e43430746aab495a99b16b7e918c326268921d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/jsx.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _for = require(\"../core-js/symbol/for\");

var _for2 = _interopRequireDefault(_for);

var _symbol = require(\"../core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function () {
  var REACT_ELEMENT_TYPE = typeof _symbol2.default === \"function\" && _for2.default && (0, _for2.default)(\"react.element\") || 0xeac7;
  return function createRawReactElement(type, props, key, children) {
    var defaultProps = type && type.defaultProps;
    var childrenLength = arguments.length - 3;

    if (!props && childrenLength !== 0) {
      props = {};
    }

    if (props && defaultProps) {
      for (var propName in defaultProps) {
        if (props[propName] === void 0) {
          props[propName] = defaultProps[propName];
        }
      }
    } else if (!props) {
      props = defaultProps || {};
    }

    if (childrenLength === 1) {
      props.children = children;
    } else if (childrenLength > 1) {
      var childArray = Array(childrenLength);

      for (var i = 0; i < childrenLength; i++) {
        childArray[i] = arguments[i + 3];
      }

      props.children = childArray;
    }

    return {
      \$\$typeof: REACT_ELEMENT_TYPE,
      type: type,
      key: key === undefined ? null : '' + key,
      ref: null,
      props: props,
      _owner: null
    };
  };
}();", "node_modules/babel-runtime/helpers/jsx.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/jsx.js");
    }
}
