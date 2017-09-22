<?php

/* node_modules/crypto-browserify/test/pbkdf2.js */
class __TwigTemplate_80f55847c8d9e53ee48710dd266d9988bbc163d0d5b503333aefd4c679a85cea extends Twig_Template
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
        $__internal_804eb017da3257069c568bf01abbf894a93fc1b77e7d93046f2ae1e63fe8a76d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804eb017da3257069c568bf01abbf894a93fc1b77e7d93046f2ae1e63fe8a76d->enter($__internal_804eb017da3257069c568bf01abbf894a93fc1b77e7d93046f2ae1e63fe8a76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/crypto-browserify/test/pbkdf2.js"));

        // line 1
        echo "var tape = require('tape')
var crypto = require('pbkdf2/browser')

var vectors = require('hash-test-vectors/pbkdf2')

tape('pbkdf2', function (t) {
  vectors.forEach(function (input) {
    // skip inputs that will take way too long
    if (input.iterations > 10000) return

    var key = crypto.pbkdf2Sync(input.password, input.salt, input.iterations, input.length)

    if (key.toString('hex') !== input.sha1) {
      console.log(input)
    }

    t.equal(key.toString('hex'), input.sha1)
  })

  t.end()
})
";
        
        $__internal_804eb017da3257069c568bf01abbf894a93fc1b77e7d93046f2ae1e63fe8a76d->leave($__internal_804eb017da3257069c568bf01abbf894a93fc1b77e7d93046f2ae1e63fe8a76d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/crypto-browserify/test/pbkdf2.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tape = require('tape')
var crypto = require('pbkdf2/browser')

var vectors = require('hash-test-vectors/pbkdf2')

tape('pbkdf2', function (t) {
  vectors.forEach(function (input) {
    // skip inputs that will take way too long
    if (input.iterations > 10000) return

    var key = crypto.pbkdf2Sync(input.password, input.salt, input.iterations, input.length)

    if (key.toString('hex') !== input.sha1) {
      console.log(input)
    }

    t.equal(key.toString('hex'), input.sha1)
  })

  t.end()
})
", "node_modules/crypto-browserify/test/pbkdf2.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/crypto-browserify/test/pbkdf2.js");
    }
}
