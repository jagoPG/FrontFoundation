<?php

/* node_modules/babel-types/lib/flow.js */
class __TwigTemplate_5b510eccb75d94f48224aa90dc24a7e6b2e1ee7d31f36b4b95b1b8b2f830de78 extends Twig_Template
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
        $__internal_ac4a2d23cdb88442c6396fc520f4dd511bdc8a5a14f2687c6d6b6e0598020e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4a2d23cdb88442c6396fc520f4dd511bdc8a5a14f2687c6d6b6e0598020e4b->enter($__internal_ac4a2d23cdb88442c6396fc520f4dd511bdc8a5a14f2687c6d6b6e0598020e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-types/lib/flow.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;
exports.createUnionTypeAnnotation = createUnionTypeAnnotation;
exports.removeTypeDuplicates = removeTypeDuplicates;
exports.createTypeAnnotationBasedOnTypeof = createTypeAnnotationBasedOnTypeof;

var _index = require(\"./index\");

var t = _interopRequireWildcard(_index);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function createUnionTypeAnnotation(types) {
  var flattened = removeTypeDuplicates(types);

  if (flattened.length === 1) {
    return flattened[0];
  } else {
    return t.unionTypeAnnotation(flattened);
  }
}

function removeTypeDuplicates(nodes) {
  var generics = {};
  var bases = {};

  var typeGroups = [];

  var types = [];

  for (var i = 0; i < nodes.length; i++) {
    var node = nodes[i];
    if (!node) continue;

    if (types.indexOf(node) >= 0) {
      continue;
    }

    if (t.isAnyTypeAnnotation(node)) {
      return [node];
    }

    if (t.isFlowBaseAnnotation(node)) {
      bases[node.type] = node;
      continue;
    }

    if (t.isUnionTypeAnnotation(node)) {
      if (typeGroups.indexOf(node.types) < 0) {
        nodes = nodes.concat(node.types);
        typeGroups.push(node.types);
      }
      continue;
    }

    if (t.isGenericTypeAnnotation(node)) {
      var name = node.id.name;

      if (generics[name]) {
        var existing = generics[name];
        if (existing.typeParameters) {
          if (node.typeParameters) {
            existing.typeParameters.params = removeTypeDuplicates(existing.typeParameters.params.concat(node.typeParameters.params));
          }
        } else {
          existing = node.typeParameters;
        }
      } else {
        generics[name] = node;
      }

      continue;
    }

    types.push(node);
  }

  for (var type in bases) {
    types.push(bases[type]);
  }

  for (var _name in generics) {
    types.push(generics[_name]);
  }

  return types;
}

function createTypeAnnotationBasedOnTypeof(type) {
  if (type === \"string\") {
    return t.stringTypeAnnotation();
  } else if (type === \"number\") {
    return t.numberTypeAnnotation();
  } else if (type === \"undefined\") {
    return t.voidTypeAnnotation();
  } else if (type === \"boolean\") {
    return t.booleanTypeAnnotation();
  } else if (type === \"function\") {
    return t.genericTypeAnnotation(t.identifier(\"Function\"));
  } else if (type === \"object\") {
    return t.genericTypeAnnotation(t.identifier(\"Object\"));
  } else if (type === \"symbol\") {
    return t.genericTypeAnnotation(t.identifier(\"Symbol\"));
  } else {
    throw new Error(\"Invalid typeof value\");
  }
}";
        
        $__internal_ac4a2d23cdb88442c6396fc520f4dd511bdc8a5a14f2687c6d6b6e0598020e4b->leave($__internal_ac4a2d23cdb88442c6396fc520f4dd511bdc8a5a14f2687c6d6b6e0598020e4b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-types/lib/flow.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;
exports.createUnionTypeAnnotation = createUnionTypeAnnotation;
exports.removeTypeDuplicates = removeTypeDuplicates;
exports.createTypeAnnotationBasedOnTypeof = createTypeAnnotationBasedOnTypeof;

var _index = require(\"./index\");

var t = _interopRequireWildcard(_index);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function createUnionTypeAnnotation(types) {
  var flattened = removeTypeDuplicates(types);

  if (flattened.length === 1) {
    return flattened[0];
  } else {
    return t.unionTypeAnnotation(flattened);
  }
}

function removeTypeDuplicates(nodes) {
  var generics = {};
  var bases = {};

  var typeGroups = [];

  var types = [];

  for (var i = 0; i < nodes.length; i++) {
    var node = nodes[i];
    if (!node) continue;

    if (types.indexOf(node) >= 0) {
      continue;
    }

    if (t.isAnyTypeAnnotation(node)) {
      return [node];
    }

    if (t.isFlowBaseAnnotation(node)) {
      bases[node.type] = node;
      continue;
    }

    if (t.isUnionTypeAnnotation(node)) {
      if (typeGroups.indexOf(node.types) < 0) {
        nodes = nodes.concat(node.types);
        typeGroups.push(node.types);
      }
      continue;
    }

    if (t.isGenericTypeAnnotation(node)) {
      var name = node.id.name;

      if (generics[name]) {
        var existing = generics[name];
        if (existing.typeParameters) {
          if (node.typeParameters) {
            existing.typeParameters.params = removeTypeDuplicates(existing.typeParameters.params.concat(node.typeParameters.params));
          }
        } else {
          existing = node.typeParameters;
        }
      } else {
        generics[name] = node;
      }

      continue;
    }

    types.push(node);
  }

  for (var type in bases) {
    types.push(bases[type]);
  }

  for (var _name in generics) {
    types.push(generics[_name]);
  }

  return types;
}

function createTypeAnnotationBasedOnTypeof(type) {
  if (type === \"string\") {
    return t.stringTypeAnnotation();
  } else if (type === \"number\") {
    return t.numberTypeAnnotation();
  } else if (type === \"undefined\") {
    return t.voidTypeAnnotation();
  } else if (type === \"boolean\") {
    return t.booleanTypeAnnotation();
  } else if (type === \"function\") {
    return t.genericTypeAnnotation(t.identifier(\"Function\"));
  } else if (type === \"object\") {
    return t.genericTypeAnnotation(t.identifier(\"Object\"));
  } else if (type === \"symbol\") {
    return t.genericTypeAnnotation(t.identifier(\"Symbol\"));
  } else {
    throw new Error(\"Invalid typeof value\");
  }
}", "node_modules/babel-types/lib/flow.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-types/lib/flow.js");
    }
}
