<?php

/* node_modules/babel-plugin-transform-es2015-shorthand-properties/lib/index.js */
class __TwigTemplate_05794131b20836d1efeb276201cb11b2c1c47ac2f0d68bd3769e11b85e574410 extends Twig_Template
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
        $__internal_356f735adca16e03fb9ff592e6c3e060335be85c36c97d82ecc27e866985a3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356f735adca16e03fb9ff592e6c3e060335be85c36c97d82ecc27e866985a3c8->enter($__internal_356f735adca16e03fb9ff592e6c3e060335be85c36c97d82ecc27e866985a3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-shorthand-properties/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    visitor: {
      ObjectMethod: function ObjectMethod(path) {
        var node = path.node;

        if (node.kind === \"method\") {
          var func = t.functionExpression(null, node.params, node.body, node.generator, node.async);
          func.returnType = node.returnType;

          path.replaceWith(t.objectProperty(node.key, func, node.computed));
        }
      },
      ObjectProperty: function ObjectProperty(_ref) {
        var node = _ref.node;

        if (node.shorthand) {
          node.shorthand = false;
        }
      }
    }
  };
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

module.exports = exports[\"default\"];";
        
        $__internal_356f735adca16e03fb9ff592e6c3e060335be85c36c97d82ecc27e866985a3c8->leave($__internal_356f735adca16e03fb9ff592e6c3e060335be85c36c97d82ecc27e866985a3c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-shorthand-properties/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function () {
  return {
    visitor: {
      ObjectMethod: function ObjectMethod(path) {
        var node = path.node;

        if (node.kind === \"method\") {
          var func = t.functionExpression(null, node.params, node.body, node.generator, node.async);
          func.returnType = node.returnType;

          path.replaceWith(t.objectProperty(node.key, func, node.computed));
        }
      },
      ObjectProperty: function ObjectProperty(_ref) {
        var node = _ref.node;

        if (node.shorthand) {
          node.shorthand = false;
        }
      }
    }
  };
};

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-shorthand-properties/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-shorthand-properties/lib/index.js");
    }
}
