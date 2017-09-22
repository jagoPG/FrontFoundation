<?php

/* node_modules/depd/lib/compat/event-listener-count.js */
class __TwigTemplate_a22be20ecad645b500babc55a6ccbb079668abd5329bf07a05c634a326c52af9 extends Twig_Template
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
        $__internal_b8a40bad55954a77a8af3c0f9f55d56305c0fd27391b90e991e5440d7d3570e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a40bad55954a77a8af3c0f9f55d56305c0fd27391b90e991e5440d7d3570e4->enter($__internal_b8a40bad55954a77a8af3c0f9f55d56305c0fd27391b90e991e5440d7d3570e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/depd/lib/compat/event-listener-count.js"));

        // line 1
        echo "/*!
 * depd
 * Copyright(c) 2015 Douglas Christopher Wilson
 * MIT Licensed
 */

'use strict'

/**
 * Module exports.
 * @public
 */

module.exports = eventListenerCount

/**
 * Get the count of listeners on an event emitter of a specific type.
 */

function eventListenerCount (emitter, type) {
  return emitter.listeners(type).length
}
";
        
        $__internal_b8a40bad55954a77a8af3c0f9f55d56305c0fd27391b90e991e5440d7d3570e4->leave($__internal_b8a40bad55954a77a8af3c0f9f55d56305c0fd27391b90e991e5440d7d3570e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/depd/lib/compat/event-listener-count.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * depd
 * Copyright(c) 2015 Douglas Christopher Wilson
 * MIT Licensed
 */

'use strict'

/**
 * Module exports.
 * @public
 */

module.exports = eventListenerCount

/**
 * Get the count of listeners on an event emitter of a specific type.
 */

function eventListenerCount (emitter, type) {
  return emitter.listeners(type).length
}
", "node_modules/depd/lib/compat/event-listener-count.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/depd/lib/compat/event-listener-count.js");
    }
}
