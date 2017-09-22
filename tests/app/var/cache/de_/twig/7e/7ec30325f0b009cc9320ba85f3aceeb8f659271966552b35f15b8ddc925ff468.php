<?php

/* node_modules/sshpk/man/man1/sshpk-sign.1 */
class __TwigTemplate_51b73225295a0acbc69ae5e9a751b3a9ffd82e1031622f6a7ebd603aec2d9612 extends Twig_Template
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
        $__internal_8051c120a94b3aa5a6c1ac32a5292b8acccf51f458d383dc3170f1242fdda51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8051c120a94b3aa5a6c1ac32a5292b8acccf51f458d383dc3170f1242fdda51d->enter($__internal_8051c120a94b3aa5a6c1ac32a5292b8acccf51f458d383dc3170f1242fdda51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/man/man1/sshpk-sign.1"));

        // line 1
        echo ".TH sshpk\\-sign 1 \"Jan 2016\" sshpk \"sshpk Commands\"
.SH NAME
.PP
sshpk\\-sign \\- sign data using an SSH key
.SH SYNOPSYS
.PP
\\fB\\fCsshpk\\-sign\\fR \\-i KEYPATH [OPTION...]
.SH DESCRIPTION
.PP
Takes in arbitrary bytes, and signs them using an SSH private key. The key can
be of any type or format supported by the \\fB\\fCsshpk\\fR library, including the
standard OpenSSH formats, as well as PEM PKCS#1 and PKCS#8.
.PP
The signature is printed out in Base64 encoding, unless the \\fB\\fC\\-\\-binary\\fR or \\fB\\fC\\-b\\fR
option is given.
.SH EXAMPLES
.PP
Signing with default settings:
.PP
.RS
.nf
\$ printf 'foo' | sshpk\\-sign \\-i ~/.ssh/id_ecdsa
MEUCIAMdLS/vXrrtWFepwe...
.fi
.RE
.PP
Signing in SSH (RFC 4253) format (rather than the default ASN.1):
.PP
.RS
.nf
\$ printf 'foo' | sshpk\\-sign \\-i ~/.ssh/id_ecdsa \\-t ssh
AAAAFGVjZHNhLXNoYTIt...
.fi
.RE
.PP
Saving the binary signature to a file:
.PP
.RS
.nf
\$ printf 'foo' | sshpk\\-sign \\-i ~/.ssh/id_ecdsa \\\\
                            \\-o signature.bin \\-b
\$ cat signature.bin | base64
MEUCIAMdLS/vXrrtWFepwe...
.fi
.RE
.SH OPTIONS
.TP
\\fB\\fC\\-v, \\-\\-verbose\\fR
Print extra information about the key and signature to stderr when signing.
.TP
\\fB\\fC\\-b, \\-\\-binary\\fR
Don't base64\\-encode the signature before outputting it.
.TP
\\fB\\fC\\-i KEY, \\-\\-identity=KEY\\fR
Select the key to be used for signing. \\fB\\fCKEY\\fR must be a relative or absolute
filesystem path to the key file. Any format supported by the \\fB\\fCsshpk\\fR library
is supported, including OpenSSH formats and standard PEM PKCS.
.TP
\\fB\\fC\\-f PATH, \\-\\-file=PATH\\fR
Input file to sign instead of stdin.
.TP
\\fB\\fC\\-o PATH, \\-\\-out=PATH\\fR
Output file to save signature in instead of stdout.
.TP
\\fB\\fC\\-H HASH, \\-\\-hash=HASH\\fR
Set the hash algorithm to be used for signing. This should be one of \\fB\\fCsha1\\fR,
\\fB\\fCsha256\\fR or \\fB\\fCsha512\\fR\\&. Some key types may place restrictions on which hash
algorithms may be used (e.g. ED25519 keys can only use SHA\\-512).
.TP
\\fB\\fC\\-t FORMAT, \\-\\-format=FORMAT\\fR
Choose the signature format to use, from \\fB\\fCasn1\\fR, \\fB\\fCssh\\fR or \\fB\\fCraw\\fR (only for
ED25519 signatures). The \\fB\\fCasn1\\fR format is the default, as it is the format
used with TLS and typically the standard in most non\\-SSH libraries (e.g.
OpenSSL). The \\fB\\fCssh\\fR format is used in the SSH protocol and by the ssh\\-agent.
.SH SEE ALSO
.PP
.BR sshpk-verify (1)
.SH BUGS
.PP
Report bugs at Github
\\[la]https://github.com/arekinath/node-sshpk/issues\\[ra]
";
        
        $__internal_8051c120a94b3aa5a6c1ac32a5292b8acccf51f458d383dc3170f1242fdda51d->leave($__internal_8051c120a94b3aa5a6c1ac32a5292b8acccf51f458d383dc3170f1242fdda51d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/man/man1/sshpk-sign.1";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(".TH sshpk\\-sign 1 \"Jan 2016\" sshpk \"sshpk Commands\"
.SH NAME
.PP
sshpk\\-sign \\- sign data using an SSH key
.SH SYNOPSYS
.PP
\\fB\\fCsshpk\\-sign\\fR \\-i KEYPATH [OPTION...]
.SH DESCRIPTION
.PP
Takes in arbitrary bytes, and signs them using an SSH private key. The key can
be of any type or format supported by the \\fB\\fCsshpk\\fR library, including the
standard OpenSSH formats, as well as PEM PKCS#1 and PKCS#8.
.PP
The signature is printed out in Base64 encoding, unless the \\fB\\fC\\-\\-binary\\fR or \\fB\\fC\\-b\\fR
option is given.
.SH EXAMPLES
.PP
Signing with default settings:
.PP
.RS
.nf
\$ printf 'foo' | sshpk\\-sign \\-i ~/.ssh/id_ecdsa
MEUCIAMdLS/vXrrtWFepwe...
.fi
.RE
.PP
Signing in SSH (RFC 4253) format (rather than the default ASN.1):
.PP
.RS
.nf
\$ printf 'foo' | sshpk\\-sign \\-i ~/.ssh/id_ecdsa \\-t ssh
AAAAFGVjZHNhLXNoYTIt...
.fi
.RE
.PP
Saving the binary signature to a file:
.PP
.RS
.nf
\$ printf 'foo' | sshpk\\-sign \\-i ~/.ssh/id_ecdsa \\\\
                            \\-o signature.bin \\-b
\$ cat signature.bin | base64
MEUCIAMdLS/vXrrtWFepwe...
.fi
.RE
.SH OPTIONS
.TP
\\fB\\fC\\-v, \\-\\-verbose\\fR
Print extra information about the key and signature to stderr when signing.
.TP
\\fB\\fC\\-b, \\-\\-binary\\fR
Don't base64\\-encode the signature before outputting it.
.TP
\\fB\\fC\\-i KEY, \\-\\-identity=KEY\\fR
Select the key to be used for signing. \\fB\\fCKEY\\fR must be a relative or absolute
filesystem path to the key file. Any format supported by the \\fB\\fCsshpk\\fR library
is supported, including OpenSSH formats and standard PEM PKCS.
.TP
\\fB\\fC\\-f PATH, \\-\\-file=PATH\\fR
Input file to sign instead of stdin.
.TP
\\fB\\fC\\-o PATH, \\-\\-out=PATH\\fR
Output file to save signature in instead of stdout.
.TP
\\fB\\fC\\-H HASH, \\-\\-hash=HASH\\fR
Set the hash algorithm to be used for signing. This should be one of \\fB\\fCsha1\\fR,
\\fB\\fCsha256\\fR or \\fB\\fCsha512\\fR\\&. Some key types may place restrictions on which hash
algorithms may be used (e.g. ED25519 keys can only use SHA\\-512).
.TP
\\fB\\fC\\-t FORMAT, \\-\\-format=FORMAT\\fR
Choose the signature format to use, from \\fB\\fCasn1\\fR, \\fB\\fCssh\\fR or \\fB\\fCraw\\fR (only for
ED25519 signatures). The \\fB\\fCasn1\\fR format is the default, as it is the format
used with TLS and typically the standard in most non\\-SSH libraries (e.g.
OpenSSL). The \\fB\\fCssh\\fR format is used in the SSH protocol and by the ssh\\-agent.
.SH SEE ALSO
.PP
.BR sshpk-verify (1)
.SH BUGS
.PP
Report bugs at Github
\\[la]https://github.com/arekinath/node-sshpk/issues\\[ra]
", "node_modules/sshpk/man/man1/sshpk-sign.1", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/man/man1/sshpk-sign.1");
    }
}
