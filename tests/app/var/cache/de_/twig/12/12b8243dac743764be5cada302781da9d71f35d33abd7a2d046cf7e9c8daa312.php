<?php

/* node_modules/pako/lib/zlib/gzheader.js */
class __TwigTemplate_dc7494fb05b8d7c6673b0053dadebe72191be20cda85eb7828839c089e1e095d extends Twig_Template
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
        $__internal_b35f7e52c981353c9fdd1234370f1e558536daf3fdb0be1c0d192ef5b7ee8bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35f7e52c981353c9fdd1234370f1e558536daf3fdb0be1c0d192ef5b7ee8bde->enter($__internal_b35f7e52c981353c9fdd1234370f1e558536daf3fdb0be1c0d192ef5b7ee8bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pako/lib/zlib/gzheader.js"));

        // line 1
        echo "'use strict';


function GZheader() {
  /* true if compressed data believed to be text */
  this.text       = 0;
  /* modification time */
  this.time       = 0;
  /* extra flags (not used when writing a gzip file) */
  this.xflags     = 0;
  /* operating system */
  this.os         = 0;
  /* pointer to extra field or Z_NULL if none */
  this.extra      = null;
  /* extra field length (valid if extra != Z_NULL) */
  this.extra_len  = 0; // Actually, we don't need it in JS,
                       // but leave for few code modifications

  //
  // Setup limits is not necessary because in js we should not preallocate memory
  // for inflate use constant limit in 65536 bytes
  //

  /* space at extra (only when reading header) */
  // this.extra_max  = 0;
  /* pointer to zero-terminated file name or Z_NULL */
  this.name       = '';
  /* space at name (only when reading header) */
  // this.name_max   = 0;
  /* pointer to zero-terminated comment or Z_NULL */
  this.comment    = '';
  /* space at comment (only when reading header) */
  // this.comm_max   = 0;
  /* true if there was or will be a header crc */
  this.hcrc       = 0;
  /* true when done reading gzip header (not used when writing a gzip file) */
  this.done       = false;
}

module.exports = GZheader;
";
        
        $__internal_b35f7e52c981353c9fdd1234370f1e558536daf3fdb0be1c0d192ef5b7ee8bde->leave($__internal_b35f7e52c981353c9fdd1234370f1e558536daf3fdb0be1c0d192ef5b7ee8bde_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pako/lib/zlib/gzheader.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';


function GZheader() {
  /* true if compressed data believed to be text */
  this.text       = 0;
  /* modification time */
  this.time       = 0;
  /* extra flags (not used when writing a gzip file) */
  this.xflags     = 0;
  /* operating system */
  this.os         = 0;
  /* pointer to extra field or Z_NULL if none */
  this.extra      = null;
  /* extra field length (valid if extra != Z_NULL) */
  this.extra_len  = 0; // Actually, we don't need it in JS,
                       // but leave for few code modifications

  //
  // Setup limits is not necessary because in js we should not preallocate memory
  // for inflate use constant limit in 65536 bytes
  //

  /* space at extra (only when reading header) */
  // this.extra_max  = 0;
  /* pointer to zero-terminated file name or Z_NULL */
  this.name       = '';
  /* space at name (only when reading header) */
  // this.name_max   = 0;
  /* pointer to zero-terminated comment or Z_NULL */
  this.comment    = '';
  /* space at comment (only when reading header) */
  // this.comm_max   = 0;
  /* true if there was or will be a header crc */
  this.hcrc       = 0;
  /* true when done reading gzip header (not used when writing a gzip file) */
  this.done       = false;
}

module.exports = GZheader;
", "node_modules/pako/lib/zlib/gzheader.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pako/lib/zlib/gzheader.js");
    }
}
