<?php

/* node_modules/babel-plugin-transform-es2015-arrow-functions/lib/index.js */
class __TwigTemplate_31a14ffd0454951f7c3fcfab5ddb4271f1b169eb33cdf8b56e866ab12546679b extends Twig_Template
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
        $__internal_00fc50408f6cb8400baba216cdef6e71069a476ba8d46781b9d3e09a15ebf69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fc50408f6cb8400baba216cdef6e71069a476ba8d46781b9d3e09a15ebf69d->enter($__internal_00fc50408f6cb8400baba216cdef6e71069a476ba8d46781b9d3e09a15ebf69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-arrow-functions/lib/index.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (_ref) {
  var t = _ref.types;

  return {
    visitor: {
      ArrowFunctionExpression: function ArrowFunctionExpression(path, state) {
        if (state.opts.spec) {
          var node = path.node;

          if (node.shadow) return;

          node.shadow = { this: false };
          node.type = \"FunctionExpression\";

          var boundThis = t.thisExpression();
          boundThis._forceShadow = path;

          path.ensureBlock();
          path.get(\"body\").unshiftContainer(\"body\", t.expressionStatement(t.callExpression(state.addHelper(\"newArrowCheck\"), [t.thisExpression(), boundThis])));

          path.replaceWith(t.callExpression(t.memberExpression(node, t.identifier(\"bind\")), [t.thisExpression()]));
        } else {
          path.arrowFunctionToShadowed();
        }
      }
    }
  };
};

module.exports = exports[\"default\"];";
        
        $__internal_00fc50408f6cb8400baba216cdef6e71069a476ba8d46781b9d3e09a15ebf69d->leave($__internal_00fc50408f6cb8400baba216cdef6e71069a476ba8d46781b9d3e09a15ebf69d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-arrow-functions/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (_ref) {
  var t = _ref.types;

  return {
    visitor: {
      ArrowFunctionExpression: function ArrowFunctionExpression(path, state) {
        if (state.opts.spec) {
          var node = path.node;

          if (node.shadow) return;

          node.shadow = { this: false };
          node.type = \"FunctionExpression\";

          var boundThis = t.thisExpression();
          boundThis._forceShadow = path;

          path.ensureBlock();
          path.get(\"body\").unshiftContainer(\"body\", t.expressionStatement(t.callExpression(state.addHelper(\"newArrowCheck\"), [t.thisExpression(), boundThis])));

          path.replaceWith(t.callExpression(t.memberExpression(node, t.identifier(\"bind\")), [t.thisExpression()]));
        } else {
          path.arrowFunctionToShadowed();
        }
      }
    }
  };
};

module.exports = exports[\"default\"];", "node_modules/babel-plugin-transform-es2015-arrow-functions/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-arrow-functions/lib/index.js");
    }
}
