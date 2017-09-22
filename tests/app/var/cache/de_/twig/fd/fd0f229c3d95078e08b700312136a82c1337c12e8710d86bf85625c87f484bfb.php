<?php

/* node_modules/fsevents/node_modules/readable-stream/writable.js */
class __TwigTemplate_a9f04877bfc7358e38eed0b08b3eb2f13fe6952f245582fe73a7000a484a09e6 extends Twig_Template
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
        $__internal_80b10225ffe3c6ba35091668af5aaed2be2ddf7f57b1d2885873d47dc2eab828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b10225ffe3c6ba35091668af5aaed2be2ddf7f57b1d2885873d47dc2eab828->enter($__internal_80b10225ffe3c6ba35091668af5aaed2be2ddf7f57b1d2885873d47dc2eab828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/readable-stream/writable.js"));

        // line 1
        echo "var Stream = require(\"stream\")
var Writable = require(\"./lib/_stream_writable.js\")

if (process.env.READABLE_STREAM === 'disable') {
  module.exports = Stream && Stream.Writable || Writable
}

module.exports = Writable
";
        
        $__internal_80b10225ffe3c6ba35091668af5aaed2be2ddf7f57b1d2885873d47dc2eab828->leave($__internal_80b10225ffe3c6ba35091668af5aaed2be2ddf7f57b1d2885873d47dc2eab828_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/readable-stream/writable.js";
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
}

module.exports = Writable
", "node_modules/fsevents/node_modules/readable-stream/writable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/readable-stream/writable.js");
    }
}
