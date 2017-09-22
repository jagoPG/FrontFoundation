<?php

/* node_modules/har-validator/node_modules/ajv/lib/v5.js */
class __TwigTemplate_5a39a0d4f2f345f57d5bfe42152657740171baecb6587b10bccc1d851729eca8 extends Twig_Template
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
        $__internal_2947cc262b511a93212714f6bc70dcfc7a41e04d7a899b773dcff2d72c6ff9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2947cc262b511a93212714f6bc70dcfc7a41e04d7a899b773dcff2d72c6ff9a6->enter($__internal_2947cc262b511a93212714f6bc70dcfc7a41e04d7a899b773dcff2d72c6ff9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/lib/v5.js"));

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
        
        $__internal_2947cc262b511a93212714f6bc70dcfc7a41e04d7a899b773dcff2d72c6ff9a6->leave($__internal_2947cc262b511a93212714f6bc70dcfc7a41e04d7a899b773dcff2d72c6ff9a6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/lib/v5.js";
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
", "node_modules/har-validator/node_modules/ajv/lib/v5.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/lib/v5.js");
    }
}
