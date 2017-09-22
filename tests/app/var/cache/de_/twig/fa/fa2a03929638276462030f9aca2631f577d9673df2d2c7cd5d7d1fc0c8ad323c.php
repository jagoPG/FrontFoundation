<?php

/* node_modules/asn1/lib/ber/index.js */
class __TwigTemplate_2b2a292a379c1a0f7651d557e265825d3fe65592cea5c0899a91115b82c7fbbb extends Twig_Template
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
        $__internal_01414fa9bc4edb7b1813bd1c1c3942a97a0c90271b6446d434a44759c1b7a35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01414fa9bc4edb7b1813bd1c1c3942a97a0c90271b6446d434a44759c1b7a35f->enter($__internal_01414fa9bc4edb7b1813bd1c1c3942a97a0c90271b6446d434a44759c1b7a35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asn1/lib/ber/index.js"));

        // line 1
        echo "// Copyright 2011 Mark Cavage <mcavage@gmail.com> All rights reserved.

var errors = require('./errors');
var types = require('./types');

var Reader = require('./reader');
var Writer = require('./writer');


///--- Exports

module.exports = {

  Reader: Reader,

  Writer: Writer

};

for (var t in types) {
  if (types.hasOwnProperty(t))
    module.exports[t] = types[t];
}
for (var e in errors) {
  if (errors.hasOwnProperty(e))
    module.exports[e] = errors[e];
}
";
        
        $__internal_01414fa9bc4edb7b1813bd1c1c3942a97a0c90271b6446d434a44759c1b7a35f->leave($__internal_01414fa9bc4edb7b1813bd1c1c3942a97a0c90271b6446d434a44759c1b7a35f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asn1/lib/ber/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2011 Mark Cavage <mcavage@gmail.com> All rights reserved.

var errors = require('./errors');
var types = require('./types');

var Reader = require('./reader');
var Writer = require('./writer');


///--- Exports

module.exports = {

  Reader: Reader,

  Writer: Writer

};

for (var t in types) {
  if (types.hasOwnProperty(t))
    module.exports[t] = types[t];
}
for (var e in errors) {
  if (errors.hasOwnProperty(e))
    module.exports[e] = errors[e];
}
", "node_modules/asn1/lib/ber/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asn1/lib/ber/index.js");
    }
}
