<?php

/* node_modules/public-encrypt/mgf.js */
class __TwigTemplate_721d15d9830404a17cbd9ba9ee4a2137c7552c6c257065cbd161a0e908b267b5 extends Twig_Template
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
        $__internal_349a57245fe8deffd1cf85d91c916e3f36a659ffe649b16fc189630cf7edf858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349a57245fe8deffd1cf85d91c916e3f36a659ffe649b16fc189630cf7edf858->enter($__internal_349a57245fe8deffd1cf85d91c916e3f36a659ffe649b16fc189630cf7edf858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/public-encrypt/mgf.js"));

        // line 1
        echo "var createHash = require('create-hash');
module.exports = function (seed, len) {
  var t = new Buffer('');
  var  i = 0, c;
  while (t.length < len) {
    c = i2ops(i++);
    t = Buffer.concat([t, createHash('sha1').update(seed).update(c).digest()]);
  }
  return t.slice(0, len);
};

function i2ops(c) {
  var out = new Buffer(4);
  out.writeUInt32BE(c,0);
  return out;
}";
        
        $__internal_349a57245fe8deffd1cf85d91c916e3f36a659ffe649b16fc189630cf7edf858->leave($__internal_349a57245fe8deffd1cf85d91c916e3f36a659ffe649b16fc189630cf7edf858_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/public-encrypt/mgf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createHash = require('create-hash');
module.exports = function (seed, len) {
  var t = new Buffer('');
  var  i = 0, c;
  while (t.length < len) {
    c = i2ops(i++);
    t = Buffer.concat([t, createHash('sha1').update(seed).update(c).digest()]);
  }
  return t.slice(0, len);
};

function i2ops(c) {
  var out = new Buffer(4);
  out.writeUInt32BE(c,0);
  return out;
}", "node_modules/public-encrypt/mgf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/public-encrypt/mgf.js");
    }
}
