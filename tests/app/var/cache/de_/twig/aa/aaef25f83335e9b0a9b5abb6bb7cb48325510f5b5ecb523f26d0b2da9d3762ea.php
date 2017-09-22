<?php

/* node_modules/babel-runtime/helpers/inherits.js */
class __TwigTemplate_952589e8562d527211d059192d2bb12672467fc5b48ff3bcf32d5cd56ae10155 extends Twig_Template
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
        $__internal_6b3c6147e8c4db33b149a8f7462c5586770c574c7ae2eefeedbdf0fdb4603e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3c6147e8c4db33b149a8f7462c5586770c574c7ae2eefeedbdf0fdb4603e0f->enter($__internal_6b3c6147e8c4db33b149a8f7462c5586770c574c7ae2eefeedbdf0fdb4603e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/inherits.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _setPrototypeOf = require(\"../core-js/object/set-prototype-of\");

var _setPrototypeOf2 = _interopRequireDefault(_setPrototypeOf);

var _create = require(\"../core-js/object/create\");

var _create2 = _interopRequireDefault(_create);

var _typeof2 = require(\"../helpers/typeof\");

var _typeof3 = _interopRequireDefault(_typeof2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (subClass, superClass) {
  if (typeof superClass !== \"function\" && superClass !== null) {
    throw new TypeError(\"Super expression must either be null or a function, not \" + (typeof superClass === \"undefined\" ? \"undefined\" : (0, _typeof3.default)(superClass)));
  }

  subClass.prototype = (0, _create2.default)(superClass && superClass.prototype, {
    constructor: {
      value: subClass,
      enumerable: false,
      writable: true,
      configurable: true
    }
  });
  if (superClass) _setPrototypeOf2.default ? (0, _setPrototypeOf2.default)(subClass, superClass) : subClass.__proto__ = superClass;
};";
        
        $__internal_6b3c6147e8c4db33b149a8f7462c5586770c574c7ae2eefeedbdf0fdb4603e0f->leave($__internal_6b3c6147e8c4db33b149a8f7462c5586770c574c7ae2eefeedbdf0fdb4603e0f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/inherits.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _setPrototypeOf = require(\"../core-js/object/set-prototype-of\");

var _setPrototypeOf2 = _interopRequireDefault(_setPrototypeOf);

var _create = require(\"../core-js/object/create\");

var _create2 = _interopRequireDefault(_create);

var _typeof2 = require(\"../helpers/typeof\");

var _typeof3 = _interopRequireDefault(_typeof2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (subClass, superClass) {
  if (typeof superClass !== \"function\" && superClass !== null) {
    throw new TypeError(\"Super expression must either be null or a function, not \" + (typeof superClass === \"undefined\" ? \"undefined\" : (0, _typeof3.default)(superClass)));
  }

  subClass.prototype = (0, _create2.default)(superClass && superClass.prototype, {
    constructor: {
      value: subClass,
      enumerable: false,
      writable: true,
      configurable: true
    }
  });
  if (superClass) _setPrototypeOf2.default ? (0, _setPrototypeOf2.default)(subClass, superClass) : subClass.__proto__ = superClass;
};", "node_modules/babel-runtime/helpers/inherits.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/inherits.js");
    }
}
