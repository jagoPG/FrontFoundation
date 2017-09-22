<?php

/* node_modules/json-schema-traverse/spec/index.spec.js */
class __TwigTemplate_08744f41ae81c882af5da8f4784cad74abaa05030fa0cd928e77566690381fcc extends Twig_Template
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
        $__internal_493f638ca4ab3014d936ed81aef12ac0fd5b3be863ded38708643b0c3b8f9256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493f638ca4ab3014d936ed81aef12ac0fd5b3be863ded38708643b0c3b8f9256->enter($__internal_493f638ca4ab3014d936ed81aef12ac0fd5b3be863ded38708643b0c3b8f9256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema-traverse/spec/index.spec.js"));

        // line 1
        echo "'use strict';

var traverse = require('../index');
var assert = require('assert');

describe('json-schema-traverse', function() {
  var calls;

  beforeEach(function() {
    calls = [];
  });

  it('should traverse all keywords containing schemas recursively', function() {
    var schema = require('./fixtures/schema').schema;
    var expectedCalls = require('./fixtures/schema').expectedCalls;

    traverse(schema, callback);
    assert.deepStrictEqual(calls, expectedCalls);
  });


  describe('allKeys option', function() {
    var schema = {
      someObject: {
        minimum: 1,
        maximum: 2
      }
    };

    it('should traverse objects with allKeys: true option', function() {
      // schema, jsonPtr, rootSchema, parentJsonPtr, parentKeyword, parentSchema, keyIndex
      var expectedCalls = [
        [schema, '', schema, undefined, undefined, undefined, undefined],
        [schema.someObject, '/someObject', schema, '', 'someObject', schema, undefined]
      ];

      traverse(schema, {allKeys: true}, callback);
      assert.deepStrictEqual(calls, expectedCalls);
    });


    it('should NOT traverse objects with allKeys: false option', function() {
      // schema, jsonPtr, rootSchema, parentJsonPtr, parentKeyword, parentSchema, keyIndex
      var expectedCalls = [
        [schema, '', schema, undefined, undefined, undefined, undefined]
      ];

      traverse(schema, {allKeys: false}, callback);
      assert.deepStrictEqual(calls, expectedCalls);
    });


    it('should NOT traverse objects without allKeys option', function() {
      // schema, jsonPtr, rootSchema, parentJsonPtr, parentKeyword, parentSchema, keyIndex
      var expectedCalls = [
        [schema, '', schema, undefined, undefined, undefined, undefined]
      ];

      traverse(schema, callback);
      assert.deepStrictEqual(calls, expectedCalls);
    });


    it('should NOT travers objects in standard keywords which value is not a schema', function() {
      var schema2 = {
        const: {foo: 'bar'},
        enum: ['a', 'b'],
        required: ['foo'],
        another: {

        },
        patternProperties: {}, // will not traverse - no properties
        dependencies: true, // will not traverse - invalid
        properties: {
          smaller: {
            type: 'number'
          },
          larger: {
            type: 'number',
            minimum: {\$data: '1/smaller'}
          }
        }
      };

      // schema, jsonPtr, rootSchema, parentJsonPtr, parentKeyword, parentSchema, keyIndex
      var expectedCalls = [
        [schema2, '', schema2, undefined, undefined, undefined, undefined],
        [schema2.another, '/another', schema2, '', 'another', schema2, undefined],
        [schema2.properties.smaller, '/properties/smaller', schema2, '', 'properties', schema2, 'smaller'],
        [schema2.properties.larger, '/properties/larger', schema2, '', 'properties', schema2, 'larger'],
      ];

      traverse(schema2, {allKeys: true}, callback);
      assert.deepStrictEqual(calls, expectedCalls);
    });
  });


  function callback() {
    calls.push(Array.prototype.slice.call(arguments));
  }
});
";
        
        $__internal_493f638ca4ab3014d936ed81aef12ac0fd5b3be863ded38708643b0c3b8f9256->leave($__internal_493f638ca4ab3014d936ed81aef12ac0fd5b3be863ded38708643b0c3b8f9256_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema-traverse/spec/index.spec.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var traverse = require('../index');
var assert = require('assert');

describe('json-schema-traverse', function() {
  var calls;

  beforeEach(function() {
    calls = [];
  });

  it('should traverse all keywords containing schemas recursively', function() {
    var schema = require('./fixtures/schema').schema;
    var expectedCalls = require('./fixtures/schema').expectedCalls;

    traverse(schema, callback);
    assert.deepStrictEqual(calls, expectedCalls);
  });


  describe('allKeys option', function() {
    var schema = {
      someObject: {
        minimum: 1,
        maximum: 2
      }
    };

    it('should traverse objects with allKeys: true option', function() {
      // schema, jsonPtr, rootSchema, parentJsonPtr, parentKeyword, parentSchema, keyIndex
      var expectedCalls = [
        [schema, '', schema, undefined, undefined, undefined, undefined],
        [schema.someObject, '/someObject', schema, '', 'someObject', schema, undefined]
      ];

      traverse(schema, {allKeys: true}, callback);
      assert.deepStrictEqual(calls, expectedCalls);
    });


    it('should NOT traverse objects with allKeys: false option', function() {
      // schema, jsonPtr, rootSchema, parentJsonPtr, parentKeyword, parentSchema, keyIndex
      var expectedCalls = [
        [schema, '', schema, undefined, undefined, undefined, undefined]
      ];

      traverse(schema, {allKeys: false}, callback);
      assert.deepStrictEqual(calls, expectedCalls);
    });


    it('should NOT traverse objects without allKeys option', function() {
      // schema, jsonPtr, rootSchema, parentJsonPtr, parentKeyword, parentSchema, keyIndex
      var expectedCalls = [
        [schema, '', schema, undefined, undefined, undefined, undefined]
      ];

      traverse(schema, callback);
      assert.deepStrictEqual(calls, expectedCalls);
    });


    it('should NOT travers objects in standard keywords which value is not a schema', function() {
      var schema2 = {
        const: {foo: 'bar'},
        enum: ['a', 'b'],
        required: ['foo'],
        another: {

        },
        patternProperties: {}, // will not traverse - no properties
        dependencies: true, // will not traverse - invalid
        properties: {
          smaller: {
            type: 'number'
          },
          larger: {
            type: 'number',
            minimum: {\$data: '1/smaller'}
          }
        }
      };

      // schema, jsonPtr, rootSchema, parentJsonPtr, parentKeyword, parentSchema, keyIndex
      var expectedCalls = [
        [schema2, '', schema2, undefined, undefined, undefined, undefined],
        [schema2.another, '/another', schema2, '', 'another', schema2, undefined],
        [schema2.properties.smaller, '/properties/smaller', schema2, '', 'properties', schema2, 'smaller'],
        [schema2.properties.larger, '/properties/larger', schema2, '', 'properties', schema2, 'larger'],
      ];

      traverse(schema2, {allKeys: true}, callback);
      assert.deepStrictEqual(calls, expectedCalls);
    });
  });


  function callback() {
    calls.push(Array.prototype.slice.call(arguments));
  }
});
", "node_modules/json-schema-traverse/spec/index.spec.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema-traverse/spec/index.spec.js");
    }
}
