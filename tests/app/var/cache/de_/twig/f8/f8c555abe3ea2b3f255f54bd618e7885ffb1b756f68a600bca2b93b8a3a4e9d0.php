<?php

/* node_modules/es-to-primitive/index.js */
class __TwigTemplate_76dbcd576cd1ae6a3fec5af1e0db17cb188322f7f8f6cdade4328c3c2e50c391 extends Twig_Template
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
        $__internal_d58ba9529d17c2df425fd878ad7f00506c293e8c1835f1da26c923daaeaeabb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58ba9529d17c2df425fd878ad7f00506c293e8c1835f1da26c923daaeaeabb3->enter($__internal_d58ba9529d17c2df425fd878ad7f00506c293e8c1835f1da26c923daaeaeabb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-to-primitive/index.js"));

        // line 1
        echo "'use strict';

var ES5 = require('./es5');
var ES6 = require('./es6');

if (Object.defineProperty) {
\tObject.defineProperty(ES6, 'ES5', { enumerable: false, value: ES5 });
\tObject.defineProperty(ES6, 'ES6', { enumerable: false, value: ES6 });
} else {
\tES6.ES5 = ES5;
\tES6.ES6 = ES6;
}

module.exports = ES6;
";
        
        $__internal_d58ba9529d17c2df425fd878ad7f00506c293e8c1835f1da26c923daaeaeabb3->leave($__internal_d58ba9529d17c2df425fd878ad7f00506c293e8c1835f1da26c923daaeaeabb3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-to-primitive/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ES5 = require('./es5');
var ES6 = require('./es6');

if (Object.defineProperty) {
\tObject.defineProperty(ES6, 'ES5', { enumerable: false, value: ES5 });
\tObject.defineProperty(ES6, 'ES6', { enumerable: false, value: ES6 });
} else {
\tES6.ES5 = ES5;
\tES6.ES6 = ES6;
}

module.exports = ES6;
", "node_modules/es-to-primitive/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-to-primitive/index.js");
    }
}
