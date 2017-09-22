<?php

/* node_modules/browserify-aes/modes/cfb8.js */
class __TwigTemplate_297d5577e97950eafe75c2ed3b4c65dae0e304ccb9e213a25e00ebc8e0b53a17 extends Twig_Template
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
        $__internal_3c34130771a6be8a308a417c85e77b683a450cb809c1f813ee88fe099d686f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c34130771a6be8a308a417c85e77b683a450cb809c1f813ee88fe099d686f71->enter($__internal_3c34130771a6be8a308a417c85e77b683a450cb809c1f813ee88fe099d686f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-aes/modes/cfb8.js"));

        // line 1
        echo "function encryptByte (self, byteParam, decrypt) {
  var pad = self._cipher.encryptBlock(self._prev)
  var out = pad[0] ^ byteParam

  self._prev = Buffer.concat([
    self._prev.slice(1),
    Buffer.from([decrypt ? byteParam : out])
  ])

  return out
}

exports.encrypt = function (self, chunk, decrypt) {
  var len = chunk.length
  var out = Buffer.allocUnsafe(len)
  var i = -1

  while (++i < len) {
    out[i] = encryptByte(self, chunk[i], decrypt)
  }

  return out
}
";
        
        $__internal_3c34130771a6be8a308a417c85e77b683a450cb809c1f813ee88fe099d686f71->leave($__internal_3c34130771a6be8a308a417c85e77b683a450cb809c1f813ee88fe099d686f71_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-aes/modes/cfb8.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("function encryptByte (self, byteParam, decrypt) {
  var pad = self._cipher.encryptBlock(self._prev)
  var out = pad[0] ^ byteParam

  self._prev = Buffer.concat([
    self._prev.slice(1),
    Buffer.from([decrypt ? byteParam : out])
  ])

  return out
}

exports.encrypt = function (self, chunk, decrypt) {
  var len = chunk.length
  var out = Buffer.allocUnsafe(len)
  var i = -1

  while (++i < len) {
    out[i] = encryptByte(self, chunk[i], decrypt)
  }

  return out
}
", "node_modules/browserify-aes/modes/cfb8.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-aes/modes/cfb8.js");
    }
}
