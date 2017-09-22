<?php

/* node_modules/browserify-aes/modes/cbc.js */
class __TwigTemplate_a02a74af761a00768375ea5c3d760119efb51cfad87ca375a997adc996d5f498 extends Twig_Template
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
        $__internal_ff601135f1fdef1dfb3e960ad83c82cfefebf65d279e3a15a36eb3851781840e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff601135f1fdef1dfb3e960ad83c82cfefebf65d279e3a15a36eb3851781840e->enter($__internal_ff601135f1fdef1dfb3e960ad83c82cfefebf65d279e3a15a36eb3851781840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-aes/modes/cbc.js"));

        // line 1
        echo "var xor = require('buffer-xor')

exports.encrypt = function (self, block) {
  var data = xor(block, self._prev)

  self._prev = self._cipher.encryptBlock(data)
  return self._prev
}

exports.decrypt = function (self, block) {
  var pad = self._prev

  self._prev = block
  var out = self._cipher.decryptBlock(block)

  return xor(out, pad)
}
";
        
        $__internal_ff601135f1fdef1dfb3e960ad83c82cfefebf65d279e3a15a36eb3851781840e->leave($__internal_ff601135f1fdef1dfb3e960ad83c82cfefebf65d279e3a15a36eb3851781840e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-aes/modes/cbc.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var xor = require('buffer-xor')

exports.encrypt = function (self, block) {
  var data = xor(block, self._prev)

  self._prev = self._cipher.encryptBlock(data)
  return self._prev
}

exports.decrypt = function (self, block) {
  var pad = self._prev

  self._prev = block
  var out = self._cipher.decryptBlock(block)

  return xor(out, pad)
}
", "node_modules/browserify-aes/modes/cbc.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-aes/modes/cbc.js");
    }
}
