<?php

/* node_modules/hash.js/lib/hash/sha/224.js */
class __TwigTemplate_fce4b1c6727ece707af89bd6b3d56c23a21bbfd36c25f519d10700ce981b463b extends Twig_Template
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
        $__internal_0055891d9302f85bcdb05feb56aac6168e4cda3dd92cddb3e6b2b9bb6bcc2b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0055891d9302f85bcdb05feb56aac6168e4cda3dd92cddb3e6b2b9bb6bcc2b3d->enter($__internal_0055891d9302f85bcdb05feb56aac6168e4cda3dd92cddb3e6b2b9bb6bcc2b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hash.js/lib/hash/sha/224.js"));

        // line 1
        echo "'use strict';

var utils = require('../utils');
var SHA256 = require('./256');

function SHA224() {
  if (!(this instanceof SHA224))
    return new SHA224();

  SHA256.call(this);
  this.h = [
    0xc1059ed8, 0x367cd507, 0x3070dd17, 0xf70e5939,
    0xffc00b31, 0x68581511, 0x64f98fa7, 0xbefa4fa4 ];
}
utils.inherits(SHA224, SHA256);
module.exports = SHA224;

SHA224.blockSize = 512;
SHA224.outSize = 224;
SHA224.hmacStrength = 192;
SHA224.padLength = 64;

SHA224.prototype._digest = function digest(enc) {
  // Just truncate output
  if (enc === 'hex')
    return utils.toHex32(this.h.slice(0, 7), 'big');
  else
    return utils.split32(this.h.slice(0, 7), 'big');
};

";
        
        $__internal_0055891d9302f85bcdb05feb56aac6168e4cda3dd92cddb3e6b2b9bb6bcc2b3d->leave($__internal_0055891d9302f85bcdb05feb56aac6168e4cda3dd92cddb3e6b2b9bb6bcc2b3d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hash.js/lib/hash/sha/224.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var utils = require('../utils');
var SHA256 = require('./256');

function SHA224() {
  if (!(this instanceof SHA224))
    return new SHA224();

  SHA256.call(this);
  this.h = [
    0xc1059ed8, 0x367cd507, 0x3070dd17, 0xf70e5939,
    0xffc00b31, 0x68581511, 0x64f98fa7, 0xbefa4fa4 ];
}
utils.inherits(SHA224, SHA256);
module.exports = SHA224;

SHA224.blockSize = 512;
SHA224.outSize = 224;
SHA224.hmacStrength = 192;
SHA224.padLength = 64;

SHA224.prototype._digest = function digest(enc) {
  // Just truncate output
  if (enc === 'hex')
    return utils.toHex32(this.h.slice(0, 7), 'big');
  else
    return utils.split32(this.h.slice(0, 7), 'big');
};

", "node_modules/hash.js/lib/hash/sha/224.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hash.js/lib/hash/sha/224.js");
    }
}
