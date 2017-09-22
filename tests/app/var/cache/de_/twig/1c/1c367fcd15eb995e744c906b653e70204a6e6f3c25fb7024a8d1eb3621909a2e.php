<?php

/* node_modules/fsevents/node_modules/ecc-jsbn/test.js */
class __TwigTemplate_46c3a3127e05b6e9f631948624ac60f449b5ea09da1ab7ed05948956eb320397 extends Twig_Template
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
        $__internal_199451cc753afa1966db3529d9a6036717381c63126dd426d3e0d452d7e4bf20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199451cc753afa1966db3529d9a6036717381c63126dd426d3e0d452d7e4bf20->enter($__internal_199451cc753afa1966db3529d9a6036717381c63126dd426d3e0d452d7e4bf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ecc-jsbn/test.js"));

        // line 1
        echo "var ecc = require(\"./index.js\");
var key1 = new ecc.ECKey(ecc.ECCurves.secp160r1);
var key2 = new ecc.ECKey(ecc.ECCurves.secp160r1);
console.log(key1.deriveSharedSecret(key2));
var key3 = new ecc.ECKey(ecc.ECCurves.secp160r1,key1.PrivateKey);
var key4 = new ecc.ECKey(ecc.ECCurves.secp160r1,key2.PublicKey,true);
console.log(key3.deriveSharedSecret(key4));

var key1 = new ecc.ECKey(ecc.ECCurves.secp256r1);
var key2 = new ecc.ECKey(ecc.ECCurves.secp256r1);
console.log(key1.deriveSharedSecret(key2));
var key3 = new ecc.ECKey(ecc.ECCurves.secp256r1,key1.PrivateKey);
var key4 = new ecc.ECKey(ecc.ECCurves.secp256r1,key2.PublicKey,true);
console.log(key3.deriveSharedSecret(key4));
";
        
        $__internal_199451cc753afa1966db3529d9a6036717381c63126dd426d3e0d452d7e4bf20->leave($__internal_199451cc753afa1966db3529d9a6036717381c63126dd426d3e0d452d7e4bf20_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ecc-jsbn/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var ecc = require(\"./index.js\");
var key1 = new ecc.ECKey(ecc.ECCurves.secp160r1);
var key2 = new ecc.ECKey(ecc.ECCurves.secp160r1);
console.log(key1.deriveSharedSecret(key2));
var key3 = new ecc.ECKey(ecc.ECCurves.secp160r1,key1.PrivateKey);
var key4 = new ecc.ECKey(ecc.ECCurves.secp160r1,key2.PublicKey,true);
console.log(key3.deriveSharedSecret(key4));

var key1 = new ecc.ECKey(ecc.ECCurves.secp256r1);
var key2 = new ecc.ECKey(ecc.ECCurves.secp256r1);
console.log(key1.deriveSharedSecret(key2));
var key3 = new ecc.ECKey(ecc.ECCurves.secp256r1,key1.PrivateKey);
var key4 = new ecc.ECKey(ecc.ECCurves.secp256r1,key2.PublicKey,true);
console.log(key3.deriveSharedSecret(key4));
", "node_modules/fsevents/node_modules/ecc-jsbn/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ecc-jsbn/test.js");
    }
}
