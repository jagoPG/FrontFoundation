<?php

/* node_modules/fsevents/node_modules/http-signature/lib/index.js */
class __TwigTemplate_02ad87469cbbc1dd4f2e659f32665e0c11777035efeab5b01ab73494eddae4cb extends Twig_Template
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
        $__internal_3db934098b85b565c3853d1de97c3af880ea939344fac5bf8bbe2c53592672dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db934098b85b565c3853d1de97c3af880ea939344fac5bf8bbe2c53592672dc->enter($__internal_3db934098b85b565c3853d1de97c3af880ea939344fac5bf8bbe2c53592672dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/http-signature/lib/index.js"));

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
        
        $__internal_3db934098b85b565c3853d1de97c3af880ea939344fac5bf8bbe2c53592672dc->leave($__internal_3db934098b85b565c3853d1de97c3af880ea939344fac5bf8bbe2c53592672dc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/http-signature/lib/index.js";
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
", "node_modules/fsevents/node_modules/http-signature/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/http-signature/lib/index.js");
    }
}
