<?php

/* node_modules/babel-types/lib/definitions/misc.js */
class __TwigTemplate_6ba59c6f62768a42f6b0b23f527bbe6f8903d65a0f866a852976c1530a39edac extends Twig_Template
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
        $__internal_cb241630ae02a5955f3aff63784cd091405dd82522d501e4f6c7e895365d33d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb241630ae02a5955f3aff63784cd091405dd82522d501e4f6c7e895365d33d5->enter($__internal_cb241630ae02a5955f3aff63784cd091405dd82522d501e4f6c7e895365d33d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-types/lib/definitions/misc.js"));

        // line 1
        echo "\"use strict\";

var _index = require(\"./index\");

var _index2 = _interopRequireDefault(_index);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _index2.default)(\"Noop\", {
  visitor: []
});

(0, _index2.default)(\"ParenthesizedExpression\", {
  visitor: [\"expression\"],
  aliases: [\"Expression\", \"ExpressionWrapper\"],
  fields: {
    expression: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});";
        
        $__internal_cb241630ae02a5955f3aff63784cd091405dd82522d501e4f6c7e895365d33d5->leave($__internal_cb241630ae02a5955f3aff63784cd091405dd82522d501e4f6c7e895365d33d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-types/lib/definitions/misc.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var _index = require(\"./index\");

var _index2 = _interopRequireDefault(_index);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _index2.default)(\"Noop\", {
  visitor: []
});

(0, _index2.default)(\"ParenthesizedExpression\", {
  visitor: [\"expression\"],
  aliases: [\"Expression\", \"ExpressionWrapper\"],
  fields: {
    expression: {
      validate: (0, _index.assertNodeType)(\"Expression\")
    }
  }
});", "node_modules/babel-types/lib/definitions/misc.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-types/lib/definitions/misc.js");
    }
}
