<?php

/* node_modules/babel-plugin-transform-es2015-parameters/lib/destructuring.js */
class __TwigTemplate_03efe4b4f955e3222c3dfafefa0ae61b1a27e01bfab6ed416aad91e093b512f4 extends Twig_Template
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
        $__internal_1d752491899e3b714773edff7c33c3ec58d0af2935ff8ed3dfacc28051dd785f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d752491899e3b714773edff7c33c3ec58d0af2935ff8ed3dfacc28051dd785f->enter($__internal_1d752491899e3b714773edff7c33c3ec58d0af2935ff8ed3dfacc28051dd785f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-parameters/lib/destructuring.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;
exports.visitor = undefined;

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var visitor = exports.visitor = {
  Function: function Function(path) {
    var params = path.get(\"params\");

    var hoistTweak = t.isRestElement(params[params.length - 1]) ? 1 : 0;
    var outputParamsLength = params.length - hoistTweak;

    for (var i = 0; i < outputParamsLength; i++) {
      var param = params[i];
      if (param.isArrayPattern() || param.isObjectPattern()) {
        var uid = path.scope.generateUidIdentifier(\"ref\");

        var declar = t.variableDeclaration(\"let\", [t.variableDeclarator(param.node, uid)]);
        declar._blockHoist = outputParamsLength - i;

        path.ensureBlock();
        path.get(\"body\").unshiftContainer(\"body\", declar);

        param.replaceWith(uid);
      }
    }
  }
};";
        
        $__internal_1d752491899e3b714773edff7c33c3ec58d0af2935ff8ed3dfacc28051dd785f->leave($__internal_1d752491899e3b714773edff7c33c3ec58d0af2935ff8ed3dfacc28051dd785f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-parameters/lib/destructuring.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;
exports.visitor = undefined;

var _babelTypes = require(\"babel-types\");

var t = _interopRequireWildcard(_babelTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var visitor = exports.visitor = {
  Function: function Function(path) {
    var params = path.get(\"params\");

    var hoistTweak = t.isRestElement(params[params.length - 1]) ? 1 : 0;
    var outputParamsLength = params.length - hoistTweak;

    for (var i = 0; i < outputParamsLength; i++) {
      var param = params[i];
      if (param.isArrayPattern() || param.isObjectPattern()) {
        var uid = path.scope.generateUidIdentifier(\"ref\");

        var declar = t.variableDeclaration(\"let\", [t.variableDeclarator(param.node, uid)]);
        declar._blockHoist = outputParamsLength - i;

        path.ensureBlock();
        path.get(\"body\").unshiftContainer(\"body\", declar);

        param.replaceWith(uid);
      }
    }
  }
};", "node_modules/babel-plugin-transform-es2015-parameters/lib/destructuring.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-parameters/lib/destructuring.js");
    }
}
