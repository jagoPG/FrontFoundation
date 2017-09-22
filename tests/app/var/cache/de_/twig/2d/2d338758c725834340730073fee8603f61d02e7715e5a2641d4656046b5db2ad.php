<?php

/* node_modules/fsevents/node_modules/ecc-jsbn/index.js */
class __TwigTemplate_00a47c32d11064b40b47225068c995ea7696a2903816f33e18a11d9f34946d96 extends Twig_Template
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
        $__internal_ddb166260f57ae204cf49d283d50fd102ccdb1441edf15bef9dd990a3bdd912d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb166260f57ae204cf49d283d50fd102ccdb1441edf15bef9dd990a3bdd912d->enter($__internal_ddb166260f57ae204cf49d283d50fd102ccdb1441edf15bef9dd990a3bdd912d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ecc-jsbn/index.js"));

        // line 1
        echo "var crypto = require(\"crypto\");
var BigInteger = require(\"jsbn\").BigInteger;
var ECPointFp = require(\"./lib/ec.js\").ECPointFp;
exports.ECCurves = require(\"./lib/sec.js\");

// zero prepad
function unstupid(hex,len)
{
\treturn (hex.length >= len) ? hex : unstupid(\"0\"+hex,len);
}

exports.ECKey = function(curve, key, isPublic)
{
  var priv;
\tvar c = curve();
\tvar n = c.getN();
  var bytes = Math.floor(n.bitLength()/8);

  if(key)
  {
    if(isPublic)
    {
      var curve = c.getCurve();
//      var x = key.slice(1,bytes+1); // skip the 04 for uncompressed format
//      var y = key.slice(bytes+1);
//      this.P = new ECPointFp(curve,
//        curve.fromBigInteger(new BigInteger(x.toString(\"hex\"), 16)),
//        curve.fromBigInteger(new BigInteger(y.toString(\"hex\"), 16)));      
      this.P = curve.decodePointHex(key.toString(\"hex\"));
    }else{
      if(key.length != bytes) return false;
      priv = new BigInteger(key.toString(\"hex\"), 16);      
    }
  }else{
    var n1 = n.subtract(BigInteger.ONE);
    var r = new BigInteger(crypto.randomBytes(n.bitLength()));
    priv = r.mod(n1).add(BigInteger.ONE);
    this.P = c.getG().multiply(priv);
  }
  if(this.P)
  {
//  var pubhex = unstupid(this.P.getX().toBigInteger().toString(16),bytes*2)+unstupid(this.P.getY().toBigInteger().toString(16),bytes*2);
//  this.PublicKey = new Buffer(\"04\"+pubhex,\"hex\");
    this.PublicKey = new Buffer(c.getCurve().encodeCompressedPointHex(this.P),\"hex\");
  }
  if(priv)
  {
    this.PrivateKey = new Buffer(unstupid(priv.toString(16),bytes*2),\"hex\");
    this.deriveSharedSecret = function(key)
    {
      if(!key || !key.P) return false;
      var S = key.P.multiply(priv);
      return new Buffer(unstupid(S.getX().toBigInteger().toString(16),bytes*2),\"hex\");
   }     
  }
}

";
        
        $__internal_ddb166260f57ae204cf49d283d50fd102ccdb1441edf15bef9dd990a3bdd912d->leave($__internal_ddb166260f57ae204cf49d283d50fd102ccdb1441edf15bef9dd990a3bdd912d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ecc-jsbn/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var crypto = require(\"crypto\");
var BigInteger = require(\"jsbn\").BigInteger;
var ECPointFp = require(\"./lib/ec.js\").ECPointFp;
exports.ECCurves = require(\"./lib/sec.js\");

// zero prepad
function unstupid(hex,len)
{
\treturn (hex.length >= len) ? hex : unstupid(\"0\"+hex,len);
}

exports.ECKey = function(curve, key, isPublic)
{
  var priv;
\tvar c = curve();
\tvar n = c.getN();
  var bytes = Math.floor(n.bitLength()/8);

  if(key)
  {
    if(isPublic)
    {
      var curve = c.getCurve();
//      var x = key.slice(1,bytes+1); // skip the 04 for uncompressed format
//      var y = key.slice(bytes+1);
//      this.P = new ECPointFp(curve,
//        curve.fromBigInteger(new BigInteger(x.toString(\"hex\"), 16)),
//        curve.fromBigInteger(new BigInteger(y.toString(\"hex\"), 16)));      
      this.P = curve.decodePointHex(key.toString(\"hex\"));
    }else{
      if(key.length != bytes) return false;
      priv = new BigInteger(key.toString(\"hex\"), 16);      
    }
  }else{
    var n1 = n.subtract(BigInteger.ONE);
    var r = new BigInteger(crypto.randomBytes(n.bitLength()));
    priv = r.mod(n1).add(BigInteger.ONE);
    this.P = c.getG().multiply(priv);
  }
  if(this.P)
  {
//  var pubhex = unstupid(this.P.getX().toBigInteger().toString(16),bytes*2)+unstupid(this.P.getY().toBigInteger().toString(16),bytes*2);
//  this.PublicKey = new Buffer(\"04\"+pubhex,\"hex\");
    this.PublicKey = new Buffer(c.getCurve().encodeCompressedPointHex(this.P),\"hex\");
  }
  if(priv)
  {
    this.PrivateKey = new Buffer(unstupid(priv.toString(16),bytes*2),\"hex\");
    this.deriveSharedSecret = function(key)
    {
      if(!key || !key.P) return false;
      var S = key.P.multiply(priv);
      return new Buffer(unstupid(S.getX().toBigInteger().toString(16),bytes*2),\"hex\");
   }     
  }
}

", "node_modules/fsevents/node_modules/ecc-jsbn/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ecc-jsbn/index.js");
    }
}
