<?php

/* node_modules/ajv-keywords/README.md */
class __TwigTemplate_33725c4abaae157787e9fa0224e3cbdd30f6ac3ad8b39803a02cb1c9bbe76ca5 extends Twig_Template
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
        $__internal_92e520589b2fc2ec2a714ca13750a70b4faa1fe469d42d4adb0c6296ef5207a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e520589b2fc2ec2a714ca13750a70b4faa1fe469d42d4adb0c6296ef5207a8->enter($__internal_92e520589b2fc2ec2a714ca13750a70b4faa1fe469d42d4adb0c6296ef5207a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv-keywords/README.md"));

        // line 1
        echo "# ajv-keywords

Custom JSON-Schema keywords for [Ajv](https://github.com/epoberezkin/ajv) validator

[![Build Status](https://travis-ci.org/epoberezkin/ajv-keywords.svg?branch=master)](https://travis-ci.org/epoberezkin/ajv-keywords)
[![npm version](https://badge.fury.io/js/ajv-keywords.svg)](https://www.npmjs.com/package/ajv-keywords)
[![npm downloads](https://img.shields.io/npm/dm/ajv-keywords.svg)](https://www.npmjs.com/package/ajv-keywords)
[![Coverage Status](https://coveralls.io/repos/github/epoberezkin/ajv-keywords/badge.svg?branch=master)](https://coveralls.io/github/epoberezkin/ajv-keywords?branch=master)
[![Greenkeeper badge](https://badges.greenkeeper.io/epoberezkin/ajv-keywords.svg)](https://greenkeeper.io/)
[![Gitter](https://img.shields.io/gitter/room/ajv-validator/ajv.svg)](https://gitter.im/ajv-validator/ajv)


## Contents

- [Install](#install)
- [Usage](#usage)
- [Keywords](#keywords)
  - [typeof](#typeof)
  - [instanceof](#instanceof)
  - [range and exclusiveRange](#range-and-exclusiverange)
  - [if/then/else](#ifthenelse)
  - [switch](#switch)
  - [select/selectCases/selectDefault](#selectselectcasesselectdefault) (BETA)
  - [patternRequired](#patternrequired)
  - [prohibited](#prohibited)
  - [deepProperties](#deepproperties)
  - [deepRequired](#deeprequired)
  - [uniqueItemProperties](#uniqueitemproperties)
  - [regexp](#regexp)
  - [formatMaximum / formatMinimum and formatExclusiveMaximum / formatExclusiveMinimum](#formatmaximum--formatminimum-and-formatexclusivemaximum--formatexclusiveminimum)
  - [dynamicDefaults](#dynamicdefaults)
- [License](#license)


## Install

```
npm install ajv-keywords
```


## Usage

To add all available keywords:

```javascript
var Ajv = require('ajv');
var ajv = new Ajv;
require('ajv-keywords')(ajv);

ajv.validate({ instanceof: 'RegExp' }, /.*/); // true
ajv.validate({ instanceof: 'RegExp' }, '.*'); // false
```

To add a single keyword:

```javascript
require('ajv-keywords')(ajv, 'instanceof');
```

To add multiple keywords:

```javascript
require('ajv-keywords')(ajv, ['typeof', 'instanceof']);
```

To add a single keyword in browser (to avoid adding unused code):

```javascript
require('ajv-keywords/keywords/instanceof')(ajv);
```


## Keywords

### `typeof`

Based on JavaScript `typeof` operation.

The value of the keyword should be a string (`\"undefined\"`, `\"string\"`, `\"number\"`, `\"object\"`, `\"function\"`, `\"boolean\"` or `\"symbol\"`) or array of strings.

To pass validation the result of `typeof` operation on the value should be equal to the string (or one of the strings in the array).

```
ajv.validate({ typeof: 'undefined' }, undefined); // true
ajv.validate({ typeof: 'undefined' }, null); // false
ajv.validate({ typeof: ['undefined', 'object'] }, null); // true
```


### `instanceof`

Based on JavaScript `instanceof` operation.

The value of the keyword should be a string (`\"Object\"`, `\"Array\"`, `\"Function\"`, `\"Number\"`, `\"String\"`, `\"Date\"`, `\"RegExp\"` or `\"Buffer\"`) or array of strings.

To pass validation the result of `data instanceof ...` operation on the value should be true:

```
ajv.validate({ instanceof: 'Array' }, []); // true
ajv.validate({ instanceof: 'Array' }, {}); // false
ajv.validate({ instanceof: ['Array', 'Function'] }, function(){}); // true
```

You can add your own constructor function to be recognised by this keyword:

```javascript
function MyClass() {}
var instanceofDefinition = require('ajv-keywords').get('instanceof').definition;
// or require('ajv-keywords/keywords/instanceof').definition;
instanceofDefinition.CONSTRUCTORS.MyClass = MyClass;

ajv.validate({ instanceof: 'MyClass' }, new MyClass); // true
```


### `range` and `exclusiveRange`

Syntax sugar for the combination of minimum and maximum keywords, also fails schema compilation if there are no numbers in the range.

The value of this keyword must be the array consisting of two numbers, the second must be greater or equal than the first one.

If the validated value is not a number the validation passes, otherwise to pass validation the value should be greater (or equal) than the first number and smaller (or equal) than the second number in the array. If `exclusiveRange` keyword is present in the same schema and its value is true, the validated value must not be equal to the range boundaries.

```javascript
var schema = { range: [1, 3] };
ajv.validate(schema, 1); // true
ajv.validate(schema, 2); // true
ajv.validate(schema, 3); // true
ajv.validate(schema, 0.99); // false
ajv.validate(schema, 3.01); // false

var schema = { range: [1, 3], exclusiveRange: true };
ajv.validate(schema, 1.01); // true
ajv.validate(schema, 2); // true
ajv.validate(schema, 2.99); // true
ajv.validate(schema, 1); // false
ajv.validate(schema, 3); // false
```


### `if`/`then`/`else`

These keywords allow to implement conditional validation. Their values should be valid JSON-schemas.

If the data is valid according to the sub-schema in `if` keyword, then the result is equal to the result of data validation against the sub-schema in `then` keyword, otherwise - in `else` keyword (if `else` is absent, the validation succeeds).

```javascript
require('ajv-keywords')(ajv, 'if');

var schema = {
  type: 'array',
  items: {
    type: 'integer',
    minimum: 1,
    if: { maximum: 10 },
    then: { multipleOf: 2 },
    else: { multipleOf: 5 }
  }
};

var validItems = [ 2, 4, 6, 8, 10, 15, 20, 25 ]; // etc.

var invalidItems = [ 1, 3, 5, 11, 12 ]; // etc.

ajv.validate(schema, validItems); // true
ajv.validate(schema, invalidItems); // false
```

This keyword is [proposed](https://github.com/json-schema-org/json-schema-spec/issues/180) for the future version of JSON-Schema standard.


### `switch`

This keyword allows to perform advanced conditional validation.

The value of the keyword is the array of if/then clauses. Each clause is the object with the following properties:

- `if` (optional) - the value is JSON-schema
- `then` (required) - the value is JSON-schema or boolean
- `continue` (optional) - the value is boolean

The validation process is dynamic; all clauses are executed sequentially in the following way:

1. `if`:
    1.  `if` property is JSON-schema according to which the data is:
        1.  valid => go to step 2.
        2.  invalid => go to the NEXT clause, if this was the last clause the validation of `switch` SUCCEEDS.
    2.  `if` property is absent => go to step 2.
2. `then`:
    1.  `then` property is `true` or it is JSON-schema according to which the data is valid => go to step 3.
    2.  `then` property is `false` or it is JSON-schema according to which the data is invalid => the validation of `switch` FAILS.
3. `continue`:
    1.  `continue` property is `true` => go to the NEXT clause, if this was the last clause the validation of `switch` SUCCEEDS.
    2.  `continue` property is `false` or absent => validation of `switch` SUCCEEDS.

```javascript
require('ajv-keywords')(ajv, 'switch');

var schema = {
  type: 'array',
  items: {
    type: 'integer',
    'switch': [
      { if: { not: { minimum: 1 } }, then: false },
      { if: { maximum: 10 }, then: true },
      { if: { maximum: 100 }, then: { multipleOf: 10 } },
      { if: { maximum: 1000 }, then: { multipleOf: 100 } },
      { then: false }
    ]
  }
};

var validItems = [1, 5, 10, 20, 50, 100, 200, 500, 1000];

var invalidItems = [1, 0, 2000, 11, 57, 123, 'foo'];
```

__Please note__: this keyword is moved here from Ajv, mainly to preserve beckward compatibility. It is unlikely to become a standard. It's preferreable to use `if`/`then`/`else` keywords if possible, as they are likely to be added to the standard. The above schema is equivalent to (for example):

```javascript
{
  type: 'array',
  items: {
    type: 'integer',
    if: { minimum: 1, maximum: 10 },
    then: true,
    else: {
      if: { maximum: 100 },
      then: { multipleOf: 10 },
      else: {
        if: { maximum: 1000 },
        then: { multipleOf: 100 },
        else: false
      }
    }
  }
}
```


### `select`/`selectCases`/`selectDefault`

These keywords allow to choose the schema to validate the data based on the value of some property in the validated data.

These keywords must be present in the same schema object (`selectDefault` is optional).

The value of `select` keyword should be a [\$data reference](https://github.com/epoberezkin/ajv/tree/5.0.2-beta.0#data-reference) that points to any primitive JSON type (string, number, boolean or null) in the data that is validated. You can also use a constant of primitive type as the value of this keyword (e.g., for debugging purposes).

The value of `selectCases` keyword must be an object where each property name is a possible string representation of the value of `select` keyword and each property value is a corresponding schema (from draft-06 it can be boolean) that must be used to validate the data.

The value of `selectDefault` keyword is a schema (from draft-06 it can be boolean) that must be used to validate the data in case `selectCases` has no key equal to the stringified value of `select` keyword.

The validation succeeds in one of the following cases:
- the validation of data using selected schema succeeds,
- none of the schemas is selected for validation,
- the value of select is undefined (no property in the data that the data reference points to).

If `select` value (in data) is not a primitive type the validation fails.

__Please note__: these keywords require Ajv `\$data` option to support [\$data reference](https://github.com/epoberezkin/ajv/tree/5.0.2-beta.0#data-reference).


```javascript
require('ajv-keywords')(ajv, 'select');

var schema = {
  type: object,
  required: ['kind'],
  properties: {
    kind: { type: 'string' }
  },
  select: { \$data: '0/kind' },
  selectCases: {
    foo: {
      required: ['foo'],
      properties: {
        kind: {},
        foo: { type: 'string' }
      },
      additionalProperties: false
    },
    bar: {
      required: ['bar'],
      properties: {
        kind: {},
        bar: { type: 'number' }
      },
      additionalProperties: false
    }
  },
  selectDefault: {
    propertyNames: {
      not: { enum: ['foo', 'bar'] }
    }
  }
};

var validDataList = [
  { kind: 'foo', foo: 'any' },
  { kind: 'bar', bar: 1 },
  { kind: 'anything_else', not_bar_or_foo: 'any value' }
];

var invalidDataList = [
  { kind: 'foo' }, // no propery foo
  { kind: 'bar' }, // no propery bar
  { kind: 'foo', foo: 'any', another: 'any value' }, // additional property
  { kind: 'bar', bar: 1, another: 'any value' }, // additional property
  { kind: 'anything_else', foo: 'any' } // property foo not allowed
  { kind: 'anything_else', bar: 1 } // property bar not allowed
];
```

__Please note__: the current implementation is BETA. It does not allow using relative URIs in \$ref keywords in schemas in `selectCases` and `selectDefault` that point ouside of these schemas. The workaround is to use absolute URIs (that can point to any (sub-)schema added to Ajv, including those inside the current root schema where `select` is used). See [tests](https://github.com/epoberezkin/ajv-keywords/blob/v2.0.0/spec/tests/select.json#L314).


### `patternRequired`

This keyword allows to require the presense of properties that match some pattern(s).

This keyword applies only to objects. If the data is not an object, the validation succeeds.

The value of this keyword should be an array of strings, each string being a regular expression. For data object to be valid each regular expression in this array should match at least one property name in the data object.

If the array contains multiple regular expressions, more than one expression can match the same property name.

```javascript
var schema = { patternRequired: [ 'f.*o', 'b.*r' ] };

var validData = { foo: 1, bar: 2 };
var alsoValidData = { foobar: 3 };

var invalidDataList = [ {}, { foo: 1 }, { bar: 2 } ];
```


### `prohibited`

This keyword allows to prohibit that any of the properties in the list is present in the object.

This keyword applies only to objects. If the data is not an object, the validation succeeds.

The value of this keyword should be an array of strings, each string being a property name. For data object to be valid none of the properties in this array should be present in the object.

```
var schema = { prohibited: ['foo', 'bar']};

var validData = { baz: 1 };
var alsoValidData = {};

var invalidDataList = [
  { foo: 1 },
  { bar: 2 },
  { foo: 1, bar: 2}
];
```


### `deepProperties`

This keyword allows to validate deep properties (identified by JSON pointers).

This keyword applies only to objects. If the data is not an object, the validation succeeds.

The value should be an object, where keys are JSON pointers to the data, starting from the current position in data, and the values are JSON schemas. For data object to be valid the value of each JSON pointer should be valid according to the corresponding schema.

```javascript
var schema = {
  type: 'object',
  deepProperties: {
    \"/users/1/role\": { \"enum\": [\"admin\"] }
  }
};

var validData = {
  users: [
    {},
    {
      id: 123,
      role: 'admin'
    }
  ]
};

var alsoValidData = {
  users: {
    \"1\": {
      id: 123,
      role: 'admin'
    }
  }
};

var invalidData = {
  users: [
    {},
    {
      id: 123,
      role: 'user'
    }
  ]
};

var alsoInvalidData = {
  users: {
    \"1\": {
      id: 123,
      role: 'user'
    }
  }
};
```


### `deepRequired`

This keyword allows to check that some deep properties (identified by JSON pointers) are available.

This keyword applies only to objects. If the data is not an object, the validation succeeds.

The value should be an array of JSON pointers to the data, starting from the current position in data. For data object to be valid each JSON pointer should be some existing part of the data.

```javascript
var schema = {
  type: 'object',
  deepRequired: [\"/users/1/role\"]
};

var validData = {
  users: [
    {},
    {
      id: 123,
      role: 'admin'
    }
  ]
};

var invalidData = {
  users: [
    {},
    {
      id: 123
    }
  ]
};
```

See [json-schema-org/json-schema-spec#203](https://github.com/json-schema-org/json-schema-spec/issues/203#issue-197211916) for an example of the equivalent schema without `deepRequired` keyword.


### `uniqueItemProperties`

The keyword allows to check that some properties in array items are unique.

This keyword applies only to arrays. If the data is not an array, the validation succeeds.

The value of this keyword must be an array of strings - property names that should have unique values accross all items.

```javascript
var schema = { uniqueItemProperties: [ \"id\", \"name\" ] };

var validData = [
  { id: 1 },
  { id: 2 },
  { id: 3 }
];

var invalidData1 = [
  { id: 1 },
  { id: 1 },
  { id: 3 }
];

var invalidData2 = [
  { id: 1, name: \"taco\" },
  { id: 2, name: \"taco\" }, // duplicate \"name\"
  { id: 3, name: \"salsa\" }
];
```

This keyword is contributed by [@blainesch](https://github.com/blainesch).


### `regexp`

This keyword allows to use regular expressions with flags in schemas (the standard `pattern` keyword does not support flags).

This keyword applies only to strings. If the data is not a string, the validation succeeds.

The value of this keyword can be either a string (the result of `regexp.toString()`) or an object with the properties `pattern` and `flags` (the same strings that should be passed to RegExp constructor).

```javascript
var schema = {
  type: 'object',
  properties: {
    foo: { regexp: '/foo/i' },
    bar: { regexp: { pattern: 'bar', flags: 'i' } }
  }
};

var validData = {
  foo: 'Food',
  bar: 'Barmen'
};

var invalidData = {
  foo: 'fog',
  bar: 'bad'
};
```


### `formatMaximum` / `formatMinimum` and `formatExclusiveMaximum` / `formatExclusiveMinimum`

These keywords allow to define minimum/maximum constraints when the format keyword defines ordering.

These keywords apply only to strings. If the data is not a string, the validation succeeds.

The value of keyword `formatMaximum` (`formatMinimum`) should be a string. This value is the maximum (minimum) allowed value for the data to be valid as determined by `format` keyword.

When this keyword is added, it defines comparison rules for formats `\"date\"`, `\"time\"` and `\"date-time\". Custom formats also can have comparison rules. See [addFormat](https://github.com/epoberezkin/ajv#api-addformat) method.

The value of keyword `formatExclusiveMaximum` (`formatExclusiveMinimum`) should be a boolean value. These keyword cannot be used without `formatMaximum` (`formatMinimum`). If this keyword value is equal to `true`, the data to be valid should not be equal to the value in `formatMaximum` (`formatMinimum`) keyword.

```javascript
require('ajv-keywords')(ajv, ['formatMinimum', 'formatMaximum']);

var schema = {
  format: 'date',
  formatMinimum: '2016-02-06',
  formatMaximum: '2016-12-27',
  formatExclusiveMaximum: true
}

var validDataList = ['2016-02-06', '2016-12-26', 1];

var invalidDataList = ['2016-02-05', '2016-12-27', 'abc'];
```


### `dynamicDefaults`

This keyword allows to assign dynamic defaults to properties, such as timestamps, unique IDs etc.

This keyword only works if `useDefaults` options is used and not inside `anyOf` keywrods etc., in the same way as [default keyword treated by Ajv](https://github.com/epoberezkin/ajv#assigning-defaults).

The keyword should be added on the object level. Its value should be an object with each property corresponding to a property name, in the same way as in standard `properties` keyword. The value of each property can be:

- an identifier of default function (a string)
- an object with properties `func` (an identifier) and `args` (an object with parameters that will be passed to this function during schema compilation - see examples).

The properties used in `dynamicDefaults` should not be added to `required` keyword (or validation will fail), because unlike `default` this keyword is processed after validation.

There are several predefined dynamic default functions:

- `\"timestamp\"` - current timestamp in milliseconds
- `\"datetime\"` - current date and time as string (ISO, valid according to `date-time` format)
- `\"date\"` - current date as string (ISO, valid according to `date` format)
- `\"time\"` - current time as string (ISO, valid according to `time` format)
- `\"random\"` - pseudo-random number in [0, 1) interval
- `\"randomint\"` - pseudo-random integer number. If string is used as a property value, the function will randomly return 0 or 1. If object `{func: 'randomint', max: N}` is used then the default will be an integer number in [0, N) interval.
- `\"seq\"` - sequential integer number starting from 0. If string is used as a property value, the default sequence will be used. If object `{func: 'seq', name: 'foo'}` is used then the sequence with name `\"foo\"` will be used. Sequences are global, even if different ajv instances are used.

```javascript
var schema = {
  type: 'object',
  dynamicDefaults: {
    ts: 'datetime',
    r: { func: 'randomint', max: 100 },
    id: { func: 'seq', name: 'id' }
  },
  properties: {
    ts: {
      type: 'string',
      format: 'datetime'
    },
    r: {
      type: 'integer',
      minimum: 0,
      maximum: 100,
      exclusiveMaximum: true
    },
    id: {
      type: 'integer',
      minimum: 0
    }
  }
};

var data = {};
ajv.validate(data); // true
data; // { ts: '2016-12-01T22:07:28.829Z', r: 25, id: 0 }

var data1 = {};
ajv.validate(data1); // true
data1; // { ts: '2016-12-01T22:07:29.832Z', r: 68, id: 1 }

ajv.validate(data1); // true
data1; // didn't change, as all properties were defined
```

You can add your own dynamic default function to be recognised by this keyword:

```javascript
var uuid = require('uuid');

function uuidV4() { return uuid.v4(); }

var definition = require('ajv-keywords').get('dynamicDefaults').definition;
// or require('ajv-keywords/keywords/dynamicDefaults').definition;
definition.DEFAULTS.uuid = uuidV4;

var schema = {
  dynamicDefaults: { id: 'uuid' },
  properties: { id: { type: 'string', format: 'uuid' } }
};

var data = {};
ajv.validate(schema, data); // true
data; // { id: 'a1183fbe-697b-4030-9bcc-cfeb282a9150' };

var data1 = {};
ajv.validate(schema, data1); // true
data1; // { id: '5b008de7-1669-467a-a5c6-70fa244d7209' }
```

You also can define dynamic default that accepts parameters, e.g. version of uuid:

```javascript
var uuid = require('uuid');

function getUuid(args) {
  var version = 'v' + (arvs && args.v || 4);
  return function() {
    return uuid[version]();
  };
}

var definition = require('ajv-keywords').get('dynamicDefaults').definition;
definition.DEFAULTS.uuid = getUuid;

var schema = {
  dynamicDefaults: {
    id1: 'uuid', // v4
    id2: { func: 'uuid', v: 4 }, // v4
    id3: { func: 'uuid', v: 1 } // v1
  }
};
```


## License

[MIT](https://github.com/epoberezkin/ajv-keywords/blob/master/LICENSE)
";
        
        $__internal_92e520589b2fc2ec2a714ca13750a70b4faa1fe469d42d4adb0c6296ef5207a8->leave($__internal_92e520589b2fc2ec2a714ca13750a70b4faa1fe469d42d4adb0c6296ef5207a8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv-keywords/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# ajv-keywords

Custom JSON-Schema keywords for [Ajv](https://github.com/epoberezkin/ajv) validator

[![Build Status](https://travis-ci.org/epoberezkin/ajv-keywords.svg?branch=master)](https://travis-ci.org/epoberezkin/ajv-keywords)
[![npm version](https://badge.fury.io/js/ajv-keywords.svg)](https://www.npmjs.com/package/ajv-keywords)
[![npm downloads](https://img.shields.io/npm/dm/ajv-keywords.svg)](https://www.npmjs.com/package/ajv-keywords)
[![Coverage Status](https://coveralls.io/repos/github/epoberezkin/ajv-keywords/badge.svg?branch=master)](https://coveralls.io/github/epoberezkin/ajv-keywords?branch=master)
[![Greenkeeper badge](https://badges.greenkeeper.io/epoberezkin/ajv-keywords.svg)](https://greenkeeper.io/)
[![Gitter](https://img.shields.io/gitter/room/ajv-validator/ajv.svg)](https://gitter.im/ajv-validator/ajv)


## Contents

- [Install](#install)
- [Usage](#usage)
- [Keywords](#keywords)
  - [typeof](#typeof)
  - [instanceof](#instanceof)
  - [range and exclusiveRange](#range-and-exclusiverange)
  - [if/then/else](#ifthenelse)
  - [switch](#switch)
  - [select/selectCases/selectDefault](#selectselectcasesselectdefault) (BETA)
  - [patternRequired](#patternrequired)
  - [prohibited](#prohibited)
  - [deepProperties](#deepproperties)
  - [deepRequired](#deeprequired)
  - [uniqueItemProperties](#uniqueitemproperties)
  - [regexp](#regexp)
  - [formatMaximum / formatMinimum and formatExclusiveMaximum / formatExclusiveMinimum](#formatmaximum--formatminimum-and-formatexclusivemaximum--formatexclusiveminimum)
  - [dynamicDefaults](#dynamicdefaults)
- [License](#license)


## Install

```
npm install ajv-keywords
```


## Usage

To add all available keywords:

```javascript
var Ajv = require('ajv');
var ajv = new Ajv;
require('ajv-keywords')(ajv);

ajv.validate({ instanceof: 'RegExp' }, /.*/); // true
ajv.validate({ instanceof: 'RegExp' }, '.*'); // false
```

To add a single keyword:

```javascript
require('ajv-keywords')(ajv, 'instanceof');
```

To add multiple keywords:

```javascript
require('ajv-keywords')(ajv, ['typeof', 'instanceof']);
```

To add a single keyword in browser (to avoid adding unused code):

```javascript
require('ajv-keywords/keywords/instanceof')(ajv);
```


## Keywords

### `typeof`

Based on JavaScript `typeof` operation.

The value of the keyword should be a string (`\"undefined\"`, `\"string\"`, `\"number\"`, `\"object\"`, `\"function\"`, `\"boolean\"` or `\"symbol\"`) or array of strings.

To pass validation the result of `typeof` operation on the value should be equal to the string (or one of the strings in the array).

```
ajv.validate({ typeof: 'undefined' }, undefined); // true
ajv.validate({ typeof: 'undefined' }, null); // false
ajv.validate({ typeof: ['undefined', 'object'] }, null); // true
```


### `instanceof`

Based on JavaScript `instanceof` operation.

The value of the keyword should be a string (`\"Object\"`, `\"Array\"`, `\"Function\"`, `\"Number\"`, `\"String\"`, `\"Date\"`, `\"RegExp\"` or `\"Buffer\"`) or array of strings.

To pass validation the result of `data instanceof ...` operation on the value should be true:

```
ajv.validate({ instanceof: 'Array' }, []); // true
ajv.validate({ instanceof: 'Array' }, {}); // false
ajv.validate({ instanceof: ['Array', 'Function'] }, function(){}); // true
```

You can add your own constructor function to be recognised by this keyword:

```javascript
function MyClass() {}
var instanceofDefinition = require('ajv-keywords').get('instanceof').definition;
// or require('ajv-keywords/keywords/instanceof').definition;
instanceofDefinition.CONSTRUCTORS.MyClass = MyClass;

ajv.validate({ instanceof: 'MyClass' }, new MyClass); // true
```


### `range` and `exclusiveRange`

Syntax sugar for the combination of minimum and maximum keywords, also fails schema compilation if there are no numbers in the range.

The value of this keyword must be the array consisting of two numbers, the second must be greater or equal than the first one.

If the validated value is not a number the validation passes, otherwise to pass validation the value should be greater (or equal) than the first number and smaller (or equal) than the second number in the array. If `exclusiveRange` keyword is present in the same schema and its value is true, the validated value must not be equal to the range boundaries.

```javascript
var schema = { range: [1, 3] };
ajv.validate(schema, 1); // true
ajv.validate(schema, 2); // true
ajv.validate(schema, 3); // true
ajv.validate(schema, 0.99); // false
ajv.validate(schema, 3.01); // false

var schema = { range: [1, 3], exclusiveRange: true };
ajv.validate(schema, 1.01); // true
ajv.validate(schema, 2); // true
ajv.validate(schema, 2.99); // true
ajv.validate(schema, 1); // false
ajv.validate(schema, 3); // false
```


### `if`/`then`/`else`

These keywords allow to implement conditional validation. Their values should be valid JSON-schemas.

If the data is valid according to the sub-schema in `if` keyword, then the result is equal to the result of data validation against the sub-schema in `then` keyword, otherwise - in `else` keyword (if `else` is absent, the validation succeeds).

```javascript
require('ajv-keywords')(ajv, 'if');

var schema = {
  type: 'array',
  items: {
    type: 'integer',
    minimum: 1,
    if: { maximum: 10 },
    then: { multipleOf: 2 },
    else: { multipleOf: 5 }
  }
};

var validItems = [ 2, 4, 6, 8, 10, 15, 20, 25 ]; // etc.

var invalidItems = [ 1, 3, 5, 11, 12 ]; // etc.

ajv.validate(schema, validItems); // true
ajv.validate(schema, invalidItems); // false
```

This keyword is [proposed](https://github.com/json-schema-org/json-schema-spec/issues/180) for the future version of JSON-Schema standard.


### `switch`

This keyword allows to perform advanced conditional validation.

The value of the keyword is the array of if/then clauses. Each clause is the object with the following properties:

- `if` (optional) - the value is JSON-schema
- `then` (required) - the value is JSON-schema or boolean
- `continue` (optional) - the value is boolean

The validation process is dynamic; all clauses are executed sequentially in the following way:

1. `if`:
    1.  `if` property is JSON-schema according to which the data is:
        1.  valid => go to step 2.
        2.  invalid => go to the NEXT clause, if this was the last clause the validation of `switch` SUCCEEDS.
    2.  `if` property is absent => go to step 2.
2. `then`:
    1.  `then` property is `true` or it is JSON-schema according to which the data is valid => go to step 3.
    2.  `then` property is `false` or it is JSON-schema according to which the data is invalid => the validation of `switch` FAILS.
3. `continue`:
    1.  `continue` property is `true` => go to the NEXT clause, if this was the last clause the validation of `switch` SUCCEEDS.
    2.  `continue` property is `false` or absent => validation of `switch` SUCCEEDS.

```javascript
require('ajv-keywords')(ajv, 'switch');

var schema = {
  type: 'array',
  items: {
    type: 'integer',
    'switch': [
      { if: { not: { minimum: 1 } }, then: false },
      { if: { maximum: 10 }, then: true },
      { if: { maximum: 100 }, then: { multipleOf: 10 } },
      { if: { maximum: 1000 }, then: { multipleOf: 100 } },
      { then: false }
    ]
  }
};

var validItems = [1, 5, 10, 20, 50, 100, 200, 500, 1000];

var invalidItems = [1, 0, 2000, 11, 57, 123, 'foo'];
```

__Please note__: this keyword is moved here from Ajv, mainly to preserve beckward compatibility. It is unlikely to become a standard. It's preferreable to use `if`/`then`/`else` keywords if possible, as they are likely to be added to the standard. The above schema is equivalent to (for example):

```javascript
{
  type: 'array',
  items: {
    type: 'integer',
    if: { minimum: 1, maximum: 10 },
    then: true,
    else: {
      if: { maximum: 100 },
      then: { multipleOf: 10 },
      else: {
        if: { maximum: 1000 },
        then: { multipleOf: 100 },
        else: false
      }
    }
  }
}
```


### `select`/`selectCases`/`selectDefault`

These keywords allow to choose the schema to validate the data based on the value of some property in the validated data.

These keywords must be present in the same schema object (`selectDefault` is optional).

The value of `select` keyword should be a [\$data reference](https://github.com/epoberezkin/ajv/tree/5.0.2-beta.0#data-reference) that points to any primitive JSON type (string, number, boolean or null) in the data that is validated. You can also use a constant of primitive type as the value of this keyword (e.g., for debugging purposes).

The value of `selectCases` keyword must be an object where each property name is a possible string representation of the value of `select` keyword and each property value is a corresponding schema (from draft-06 it can be boolean) that must be used to validate the data.

The value of `selectDefault` keyword is a schema (from draft-06 it can be boolean) that must be used to validate the data in case `selectCases` has no key equal to the stringified value of `select` keyword.

The validation succeeds in one of the following cases:
- the validation of data using selected schema succeeds,
- none of the schemas is selected for validation,
- the value of select is undefined (no property in the data that the data reference points to).

If `select` value (in data) is not a primitive type the validation fails.

__Please note__: these keywords require Ajv `\$data` option to support [\$data reference](https://github.com/epoberezkin/ajv/tree/5.0.2-beta.0#data-reference).


```javascript
require('ajv-keywords')(ajv, 'select');

var schema = {
  type: object,
  required: ['kind'],
  properties: {
    kind: { type: 'string' }
  },
  select: { \$data: '0/kind' },
  selectCases: {
    foo: {
      required: ['foo'],
      properties: {
        kind: {},
        foo: { type: 'string' }
      },
      additionalProperties: false
    },
    bar: {
      required: ['bar'],
      properties: {
        kind: {},
        bar: { type: 'number' }
      },
      additionalProperties: false
    }
  },
  selectDefault: {
    propertyNames: {
      not: { enum: ['foo', 'bar'] }
    }
  }
};

var validDataList = [
  { kind: 'foo', foo: 'any' },
  { kind: 'bar', bar: 1 },
  { kind: 'anything_else', not_bar_or_foo: 'any value' }
];

var invalidDataList = [
  { kind: 'foo' }, // no propery foo
  { kind: 'bar' }, // no propery bar
  { kind: 'foo', foo: 'any', another: 'any value' }, // additional property
  { kind: 'bar', bar: 1, another: 'any value' }, // additional property
  { kind: 'anything_else', foo: 'any' } // property foo not allowed
  { kind: 'anything_else', bar: 1 } // property bar not allowed
];
```

__Please note__: the current implementation is BETA. It does not allow using relative URIs in \$ref keywords in schemas in `selectCases` and `selectDefault` that point ouside of these schemas. The workaround is to use absolute URIs (that can point to any (sub-)schema added to Ajv, including those inside the current root schema where `select` is used). See [tests](https://github.com/epoberezkin/ajv-keywords/blob/v2.0.0/spec/tests/select.json#L314).


### `patternRequired`

This keyword allows to require the presense of properties that match some pattern(s).

This keyword applies only to objects. If the data is not an object, the validation succeeds.

The value of this keyword should be an array of strings, each string being a regular expression. For data object to be valid each regular expression in this array should match at least one property name in the data object.

If the array contains multiple regular expressions, more than one expression can match the same property name.

```javascript
var schema = { patternRequired: [ 'f.*o', 'b.*r' ] };

var validData = { foo: 1, bar: 2 };
var alsoValidData = { foobar: 3 };

var invalidDataList = [ {}, { foo: 1 }, { bar: 2 } ];
```


### `prohibited`

This keyword allows to prohibit that any of the properties in the list is present in the object.

This keyword applies only to objects. If the data is not an object, the validation succeeds.

The value of this keyword should be an array of strings, each string being a property name. For data object to be valid none of the properties in this array should be present in the object.

```
var schema = { prohibited: ['foo', 'bar']};

var validData = { baz: 1 };
var alsoValidData = {};

var invalidDataList = [
  { foo: 1 },
  { bar: 2 },
  { foo: 1, bar: 2}
];
```


### `deepProperties`

This keyword allows to validate deep properties (identified by JSON pointers).

This keyword applies only to objects. If the data is not an object, the validation succeeds.

The value should be an object, where keys are JSON pointers to the data, starting from the current position in data, and the values are JSON schemas. For data object to be valid the value of each JSON pointer should be valid according to the corresponding schema.

```javascript
var schema = {
  type: 'object',
  deepProperties: {
    \"/users/1/role\": { \"enum\": [\"admin\"] }
  }
};

var validData = {
  users: [
    {},
    {
      id: 123,
      role: 'admin'
    }
  ]
};

var alsoValidData = {
  users: {
    \"1\": {
      id: 123,
      role: 'admin'
    }
  }
};

var invalidData = {
  users: [
    {},
    {
      id: 123,
      role: 'user'
    }
  ]
};

var alsoInvalidData = {
  users: {
    \"1\": {
      id: 123,
      role: 'user'
    }
  }
};
```


### `deepRequired`

This keyword allows to check that some deep properties (identified by JSON pointers) are available.

This keyword applies only to objects. If the data is not an object, the validation succeeds.

The value should be an array of JSON pointers to the data, starting from the current position in data. For data object to be valid each JSON pointer should be some existing part of the data.

```javascript
var schema = {
  type: 'object',
  deepRequired: [\"/users/1/role\"]
};

var validData = {
  users: [
    {},
    {
      id: 123,
      role: 'admin'
    }
  ]
};

var invalidData = {
  users: [
    {},
    {
      id: 123
    }
  ]
};
```

See [json-schema-org/json-schema-spec#203](https://github.com/json-schema-org/json-schema-spec/issues/203#issue-197211916) for an example of the equivalent schema without `deepRequired` keyword.


### `uniqueItemProperties`

The keyword allows to check that some properties in array items are unique.

This keyword applies only to arrays. If the data is not an array, the validation succeeds.

The value of this keyword must be an array of strings - property names that should have unique values accross all items.

```javascript
var schema = { uniqueItemProperties: [ \"id\", \"name\" ] };

var validData = [
  { id: 1 },
  { id: 2 },
  { id: 3 }
];

var invalidData1 = [
  { id: 1 },
  { id: 1 },
  { id: 3 }
];

var invalidData2 = [
  { id: 1, name: \"taco\" },
  { id: 2, name: \"taco\" }, // duplicate \"name\"
  { id: 3, name: \"salsa\" }
];
```

This keyword is contributed by [@blainesch](https://github.com/blainesch).


### `regexp`

This keyword allows to use regular expressions with flags in schemas (the standard `pattern` keyword does not support flags).

This keyword applies only to strings. If the data is not a string, the validation succeeds.

The value of this keyword can be either a string (the result of `regexp.toString()`) or an object with the properties `pattern` and `flags` (the same strings that should be passed to RegExp constructor).

```javascript
var schema = {
  type: 'object',
  properties: {
    foo: { regexp: '/foo/i' },
    bar: { regexp: { pattern: 'bar', flags: 'i' } }
  }
};

var validData = {
  foo: 'Food',
  bar: 'Barmen'
};

var invalidData = {
  foo: 'fog',
  bar: 'bad'
};
```


### `formatMaximum` / `formatMinimum` and `formatExclusiveMaximum` / `formatExclusiveMinimum`

These keywords allow to define minimum/maximum constraints when the format keyword defines ordering.

These keywords apply only to strings. If the data is not a string, the validation succeeds.

The value of keyword `formatMaximum` (`formatMinimum`) should be a string. This value is the maximum (minimum) allowed value for the data to be valid as determined by `format` keyword.

When this keyword is added, it defines comparison rules for formats `\"date\"`, `\"time\"` and `\"date-time\". Custom formats also can have comparison rules. See [addFormat](https://github.com/epoberezkin/ajv#api-addformat) method.

The value of keyword `formatExclusiveMaximum` (`formatExclusiveMinimum`) should be a boolean value. These keyword cannot be used without `formatMaximum` (`formatMinimum`). If this keyword value is equal to `true`, the data to be valid should not be equal to the value in `formatMaximum` (`formatMinimum`) keyword.

```javascript
require('ajv-keywords')(ajv, ['formatMinimum', 'formatMaximum']);

var schema = {
  format: 'date',
  formatMinimum: '2016-02-06',
  formatMaximum: '2016-12-27',
  formatExclusiveMaximum: true
}

var validDataList = ['2016-02-06', '2016-12-26', 1];

var invalidDataList = ['2016-02-05', '2016-12-27', 'abc'];
```


### `dynamicDefaults`

This keyword allows to assign dynamic defaults to properties, such as timestamps, unique IDs etc.

This keyword only works if `useDefaults` options is used and not inside `anyOf` keywrods etc., in the same way as [default keyword treated by Ajv](https://github.com/epoberezkin/ajv#assigning-defaults).

The keyword should be added on the object level. Its value should be an object with each property corresponding to a property name, in the same way as in standard `properties` keyword. The value of each property can be:

- an identifier of default function (a string)
- an object with properties `func` (an identifier) and `args` (an object with parameters that will be passed to this function during schema compilation - see examples).

The properties used in `dynamicDefaults` should not be added to `required` keyword (or validation will fail), because unlike `default` this keyword is processed after validation.

There are several predefined dynamic default functions:

- `\"timestamp\"` - current timestamp in milliseconds
- `\"datetime\"` - current date and time as string (ISO, valid according to `date-time` format)
- `\"date\"` - current date as string (ISO, valid according to `date` format)
- `\"time\"` - current time as string (ISO, valid according to `time` format)
- `\"random\"` - pseudo-random number in [0, 1) interval
- `\"randomint\"` - pseudo-random integer number. If string is used as a property value, the function will randomly return 0 or 1. If object `{func: 'randomint', max: N}` is used then the default will be an integer number in [0, N) interval.
- `\"seq\"` - sequential integer number starting from 0. If string is used as a property value, the default sequence will be used. If object `{func: 'seq', name: 'foo'}` is used then the sequence with name `\"foo\"` will be used. Sequences are global, even if different ajv instances are used.

```javascript
var schema = {
  type: 'object',
  dynamicDefaults: {
    ts: 'datetime',
    r: { func: 'randomint', max: 100 },
    id: { func: 'seq', name: 'id' }
  },
  properties: {
    ts: {
      type: 'string',
      format: 'datetime'
    },
    r: {
      type: 'integer',
      minimum: 0,
      maximum: 100,
      exclusiveMaximum: true
    },
    id: {
      type: 'integer',
      minimum: 0
    }
  }
};

var data = {};
ajv.validate(data); // true
data; // { ts: '2016-12-01T22:07:28.829Z', r: 25, id: 0 }

var data1 = {};
ajv.validate(data1); // true
data1; // { ts: '2016-12-01T22:07:29.832Z', r: 68, id: 1 }

ajv.validate(data1); // true
data1; // didn't change, as all properties were defined
```

You can add your own dynamic default function to be recognised by this keyword:

```javascript
var uuid = require('uuid');

function uuidV4() { return uuid.v4(); }

var definition = require('ajv-keywords').get('dynamicDefaults').definition;
// or require('ajv-keywords/keywords/dynamicDefaults').definition;
definition.DEFAULTS.uuid = uuidV4;

var schema = {
  dynamicDefaults: { id: 'uuid' },
  properties: { id: { type: 'string', format: 'uuid' } }
};

var data = {};
ajv.validate(schema, data); // true
data; // { id: 'a1183fbe-697b-4030-9bcc-cfeb282a9150' };

var data1 = {};
ajv.validate(schema, data1); // true
data1; // { id: '5b008de7-1669-467a-a5c6-70fa244d7209' }
```

You also can define dynamic default that accepts parameters, e.g. version of uuid:

```javascript
var uuid = require('uuid');

function getUuid(args) {
  var version = 'v' + (arvs && args.v || 4);
  return function() {
    return uuid[version]();
  };
}

var definition = require('ajv-keywords').get('dynamicDefaults').definition;
definition.DEFAULTS.uuid = getUuid;

var schema = {
  dynamicDefaults: {
    id1: 'uuid', // v4
    id2: { func: 'uuid', v: 4 }, // v4
    id3: { func: 'uuid', v: 1 } // v1
  }
};
```


## License

[MIT](https://github.com/epoberezkin/ajv-keywords/blob/master/LICENSE)
", "node_modules/ajv-keywords/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv-keywords/README.md");
    }
}