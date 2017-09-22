<?php

/* node_modules/pako/lib/zlib/zstream.js */
class __TwigTemplate_979408c01179a1a24ff31156a7fb83997d1e05ed6bbc0dcb44b2b032c39bf345 extends Twig_Template
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
        $__internal_31b69a3601f6f6cd8e89d0202b073ed8b72dda58009267148ba4ab93abd21fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b69a3601f6f6cd8e89d0202b073ed8b72dda58009267148ba4ab93abd21fb8->enter($__internal_31b69a3601f6f6cd8e89d0202b073ed8b72dda58009267148ba4ab93abd21fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pako/lib/zlib/zstream.js"));

        // line 1
        echo "'use strict';


function ZStream() {
  /* next input byte */
  this.input = null; // JS specific, because we have no pointers
  this.next_in = 0;
  /* number of bytes available at input */
  this.avail_in = 0;
  /* total number of input bytes read so far */
  this.total_in = 0;
  /* next output byte should be put there */
  this.output = null; // JS specific, because we have no pointers
  this.next_out = 0;
  /* remaining free space at output */
  this.avail_out = 0;
  /* total number of bytes output so far */
  this.total_out = 0;
  /* last error message, NULL if no error */
  this.msg = ''/*Z_NULL*/;
  /* not visible by applications */
  this.state = null;
  /* best guess about the data type: binary or text */
  this.data_type = 2/*Z_UNKNOWN*/;
  /* adler32 value of the uncompressed data */
  this.adler = 0;
}

module.exports = ZStream;
";
        
        $__internal_31b69a3601f6f6cd8e89d0202b073ed8b72dda58009267148ba4ab93abd21fb8->leave($__internal_31b69a3601f6f6cd8e89d0202b073ed8b72dda58009267148ba4ab93abd21fb8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pako/lib/zlib/zstream.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';


function ZStream() {
  /* next input byte */
  this.input = null; // JS specific, because we have no pointers
  this.next_in = 0;
  /* number of bytes available at input */
  this.avail_in = 0;
  /* total number of input bytes read so far */
  this.total_in = 0;
  /* next output byte should be put there */
  this.output = null; // JS specific, because we have no pointers
  this.next_out = 0;
  /* remaining free space at output */
  this.avail_out = 0;
  /* total number of bytes output so far */
  this.total_out = 0;
  /* last error message, NULL if no error */
  this.msg = ''/*Z_NULL*/;
  /* not visible by applications */
  this.state = null;
  /* best guess about the data type: binary or text */
  this.data_type = 2/*Z_UNKNOWN*/;
  /* adler32 value of the uncompressed data */
  this.adler = 0;
}

module.exports = ZStream;
", "node_modules/pako/lib/zlib/zstream.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pako/lib/zlib/zstream.js");
    }
}
