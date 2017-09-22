<?php

/* node_modules/fsevents/node_modules/stringstream/README.md */
class __TwigTemplate_bae487b06ef325d17207cec4e978bff16eda4352de3dc5dd2b7f1a70d7dd3314 extends Twig_Template
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
        $__internal_af234e6f943ef01cb60280935667d963e73baff4b01c5c8863bc38138da86c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af234e6f943ef01cb60280935667d963e73baff4b01c5c8863bc38138da86c5f->enter($__internal_af234e6f943ef01cb60280935667d963e73baff4b01c5c8863bc38138da86c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/stringstream/README.md"));

        // line 1
        echo "# Decode streams into strings The Right Way(tm)

```javascript
var fs   = require('fs')
var zlib = require('zlib')
var strs = require('stringstream')

var utf8Stream = fs.createReadStream('massiveLogFile.gz')
  .pipe(zlib.createGunzip())
  .pipe(strs('utf8'))
```

No need to deal with `setEncoding()` weirdness, just compose streams
like they were supposed to be!

Handles input and output encoding:

```javascript
// Stream from utf8 to hex to base64... Why not, ay.
var hex64Stream = fs.createReadStream('myFile')
  .pipe(strs('utf8', 'hex'))
  .pipe(strs('hex', 'base64'))
```

Also deals with `base64` output correctly by aligning each emitted data
chunk so that there are no dangling `=` characters:

```javascript
var stream = fs.createReadStream('myFile').pipe(strs('base64'))

var base64Str = ''

stream.on('data', function(data) { base64Str += data })
stream.on('end', function() {
  console.log('My base64 encoded file is: ' + base64Str) // Wouldn't work with setEncoding()
  console.log('Original file is: ' + new Buffer(base64Str, 'base64'))
})
```
";
        
        $__internal_af234e6f943ef01cb60280935667d963e73baff4b01c5c8863bc38138da86c5f->leave($__internal_af234e6f943ef01cb60280935667d963e73baff4b01c5c8863bc38138da86c5f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/stringstream/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Decode streams into strings The Right Way(tm)

```javascript
var fs   = require('fs')
var zlib = require('zlib')
var strs = require('stringstream')

var utf8Stream = fs.createReadStream('massiveLogFile.gz')
  .pipe(zlib.createGunzip())
  .pipe(strs('utf8'))
```

No need to deal with `setEncoding()` weirdness, just compose streams
like they were supposed to be!

Handles input and output encoding:

```javascript
// Stream from utf8 to hex to base64... Why not, ay.
var hex64Stream = fs.createReadStream('myFile')
  .pipe(strs('utf8', 'hex'))
  .pipe(strs('hex', 'base64'))
```

Also deals with `base64` output correctly by aligning each emitted data
chunk so that there are no dangling `=` characters:

```javascript
var stream = fs.createReadStream('myFile').pipe(strs('base64'))

var base64Str = ''

stream.on('data', function(data) { base64Str += data })
stream.on('end', function() {
  console.log('My base64 encoded file is: ' + base64Str) // Wouldn't work with setEncoding()
  console.log('Original file is: ' + new Buffer(base64Str, 'base64'))
})
```
", "node_modules/fsevents/node_modules/stringstream/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/stringstream/README.md");
    }
}
