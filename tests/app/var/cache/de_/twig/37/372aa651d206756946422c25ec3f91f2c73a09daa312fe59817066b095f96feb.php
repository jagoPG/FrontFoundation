<?php

/* node_modules/crypto-browserify/test/index.js */
class __TwigTemplate_fa49a0da8d91fd92cd14636a9084208d249fe3e85ed92f305831ff406413aee5 extends Twig_Template
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
        $__internal_863465aa4978f4ef268ed18b371c048eac8d664a9afef3a5247a26bdb043502c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863465aa4978f4ef268ed18b371c048eac8d664a9afef3a5247a26bdb043502c->enter($__internal_863465aa4978f4ef268ed18b371c048eac8d664a9afef3a5247a26bdb043502c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/crypto-browserify/test/index.js"));

        // line 1
        echo "
require('./create-hash')
require('./create-hmac')
if (!process.browser) {
  require('./dh')
}

require('./pbkdf2')
try {
  require('randombytes')(8)
  require('./ecdh')
  require('./public-encrypt')
  require('./random-bytes')
  require('./sign')
} catch (e) {
  console.log('no secure rng avaiable')
}
require('./aes')
";
        
        $__internal_863465aa4978f4ef268ed18b371c048eac8d664a9afef3a5247a26bdb043502c->leave($__internal_863465aa4978f4ef268ed18b371c048eac8d664a9afef3a5247a26bdb043502c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/crypto-browserify/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
require('./create-hash')
require('./create-hmac')
if (!process.browser) {
  require('./dh')
}

require('./pbkdf2')
try {
  require('randombytes')(8)
  require('./ecdh')
  require('./public-encrypt')
  require('./random-bytes')
  require('./sign')
} catch (e) {
  console.log('no secure rng avaiable')
}
require('./aes')
", "node_modules/crypto-browserify/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/crypto-browserify/test/index.js");
    }
}
