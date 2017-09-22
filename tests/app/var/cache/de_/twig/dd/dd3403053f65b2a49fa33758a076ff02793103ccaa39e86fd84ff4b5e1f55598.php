<?php

/* node_modules/fsevents/node_modules/sshpk/lib/errors.js */
class __TwigTemplate_7977ea520daade61e44b8b2334fcc482f973ab3f151f85c75b784d567b015128 extends Twig_Template
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
        $__internal_d86b05f5a16f18a0c608a089a5a60dc163a9c852b00ea1abb90f75da5bf495d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86b05f5a16f18a0c608a089a5a60dc163a9c852b00ea1abb90f75da5bf495d0->enter($__internal_d86b05f5a16f18a0c608a089a5a60dc163a9c852b00ea1abb90f75da5bf495d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/lib/errors.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

var assert = require('assert-plus');
var util = require('util');

function FingerprintFormatError(fp, format) {
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, FingerprintFormatError);
\tthis.name = 'FingerprintFormatError';
\tthis.fingerprint = fp;
\tthis.format = format;
\tthis.message = 'Fingerprint format is not supported, or is invalid: ';
\tif (fp !== undefined)
\t\tthis.message += ' fingerprint = ' + fp;
\tif (format !== undefined)
\t\tthis.message += ' format = ' + format;
}
util.inherits(FingerprintFormatError, Error);

function InvalidAlgorithmError(alg) {
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, InvalidAlgorithmError);
\tthis.name = 'InvalidAlgorithmError';
\tthis.algorithm = alg;
\tthis.message = 'Algorithm \"' + alg + '\" is not supported';
}
util.inherits(InvalidAlgorithmError, Error);

function KeyParseError(name, format, innerErr) {
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, KeyParseError);
\tthis.name = 'KeyParseError';
\tthis.format = format;
\tthis.keyName = name;
\tthis.innerErr = innerErr;
\tthis.message = 'Failed to parse ' + name + ' as a valid ' + format +
\t    ' format key: ' + innerErr.message;
}
util.inherits(KeyParseError, Error);

function SignatureParseError(type, format, innerErr) {
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, SignatureParseError);
\tthis.name = 'SignatureParseError';
\tthis.type = type;
\tthis.format = format;
\tthis.innerErr = innerErr;
\tthis.message = 'Failed to parse the given data as a ' + type +
\t    ' signature in ' + format + ' format: ' + innerErr.message;
}
util.inherits(SignatureParseError, Error);

function CertificateParseError(name, format, innerErr) {
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, CertificateParseError);
\tthis.name = 'CertificateParseError';
\tthis.format = format;
\tthis.certName = name;
\tthis.innerErr = innerErr;
\tthis.message = 'Failed to parse ' + name + ' as a valid ' + format +
\t    ' format certificate: ' + innerErr.message;
}
util.inherits(CertificateParseError, Error);

function KeyEncryptedError(name, format) {
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, KeyEncryptedError);
\tthis.name = 'KeyEncryptedError';
\tthis.format = format;
\tthis.keyName = name;
\tthis.message = 'The ' + format + ' format key ' + name + ' is ' +
\t    'encrypted (password-protected), and no passphrase was ' +
\t    'provided in `options`';
}
util.inherits(KeyEncryptedError, Error);

module.exports = {
\tFingerprintFormatError: FingerprintFormatError,
\tInvalidAlgorithmError: InvalidAlgorithmError,
\tKeyParseError: KeyParseError,
\tSignatureParseError: SignatureParseError,
\tKeyEncryptedError: KeyEncryptedError,
\tCertificateParseError: CertificateParseError
};
";
        
        $__internal_d86b05f5a16f18a0c608a089a5a60dc163a9c852b00ea1abb90f75da5bf495d0->leave($__internal_d86b05f5a16f18a0c608a089a5a60dc163a9c852b00ea1abb90f75da5bf495d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/lib/errors.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2015 Joyent, Inc.

var assert = require('assert-plus');
var util = require('util');

function FingerprintFormatError(fp, format) {
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, FingerprintFormatError);
\tthis.name = 'FingerprintFormatError';
\tthis.fingerprint = fp;
\tthis.format = format;
\tthis.message = 'Fingerprint format is not supported, or is invalid: ';
\tif (fp !== undefined)
\t\tthis.message += ' fingerprint = ' + fp;
\tif (format !== undefined)
\t\tthis.message += ' format = ' + format;
}
util.inherits(FingerprintFormatError, Error);

function InvalidAlgorithmError(alg) {
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, InvalidAlgorithmError);
\tthis.name = 'InvalidAlgorithmError';
\tthis.algorithm = alg;
\tthis.message = 'Algorithm \"' + alg + '\" is not supported';
}
util.inherits(InvalidAlgorithmError, Error);

function KeyParseError(name, format, innerErr) {
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, KeyParseError);
\tthis.name = 'KeyParseError';
\tthis.format = format;
\tthis.keyName = name;
\tthis.innerErr = innerErr;
\tthis.message = 'Failed to parse ' + name + ' as a valid ' + format +
\t    ' format key: ' + innerErr.message;
}
util.inherits(KeyParseError, Error);

function SignatureParseError(type, format, innerErr) {
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, SignatureParseError);
\tthis.name = 'SignatureParseError';
\tthis.type = type;
\tthis.format = format;
\tthis.innerErr = innerErr;
\tthis.message = 'Failed to parse the given data as a ' + type +
\t    ' signature in ' + format + ' format: ' + innerErr.message;
}
util.inherits(SignatureParseError, Error);

function CertificateParseError(name, format, innerErr) {
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, CertificateParseError);
\tthis.name = 'CertificateParseError';
\tthis.format = format;
\tthis.certName = name;
\tthis.innerErr = innerErr;
\tthis.message = 'Failed to parse ' + name + ' as a valid ' + format +
\t    ' format certificate: ' + innerErr.message;
}
util.inherits(CertificateParseError, Error);

function KeyEncryptedError(name, format) {
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, KeyEncryptedError);
\tthis.name = 'KeyEncryptedError';
\tthis.format = format;
\tthis.keyName = name;
\tthis.message = 'The ' + format + ' format key ' + name + ' is ' +
\t    'encrypted (password-protected), and no passphrase was ' +
\t    'provided in `options`';
}
util.inherits(KeyEncryptedError, Error);

module.exports = {
\tFingerprintFormatError: FingerprintFormatError,
\tInvalidAlgorithmError: InvalidAlgorithmError,
\tKeyParseError: KeyParseError,
\tSignatureParseError: SignatureParseError,
\tKeyEncryptedError: KeyEncryptedError,
\tCertificateParseError: CertificateParseError
};
", "node_modules/fsevents/node_modules/sshpk/lib/errors.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/lib/errors.js");
    }
}
