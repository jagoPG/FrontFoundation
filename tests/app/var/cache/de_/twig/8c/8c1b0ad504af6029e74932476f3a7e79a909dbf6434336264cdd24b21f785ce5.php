<?php

/* node_modules/fsevents/node_modules/ajv/lib/v5.js */
class __TwigTemplate_d8703ddfb11221b0571ddba64ec4f314a8f46cf2f4fc4a358ff9c90e140d7837 extends Twig_Template
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
        $__internal_9d54b76b7bdabe35c521941de796c2efc2b8d457081e11ac52b2217f305e43a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d54b76b7bdabe35c521941de796c2efc2b8d457081e11ac52b2217f305e43a6->enter($__internal_9d54b76b7bdabe35c521941de796c2efc2b8d457081e11ac52b2217f305e43a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/v5.js"));

        // line 1
        echo "'use strict';

var META_SCHEMA_ID = 'https://raw.githubusercontent.com/epoberezkin/ajv/master/lib/refs/json-schema-v5.json';

module.exports = {
  enable: enableV5,
  META_SCHEMA_ID: META_SCHEMA_ID
};


function enableV5(ajv) {
  var inlineFunctions = {
    'switch': require('./dotjs/switch'),
    'constant': require('./dotjs/constant'),
    '_formatLimit': require('./dotjs/_formatLimit'),
    'patternRequired': require('./dotjs/patternRequired')
  };

  if (ajv._opts.meta !== false) {
    var metaSchema = require('./refs/json-schema-v5.json');
    ajv.addMetaSchema(metaSchema, META_SCHEMA_ID);
  }
  _addKeyword('constant');
  ajv.addKeyword('contains', { type: 'array', macro: containsMacro });

  _addKeyword('formatMaximum', 'string', inlineFunctions._formatLimit);
  _addKeyword('formatMinimum', 'string', inlineFunctions._formatLimit);
  ajv.addKeyword('formatExclusiveMaximum');
  ajv.addKeyword('formatExclusiveMinimum');

  ajv.addKeyword('patternGroups'); // implemented in properties.jst
  _addKeyword('patternRequired', 'object');
  _addKeyword('switch');


  function _addKeyword(keyword, types, inlineFunc) {
    var definition = {
      inline: inlineFunc || inlineFunctions[keyword],
      statements: true,
      errors: 'full'
    };
    if (types) definition.type = types;
    ajv.addKeyword(keyword, definition);
  }
}


function containsMacro(schema) {
  return {
    not: { items: { not: schema } }
  };
}
";
        
        $__internal_9d54b76b7bdabe35c521941de796c2efc2b8d457081e11ac52b2217f305e43a6->leave($__internal_9d54b76b7bdabe35c521941de796c2efc2b8d457081e11ac52b2217f305e43a6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/v5.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var META_SCHEMA_ID = 'https://raw.githubusercontent.com/epoberezkin/ajv/master/lib/refs/json-schema-v5.json';

module.exports = {
  enable: enableV5,
  META_SCHEMA_ID: META_SCHEMA_ID
};


function enableV5(ajv) {
  var inlineFunctions = {
    'switch': require('./dotjs/switch'),
    'constant': require('./dotjs/constant'),
    '_formatLimit': require('./dotjs/_formatLimit'),
    'patternRequired': require('./dotjs/patternRequired')
  };

  if (ajv._opts.meta !== false) {
    var metaSchema = require('./refs/json-schema-v5.json');
    ajv.addMetaSchema(metaSchema, META_SCHEMA_ID);
  }
  _addKeyword('constant');
  ajv.addKeyword('contains', { type: 'array', macro: containsMacro });

  _addKeyword('formatMaximum', 'string', inlineFunctions._formatLimit);
  _addKeyword('formatMinimum', 'string', inlineFunctions._formatLimit);
  ajv.addKeyword('formatExclusiveMaximum');
  ajv.addKeyword('formatExclusiveMinimum');

  ajv.addKeyword('patternGroups'); // implemented in properties.jst
  _addKeyword('patternRequired', 'object');
  _addKeyword('switch');


  function _addKeyword(keyword, types, inlineFunc) {
    var definition = {
      inline: inlineFunc || inlineFunctions[keyword],
      statements: true,
      errors: 'full'
    };
    if (types) definition.type = types;
    ajv.addKeyword(keyword, definition);
  }
}


function containsMacro(schema) {
  return {
    not: { items: { not: schema } }
  };
}
", "node_modules/fsevents/node_modules/ajv/lib/v5.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/v5.js");
    }
}
