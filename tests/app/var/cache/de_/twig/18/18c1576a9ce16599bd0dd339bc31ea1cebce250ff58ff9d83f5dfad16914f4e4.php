<?php

/* node_modules/uuid/lib/sha1.js */
class __TwigTemplate_9438eeaacba0a009e453f672d63708eeeae18ce61be2b922dfb343b142ab62ab extends Twig_Template
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
        $__internal_04b29044ea5e73c24ed82d1015d6ca08b91fcebe22d8e5d812c04bb6df3cf104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b29044ea5e73c24ed82d1015d6ca08b91fcebe22d8e5d812c04bb6df3cf104->enter($__internal_04b29044ea5e73c24ed82d1015d6ca08b91fcebe22d8e5d812c04bb6df3cf104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uuid/lib/sha1.js"));

        // line 1
        echo "'use strict';

var crypto = require('crypto');

function sha1(bytes) {
\t// support modern Buffer API
\tif (typeof Buffer.from === 'function') {
\t\tif (Array.isArray(bytes)) bytes = Buffer.from(bytes);
\t\telse if (typeof bytes === 'string') bytes = Buffer.from(bytes, 'utf8');
\t}

\t// support pre-v4 Buffer API
\telse {
\t\tif (Array.isArray(bytes)) bytes = new Buffer(bytes);
\t\telse if (typeof bytes === 'string') bytes = new Buffer(bytes, 'utf8');
\t}

\treturn crypto.createHash('sha1').update(bytes).digest();
}

module.exports = sha1;
";
        
        $__internal_04b29044ea5e73c24ed82d1015d6ca08b91fcebe22d8e5d812c04bb6df3cf104->leave($__internal_04b29044ea5e73c24ed82d1015d6ca08b91fcebe22d8e5d812c04bb6df3cf104_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uuid/lib/sha1.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var crypto = require('crypto');

function sha1(bytes) {
\t// support modern Buffer API
\tif (typeof Buffer.from === 'function') {
\t\tif (Array.isArray(bytes)) bytes = Buffer.from(bytes);
\t\telse if (typeof bytes === 'string') bytes = Buffer.from(bytes, 'utf8');
\t}

\t// support pre-v4 Buffer API
\telse {
\t\tif (Array.isArray(bytes)) bytes = new Buffer(bytes);
\t\telse if (typeof bytes === 'string') bytes = new Buffer(bytes, 'utf8');
\t}

\treturn crypto.createHash('sha1').update(bytes).digest();
}

module.exports = sha1;
", "node_modules/uuid/lib/sha1.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uuid/lib/sha1.js");
    }
}
