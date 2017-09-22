<?php

/* node_modules/buffer-xor/index.js */
class __TwigTemplate_ba2f4adc11bd7393e8ae23e26c17bda19fde3f13cb1b9cf375f78d923ed5bb2b extends Twig_Template
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
        $__internal_0c868cfd33a204a4c65fd4326f282ab6891dd1c065adc82ec368bffca8d5107b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c868cfd33a204a4c65fd4326f282ab6891dd1c065adc82ec368bffca8d5107b->enter($__internal_0c868cfd33a204a4c65fd4326f282ab6891dd1c065adc82ec368bffca8d5107b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer-xor/index.js"));

        // line 1
        echo "module.exports = function xor (a, b) {
  var length = Math.min(a.length, b.length)
  var buffer = new Buffer(length)

  for (var i = 0; i < length; ++i) {
    buffer[i] = a[i] ^ b[i]
  }

  return buffer
}
";
        
        $__internal_0c868cfd33a204a4c65fd4326f282ab6891dd1c065adc82ec368bffca8d5107b->leave($__internal_0c868cfd33a204a4c65fd4326f282ab6891dd1c065adc82ec368bffca8d5107b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer-xor/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function xor (a, b) {
  var length = Math.min(a.length, b.length)
  var buffer = new Buffer(length)

  for (var i = 0; i < length; ++i) {
    buffer[i] = a[i] ^ b[i]
  }

  return buffer
}
", "node_modules/buffer-xor/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer-xor/index.js");
    }
}
