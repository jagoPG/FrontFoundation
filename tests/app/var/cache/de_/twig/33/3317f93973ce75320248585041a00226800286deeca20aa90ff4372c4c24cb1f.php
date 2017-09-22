<?php

/* node_modules/sshpk/lib/algs.js */
class __TwigTemplate_a593bcb124b1fbb4e71585ad20bd0d7d63b0a93fa9c943cfcba957b03c7213b0 extends Twig_Template
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
        $__internal_7c0b114ffe266aaf77e9e2212abdf9c9e8139787a80c321827f7698305d53d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0b114ffe266aaf77e9e2212abdf9c9e8139787a80c321827f7698305d53d98->enter($__internal_7c0b114ffe266aaf77e9e2212abdf9c9e8139787a80c321827f7698305d53d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/algs.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

var algInfo = {
\t'dsa': {
\t\tparts: ['p', 'q', 'g', 'y'],
\t\tsizePart: 'p'
\t},
\t'rsa': {
\t\tparts: ['e', 'n'],
\t\tsizePart: 'n'
\t},
\t'ecdsa': {
\t\tparts: ['curve', 'Q'],
\t\tsizePart: 'Q'
\t},
\t'ed25519': {
\t\tparts: ['R'],
\t\tnormalize: false,
\t\tsizePart: 'R'
\t}
};
algInfo['curve25519'] = algInfo['ed25519'];

var algPrivInfo = {
\t'dsa': {
\t\tparts: ['p', 'q', 'g', 'y', 'x']
\t},
\t'rsa': {
\t\tparts: ['n', 'e', 'd', 'iqmp', 'p', 'q']
\t},
\t'ecdsa': {
\t\tparts: ['curve', 'Q', 'd']
\t},
\t'ed25519': {
\t\tparts: ['R', 'r'],
\t\tnormalize: false
\t}
};
algPrivInfo['curve25519'] = algPrivInfo['ed25519'];

var hashAlgs = {
\t'md5': true,
\t'sha1': true,
\t'sha256': true,
\t'sha384': true,
\t'sha512': true
};

/*
 * Taken from
 * http://csrc.nist.gov/groups/ST/toolkit/documents/dss/NISTReCur.pdf
 */
var curves = {
\t'nistp256': {
\t\tsize: 256,
\t\tpkcs8oid: '1.2.840.10045.3.1.7',
\t\tp: new Buffer(('00' +
\t\t    'ffffffff 00000001 00000000 00000000' +
\t\t    '00000000 ffffffff ffffffff ffffffff').
\t\t    replace(/ /g, ''), 'hex'),
\t\ta: new Buffer(('00' +
\t\t    'FFFFFFFF 00000001 00000000 00000000' +
\t\t    '00000000 FFFFFFFF FFFFFFFF FFFFFFFC').
\t\t    replace(/ /g, ''), 'hex'),
\t\tb: new Buffer((
\t\t    '5ac635d8 aa3a93e7 b3ebbd55 769886bc' +
\t\t    '651d06b0 cc53b0f6 3bce3c3e 27d2604b').
\t\t    replace(/ /g, ''), 'hex'),
\t\ts: new Buffer(('00' +
\t\t    'c49d3608 86e70493 6a6678e1 139d26b7' +
\t\t    '819f7e90').
\t\t    replace(/ /g, ''), 'hex'),
\t\tn: new Buffer(('00' +
\t\t    'ffffffff 00000000 ffffffff ffffffff' +
\t\t    'bce6faad a7179e84 f3b9cac2 fc632551').
\t\t    replace(/ /g, ''), 'hex'),
\t\tG: new Buffer(('04' +
\t\t    '6b17d1f2 e12c4247 f8bce6e5 63a440f2' +
\t\t    '77037d81 2deb33a0 f4a13945 d898c296' +
\t\t    '4fe342e2 fe1a7f9b 8ee7eb4a 7c0f9e16' +
\t\t    '2bce3357 6b315ece cbb64068 37bf51f5').
\t\t    replace(/ /g, ''), 'hex')
\t},
\t'nistp384': {
\t\tsize: 384,
\t\tpkcs8oid: '1.3.132.0.34',
\t\tp: new Buffer(('00' +
\t\t    'ffffffff ffffffff ffffffff ffffffff' +
\t\t    'ffffffff ffffffff ffffffff fffffffe' +
\t\t    'ffffffff 00000000 00000000 ffffffff').
\t\t    replace(/ /g, ''), 'hex'),
\t\ta: new Buffer(('00' +
\t\t    'FFFFFFFF FFFFFFFF FFFFFFFF FFFFFFFF' +
\t\t    'FFFFFFFF FFFFFFFF FFFFFFFF FFFFFFFE' +
\t\t    'FFFFFFFF 00000000 00000000 FFFFFFFC').
\t\t    replace(/ /g, ''), 'hex'),
\t\tb: new Buffer((
\t\t    'b3312fa7 e23ee7e4 988e056b e3f82d19' +
\t\t    '181d9c6e fe814112 0314088f 5013875a' +
\t\t    'c656398d 8a2ed19d 2a85c8ed d3ec2aef').
\t\t    replace(/ /g, ''), 'hex'),
\t\ts: new Buffer(('00' +
\t\t    'a335926a a319a27a 1d00896a 6773a482' +
\t\t    '7acdac73').
\t\t    replace(/ /g, ''), 'hex'),
\t\tn: new Buffer(('00' +
\t\t    'ffffffff ffffffff ffffffff ffffffff' +
\t\t    'ffffffff ffffffff c7634d81 f4372ddf' +
\t\t    '581a0db2 48b0a77a ecec196a ccc52973').
\t\t    replace(/ /g, ''), 'hex'),
\t\tG: new Buffer(('04' +
\t\t    'aa87ca22 be8b0537 8eb1c71e f320ad74' +
\t\t    '6e1d3b62 8ba79b98 59f741e0 82542a38' +
\t\t    '5502f25d bf55296c 3a545e38 72760ab7' +
\t\t    '3617de4a 96262c6f 5d9e98bf 9292dc29' +
\t\t    'f8f41dbd 289a147c e9da3113 b5f0b8c0' +
\t\t    '0a60b1ce 1d7e819d 7a431d7c 90ea0e5f').
\t\t    replace(/ /g, ''), 'hex')
\t},
\t'nistp521': {
\t\tsize: 521,
\t\tpkcs8oid: '1.3.132.0.35',
\t\tp: new Buffer((
\t\t    '01ffffff ffffffff ffffffff ffffffff' +
\t\t    'ffffffff ffffffff ffffffff ffffffff' +
\t\t    'ffffffff ffffffff ffffffff ffffffff' +
\t\t    'ffffffff ffffffff ffffffff ffffffff' +
\t\t    'ffff').replace(/ /g, ''), 'hex'),
\t\ta: new Buffer(('01FF' +
\t\t    'FFFFFFFF FFFFFFFF FFFFFFFF FFFFFFFF' +
\t\t    'FFFFFFFF FFFFFFFF FFFFFFFF FFFFFFFF' +
\t\t    'FFFFFFFF FFFFFFFF FFFFFFFF FFFFFFFF' +
\t\t    'FFFFFFFF FFFFFFFF FFFFFFFF FFFFFFFC').
\t\t    replace(/ /g, ''), 'hex'),
\t\tb: new Buffer(('51' +
\t\t    '953eb961 8e1c9a1f 929a21a0 b68540ee' +
\t\t    'a2da725b 99b315f3 b8b48991 8ef109e1' +
\t\t    '56193951 ec7e937b 1652c0bd 3bb1bf07' +
\t\t    '3573df88 3d2c34f1 ef451fd4 6b503f00').
\t\t    replace(/ /g, ''), 'hex'),
\t\ts: new Buffer(('00' +
\t\t    'd09e8800 291cb853 96cc6717 393284aa' +
\t\t    'a0da64ba').replace(/ /g, ''), 'hex'),
\t\tn: new Buffer(('01ff' +
\t\t    'ffffffff ffffffff ffffffff ffffffff' +
\t\t    'ffffffff ffffffff ffffffff fffffffa' +
\t\t    '51868783 bf2f966b 7fcc0148 f709a5d0' +
\t\t    '3bb5c9b8 899c47ae bb6fb71e 91386409').
\t\t    replace(/ /g, ''), 'hex'),
\t\tG: new Buffer(('04' +
\t\t    '00c6 858e06b7 0404e9cd 9e3ecb66 2395b442' +
\t\t         '9c648139 053fb521 f828af60 6b4d3dba' +
\t\t         'a14b5e77 efe75928 fe1dc127 a2ffa8de' +
\t\t         '3348b3c1 856a429b f97e7e31 c2e5bd66' +
\t\t    '0118 39296a78 9a3bc004 5c8a5fb4 2c7d1bd9' +
\t\t         '98f54449 579b4468 17afbd17 273e662c' +
\t\t         '97ee7299 5ef42640 c550b901 3fad0761' +
\t\t         '353c7086 a272c240 88be9476 9fd16650').
\t\t    replace(/ /g, ''), 'hex')
\t}
};

module.exports = {
\tinfo: algInfo,
\tprivInfo: algPrivInfo,
\thashAlgs: hashAlgs,
\tcurves: curves
};
";
        
        $__internal_7c0b114ffe266aaf77e9e2212abdf9c9e8139787a80c321827f7698305d53d98->leave($__internal_7c0b114ffe266aaf77e9e2212abdf9c9e8139787a80c321827f7698305d53d98_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/algs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2015 Joyent, Inc.

var algInfo = {
\t'dsa': {
\t\tparts: ['p', 'q', 'g', 'y'],
\t\tsizePart: 'p'
\t},
\t'rsa': {
\t\tparts: ['e', 'n'],
\t\tsizePart: 'n'
\t},
\t'ecdsa': {
\t\tparts: ['curve', 'Q'],
\t\tsizePart: 'Q'
\t},
\t'ed25519': {
\t\tparts: ['R'],
\t\tnormalize: false,
\t\tsizePart: 'R'
\t}
};
algInfo['curve25519'] = algInfo['ed25519'];

var algPrivInfo = {
\t'dsa': {
\t\tparts: ['p', 'q', 'g', 'y', 'x']
\t},
\t'rsa': {
\t\tparts: ['n', 'e', 'd', 'iqmp', 'p', 'q']
\t},
\t'ecdsa': {
\t\tparts: ['curve', 'Q', 'd']
\t},
\t'ed25519': {
\t\tparts: ['R', 'r'],
\t\tnormalize: false
\t}
};
algPrivInfo['curve25519'] = algPrivInfo['ed25519'];

var hashAlgs = {
\t'md5': true,
\t'sha1': true,
\t'sha256': true,
\t'sha384': true,
\t'sha512': true
};

/*
 * Taken from
 * http://csrc.nist.gov/groups/ST/toolkit/documents/dss/NISTReCur.pdf
 */
var curves = {
\t'nistp256': {
\t\tsize: 256,
\t\tpkcs8oid: '1.2.840.10045.3.1.7',
\t\tp: new Buffer(('00' +
\t\t    'ffffffff 00000001 00000000 00000000' +
\t\t    '00000000 ffffffff ffffffff ffffffff').
\t\t    replace(/ /g, ''), 'hex'),
\t\ta: new Buffer(('00' +
\t\t    'FFFFFFFF 00000001 00000000 00000000' +
\t\t    '00000000 FFFFFFFF FFFFFFFF FFFFFFFC').
\t\t    replace(/ /g, ''), 'hex'),
\t\tb: new Buffer((
\t\t    '5ac635d8 aa3a93e7 b3ebbd55 769886bc' +
\t\t    '651d06b0 cc53b0f6 3bce3c3e 27d2604b').
\t\t    replace(/ /g, ''), 'hex'),
\t\ts: new Buffer(('00' +
\t\t    'c49d3608 86e70493 6a6678e1 139d26b7' +
\t\t    '819f7e90').
\t\t    replace(/ /g, ''), 'hex'),
\t\tn: new Buffer(('00' +
\t\t    'ffffffff 00000000 ffffffff ffffffff' +
\t\t    'bce6faad a7179e84 f3b9cac2 fc632551').
\t\t    replace(/ /g, ''), 'hex'),
\t\tG: new Buffer(('04' +
\t\t    '6b17d1f2 e12c4247 f8bce6e5 63a440f2' +
\t\t    '77037d81 2deb33a0 f4a13945 d898c296' +
\t\t    '4fe342e2 fe1a7f9b 8ee7eb4a 7c0f9e16' +
\t\t    '2bce3357 6b315ece cbb64068 37bf51f5').
\t\t    replace(/ /g, ''), 'hex')
\t},
\t'nistp384': {
\t\tsize: 384,
\t\tpkcs8oid: '1.3.132.0.34',
\t\tp: new Buffer(('00' +
\t\t    'ffffffff ffffffff ffffffff ffffffff' +
\t\t    'ffffffff ffffffff ffffffff fffffffe' +
\t\t    'ffffffff 00000000 00000000 ffffffff').
\t\t    replace(/ /g, ''), 'hex'),
\t\ta: new Buffer(('00' +
\t\t    'FFFFFFFF FFFFFFFF FFFFFFFF FFFFFFFF' +
\t\t    'FFFFFFFF FFFFFFFF FFFFFFFF FFFFFFFE' +
\t\t    'FFFFFFFF 00000000 00000000 FFFFFFFC').
\t\t    replace(/ /g, ''), 'hex'),
\t\tb: new Buffer((
\t\t    'b3312fa7 e23ee7e4 988e056b e3f82d19' +
\t\t    '181d9c6e fe814112 0314088f 5013875a' +
\t\t    'c656398d 8a2ed19d 2a85c8ed d3ec2aef').
\t\t    replace(/ /g, ''), 'hex'),
\t\ts: new Buffer(('00' +
\t\t    'a335926a a319a27a 1d00896a 6773a482' +
\t\t    '7acdac73').
\t\t    replace(/ /g, ''), 'hex'),
\t\tn: new Buffer(('00' +
\t\t    'ffffffff ffffffff ffffffff ffffffff' +
\t\t    'ffffffff ffffffff c7634d81 f4372ddf' +
\t\t    '581a0db2 48b0a77a ecec196a ccc52973').
\t\t    replace(/ /g, ''), 'hex'),
\t\tG: new Buffer(('04' +
\t\t    'aa87ca22 be8b0537 8eb1c71e f320ad74' +
\t\t    '6e1d3b62 8ba79b98 59f741e0 82542a38' +
\t\t    '5502f25d bf55296c 3a545e38 72760ab7' +
\t\t    '3617de4a 96262c6f 5d9e98bf 9292dc29' +
\t\t    'f8f41dbd 289a147c e9da3113 b5f0b8c0' +
\t\t    '0a60b1ce 1d7e819d 7a431d7c 90ea0e5f').
\t\t    replace(/ /g, ''), 'hex')
\t},
\t'nistp521': {
\t\tsize: 521,
\t\tpkcs8oid: '1.3.132.0.35',
\t\tp: new Buffer((
\t\t    '01ffffff ffffffff ffffffff ffffffff' +
\t\t    'ffffffff ffffffff ffffffff ffffffff' +
\t\t    'ffffffff ffffffff ffffffff ffffffff' +
\t\t    'ffffffff ffffffff ffffffff ffffffff' +
\t\t    'ffff').replace(/ /g, ''), 'hex'),
\t\ta: new Buffer(('01FF' +
\t\t    'FFFFFFFF FFFFFFFF FFFFFFFF FFFFFFFF' +
\t\t    'FFFFFFFF FFFFFFFF FFFFFFFF FFFFFFFF' +
\t\t    'FFFFFFFF FFFFFFFF FFFFFFFF FFFFFFFF' +
\t\t    'FFFFFFFF FFFFFFFF FFFFFFFF FFFFFFFC').
\t\t    replace(/ /g, ''), 'hex'),
\t\tb: new Buffer(('51' +
\t\t    '953eb961 8e1c9a1f 929a21a0 b68540ee' +
\t\t    'a2da725b 99b315f3 b8b48991 8ef109e1' +
\t\t    '56193951 ec7e937b 1652c0bd 3bb1bf07' +
\t\t    '3573df88 3d2c34f1 ef451fd4 6b503f00').
\t\t    replace(/ /g, ''), 'hex'),
\t\ts: new Buffer(('00' +
\t\t    'd09e8800 291cb853 96cc6717 393284aa' +
\t\t    'a0da64ba').replace(/ /g, ''), 'hex'),
\t\tn: new Buffer(('01ff' +
\t\t    'ffffffff ffffffff ffffffff ffffffff' +
\t\t    'ffffffff ffffffff ffffffff fffffffa' +
\t\t    '51868783 bf2f966b 7fcc0148 f709a5d0' +
\t\t    '3bb5c9b8 899c47ae bb6fb71e 91386409').
\t\t    replace(/ /g, ''), 'hex'),
\t\tG: new Buffer(('04' +
\t\t    '00c6 858e06b7 0404e9cd 9e3ecb66 2395b442' +
\t\t         '9c648139 053fb521 f828af60 6b4d3dba' +
\t\t         'a14b5e77 efe75928 fe1dc127 a2ffa8de' +
\t\t         '3348b3c1 856a429b f97e7e31 c2e5bd66' +
\t\t    '0118 39296a78 9a3bc004 5c8a5fb4 2c7d1bd9' +
\t\t         '98f54449 579b4468 17afbd17 273e662c' +
\t\t         '97ee7299 5ef42640 c550b901 3fad0761' +
\t\t         '353c7086 a272c240 88be9476 9fd16650').
\t\t    replace(/ /g, ''), 'hex')
\t}
};

module.exports = {
\tinfo: algInfo,
\tprivInfo: algPrivInfo,
\thashAlgs: hashAlgs,
\tcurves: curves
};
", "node_modules/sshpk/lib/algs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/algs.js");
    }
}
