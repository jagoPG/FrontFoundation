<?php

/* node_modules/cipher-base/README.md */
class __TwigTemplate_af78848a8c410bf66b485748c20b534a146c86e2acd4e482ff5dac414874269c extends Twig_Template
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
        $__internal_777f7f1878e918d75636a6d15a907b6f057ff63d2f66b2253263179b97c769de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777f7f1878e918d75636a6d15a907b6f057ff63d2f66b2253263179b97c769de->enter($__internal_777f7f1878e918d75636a6d15a907b6f057ff63d2f66b2253263179b97c769de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cipher-base/README.md"));

        // line 1
        echo "cipher-base
===

[![Build Status](https://travis-ci.org/crypto-browserify/cipher-base.svg)](https://travis-ci.org/crypto-browserify/cipher-base)

Abstract base class to inherit from if you want to create streams implementing
the same api as node crypto streams.

Requires you to implement 2 methods `_final` and `_update`. `_update` takes a
buffer and should return a buffer, `_final` takes no arguments and should return
a buffer.


The constructor takes one argument and that is a string which if present switches
it into hash mode, i.e. the object you get from crypto.createHash or
crypto.createSign, this switches the name of the final method to be the string
you passed instead of `final` and returns `this` from update.
";
        
        $__internal_777f7f1878e918d75636a6d15a907b6f057ff63d2f66b2253263179b97c769de->leave($__internal_777f7f1878e918d75636a6d15a907b6f057ff63d2f66b2253263179b97c769de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cipher-base/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("cipher-base
===

[![Build Status](https://travis-ci.org/crypto-browserify/cipher-base.svg)](https://travis-ci.org/crypto-browserify/cipher-base)

Abstract base class to inherit from if you want to create streams implementing
the same api as node crypto streams.

Requires you to implement 2 methods `_final` and `_update`. `_update` takes a
buffer and should return a buffer, `_final` takes no arguments and should return
a buffer.


The constructor takes one argument and that is a string which if present switches
it into hash mode, i.e. the object you get from crypto.createHash or
crypto.createSign, this switches the name of the final method to be the string
you passed instead of `final` and returns `this` from update.
", "node_modules/cipher-base/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cipher-base/README.md");
    }
}
