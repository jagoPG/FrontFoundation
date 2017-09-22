<?php

/* node_modules/sshpk/lib/errors.js */
class __TwigTemplate_d98d5d55055b638331e5987a0e2fef9339324ebde6231431a511c5851c5b436f extends Twig_Template
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
        $__internal_031c2c8c48fdf9b4efbeaf7ab97a50d6e441e20b5c266bb329a6ec0bb1b3ae97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031c2c8c48fdf9b4efbeaf7ab97a50d6e441e20b5c266bb329a6ec0bb1b3ae97->enter($__internal_031c2c8c48fdf9b4efbeaf7ab97a50d6e441e20b5c266bb329a6ec0bb1b3ae97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/errors.js"));

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
        
        $__internal_031c2c8c48fdf9b4efbeaf7ab97a50d6e441e20b5c266bb329a6ec0bb1b3ae97->leave($__internal_031c2c8c48fdf9b4efbeaf7ab97a50d6e441e20b5c266bb329a6ec0bb1b3ae97_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/errors.js";
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
", "node_modules/sshpk/lib/errors.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/errors.js");
    }
}
