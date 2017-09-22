<?php

/* node_modules/ajv-keywords/keywords/prohibited.js */
class __TwigTemplate_49b5162cc0754635438fab467327409792afafdb72d140dece559695c93beb3c extends Twig_Template
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
        $__internal_b3b7b676fbb8de8d6e729532ed1010863f91fa0b3d38abb7ce5208ca2f20a988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b7b676fbb8de8d6e729532ed1010863f91fa0b3d38abb7ce5208ca2f20a988->enter($__internal_b3b7b676fbb8de8d6e729532ed1010863f91fa0b3d38abb7ce5208ca2f20a988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv-keywords/keywords/prohibited.js"));

        // line 1
        echo "'use strict';

module.exports = function defFunc(ajv) {
  defFunc.definition = {
    type: 'object',
    macro: function (schema) {
      if (schema.length == 0) return {};
      if (schema.length == 1) return { not: { required: schema } };
      var schemas = schema.map(function (prop) {
        return { required: [prop] };
      });
      return { not: { anyOf: schemas } };
    },
    metaSchema: {
      type: 'array',
      items: {
        type: 'string'
      }
    }
  };

  ajv.addKeyword('prohibited', defFunc.definition);
  return ajv;
};

";
        
        $__internal_b3b7b676fbb8de8d6e729532ed1010863f91fa0b3d38abb7ce5208ca2f20a988->leave($__internal_b3b7b676fbb8de8d6e729532ed1010863f91fa0b3d38abb7ce5208ca2f20a988_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv-keywords/keywords/prohibited.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function defFunc(ajv) {
  defFunc.definition = {
    type: 'object',
    macro: function (schema) {
      if (schema.length == 0) return {};
      if (schema.length == 1) return { not: { required: schema } };
      var schemas = schema.map(function (prop) {
        return { required: [prop] };
      });
      return { not: { anyOf: schemas } };
    },
    metaSchema: {
      type: 'array',
      items: {
        type: 'string'
      }
    }
  };

  ajv.addKeyword('prohibited', defFunc.definition);
  return ajv;
};

", "node_modules/ajv-keywords/keywords/prohibited.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv-keywords/keywords/prohibited.js");
    }
}
