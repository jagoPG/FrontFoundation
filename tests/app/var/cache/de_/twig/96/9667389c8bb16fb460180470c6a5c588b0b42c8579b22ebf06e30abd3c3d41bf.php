<?php

/* node_modules/isexe/README.md */
class __TwigTemplate_b081d2e4d8c65dcbf465772b980ed2140c2e963da155946e170c4cf80e9ef942 extends Twig_Template
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
        $__internal_4ad16e0a3de322e72ecb75ef2775a5c19aab877436f301eddec68fc3dc8876d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad16e0a3de322e72ecb75ef2775a5c19aab877436f301eddec68fc3dc8876d8->enter($__internal_4ad16e0a3de322e72ecb75ef2775a5c19aab877436f301eddec68fc3dc8876d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/isexe/README.md"));

        // line 1
        echo "# isexe

Minimal module to check if a file is executable, and a normal file.

Uses `fs.stat` and tests against the `PATHEXT` environment variable on
Windows.

## USAGE

```javascript
var isexe = require('isexe')
isexe('some-file-name', function (err, isExe) {
  if (err) {
    console.error('probably file does not exist or something', err)
  } else if (isExe) {
    console.error('this thing can be run')
  } else {
    console.error('cannot be run')
  }
})

// same thing but synchronous, throws errors
var isExe = isexe.sync('some-file-name')

// treat errors as just \"not executable\"
isexe('maybe-missing-file', { ignoreErrors: true }, callback)
var isExe = isexe.sync('maybe-missing-file', { ignoreErrors: true })
```

## API

### `isexe(path, [options], [callback])`

Check if the path is executable.  If no callback provided, and a
global `Promise` object is available, then a Promise will be returned.

Will raise whatever errors may be raised by `fs.stat`, unless
`options.ignoreErrors` is set to true.

### `isexe.sync(path, [options])`

Same as `isexe` but returns the value and throws any errors raised.

### Options

* `ignoreErrors` Treat all errors as \"no, this is not executable\", but
  don't raise them.
* `uid` Number to use as the user id
* `gid` Number to use as the group id
* `pathExt` List of path extensions to use instead of `PATHEXT`
  environment variable on Windows.
";
        
        $__internal_4ad16e0a3de322e72ecb75ef2775a5c19aab877436f301eddec68fc3dc8876d8->leave($__internal_4ad16e0a3de322e72ecb75ef2775a5c19aab877436f301eddec68fc3dc8876d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/isexe/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# isexe

Minimal module to check if a file is executable, and a normal file.

Uses `fs.stat` and tests against the `PATHEXT` environment variable on
Windows.

## USAGE

```javascript
var isexe = require('isexe')
isexe('some-file-name', function (err, isExe) {
  if (err) {
    console.error('probably file does not exist or something', err)
  } else if (isExe) {
    console.error('this thing can be run')
  } else {
    console.error('cannot be run')
  }
})

// same thing but synchronous, throws errors
var isExe = isexe.sync('some-file-name')

// treat errors as just \"not executable\"
isexe('maybe-missing-file', { ignoreErrors: true }, callback)
var isExe = isexe.sync('maybe-missing-file', { ignoreErrors: true })
```

## API

### `isexe(path, [options], [callback])`

Check if the path is executable.  If no callback provided, and a
global `Promise` object is available, then a Promise will be returned.

Will raise whatever errors may be raised by `fs.stat`, unless
`options.ignoreErrors` is set to true.

### `isexe.sync(path, [options])`

Same as `isexe` but returns the value and throws any errors raised.

### Options

* `ignoreErrors` Treat all errors as \"no, this is not executable\", but
  don't raise them.
* `uid` Number to use as the user id
* `gid` Number to use as the group id
* `pathExt` List of path extensions to use instead of `PATHEXT`
  environment variable on Windows.
", "node_modules/isexe/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/isexe/README.md");
    }
}
