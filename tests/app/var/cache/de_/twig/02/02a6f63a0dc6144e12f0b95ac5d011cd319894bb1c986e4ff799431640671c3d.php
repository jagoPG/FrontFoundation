<?php

/* node_modules/destroy/index.js */
class __TwigTemplate_38e574f80d18b79ece3c672febc47a524e16ec6710ae2ce29e62b4c835191278 extends Twig_Template
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
        $__internal_7bd980d6238609c80e0738935aaf40c82b746ba9870a5d75c83888368e96ec9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd980d6238609c80e0738935aaf40c82b746ba9870a5d75c83888368e96ec9a->enter($__internal_7bd980d6238609c80e0738935aaf40c82b746ba9870a5d75c83888368e96ec9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/destroy/index.js"));

        // line 1
        echo "/*!
 * destroy
 * Copyright(c) 2014 Jonathan Ong
 * MIT Licensed
 */

'use strict'

/**
 * Module dependencies.
 * @private
 */

var ReadStream = require('fs').ReadStream
var Stream = require('stream')

/**
 * Module exports.
 * @public
 */

module.exports = destroy

/**
 * Destroy a stream.
 *
 * @param {object} stream
 * @public
 */

function destroy(stream) {
  if (stream instanceof ReadStream) {
    return destroyReadStream(stream)
  }

  if (!(stream instanceof Stream)) {
    return stream
  }

  if (typeof stream.destroy === 'function') {
    stream.destroy()
  }

  return stream
}

/**
 * Destroy a ReadStream.
 *
 * @param {object} stream
 * @private
 */

function destroyReadStream(stream) {
  stream.destroy()

  if (typeof stream.close === 'function') {
    // node.js core bug work-around
    stream.on('open', onOpenClose)
  }

  return stream
}

/**
 * On open handler to close stream.
 * @private
 */

function onOpenClose() {
  if (typeof this.fd === 'number') {
    // actually close down the fd
    this.close()
  }
}
";
        
        $__internal_7bd980d6238609c80e0738935aaf40c82b746ba9870a5d75c83888368e96ec9a->leave($__internal_7bd980d6238609c80e0738935aaf40c82b746ba9870a5d75c83888368e96ec9a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/destroy/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * destroy
 * Copyright(c) 2014 Jonathan Ong
 * MIT Licensed
 */

'use strict'

/**
 * Module dependencies.
 * @private
 */

var ReadStream = require('fs').ReadStream
var Stream = require('stream')

/**
 * Module exports.
 * @public
 */

module.exports = destroy

/**
 * Destroy a stream.
 *
 * @param {object} stream
 * @public
 */

function destroy(stream) {
  if (stream instanceof ReadStream) {
    return destroyReadStream(stream)
  }

  if (!(stream instanceof Stream)) {
    return stream
  }

  if (typeof stream.destroy === 'function') {
    stream.destroy()
  }

  return stream
}

/**
 * Destroy a ReadStream.
 *
 * @param {object} stream
 * @private
 */

function destroyReadStream(stream) {
  stream.destroy()

  if (typeof stream.close === 'function') {
    // node.js core bug work-around
    stream.on('open', onOpenClose)
  }

  return stream
}

/**
 * On open handler to close stream.
 * @private
 */

function onOpenClose() {
  if (typeof this.fd === 'number') {
    // actually close down the fd
    this.close()
  }
}
", "node_modules/destroy/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/destroy/index.js");
    }
}
