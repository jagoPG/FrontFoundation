<?php

/* node_modules/error-ex/README.md */
class __TwigTemplate_dad84bbb494a4371df655125582214a7a4b0cac292753f140a7bdf732bcbcec1 extends Twig_Template
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
        $__internal_4d26ad3faa0d4ac05930b53c1f8d19c686ba12dd476a628a0dec9dcfafdef03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d26ad3faa0d4ac05930b53c1f8d19c686ba12dd476a628a0dec9dcfafdef03b->enter($__internal_4d26ad3faa0d4ac05930b53c1f8d19c686ba12dd476a628a0dec9dcfafdef03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/error-ex/README.md"));

        // line 1
        echo "# node-error-ex [![Travis-CI.org Build Status](https://img.shields.io/travis/Qix-/node-error-ex.svg?style=flat-square)](https://travis-ci.org/Qix-/node-error-ex) [![Coveralls.io Coverage Rating](https://img.shields.io/coveralls/Qix-/node-error-ex.svg?style=flat-square)](https://coveralls.io/r/Qix-/node-error-ex)
> Easily subclass and customize new Error types

## Examples
To include in your project:
```javascript
var errorEx = require('error-ex');
```

To create an error message type with a specific name (note, that `ErrorFn.name`
will not reflect this):
```javascript
var JSONError = errorEx('JSONError');

var err = new JSONError('error');
err.name; //-> JSONError
throw err; //-> JSONError: error
```

To add a stack line:
```javascript
var JSONError = errorEx('JSONError', {fileName: errorEx.line('in %s')});

var err = new JSONError('error')
err.fileName = '/a/b/c/foo.json';
throw err; //-> (line 2)-> in /a/b/c/foo.json
```

To append to the error message:
```javascript
var JSONError = errorEx('JSONError', {fileName: errorEx.append('in %s')});

var err = new JSONError('error');
err.fileName = '/a/b/c/foo.json';
throw err; //-> JSONError: error in /a/b/c/foo.json
```

## API

#### `errorEx([name], [properties])`
Creates a new ErrorEx error type

- `name`: the name of the new type (appears in the error message upon throw;
  defaults to `Error.name`)
- `properties`: if supplied, used as a key/value dictionary of properties to
  use when building up the stack message. Keys are property names that are
  looked up on the error message, and then passed to function values.
\t- `line`: if specified and is a function, return value is added as a stack
    entry (error-ex will indent for you). Passed the property value given
    the key.
  - `stack`: if specified and is a function, passed the value of the property
    using the key, and the raw stack lines as a second argument. Takes no
    return value (but the stack can be modified directly).
  - `message`: if specified and is a function, return value is used as new
    `.message` value upon get. Passed the property value of the property named
    by key, and the existing message is passed as the second argument as an
    array of lines (suitable for multi-line messages).

Returns a constructor (Function) that can be used just like the regular Error
constructor.

```javascript
var errorEx = require('error-ex');

var BasicError = errorEx();

var NamedError = errorEx('NamedError');

// --

var AdvancedError = errorEx('AdvancedError', {
\tfoo: {
\t\tline: function (value, stack) {
\t\t\tif (value) {
\t\t\t\treturn 'bar ' + value;
\t\t\t}
\t\t\treturn null;
\t\t}
\t}
}

var err = new AdvancedError('hello, world');
err.foo = 'baz';
throw err;

/*
\tAdvancedError: hello, world
\t    bar baz
\t    at tryReadme() (readme.js:20:1)
*/
```

#### `errorEx.line(str)`
Creates a stack line using a delimiter

> This is a helper function. It is to be used in lieu of writing a value object
> for `properties` values.

- `str`: The string to create
  - Use the delimiter `%s` to specify where in the string the value should go

```javascript
var errorEx = require('error-ex');

var FileError = errorEx('FileError', {fileName: errorEx.line('in %s')});

var err = new FileError('problem reading file');
err.fileName = '/a/b/c/d/foo.js';
throw err;

/*
\tFileError: problem reading file
\t    in /a/b/c/d/foo.js
\t    at tryReadme() (readme.js:7:1)
*/
```

#### `errorEx.append(str)`
Appends to the `error.message` string

> This is a helper function. It is to be used in lieu of writing a value object
> for `properties` values.

- `str`: The string to append
  - Use the delimiter `%s` to specify where in the string the value should go

```javascript
var errorEx = require('error-ex');

var SyntaxError = errorEx('SyntaxError', {fileName: errorEx.append('in %s')});

var err = new SyntaxError('improper indentation');
err.fileName = '/a/b/c/d/foo.js';
throw err;

/*
\tSyntaxError: improper indentation in /a/b/c/d/foo.js
\t    at tryReadme() (readme.js:7:1)
*/
```

## License
Licensed under the [MIT License](http://opensource.org/licenses/MIT).
You can find a copy of it in [LICENSE](LICENSE).
";
        
        $__internal_4d26ad3faa0d4ac05930b53c1f8d19c686ba12dd476a628a0dec9dcfafdef03b->leave($__internal_4d26ad3faa0d4ac05930b53c1f8d19c686ba12dd476a628a0dec9dcfafdef03b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/error-ex/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# node-error-ex [![Travis-CI.org Build Status](https://img.shields.io/travis/Qix-/node-error-ex.svg?style=flat-square)](https://travis-ci.org/Qix-/node-error-ex) [![Coveralls.io Coverage Rating](https://img.shields.io/coveralls/Qix-/node-error-ex.svg?style=flat-square)](https://coveralls.io/r/Qix-/node-error-ex)
> Easily subclass and customize new Error types

## Examples
To include in your project:
```javascript
var errorEx = require('error-ex');
```

To create an error message type with a specific name (note, that `ErrorFn.name`
will not reflect this):
```javascript
var JSONError = errorEx('JSONError');

var err = new JSONError('error');
err.name; //-> JSONError
throw err; //-> JSONError: error
```

To add a stack line:
```javascript
var JSONError = errorEx('JSONError', {fileName: errorEx.line('in %s')});

var err = new JSONError('error')
err.fileName = '/a/b/c/foo.json';
throw err; //-> (line 2)-> in /a/b/c/foo.json
```

To append to the error message:
```javascript
var JSONError = errorEx('JSONError', {fileName: errorEx.append('in %s')});

var err = new JSONError('error');
err.fileName = '/a/b/c/foo.json';
throw err; //-> JSONError: error in /a/b/c/foo.json
```

## API

#### `errorEx([name], [properties])`
Creates a new ErrorEx error type

- `name`: the name of the new type (appears in the error message upon throw;
  defaults to `Error.name`)
- `properties`: if supplied, used as a key/value dictionary of properties to
  use when building up the stack message. Keys are property names that are
  looked up on the error message, and then passed to function values.
\t- `line`: if specified and is a function, return value is added as a stack
    entry (error-ex will indent for you). Passed the property value given
    the key.
  - `stack`: if specified and is a function, passed the value of the property
    using the key, and the raw stack lines as a second argument. Takes no
    return value (but the stack can be modified directly).
  - `message`: if specified and is a function, return value is used as new
    `.message` value upon get. Passed the property value of the property named
    by key, and the existing message is passed as the second argument as an
    array of lines (suitable for multi-line messages).

Returns a constructor (Function) that can be used just like the regular Error
constructor.

```javascript
var errorEx = require('error-ex');

var BasicError = errorEx();

var NamedError = errorEx('NamedError');

// --

var AdvancedError = errorEx('AdvancedError', {
\tfoo: {
\t\tline: function (value, stack) {
\t\t\tif (value) {
\t\t\t\treturn 'bar ' + value;
\t\t\t}
\t\t\treturn null;
\t\t}
\t}
}

var err = new AdvancedError('hello, world');
err.foo = 'baz';
throw err;

/*
\tAdvancedError: hello, world
\t    bar baz
\t    at tryReadme() (readme.js:20:1)
*/
```

#### `errorEx.line(str)`
Creates a stack line using a delimiter

> This is a helper function. It is to be used in lieu of writing a value object
> for `properties` values.

- `str`: The string to create
  - Use the delimiter `%s` to specify where in the string the value should go

```javascript
var errorEx = require('error-ex');

var FileError = errorEx('FileError', {fileName: errorEx.line('in %s')});

var err = new FileError('problem reading file');
err.fileName = '/a/b/c/d/foo.js';
throw err;

/*
\tFileError: problem reading file
\t    in /a/b/c/d/foo.js
\t    at tryReadme() (readme.js:7:1)
*/
```

#### `errorEx.append(str)`
Appends to the `error.message` string

> This is a helper function. It is to be used in lieu of writing a value object
> for `properties` values.

- `str`: The string to append
  - Use the delimiter `%s` to specify where in the string the value should go

```javascript
var errorEx = require('error-ex');

var SyntaxError = errorEx('SyntaxError', {fileName: errorEx.append('in %s')});

var err = new SyntaxError('improper indentation');
err.fileName = '/a/b/c/d/foo.js';
throw err;

/*
\tSyntaxError: improper indentation in /a/b/c/d/foo.js
\t    at tryReadme() (readme.js:7:1)
*/
```

## License
Licensed under the [MIT License](http://opensource.org/licenses/MIT).
You can find a copy of it in [LICENSE](LICENSE).
", "node_modules/error-ex/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/error-ex/README.md");
    }
}
