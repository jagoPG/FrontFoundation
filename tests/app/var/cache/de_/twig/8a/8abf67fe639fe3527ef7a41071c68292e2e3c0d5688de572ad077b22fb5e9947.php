<?php

/* node_modules/uuid/lib/bytesToUuid.js */
class __TwigTemplate_b95e4d750675f742c0bd3988d94769a6dc8e56fdc9e48593c8855156e922b578 extends Twig_Template
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
        $__internal_1b52717a08e5fdf13b560d52de95e64535718e7cde998207efbca1828c3d3904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b52717a08e5fdf13b560d52de95e64535718e7cde998207efbca1828c3d3904->enter($__internal_1b52717a08e5fdf13b560d52de95e64535718e7cde998207efbca1828c3d3904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uuid/lib/bytesToUuid.js"));

        // line 1
        echo "/**
 * Convert array of 16 byte values to UUID string format of the form:
 * XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX
 */
var byteToHex = [];
for (var i = 0; i < 256; ++i) {
  byteToHex[i] = (i + 0x100).toString(16).substr(1);
}

function bytesToUuid(buf, offset) {
  var i = offset || 0;
  var bth = byteToHex;
  return bth[buf[i++]] + bth[buf[i++]] +
          bth[buf[i++]] + bth[buf[i++]] + '-' +
          bth[buf[i++]] + bth[buf[i++]] + '-' +
          bth[buf[i++]] + bth[buf[i++]] + '-' +
          bth[buf[i++]] + bth[buf[i++]] + '-' +
          bth[buf[i++]] + bth[buf[i++]] +
          bth[buf[i++]] + bth[buf[i++]] +
          bth[buf[i++]] + bth[buf[i++]];
}

module.exports = bytesToUuid;
";
        
        $__internal_1b52717a08e5fdf13b560d52de95e64535718e7cde998207efbca1828c3d3904->leave($__internal_1b52717a08e5fdf13b560d52de95e64535718e7cde998207efbca1828c3d3904_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uuid/lib/bytesToUuid.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Convert array of 16 byte values to UUID string format of the form:
 * XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX
 */
var byteToHex = [];
for (var i = 0; i < 256; ++i) {
  byteToHex[i] = (i + 0x100).toString(16).substr(1);
}

function bytesToUuid(buf, offset) {
  var i = offset || 0;
  var bth = byteToHex;
  return bth[buf[i++]] + bth[buf[i++]] +
          bth[buf[i++]] + bth[buf[i++]] + '-' +
          bth[buf[i++]] + bth[buf[i++]] + '-' +
          bth[buf[i++]] + bth[buf[i++]] + '-' +
          bth[buf[i++]] + bth[buf[i++]] + '-' +
          bth[buf[i++]] + bth[buf[i++]] +
          bth[buf[i++]] + bth[buf[i++]] +
          bth[buf[i++]] + bth[buf[i++]];
}

module.exports = bytesToUuid;
", "node_modules/uuid/lib/bytesToUuid.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uuid/lib/bytesToUuid.js");
    }
}
