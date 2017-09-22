<?php

/* node_modules/fsevents/node_modules/readable-stream/readable.js */
class __TwigTemplate_5482c99638c3241ff2b5086963582c06497a77a4d8463d38bd3b524a626a064d extends Twig_Template
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
        $__internal_ab169d4ec3e205d8e3bea05565084d0b13c5c77f33d04377db9da8c5246e9147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab169d4ec3e205d8e3bea05565084d0b13c5c77f33d04377db9da8c5246e9147->enter($__internal_ab169d4ec3e205d8e3bea05565084d0b13c5c77f33d04377db9da8c5246e9147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/readable-stream/readable.js"));

        // line 1
        echo "var Stream = require('stream');
if (process.env.READABLE_STREAM === 'disable' && Stream) {
  module.exports = Stream;
  exports = module.exports = Stream.Readable;
  exports.Readable = Stream.Readable;
  exports.Writable = Stream.Writable;
  exports.Duplex = Stream.Duplex;
  exports.Transform = Stream.Transform;
  exports.PassThrough = Stream.PassThrough;
  exports.Stream = Stream;
} else {
  exports = module.exports = require('./lib/_stream_readable.js');
  exports.Stream = Stream || exports;
  exports.Readable = exports;
  exports.Writable = require('./lib/_stream_writable.js');
  exports.Duplex = require('./lib/_stream_duplex.js');
  exports.Transform = require('./lib/_stream_transform.js');
  exports.PassThrough = require('./lib/_stream_passthrough.js');
}
";
        
        $__internal_ab169d4ec3e205d8e3bea05565084d0b13c5c77f33d04377db9da8c5246e9147->leave($__internal_ab169d4ec3e205d8e3bea05565084d0b13c5c77f33d04377db9da8c5246e9147_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/readable-stream/readable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Stream = require('stream');
if (process.env.READABLE_STREAM === 'disable' && Stream) {
  module.exports = Stream;
  exports = module.exports = Stream.Readable;
  exports.Readable = Stream.Readable;
  exports.Writable = Stream.Writable;
  exports.Duplex = Stream.Duplex;
  exports.Transform = Stream.Transform;
  exports.PassThrough = Stream.PassThrough;
  exports.Stream = Stream;
} else {
  exports = module.exports = require('./lib/_stream_readable.js');
  exports.Stream = Stream || exports;
  exports.Readable = exports;
  exports.Writable = require('./lib/_stream_writable.js');
  exports.Duplex = require('./lib/_stream_duplex.js');
  exports.Transform = require('./lib/_stream_transform.js');
  exports.PassThrough = require('./lib/_stream_passthrough.js');
}
", "node_modules/fsevents/node_modules/readable-stream/readable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/readable-stream/readable.js");
    }
}
