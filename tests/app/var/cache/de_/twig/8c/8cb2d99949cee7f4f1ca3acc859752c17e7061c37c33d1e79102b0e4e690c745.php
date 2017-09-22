<?php

/* node_modules/http-signature/lib/index.js */
class __TwigTemplate_6a381166ceea7bd929b12b3587688326ff99cb2bdd0f57bec162fa0cdb2d7273 extends Twig_Template
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
        $__internal_5c999b94bf33479fb36cc32938c9417c67905be16966c110978e49df2bc7fb11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c999b94bf33479fb36cc32938c9417c67905be16966c110978e49df2bc7fb11->enter($__internal_5c999b94bf33479fb36cc32938c9417c67905be16966c110978e49df2bc7fb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/http-signature/lib/index.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

var parser = require('./parser');
var signer = require('./signer');
var verify = require('./verify');
var utils = require('./utils');



///--- API

module.exports = {

  parse: parser.parseRequest,
  parseRequest: parser.parseRequest,

  sign: signer.signRequest,
  signRequest: signer.signRequest,
  createSigner: signer.createSigner,
  isSigner: signer.isSigner,

  sshKeyToPEM: utils.sshKeyToPEM,
  sshKeyFingerprint: utils.fingerprint,
  pemToRsaSSHKey: utils.pemToRsaSSHKey,

  verify: verify.verifySignature,
  verifySignature: verify.verifySignature,
  verifyHMAC: verify.verifyHMAC
};
";
        
        $__internal_5c999b94bf33479fb36cc32938c9417c67905be16966c110978e49df2bc7fb11->leave($__internal_5c999b94bf33479fb36cc32938c9417c67905be16966c110978e49df2bc7fb11_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/http-signature/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2015 Joyent, Inc.

var parser = require('./parser');
var signer = require('./signer');
var verify = require('./verify');
var utils = require('./utils');



///--- API

module.exports = {

  parse: parser.parseRequest,
  parseRequest: parser.parseRequest,

  sign: signer.signRequest,
  signRequest: signer.signRequest,
  createSigner: signer.createSigner,
  isSigner: signer.isSigner,

  sshKeyToPEM: utils.sshKeyToPEM,
  sshKeyFingerprint: utils.fingerprint,
  pemToRsaSSHKey: utils.pemToRsaSSHKey,

  verify: verify.verifySignature,
  verifySignature: verify.verifySignature,
  verifyHMAC: verify.verifyHMAC
};
", "node_modules/http-signature/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/http-signature/lib/index.js");
    }
}
