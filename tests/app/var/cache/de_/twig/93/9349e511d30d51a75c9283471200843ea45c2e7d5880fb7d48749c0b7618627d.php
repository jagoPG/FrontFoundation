<?php

/* node_modules/fsevents/node_modules/readable-stream/lib/_stream_passthrough.js */
class __TwigTemplate_35a338451eca44e0ff102bc1d1485f76a3b00bd0e920305d727a78dd8ec989cb extends Twig_Template
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
        $__internal_c3fd5084acf97405c56b629a4509b1e5dc52ee8c441f216714b8f55c54ad60a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fd5084acf97405c56b629a4509b1e5dc52ee8c441f216714b8f55c54ad60a4->enter($__internal_c3fd5084acf97405c56b629a4509b1e5dc52ee8c441f216714b8f55c54ad60a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/readable-stream/lib/_stream_passthrough.js"));

        // line 1
        echo "// a passthrough stream.
// basically just the most minimal sort of Transform stream.
// Every written chunk gets output as-is.

'use strict';

module.exports = PassThrough;

var Transform = require('./_stream_transform');

/*<replacement>*/
var util = require('core-util-is');
util.inherits = require('inherits');
/*</replacement>*/

util.inherits(PassThrough, Transform);

function PassThrough(options) {
  if (!(this instanceof PassThrough)) return new PassThrough(options);

  Transform.call(this, options);
}

PassThrough.prototype._transform = function (chunk, encoding, cb) {
  cb(null, chunk);
};";
        
        $__internal_c3fd5084acf97405c56b629a4509b1e5dc52ee8c441f216714b8f55c54ad60a4->leave($__internal_c3fd5084acf97405c56b629a4509b1e5dc52ee8c441f216714b8f55c54ad60a4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/readable-stream/lib/_stream_passthrough.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// a passthrough stream.
// basically just the most minimal sort of Transform stream.
// Every written chunk gets output as-is.

'use strict';

module.exports = PassThrough;

var Transform = require('./_stream_transform');

/*<replacement>*/
var util = require('core-util-is');
util.inherits = require('inherits');
/*</replacement>*/

util.inherits(PassThrough, Transform);

function PassThrough(options) {
  if (!(this instanceof PassThrough)) return new PassThrough(options);

  Transform.call(this, options);
}

PassThrough.prototype._transform = function (chunk, encoding, cb) {
  cb(null, chunk);
};", "node_modules/fsevents/node_modules/readable-stream/lib/_stream_passthrough.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/readable-stream/lib/_stream_passthrough.js");
    }
}
