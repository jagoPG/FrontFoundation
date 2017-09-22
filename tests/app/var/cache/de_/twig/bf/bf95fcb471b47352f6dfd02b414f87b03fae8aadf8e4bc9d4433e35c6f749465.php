<?php

/* node_modules/readable-stream/readable.js */
class __TwigTemplate_64a07baa26ecb951e71f36bedfc8600cc906d69a821661b18da4aae41db45c2f extends Twig_Template
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
        $__internal_e0de9c6046e61f72759eaa8ac8614c1a1816fe413699f3b686d5394ecbe0e048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0de9c6046e61f72759eaa8ac8614c1a1816fe413699f3b686d5394ecbe0e048->enter($__internal_e0de9c6046e61f72759eaa8ac8614c1a1816fe413699f3b686d5394ecbe0e048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readable-stream/readable.js"));

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
        
        $__internal_e0de9c6046e61f72759eaa8ac8614c1a1816fe413699f3b686d5394ecbe0e048->leave($__internal_e0de9c6046e61f72759eaa8ac8614c1a1816fe413699f3b686d5394ecbe0e048_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readable-stream/readable.js";
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
", "node_modules/readable-stream/readable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readable-stream/readable.js");
    }
}
