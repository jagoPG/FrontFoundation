<?php

/* node_modules/stringstream/README.md */
class __TwigTemplate_1c07ed4ee6d51bf126134e386698a8588ab60afee43cf4752f08df5737f5fcca extends Twig_Template
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
        $__internal_f1744123116f83851ed8ea6771fe268b8d57aa58c1eaf914271506f9875a99d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1744123116f83851ed8ea6771fe268b8d57aa58c1eaf914271506f9875a99d1->enter($__internal_f1744123116f83851ed8ea6771fe268b8d57aa58c1eaf914271506f9875a99d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stringstream/README.md"));

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
        
        $__internal_f1744123116f83851ed8ea6771fe268b8d57aa58c1eaf914271506f9875a99d1->leave($__internal_f1744123116f83851ed8ea6771fe268b8d57aa58c1eaf914271506f9875a99d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stringstream/README.md";
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
", "node_modules/stringstream/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stringstream/README.md");
    }
}
