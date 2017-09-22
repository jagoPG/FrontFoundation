<?php

/* node_modules/readable-stream/writable.js */
class __TwigTemplate_7ece1080054f6718cda7dc865434a357df67b386cd775ccc3caa0c150c7dd18a extends Twig_Template
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
        $__internal_d681db9bdf656c6857620fb5fd85ff2b124e608966fc1dbd7c64edcd8ce30162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d681db9bdf656c6857620fb5fd85ff2b124e608966fc1dbd7c64edcd8ce30162->enter($__internal_d681db9bdf656c6857620fb5fd85ff2b124e608966fc1dbd7c64edcd8ce30162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readable-stream/writable.js"));

        // line 1
        echo "var Stream = require(\"stream\")
var Writable = require(\"./lib/_stream_writable.js\")

if (process.env.READABLE_STREAM === 'disable') {
  module.exports = Stream && Stream.Writable || Writable
} else {
  module.exports = Writable
}
";
        
        $__internal_d681db9bdf656c6857620fb5fd85ff2b124e608966fc1dbd7c64edcd8ce30162->leave($__internal_d681db9bdf656c6857620fb5fd85ff2b124e608966fc1dbd7c64edcd8ce30162_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readable-stream/writable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Stream = require(\"stream\")
var Writable = require(\"./lib/_stream_writable.js\")

if (process.env.READABLE_STREAM === 'disable') {
  module.exports = Stream && Stream.Writable || Writable
} else {
  module.exports = Writable
}
", "node_modules/readable-stream/writable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readable-stream/writable.js");
    }
}
