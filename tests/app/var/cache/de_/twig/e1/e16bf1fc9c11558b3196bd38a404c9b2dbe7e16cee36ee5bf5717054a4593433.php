<?php

/* node_modules/fsevents/node_modules/asn1/lib/ber/index.js */
class __TwigTemplate_e7aae4a1d71d86ae84113225ed3772f950d79c7496e6553864c6eba9d0c89f62 extends Twig_Template
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
        $__internal_1ab67752199b385c03f22f14aa1722b695abea09f4cf0a2275d26339f4235f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab67752199b385c03f22f14aa1722b695abea09f4cf0a2275d26339f4235f8a->enter($__internal_1ab67752199b385c03f22f14aa1722b695abea09f4cf0a2275d26339f4235f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asn1/lib/ber/index.js"));

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
        
        $__internal_1ab67752199b385c03f22f14aa1722b695abea09f4cf0a2275d26339f4235f8a->leave($__internal_1ab67752199b385c03f22f14aa1722b695abea09f4cf0a2275d26339f4235f8a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asn1/lib/ber/index.js";
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
", "node_modules/fsevents/node_modules/asn1/lib/ber/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asn1/lib/ber/index.js");
    }
}
