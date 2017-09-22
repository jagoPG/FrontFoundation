<?php

/* node_modules/fsevents/node_modules/sshpk/lib/index.js */
class __TwigTemplate_d4d5ba046f82dfaf18ec393a84623ac419f833bf0c283491351003c12060a19f extends Twig_Template
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
        $__internal_ec0d4e6ea42613d7507409272bf4e466fe9a5c181534d07e088ddf983f6b7458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0d4e6ea42613d7507409272bf4e466fe9a5c181534d07e088ddf983f6b7458->enter($__internal_ec0d4e6ea42613d7507409272bf4e466fe9a5c181534d07e088ddf983f6b7458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/lib/index.js"));

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
        
        $__internal_ec0d4e6ea42613d7507409272bf4e466fe9a5c181534d07e088ddf983f6b7458->leave($__internal_ec0d4e6ea42613d7507409272bf4e466fe9a5c181534d07e088ddf983f6b7458_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/lib/index.js";
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
", "node_modules/fsevents/node_modules/sshpk/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/lib/index.js");
    }
}
