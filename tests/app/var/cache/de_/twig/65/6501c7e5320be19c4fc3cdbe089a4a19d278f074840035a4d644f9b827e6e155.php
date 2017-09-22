<?php

/* node_modules/lodash/_baseHas.js */
class __TwigTemplate_ea1ea4c956dec7b7018384519d754ef53569f65f41f6e47211d9f29eaa1f4c8a extends Twig_Template
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
        $__internal_2806f7cef90bb3ed314e331416bc7d8205d0382333335b18109b8731370c4886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2806f7cef90bb3ed314e331416bc7d8205d0382333335b18109b8731370c4886->enter($__internal_2806f7cef90bb3ed314e331416bc7d8205d0382333335b18109b8731370c4886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseHas.js"));

        // line 1
        echo "/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * The base implementation of `_.has` without support for deep paths.
 *
 * @private
 * @param {Object} [object] The object to query.
 * @param {Array|string} key The key to check.
 * @returns {boolean} Returns `true` if `key` exists, else `false`.
 */
function baseHas(object, key) {
  return object != null && hasOwnProperty.call(object, key);
}

module.exports = baseHas;
";
        
        $__internal_2806f7cef90bb3ed314e331416bc7d8205d0382333335b18109b8731370c4886->leave($__internal_2806f7cef90bb3ed314e331416bc7d8205d0382333335b18109b8731370c4886_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseHas.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * The base implementation of `_.has` without support for deep paths.
 *
 * @private
 * @param {Object} [object] The object to query.
 * @param {Array|string} key The key to check.
 * @returns {boolean} Returns `true` if `key` exists, else `false`.
 */
function baseHas(object, key) {
  return object != null && hasOwnProperty.call(object, key);
}

module.exports = baseHas;
", "node_modules/lodash/_baseHas.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseHas.js");
    }
}
