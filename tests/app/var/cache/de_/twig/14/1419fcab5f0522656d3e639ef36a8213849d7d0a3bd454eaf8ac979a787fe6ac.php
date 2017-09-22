<?php

/* node_modules/asn1.js/lib/asn1/constants/der.js */
class __TwigTemplate_e59360873d71a53b6ca97f6941b331acf1c06c90488c376cefaa9c4b2b22c33d extends Twig_Template
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
        $__internal_23e9bc0bc6227a8763ba3619299395b47f868ad3de53fbee08f345ba8ac75eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e9bc0bc6227a8763ba3619299395b47f868ad3de53fbee08f345ba8ac75eab->enter($__internal_23e9bc0bc6227a8763ba3619299395b47f868ad3de53fbee08f345ba8ac75eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asn1.js/lib/asn1/constants/der.js"));

        // line 1
        echo "var constants = require('../constants');

exports.tagClass = {
  0: 'universal',
  1: 'application',
  2: 'context',
  3: 'private'
};
exports.tagClassByName = constants._reverse(exports.tagClass);

exports.tag = {
  0x00: 'end',
  0x01: 'bool',
  0x02: 'int',
  0x03: 'bitstr',
  0x04: 'octstr',
  0x05: 'null_',
  0x06: 'objid',
  0x07: 'objDesc',
  0x08: 'external',
  0x09: 'real',
  0x0a: 'enum',
  0x0b: 'embed',
  0x0c: 'utf8str',
  0x0d: 'relativeOid',
  0x10: 'seq',
  0x11: 'set',
  0x12: 'numstr',
  0x13: 'printstr',
  0x14: 't61str',
  0x15: 'videostr',
  0x16: 'ia5str',
  0x17: 'utctime',
  0x18: 'gentime',
  0x19: 'graphstr',
  0x1a: 'iso646str',
  0x1b: 'genstr',
  0x1c: 'unistr',
  0x1d: 'charstr',
  0x1e: 'bmpstr'
};
exports.tagByName = constants._reverse(exports.tag);
";
        
        $__internal_23e9bc0bc6227a8763ba3619299395b47f868ad3de53fbee08f345ba8ac75eab->leave($__internal_23e9bc0bc6227a8763ba3619299395b47f868ad3de53fbee08f345ba8ac75eab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asn1.js/lib/asn1/constants/der.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var constants = require('../constants');

exports.tagClass = {
  0: 'universal',
  1: 'application',
  2: 'context',
  3: 'private'
};
exports.tagClassByName = constants._reverse(exports.tagClass);

exports.tag = {
  0x00: 'end',
  0x01: 'bool',
  0x02: 'int',
  0x03: 'bitstr',
  0x04: 'octstr',
  0x05: 'null_',
  0x06: 'objid',
  0x07: 'objDesc',
  0x08: 'external',
  0x09: 'real',
  0x0a: 'enum',
  0x0b: 'embed',
  0x0c: 'utf8str',
  0x0d: 'relativeOid',
  0x10: 'seq',
  0x11: 'set',
  0x12: 'numstr',
  0x13: 'printstr',
  0x14: 't61str',
  0x15: 'videostr',
  0x16: 'ia5str',
  0x17: 'utctime',
  0x18: 'gentime',
  0x19: 'graphstr',
  0x1a: 'iso646str',
  0x1b: 'genstr',
  0x1c: 'unistr',
  0x1d: 'charstr',
  0x1e: 'bmpstr'
};
exports.tagByName = constants._reverse(exports.tag);
", "node_modules/asn1.js/lib/asn1/constants/der.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asn1.js/lib/asn1/constants/der.js");
    }
}
