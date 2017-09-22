<?php

/* node_modules/hash.js/lib/hash/sha/384.js */
class __TwigTemplate_186986e53bcad42b668922260fd2c5f19504c694f58591b653d882f520f61a7b extends Twig_Template
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
        $__internal_60216e0d3dea81aeb1ba017ea12680acb601b7aead82e82ae031b975a8fb4bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60216e0d3dea81aeb1ba017ea12680acb601b7aead82e82ae031b975a8fb4bcd->enter($__internal_60216e0d3dea81aeb1ba017ea12680acb601b7aead82e82ae031b975a8fb4bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hash.js/lib/hash/sha/384.js"));

        // line 1
        echo "'use strict';

var utils = require('../utils');

var SHA512 = require('./512');

function SHA384() {
  if (!(this instanceof SHA384))
    return new SHA384();

  SHA512.call(this);
  this.h = [
    0xcbbb9d5d, 0xc1059ed8,
    0x629a292a, 0x367cd507,
    0x9159015a, 0x3070dd17,
    0x152fecd8, 0xf70e5939,
    0x67332667, 0xffc00b31,
    0x8eb44a87, 0x68581511,
    0xdb0c2e0d, 0x64f98fa7,
    0x47b5481d, 0xbefa4fa4 ];
}
utils.inherits(SHA384, SHA512);
module.exports = SHA384;

SHA384.blockSize = 1024;
SHA384.outSize = 384;
SHA384.hmacStrength = 192;
SHA384.padLength = 128;

SHA384.prototype._digest = function digest(enc) {
  if (enc === 'hex')
    return utils.toHex32(this.h.slice(0, 12), 'big');
  else
    return utils.split32(this.h.slice(0, 12), 'big');
};
";
        
        $__internal_60216e0d3dea81aeb1ba017ea12680acb601b7aead82e82ae031b975a8fb4bcd->leave($__internal_60216e0d3dea81aeb1ba017ea12680acb601b7aead82e82ae031b975a8fb4bcd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hash.js/lib/hash/sha/384.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var utils = require('../utils');

var SHA512 = require('./512');

function SHA384() {
  if (!(this instanceof SHA384))
    return new SHA384();

  SHA512.call(this);
  this.h = [
    0xcbbb9d5d, 0xc1059ed8,
    0x629a292a, 0x367cd507,
    0x9159015a, 0x3070dd17,
    0x152fecd8, 0xf70e5939,
    0x67332667, 0xffc00b31,
    0x8eb44a87, 0x68581511,
    0xdb0c2e0d, 0x64f98fa7,
    0x47b5481d, 0xbefa4fa4 ];
}
utils.inherits(SHA384, SHA512);
module.exports = SHA384;

SHA384.blockSize = 1024;
SHA384.outSize = 384;
SHA384.hmacStrength = 192;
SHA384.padLength = 128;

SHA384.prototype._digest = function digest(enc) {
  if (enc === 'hex')
    return utils.toHex32(this.h.slice(0, 12), 'big');
  else
    return utils.split32(this.h.slice(0, 12), 'big');
};
", "node_modules/hash.js/lib/hash/sha/384.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hash.js/lib/hash/sha/384.js");
    }
}
