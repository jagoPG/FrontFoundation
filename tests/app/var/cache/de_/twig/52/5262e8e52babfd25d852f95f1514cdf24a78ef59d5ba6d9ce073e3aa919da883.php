<?php

/* node_modules/sha.js/hexpp.js */
class __TwigTemplate_0dea448d7939097555737edaa6c26cefa12cce2197d5dc7668b684e2b1614041 extends Twig_Template
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
        $__internal_e7f5c1f3b5c3c24a95337cc018be63b2aa06c588971d4b0fb977a82eb7d10ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f5c1f3b5c3c24a95337cc018be63b2aa06c588971d4b0fb977a82eb7d10ba8->enter($__internal_e7f5c1f3b5c3c24a95337cc018be63b2aa06c588971d4b0fb977a82eb7d10ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sha.js/hexpp.js"));

        // line 1
        echo "function toHex (buf, group, wrap, LE) {
  buf = buf.buffer || buf
  var s = ''
  var l = buf.byteLength || buf.length
  for (var i = 0; i < l ; i++) {
    var byteParam = (i & 0xfffffffc) | (!LE ? i % 4 : 3 - i % 4)
    s += ((buf[byteParam] >> 4).toString(16)) +
         ((buf[byteParam] & 0xf).toString(16)) +
         (group - 1 === i % group ? ' ' : '') +
         (wrap - 1 === i % wrap ? '\\n' : '')
  }
  return s
}

var hexpp = module.exports = function hexpp (buffer, opts) {
  opts = opts || {}
  opts.groups = opts.groups || 4
  opts.wrap = opts.wrap || 16
  return toHex(buffer, opts.groups, opts.wrap, opts.bigendian, opts.ints)
}

hexpp.defaults = function (opts) {
  return function (b) {
    return hexpp(b, opts)
  }
}
";
        
        $__internal_e7f5c1f3b5c3c24a95337cc018be63b2aa06c588971d4b0fb977a82eb7d10ba8->leave($__internal_e7f5c1f3b5c3c24a95337cc018be63b2aa06c588971d4b0fb977a82eb7d10ba8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sha.js/hexpp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("function toHex (buf, group, wrap, LE) {
  buf = buf.buffer || buf
  var s = ''
  var l = buf.byteLength || buf.length
  for (var i = 0; i < l ; i++) {
    var byteParam = (i & 0xfffffffc) | (!LE ? i % 4 : 3 - i % 4)
    s += ((buf[byteParam] >> 4).toString(16)) +
         ((buf[byteParam] & 0xf).toString(16)) +
         (group - 1 === i % group ? ' ' : '') +
         (wrap - 1 === i % wrap ? '\\n' : '')
  }
  return s
}

var hexpp = module.exports = function hexpp (buffer, opts) {
  opts = opts || {}
  opts.groups = opts.groups || 4
  opts.wrap = opts.wrap || 16
  return toHex(buffer, opts.groups, opts.wrap, opts.bigendian, opts.ints)
}

hexpp.defaults = function (opts) {
  return function (b) {
    return hexpp(b, opts)
  }
}
", "node_modules/sha.js/hexpp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sha.js/hexpp.js");
    }
}
