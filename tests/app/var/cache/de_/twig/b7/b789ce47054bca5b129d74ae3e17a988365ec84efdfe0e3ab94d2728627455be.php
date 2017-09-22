<?php

/* node_modules/asn1.js/lib/asn1/encoders/pem.js */
class __TwigTemplate_7be521358c0621e81e2d8d3afbb9ae749af3f6853cf6407d129741ddce76a3c0 extends Twig_Template
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
        $__internal_a8b4ab931b6b8f8bf5e8dfa1c64dc2cc5a03bd76da3d0bd20474ee431e983315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b4ab931b6b8f8bf5e8dfa1c64dc2cc5a03bd76da3d0bd20474ee431e983315->enter($__internal_a8b4ab931b6b8f8bf5e8dfa1c64dc2cc5a03bd76da3d0bd20474ee431e983315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asn1.js/lib/asn1/encoders/pem.js"));

        // line 1
        echo "var inherits = require('inherits');

var DEREncoder = require('./der');

function PEMEncoder(entity) {
  DEREncoder.call(this, entity);
  this.enc = 'pem';
};
inherits(PEMEncoder, DEREncoder);
module.exports = PEMEncoder;

PEMEncoder.prototype.encode = function encode(data, options) {
  var buf = DEREncoder.prototype.encode.call(this, data);

  var p = buf.toString('base64');
  var out = [ '-----BEGIN ' + options.label + '-----' ];
  for (var i = 0; i < p.length; i += 64)
    out.push(p.slice(i, i + 64));
  out.push('-----END ' + options.label + '-----');
  return out.join('\\n');
};
";
        
        $__internal_a8b4ab931b6b8f8bf5e8dfa1c64dc2cc5a03bd76da3d0bd20474ee431e983315->leave($__internal_a8b4ab931b6b8f8bf5e8dfa1c64dc2cc5a03bd76da3d0bd20474ee431e983315_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asn1.js/lib/asn1/encoders/pem.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inherits = require('inherits');

var DEREncoder = require('./der');

function PEMEncoder(entity) {
  DEREncoder.call(this, entity);
  this.enc = 'pem';
};
inherits(PEMEncoder, DEREncoder);
module.exports = PEMEncoder;

PEMEncoder.prototype.encode = function encode(data, options) {
  var buf = DEREncoder.prototype.encode.call(this, data);

  var p = buf.toString('base64');
  var out = [ '-----BEGIN ' + options.label + '-----' ];
  for (var i = 0; i < p.length; i += 64)
    out.push(p.slice(i, i + 64));
  out.push('-----END ' + options.label + '-----');
  return out.join('\\n');
};
", "node_modules/asn1.js/lib/asn1/encoders/pem.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asn1.js/lib/asn1/encoders/pem.js");
    }
}
