<?php

/* node_modules/lodash/_cloneArrayBuffer.js */
class __TwigTemplate_42034c3abfbd10f7c82a9223683257ec1342a30ba7d766f4eedc6dfd73531e01 extends Twig_Template
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
        $__internal_6977312b0f52d05944f068c9a10311952a81acf5353f89512c2e5dfe0877e053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6977312b0f52d05944f068c9a10311952a81acf5353f89512c2e5dfe0877e053->enter($__internal_6977312b0f52d05944f068c9a10311952a81acf5353f89512c2e5dfe0877e053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_cloneArrayBuffer.js"));

        // line 1
        echo "var Uint8Array = require('./_Uint8Array');

/**
 * Creates a clone of `arrayBuffer`.
 *
 * @private
 * @param {ArrayBuffer} arrayBuffer The array buffer to clone.
 * @returns {ArrayBuffer} Returns the cloned array buffer.
 */
function cloneArrayBuffer(arrayBuffer) {
  var result = new arrayBuffer.constructor(arrayBuffer.byteLength);
  new Uint8Array(result).set(new Uint8Array(arrayBuffer));
  return result;
}

module.exports = cloneArrayBuffer;
";
        
        $__internal_6977312b0f52d05944f068c9a10311952a81acf5353f89512c2e5dfe0877e053->leave($__internal_6977312b0f52d05944f068c9a10311952a81acf5353f89512c2e5dfe0877e053_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_cloneArrayBuffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Uint8Array = require('./_Uint8Array');

/**
 * Creates a clone of `arrayBuffer`.
 *
 * @private
 * @param {ArrayBuffer} arrayBuffer The array buffer to clone.
 * @returns {ArrayBuffer} Returns the cloned array buffer.
 */
function cloneArrayBuffer(arrayBuffer) {
  var result = new arrayBuffer.constructor(arrayBuffer.byteLength);
  new Uint8Array(result).set(new Uint8Array(arrayBuffer));
  return result;
}

module.exports = cloneArrayBuffer;
", "node_modules/lodash/_cloneArrayBuffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_cloneArrayBuffer.js");
    }
}
