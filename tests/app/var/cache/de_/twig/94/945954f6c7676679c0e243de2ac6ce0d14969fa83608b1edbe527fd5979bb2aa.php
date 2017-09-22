<?php

/* node_modules/babel-helper-regex/lib/index.js */
class __TwigTemplate_0ae83b5a157174ef4f38f0fde8c4025bd186825dd4b4559643978a5c40023b78 extends Twig_Template
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
        $__internal_4545cb3238718e6b186fb93474e56c01ed3a101b90f1a94f35a85c4a0f044369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4545cb3238718e6b186fb93474e56c01ed3a101b90f1a94f35a85c4a0f044369->enter($__internal_4545cb3238718e6b186fb93474e56c01ed3a101b90f1a94f35a85c4a0f044369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-helper-regex/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;
exports.is = is;
exports.pullFlag = pullFlag;

var _pull = require(\"lodash/pull\");

var _pull2 = _interopRequireDefault(_pull);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function is(node, flag) {
  return t.isRegExpLiteral(node) && node.flags.indexOf(flag) >= 0;
}

function pullFlag(node, flag) {
  var flags = node.flags.split(\"\");
  if (node.flags.indexOf(flag) < 0) return;
  (0, _pull2.default)(flags, flag);
  node.flags = flags.join(\"\");
}";
        
        $__internal_4545cb3238718e6b186fb93474e56c01ed3a101b90f1a94f35a85c4a0f044369->leave($__internal_4545cb3238718e6b186fb93474e56c01ed3a101b90f1a94f35a85c4a0f044369_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-helper-regex/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;
exports.is = is;
exports.pullFlag = pullFlag;

var _pull = require(\"lodash/pull\");

var _pull2 = _interopRequireDefault(_pull);

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function is(node, flag) {
  return t.isRegExpLiteral(node) && node.flags.indexOf(flag) >= 0;
}

function pullFlag(node, flag) {
  var flags = node.flags.split(\"\");
  if (node.flags.indexOf(flag) < 0) return;
  (0, _pull2.default)(flags, flag);
  node.flags = flags.join(\"\");
}", "node_modules/babel-helper-regex/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-helper-regex/lib/index.js");
    }
}
