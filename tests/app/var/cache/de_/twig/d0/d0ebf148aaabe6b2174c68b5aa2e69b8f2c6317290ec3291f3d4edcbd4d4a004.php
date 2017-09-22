<?php

/* node_modules/sshpk/lib/index.js */
class __TwigTemplate_17fca976889a04d5fdde9b7899862bb7e56cde5785dfc2329b3e85e835a003fd extends Twig_Template
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
        $__internal_037b802ef4a4454fa3a49148c445f0c1e4bf35fdd85da589b71a6f54a94c082c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037b802ef4a4454fa3a49148c445f0c1e4bf35fdd85da589b71a6f54a94c082c->enter($__internal_037b802ef4a4454fa3a49148c445f0c1e4bf35fdd85da589b71a6f54a94c082c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/index.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

var Key = require('./key');
var Fingerprint = require('./fingerprint');
var Signature = require('./signature');
var PrivateKey = require('./private-key');
var Certificate = require('./certificate');
var Identity = require('./identity');
var errs = require('./errors');

module.exports = {
\t/* top-level classes */
\tKey: Key,
\tparseKey: Key.parse,
\tFingerprint: Fingerprint,
\tparseFingerprint: Fingerprint.parse,
\tSignature: Signature,
\tparseSignature: Signature.parse,
\tPrivateKey: PrivateKey,
\tparsePrivateKey: PrivateKey.parse,
\tgeneratePrivateKey: PrivateKey.generate,
\tCertificate: Certificate,
\tparseCertificate: Certificate.parse,
\tcreateSelfSignedCertificate: Certificate.createSelfSigned,
\tcreateCertificate: Certificate.create,
\tIdentity: Identity,
\tidentityFromDN: Identity.parseDN,
\tidentityForHost: Identity.forHost,
\tidentityForUser: Identity.forUser,
\tidentityForEmail: Identity.forEmail,

\t/* errors */
\tFingerprintFormatError: errs.FingerprintFormatError,
\tInvalidAlgorithmError: errs.InvalidAlgorithmError,
\tKeyParseError: errs.KeyParseError,
\tSignatureParseError: errs.SignatureParseError,
\tKeyEncryptedError: errs.KeyEncryptedError,
\tCertificateParseError: errs.CertificateParseError
};
";
        
        $__internal_037b802ef4a4454fa3a49148c445f0c1e4bf35fdd85da589b71a6f54a94c082c->leave($__internal_037b802ef4a4454fa3a49148c445f0c1e4bf35fdd85da589b71a6f54a94c082c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2015 Joyent, Inc.

var Key = require('./key');
var Fingerprint = require('./fingerprint');
var Signature = require('./signature');
var PrivateKey = require('./private-key');
var Certificate = require('./certificate');
var Identity = require('./identity');
var errs = require('./errors');

module.exports = {
\t/* top-level classes */
\tKey: Key,
\tparseKey: Key.parse,
\tFingerprint: Fingerprint,
\tparseFingerprint: Fingerprint.parse,
\tSignature: Signature,
\tparseSignature: Signature.parse,
\tPrivateKey: PrivateKey,
\tparsePrivateKey: PrivateKey.parse,
\tgeneratePrivateKey: PrivateKey.generate,
\tCertificate: Certificate,
\tparseCertificate: Certificate.parse,
\tcreateSelfSignedCertificate: Certificate.createSelfSigned,
\tcreateCertificate: Certificate.create,
\tIdentity: Identity,
\tidentityFromDN: Identity.parseDN,
\tidentityForHost: Identity.forHost,
\tidentityForUser: Identity.forUser,
\tidentityForEmail: Identity.forEmail,

\t/* errors */
\tFingerprintFormatError: errs.FingerprintFormatError,
\tInvalidAlgorithmError: errs.InvalidAlgorithmError,
\tKeyParseError: errs.KeyParseError,
\tSignatureParseError: errs.SignatureParseError,
\tKeyEncryptedError: errs.KeyEncryptedError,
\tCertificateParseError: errs.CertificateParseError
};
", "node_modules/sshpk/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/index.js");
    }
}
