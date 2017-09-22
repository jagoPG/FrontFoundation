<?php

/* node_modules/json-schema-traverse/spec/fixtures/schema.js */
class __TwigTemplate_e8d396152796ea225bc51bb343fabb85def35aa0f2d794db2446ad80a1153455 extends Twig_Template
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
        $__internal_a033abaddb4d26f2764a6f09af82b3ee6582f706cf1ea990d006ce6a7e455409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a033abaddb4d26f2764a6f09af82b3ee6582f706cf1ea990d006ce6a7e455409->enter($__internal_a033abaddb4d26f2764a6f09af82b3ee6582f706cf1ea990d006ce6a7e455409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema-traverse/spec/fixtures/schema.js"));

        // line 1
        echo "'use strict';

var schema = {
  additionalItems: subschema('additionalItems'),
  items: subschema('items'),
  contains: subschema('contains'),
  additionalProperties: subschema('additionalProperties'),
  propertyNames: subschema('propertyNames'),
  not: subschema('not'),
  allOf: [
    subschema('allOf_0'),
    subschema('allOf_1'),
    {
      items: [
        subschema('items_0'),
        subschema('items_1'),
      ]
    }
  ],
  anyOf: [
    subschema('anyOf_0'),
    subschema('anyOf_1'),
  ],
  oneOf: [
    subschema('oneOf_0'),
    subschema('oneOf_1'),
  ],
  definitions: {
    foo: subschema('definitions_foo'),
    bar: subschema('definitions_bar'),
  },
  properties: {
    foo: subschema('properties_foo'),
    bar: subschema('properties_bar'),
  },
  patternProperties: {
    foo: subschema('patternProperties_foo'),
    bar: subschema('patternProperties_bar'),
  },
  dependencies: {
    foo: subschema('dependencies_foo'),
    bar: subschema('dependencies_bar'),
  },
  required: ['foo', 'bar']
};


function subschema(keyword) {
  var sch = {
    properties: {},
    additionalProperties: false,
    additionalItems: false,
    anyOf: [
      {format: 'email'},
      {format: 'hostname'}
    ]
  };
  sch.properties['foo_' + keyword] = {title: 'foo'};
  sch.properties['bar_' + keyword] = {title: 'bar'};
  return sch;
}


module.exports = {
  schema: schema,

  // schema, jsonPtr, rootSchema, parentJsonPtr, parentKeyword, parentSchema, keyIndex
  expectedCalls: [[schema, '', schema, undefined, undefined, undefined, undefined]]
    .concat(expectedCalls('additionalItems'))
    .concat(expectedCalls('items'))
    .concat(expectedCalls('contains'))
    .concat(expectedCalls('additionalProperties'))
    .concat(expectedCalls('propertyNames'))
    .concat(expectedCalls('not'))
    .concat(expectedCallsChild('allOf', 0))
    .concat(expectedCallsChild('allOf', 1))
    .concat([
      [schema.allOf[2], '/allOf/2', schema, '', 'allOf', schema, 2],
      [schema.allOf[2].items[0], '/allOf/2/items/0', schema, '/allOf/2', 'items', schema.allOf[2], 0],
      [schema.allOf[2].items[0].properties.foo_items_0, '/allOf/2/items/0/properties/foo_items_0', schema, '/allOf/2/items/0', 'properties', schema.allOf[2].items[0], 'foo_items_0'],
      [schema.allOf[2].items[0].properties.bar_items_0, '/allOf/2/items/0/properties/bar_items_0', schema, '/allOf/2/items/0', 'properties', schema.allOf[2].items[0], 'bar_items_0'],
      [schema.allOf[2].items[0].anyOf[0], '/allOf/2/items/0/anyOf/0', schema, '/allOf/2/items/0', 'anyOf', schema.allOf[2].items[0], 0],
      [schema.allOf[2].items[0].anyOf[1], '/allOf/2/items/0/anyOf/1', schema, '/allOf/2/items/0', 'anyOf', schema.allOf[2].items[0], 1],

      [schema.allOf[2].items[1], '/allOf/2/items/1', schema, '/allOf/2', 'items', schema.allOf[2], 1],
      [schema.allOf[2].items[1].properties.foo_items_1, '/allOf/2/items/1/properties/foo_items_1', schema, '/allOf/2/items/1', 'properties', schema.allOf[2].items[1], 'foo_items_1'],
      [schema.allOf[2].items[1].properties.bar_items_1, '/allOf/2/items/1/properties/bar_items_1', schema, '/allOf/2/items/1', 'properties', schema.allOf[2].items[1], 'bar_items_1'],
      [schema.allOf[2].items[1].anyOf[0], '/allOf/2/items/1/anyOf/0', schema, '/allOf/2/items/1', 'anyOf', schema.allOf[2].items[1], 0],
      [schema.allOf[2].items[1].anyOf[1], '/allOf/2/items/1/anyOf/1', schema, '/allOf/2/items/1', 'anyOf', schema.allOf[2].items[1], 1]
    ])
    .concat(expectedCallsChild('anyOf', 0))
    .concat(expectedCallsChild('anyOf', 1))
    .concat(expectedCallsChild('oneOf', 0))
    .concat(expectedCallsChild('oneOf', 1))
    .concat(expectedCallsChild('definitions', 'foo'))
    .concat(expectedCallsChild('definitions', 'bar'))
    .concat(expectedCallsChild('properties', 'foo'))
    .concat(expectedCallsChild('properties', 'bar'))
    .concat(expectedCallsChild('patternProperties', 'foo'))
    .concat(expectedCallsChild('patternProperties', 'bar'))
    .concat(expectedCallsChild('dependencies', 'foo'))
    .concat(expectedCallsChild('dependencies', 'bar'))
};


function expectedCalls(keyword) {
  return [
    [schema[keyword], `/\${keyword}`, schema, '', keyword, schema, undefined],
    [schema[keyword].properties[`foo_\${keyword}`], `/\${keyword}/properties/foo_\${keyword}`, schema, `/\${keyword}`, 'properties', schema[keyword], `foo_\${keyword}`],
    [schema[keyword].properties[`bar_\${keyword}`], `/\${keyword}/properties/bar_\${keyword}`, schema, `/\${keyword}`, 'properties', schema[keyword], `bar_\${keyword}`],
    [schema[keyword].anyOf[0], `/\${keyword}/anyOf/0`, schema, `/\${keyword}`, 'anyOf', schema[keyword], 0],
    [schema[keyword].anyOf[1], `/\${keyword}/anyOf/1`, schema, `/\${keyword}`, 'anyOf', schema[keyword], 1]
  ];
}


function expectedCallsChild(keyword, i) {
  return [
    [schema[keyword][i], `/\${keyword}/\${i}`, schema, '', keyword, schema, i],
    [schema[keyword][i].properties[`foo_\${keyword}_\${i}`], `/\${keyword}/\${i}/properties/foo_\${keyword}_\${i}`, schema, `/\${keyword}/\${i}`, 'properties', schema[keyword][i], `foo_\${keyword}_\${i}`],
    [schema[keyword][i].properties[`bar_\${keyword}_\${i}`], `/\${keyword}/\${i}/properties/bar_\${keyword}_\${i}`, schema, `/\${keyword}/\${i}`, 'properties', schema[keyword][i], `bar_\${keyword}_\${i}`],
    [schema[keyword][i].anyOf[0], `/\${keyword}/\${i}/anyOf/0`, schema, `/\${keyword}/\${i}`, 'anyOf', schema[keyword][i], 0],
    [schema[keyword][i].anyOf[1], `/\${keyword}/\${i}/anyOf/1`, schema, `/\${keyword}/\${i}`, 'anyOf', schema[keyword][i], 1]
  ];
}
";
        
        $__internal_a033abaddb4d26f2764a6f09af82b3ee6582f706cf1ea990d006ce6a7e455409->leave($__internal_a033abaddb4d26f2764a6f09af82b3ee6582f706cf1ea990d006ce6a7e455409_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema-traverse/spec/fixtures/schema.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var schema = {
  additionalItems: subschema('additionalItems'),
  items: subschema('items'),
  contains: subschema('contains'),
  additionalProperties: subschema('additionalProperties'),
  propertyNames: subschema('propertyNames'),
  not: subschema('not'),
  allOf: [
    subschema('allOf_0'),
    subschema('allOf_1'),
    {
      items: [
        subschema('items_0'),
        subschema('items_1'),
      ]
    }
  ],
  anyOf: [
    subschema('anyOf_0'),
    subschema('anyOf_1'),
  ],
  oneOf: [
    subschema('oneOf_0'),
    subschema('oneOf_1'),
  ],
  definitions: {
    foo: subschema('definitions_foo'),
    bar: subschema('definitions_bar'),
  },
  properties: {
    foo: subschema('properties_foo'),
    bar: subschema('properties_bar'),
  },
  patternProperties: {
    foo: subschema('patternProperties_foo'),
    bar: subschema('patternProperties_bar'),
  },
  dependencies: {
    foo: subschema('dependencies_foo'),
    bar: subschema('dependencies_bar'),
  },
  required: ['foo', 'bar']
};


function subschema(keyword) {
  var sch = {
    properties: {},
    additionalProperties: false,
    additionalItems: false,
    anyOf: [
      {format: 'email'},
      {format: 'hostname'}
    ]
  };
  sch.properties['foo_' + keyword] = {title: 'foo'};
  sch.properties['bar_' + keyword] = {title: 'bar'};
  return sch;
}


module.exports = {
  schema: schema,

  // schema, jsonPtr, rootSchema, parentJsonPtr, parentKeyword, parentSchema, keyIndex
  expectedCalls: [[schema, '', schema, undefined, undefined, undefined, undefined]]
    .concat(expectedCalls('additionalItems'))
    .concat(expectedCalls('items'))
    .concat(expectedCalls('contains'))
    .concat(expectedCalls('additionalProperties'))
    .concat(expectedCalls('propertyNames'))
    .concat(expectedCalls('not'))
    .concat(expectedCallsChild('allOf', 0))
    .concat(expectedCallsChild('allOf', 1))
    .concat([
      [schema.allOf[2], '/allOf/2', schema, '', 'allOf', schema, 2],
      [schema.allOf[2].items[0], '/allOf/2/items/0', schema, '/allOf/2', 'items', schema.allOf[2], 0],
      [schema.allOf[2].items[0].properties.foo_items_0, '/allOf/2/items/0/properties/foo_items_0', schema, '/allOf/2/items/0', 'properties', schema.allOf[2].items[0], 'foo_items_0'],
      [schema.allOf[2].items[0].properties.bar_items_0, '/allOf/2/items/0/properties/bar_items_0', schema, '/allOf/2/items/0', 'properties', schema.allOf[2].items[0], 'bar_items_0'],
      [schema.allOf[2].items[0].anyOf[0], '/allOf/2/items/0/anyOf/0', schema, '/allOf/2/items/0', 'anyOf', schema.allOf[2].items[0], 0],
      [schema.allOf[2].items[0].anyOf[1], '/allOf/2/items/0/anyOf/1', schema, '/allOf/2/items/0', 'anyOf', schema.allOf[2].items[0], 1],

      [schema.allOf[2].items[1], '/allOf/2/items/1', schema, '/allOf/2', 'items', schema.allOf[2], 1],
      [schema.allOf[2].items[1].properties.foo_items_1, '/allOf/2/items/1/properties/foo_items_1', schema, '/allOf/2/items/1', 'properties', schema.allOf[2].items[1], 'foo_items_1'],
      [schema.allOf[2].items[1].properties.bar_items_1, '/allOf/2/items/1/properties/bar_items_1', schema, '/allOf/2/items/1', 'properties', schema.allOf[2].items[1], 'bar_items_1'],
      [schema.allOf[2].items[1].anyOf[0], '/allOf/2/items/1/anyOf/0', schema, '/allOf/2/items/1', 'anyOf', schema.allOf[2].items[1], 0],
      [schema.allOf[2].items[1].anyOf[1], '/allOf/2/items/1/anyOf/1', schema, '/allOf/2/items/1', 'anyOf', schema.allOf[2].items[1], 1]
    ])
    .concat(expectedCallsChild('anyOf', 0))
    .concat(expectedCallsChild('anyOf', 1))
    .concat(expectedCallsChild('oneOf', 0))
    .concat(expectedCallsChild('oneOf', 1))
    .concat(expectedCallsChild('definitions', 'foo'))
    .concat(expectedCallsChild('definitions', 'bar'))
    .concat(expectedCallsChild('properties', 'foo'))
    .concat(expectedCallsChild('properties', 'bar'))
    .concat(expectedCallsChild('patternProperties', 'foo'))
    .concat(expectedCallsChild('patternProperties', 'bar'))
    .concat(expectedCallsChild('dependencies', 'foo'))
    .concat(expectedCallsChild('dependencies', 'bar'))
};


function expectedCalls(keyword) {
  return [
    [schema[keyword], `/\${keyword}`, schema, '', keyword, schema, undefined],
    [schema[keyword].properties[`foo_\${keyword}`], `/\${keyword}/properties/foo_\${keyword}`, schema, `/\${keyword}`, 'properties', schema[keyword], `foo_\${keyword}`],
    [schema[keyword].properties[`bar_\${keyword}`], `/\${keyword}/properties/bar_\${keyword}`, schema, `/\${keyword}`, 'properties', schema[keyword], `bar_\${keyword}`],
    [schema[keyword].anyOf[0], `/\${keyword}/anyOf/0`, schema, `/\${keyword}`, 'anyOf', schema[keyword], 0],
    [schema[keyword].anyOf[1], `/\${keyword}/anyOf/1`, schema, `/\${keyword}`, 'anyOf', schema[keyword], 1]
  ];
}


function expectedCallsChild(keyword, i) {
  return [
    [schema[keyword][i], `/\${keyword}/\${i}`, schema, '', keyword, schema, i],
    [schema[keyword][i].properties[`foo_\${keyword}_\${i}`], `/\${keyword}/\${i}/properties/foo_\${keyword}_\${i}`, schema, `/\${keyword}/\${i}`, 'properties', schema[keyword][i], `foo_\${keyword}_\${i}`],
    [schema[keyword][i].properties[`bar_\${keyword}_\${i}`], `/\${keyword}/\${i}/properties/bar_\${keyword}_\${i}`, schema, `/\${keyword}/\${i}`, 'properties', schema[keyword][i], `bar_\${keyword}_\${i}`],
    [schema[keyword][i].anyOf[0], `/\${keyword}/\${i}/anyOf/0`, schema, `/\${keyword}/\${i}`, 'anyOf', schema[keyword][i], 0],
    [schema[keyword][i].anyOf[1], `/\${keyword}/\${i}/anyOf/1`, schema, `/\${keyword}/\${i}`, 'anyOf', schema[keyword][i], 1]
  ];
}
", "node_modules/json-schema-traverse/spec/fixtures/schema.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema-traverse/spec/fixtures/schema.js");
    }
}
