<?php

/* node_modules/ecc-jsbn/test.js */
class __TwigTemplate_6a4acfd4815f1733eb53e1fbb14092d8ff718ce85f278b5765e2d175a81db6ca extends Twig_Template
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
        $__internal_9cac311cff877ff5b9101bf2e37b4e3867b8a44b22984887ed64584e343c447a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cac311cff877ff5b9101bf2e37b4e3867b8a44b22984887ed64584e343c447a->enter($__internal_9cac311cff877ff5b9101bf2e37b4e3867b8a44b22984887ed64584e343c447a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ecc-jsbn/test.js"));

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
        
        $__internal_9cac311cff877ff5b9101bf2e37b4e3867b8a44b22984887ed64584e343c447a->leave($__internal_9cac311cff877ff5b9101bf2e37b4e3867b8a44b22984887ed64584e343c447a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ecc-jsbn/test.js";
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
", "node_modules/ecc-jsbn/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ecc-jsbn/test.js");
    }
}
