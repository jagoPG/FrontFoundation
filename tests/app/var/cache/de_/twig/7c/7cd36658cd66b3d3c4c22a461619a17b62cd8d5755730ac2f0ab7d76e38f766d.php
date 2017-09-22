<?php

/* node_modules/lodash/_stackDelete.js */
class __TwigTemplate_46cd129163f5710a2cadf104be6d78a9a8a3be127c3c1986cae1e8921ea33885 extends Twig_Template
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
        $__internal_be5284531d424e339b775b8fa2dd695f46075b3171878b8842c4789b10e93531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5284531d424e339b775b8fa2dd695f46075b3171878b8842c4789b10e93531->enter($__internal_be5284531d424e339b775b8fa2dd695f46075b3171878b8842c4789b10e93531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_stackDelete.js"));

        // line 1
        echo "/**
 * Removes `key` and its value from the stack.
 *
 * @private
 * @name delete
 * @memberOf Stack
 * @param {string} key The key of the value to remove.
 * @returns {boolean} Returns `true` if the entry was removed, else `false`.
 */
function stackDelete(key) {
  var data = this.__data__,
      result = data['delete'](key);

  this.size = data.size;
  return result;
}

module.exports = stackDelete;
";
        
        $__internal_be5284531d424e339b775b8fa2dd695f46075b3171878b8842c4789b10e93531->leave($__internal_be5284531d424e339b775b8fa2dd695f46075b3171878b8842c4789b10e93531_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_stackDelete.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Removes `key` and its value from the stack.
 *
 * @private
 * @name delete
 * @memberOf Stack
 * @param {string} key The key of the value to remove.
 * @returns {boolean} Returns `true` if the entry was removed, else `false`.
 */
function stackDelete(key) {
  var data = this.__data__,
      result = data['delete'](key);

  this.size = data.size;
  return result;
}

module.exports = stackDelete;
", "node_modules/lodash/_stackDelete.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_stackDelete.js");
    }
}
