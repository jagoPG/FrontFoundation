<?php

/* node_modules/ajv-keywords/keywords/typeof.js */
class __TwigTemplate_07b43d6304b9f74624d02edee9e83f4df071e2798e4c7ca4f268d8daeba414e2 extends Twig_Template
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
        $__internal_7da9ada9400e3bdfa74c7c6bbee58f97a98f68fc96d8f254141b809594b68faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da9ada9400e3bdfa74c7c6bbee58f97a98f68fc96d8f254141b809594b68faa->enter($__internal_7da9ada9400e3bdfa74c7c6bbee58f97a98f68fc96d8f254141b809594b68faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv-keywords/keywords/typeof.js"));

        // line 1
        echo "'use strict';

var KNOWN_TYPES = ['undefined', 'string', 'number', 'object', 'function', 'boolean', 'symbol'];

module.exports = function defFunc(ajv) {
  defFunc.definition = {
    inline: function (it, keyword, schema) {
      var data = 'data' + (it.dataLevel || '');
      if (typeof schema == 'string') return 'typeof ' + data + ' == \"' + schema + '\"';
      schema = 'validate.schema' + it.schemaPath + '.' + keyword;
      return schema + '.indexOf(typeof ' + data + ') >= 0';
    },
    metaSchema: {
      anyOf: [
        {
          type: 'string',
          enum: KNOWN_TYPES
        },
        {
          type: 'array',
          items: {
            type: 'string',
            enum: KNOWN_TYPES
          }
        }
      ]
    }
  };

  ajv.addKeyword('typeof', defFunc.definition);
  return ajv;
};
";
        
        $__internal_7da9ada9400e3bdfa74c7c6bbee58f97a98f68fc96d8f254141b809594b68faa->leave($__internal_7da9ada9400e3bdfa74c7c6bbee58f97a98f68fc96d8f254141b809594b68faa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv-keywords/keywords/typeof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var KNOWN_TYPES = ['undefined', 'string', 'number', 'object', 'function', 'boolean', 'symbol'];

module.exports = function defFunc(ajv) {
  defFunc.definition = {
    inline: function (it, keyword, schema) {
      var data = 'data' + (it.dataLevel || '');
      if (typeof schema == 'string') return 'typeof ' + data + ' == \"' + schema + '\"';
      schema = 'validate.schema' + it.schemaPath + '.' + keyword;
      return schema + '.indexOf(typeof ' + data + ') >= 0';
    },
    metaSchema: {
      anyOf: [
        {
          type: 'string',
          enum: KNOWN_TYPES
        },
        {
          type: 'array',
          items: {
            type: 'string',
            enum: KNOWN_TYPES
          }
        }
      ]
    }
  };

  ajv.addKeyword('typeof', defFunc.definition);
  return ajv;
};
", "node_modules/ajv-keywords/keywords/typeof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv-keywords/keywords/typeof.js");
    }
}
