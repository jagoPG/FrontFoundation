<?php

/* node_modules/ajv-keywords/keywords/deepRequired.js */
class __TwigTemplate_7afd939e4c30732165d00363c0833c94ca76f78b1891239de3701c8481bce77f extends Twig_Template
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
        $__internal_3203d07720e7e1ff105c753d807b0ce3e5544cf21519e6095eeaa2d02b07b773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3203d07720e7e1ff105c753d807b0ce3e5544cf21519e6095eeaa2d02b07b773->enter($__internal_3203d07720e7e1ff105c753d807b0ce3e5544cf21519e6095eeaa2d02b07b773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv-keywords/keywords/deepRequired.js"));

        // line 1
        echo "'use strict';

module.exports = function defFunc(ajv) {
  defFunc.definition = {
    type: 'object',
    inline: function (it, keyword, schema) {
      var expr = '';
      for (var i=0; i<schema.length; i++) {
        if (i) expr += ' && ';
        expr += '(' + getData(schema[i], it.dataLevel) + ' !== undefined)';
      }
      return expr;
    },
    metaSchema: {
      type: 'array',
      items: {
        type: 'string',
        format: 'json-pointer'
      }
    }
  };

  ajv.addKeyword('deepRequired', defFunc.definition);
  return ajv;
};


function getData(jsonPointer, lvl) {
  var data = 'data' + (lvl || '');
  if (!jsonPointer) return data;

  var expr = data;
  var segments = jsonPointer.split('/');
  for (var i=1; i<segments.length; i++) {
    var segment = segments[i];
    data += getProperty(unescapeJsonPointer(segment));
    expr += ' && ' + data;
  }
  return expr;
}


var IDENTIFIER = /^[a-z\$_][a-z\$_0-9]*\$/i;
var INTEGER = /^[0-9]+\$/;
var SINGLE_QUOTE = /'|\\\\/g;
function getProperty(key) {
  return INTEGER.test(key)
          ? '[' + key + ']'
          : IDENTIFIER.test(key)
            ? '.' + key
            : \"['\" + key.replace(SINGLE_QUOTE, '\\\\\$&') + \"']\";
}


function unescapeJsonPointer(str) {
  return str.replace(/~1/g, '/').replace(/~0/g, '~');
}
";
        
        $__internal_3203d07720e7e1ff105c753d807b0ce3e5544cf21519e6095eeaa2d02b07b773->leave($__internal_3203d07720e7e1ff105c753d807b0ce3e5544cf21519e6095eeaa2d02b07b773_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv-keywords/keywords/deepRequired.js";
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
    inline: function (it, keyword, schema) {
      var expr = '';
      for (var i=0; i<schema.length; i++) {
        if (i) expr += ' && ';
        expr += '(' + getData(schema[i], it.dataLevel) + ' !== undefined)';
      }
      return expr;
    },
    metaSchema: {
      type: 'array',
      items: {
        type: 'string',
        format: 'json-pointer'
      }
    }
  };

  ajv.addKeyword('deepRequired', defFunc.definition);
  return ajv;
};


function getData(jsonPointer, lvl) {
  var data = 'data' + (lvl || '');
  if (!jsonPointer) return data;

  var expr = data;
  var segments = jsonPointer.split('/');
  for (var i=1; i<segments.length; i++) {
    var segment = segments[i];
    data += getProperty(unescapeJsonPointer(segment));
    expr += ' && ' + data;
  }
  return expr;
}


var IDENTIFIER = /^[a-z\$_][a-z\$_0-9]*\$/i;
var INTEGER = /^[0-9]+\$/;
var SINGLE_QUOTE = /'|\\\\/g;
function getProperty(key) {
  return INTEGER.test(key)
          ? '[' + key + ']'
          : IDENTIFIER.test(key)
            ? '.' + key
            : \"['\" + key.replace(SINGLE_QUOTE, '\\\\\$&') + \"']\";
}


function unescapeJsonPointer(str) {
  return str.replace(/~1/g, '/').replace(/~0/g, '~');
}
", "node_modules/ajv-keywords/keywords/deepRequired.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv-keywords/keywords/deepRequired.js");
    }
}
