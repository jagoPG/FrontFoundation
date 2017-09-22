<?php

/* node_modules/loader-utils/lib/getHashDigest.js */
class __TwigTemplate_cd0385af2384f6bcfe7f8ae80bf2431f90c4f5d2fbbe2cf7a632a2162b2ae772 extends Twig_Template
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
        $__internal_2931082d42ac67996f26ead51e7dea09c6b850d6018b4fa085ce07077c6e5965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2931082d42ac67996f26ead51e7dea09c6b850d6018b4fa085ce07077c6e5965->enter($__internal_2931082d42ac67996f26ead51e7dea09c6b850d6018b4fa085ce07077c6e5965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-utils/lib/getHashDigest.js"));

        // line 1
        echo "\"use strict\";

const baseEncodeTables = {
\t26: \"abcdefghijklmnopqrstuvwxyz\",
\t32: \"123456789abcdefghjkmnpqrstuvwxyz\", // no 0lio
\t36: \"0123456789abcdefghijklmnopqrstuvwxyz\",
\t49: \"abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ\", // no lIO
\t52: \"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ\",
\t58: \"123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ\", // no 0lIO
\t62: \"0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ\",
\t64: \"0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_\"
};

function encodeBufferToBase(buffer, base) {
\tconst encodeTable = baseEncodeTables[base];
\tif(!encodeTable) throw new Error(\"Unknown encoding base\" + base);

\tconst readLength = buffer.length;

\tconst Big = require(\"big.js\");
\tBig.RM = Big.DP = 0;
\tlet b = new Big(0);
\tfor(let i = readLength - 1; i >= 0; i--) {
\t\tb = b.times(256).plus(buffer[i]);
\t}

\tlet output = \"\";
\twhile(b.gt(0)) {
\t\toutput = encodeTable[b.mod(base)] + output;
\t\tb = b.div(base);
\t}

\tBig.DP = 20;
\tBig.RM = 1;

\treturn output;
}

function getHashDigest(buffer, hashType, digestType, maxLength) {
\thashType = hashType || \"md5\";
\tmaxLength = maxLength || 9999;
\tconst hash = require(\"crypto\").createHash(hashType);
\thash.update(buffer);
\tif(digestType === \"base26\" || digestType === \"base32\" || digestType === \"base36\" ||
\t\tdigestType === \"base49\" || digestType === \"base52\" || digestType === \"base58\" ||
\t\tdigestType === \"base62\" || digestType === \"base64\") {
\t\treturn encodeBufferToBase(hash.digest(), digestType.substr(4)).substr(0, maxLength);
\t} else {
\t\treturn hash.digest(digestType || \"hex\").substr(0, maxLength);
\t}
}

module.exports = getHashDigest;
";
        
        $__internal_2931082d42ac67996f26ead51e7dea09c6b850d6018b4fa085ce07077c6e5965->leave($__internal_2931082d42ac67996f26ead51e7dea09c6b850d6018b4fa085ce07077c6e5965_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-utils/lib/getHashDigest.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

const baseEncodeTables = {
\t26: \"abcdefghijklmnopqrstuvwxyz\",
\t32: \"123456789abcdefghjkmnpqrstuvwxyz\", // no 0lio
\t36: \"0123456789abcdefghijklmnopqrstuvwxyz\",
\t49: \"abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ\", // no lIO
\t52: \"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ\",
\t58: \"123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ\", // no 0lIO
\t62: \"0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ\",
\t64: \"0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_\"
};

function encodeBufferToBase(buffer, base) {
\tconst encodeTable = baseEncodeTables[base];
\tif(!encodeTable) throw new Error(\"Unknown encoding base\" + base);

\tconst readLength = buffer.length;

\tconst Big = require(\"big.js\");
\tBig.RM = Big.DP = 0;
\tlet b = new Big(0);
\tfor(let i = readLength - 1; i >= 0; i--) {
\t\tb = b.times(256).plus(buffer[i]);
\t}

\tlet output = \"\";
\twhile(b.gt(0)) {
\t\toutput = encodeTable[b.mod(base)] + output;
\t\tb = b.div(base);
\t}

\tBig.DP = 20;
\tBig.RM = 1;

\treturn output;
}

function getHashDigest(buffer, hashType, digestType, maxLength) {
\thashType = hashType || \"md5\";
\tmaxLength = maxLength || 9999;
\tconst hash = require(\"crypto\").createHash(hashType);
\thash.update(buffer);
\tif(digestType === \"base26\" || digestType === \"base32\" || digestType === \"base36\" ||
\t\tdigestType === \"base49\" || digestType === \"base52\" || digestType === \"base58\" ||
\t\tdigestType === \"base62\" || digestType === \"base64\") {
\t\treturn encodeBufferToBase(hash.digest(), digestType.substr(4)).substr(0, maxLength);
\t} else {
\t\treturn hash.digest(digestType || \"hex\").substr(0, maxLength);
\t}
}

module.exports = getHashDigest;
", "node_modules/loader-utils/lib/getHashDigest.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-utils/lib/getHashDigest.js");
    }
}
