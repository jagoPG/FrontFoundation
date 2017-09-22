<?php

/* node_modules/timers-browserify/README.md */
class __TwigTemplate_fb43e30917df332be5e7966dd53b39fbddf2451ef8ad5965c30c22121e95144c extends Twig_Template
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
        $__internal_a82d271e8eb7032a525b66f7b09467737f02225b904b53e6e90c2eefa482b938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82d271e8eb7032a525b66f7b09467737f02225b904b53e6e90c2eefa482b938->enter($__internal_a82d271e8eb7032a525b66f7b09467737f02225b904b53e6e90c2eefa482b938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/timers-browserify/README.md"));

        // line 1
        echo "# Overview

Adds support for the `timers` module to browserify.

## Wait, isn't it already supported in the browser?

The public methods of the `timers` module are:

* `setTimeout(callback, delay, [arg], [...])`
* `clearTimeout(timeoutId)`
* `setInterval(callback, delay, [arg], [...])`
* `clearInterval(intervalId)`

and indeed, browsers support these already.

## So, why does this exist?

The `timers` module also includes some private methods used in other built-in
Node.js modules:

* `enroll(item, delay)`
* `unenroll(item)`
* `active(item)`

These are used to efficiently support a large quantity of timers with the same
timeouts by creating only a few timers under the covers.

Node.js also offers the `immediate` APIs, which aren't yet available cross-browser, so we polyfill those:

* `setImmediate(callback, [arg], [...])`
* `clearImmediate(immediateId)`

## I need lots of timers and want to use linked list timers as Node.js does.

Linked lists are efficient when you have thousands (millions?) of timers with the same delay.
Take a look at [timers-browserify-full](https://www.npmjs.com/package/timers-browserify-full) in this case.

# License

[MIT](http://jryans.mit-license.org/)
";
        
        $__internal_a82d271e8eb7032a525b66f7b09467737f02225b904b53e6e90c2eefa482b938->leave($__internal_a82d271e8eb7032a525b66f7b09467737f02225b904b53e6e90c2eefa482b938_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/timers-browserify/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Overview

Adds support for the `timers` module to browserify.

## Wait, isn't it already supported in the browser?

The public methods of the `timers` module are:

* `setTimeout(callback, delay, [arg], [...])`
* `clearTimeout(timeoutId)`
* `setInterval(callback, delay, [arg], [...])`
* `clearInterval(intervalId)`

and indeed, browsers support these already.

## So, why does this exist?

The `timers` module also includes some private methods used in other built-in
Node.js modules:

* `enroll(item, delay)`
* `unenroll(item)`
* `active(item)`

These are used to efficiently support a large quantity of timers with the same
timeouts by creating only a few timers under the covers.

Node.js also offers the `immediate` APIs, which aren't yet available cross-browser, so we polyfill those:

* `setImmediate(callback, [arg], [...])`
* `clearImmediate(immediateId)`

## I need lots of timers and want to use linked list timers as Node.js does.

Linked lists are efficient when you have thousands (millions?) of timers with the same delay.
Take a look at [timers-browserify-full](https://www.npmjs.com/package/timers-browserify-full) in this case.

# License

[MIT](http://jryans.mit-license.org/)
", "node_modules/timers-browserify/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/timers-browserify/README.md");
    }
}
