<?php

/* node_modules/cookie/HISTORY.md */
class __TwigTemplate_6bc5035a9a6e3383f4d830ae5c1859020771a20772c9e458f4300bce604a46c2 extends Twig_Template
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
        $__internal_bca98069f322c25dae47d42a308b352bbe46d63a58fcd038ae960facf45ac82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca98069f322c25dae47d42a308b352bbe46d63a58fcd038ae960facf45ac82c->enter($__internal_bca98069f322c25dae47d42a308b352bbe46d63a58fcd038ae960facf45ac82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cookie/HISTORY.md"));

        // line 1
        echo "0.3.1 / 2016-05-26
==================

  * Fix `sameSite: true` to work with draft-7 clients
    - `true` now sends `SameSite=Strict` instead of `SameSite`

0.3.0 / 2016-05-26
==================

  * Add `sameSite` option
    - Replaces `firstPartyOnly` option, never implemented by browsers
  * Improve error message when `encode` is not a function
  * Improve error message when `expires` is not a `Date`

0.2.4 / 2016-05-20
==================

  * perf: enable strict mode
  * perf: use for loop in parse
  * perf: use string concatination for serialization

0.2.3 / 2015-10-25
==================

  * Fix cookie `Max-Age` to never be a floating point number

0.2.2 / 2015-09-17
==================

  * Fix regression when setting empty cookie value
    - Ease the new restriction, which is just basic header-level validation
  * Fix typo in invalid value errors

0.2.1 / 2015-09-17
==================

  * Throw on invalid values provided to `serialize`
    - Ensures the resulting string is a valid HTTP header value

0.2.0 / 2015-08-13
==================

  * Add `firstPartyOnly` option
  * Throw better error for invalid argument to parse
  * perf: hoist regular expression

0.1.5 / 2015-09-17
==================

  * Fix regression when setting empty cookie value
    - Ease the new restriction, which is just basic header-level validation
  * Fix typo in invalid value errors

0.1.4 / 2015-09-17
==================

  * Throw better error for invalid argument to parse
  * Throw on invalid values provided to `serialize`
    - Ensures the resulting string is a valid HTTP header value

0.1.3 / 2015-05-19
==================

  * Reduce the scope of try-catch deopt
  * Remove argument reassignments

0.1.2 / 2014-04-16
==================

  * Remove unnecessary files from npm package

0.1.1 / 2014-02-23
==================

  * Fix bad parse when cookie value contained a comma
  * Fix support for `maxAge` of `0`

0.1.0 / 2013-05-01
==================

  * Add `decode` option
  * Add `encode` option

0.0.6 / 2013-04-08
==================

  * Ignore cookie parts missing `=`

0.0.5 / 2012-10-29
==================

  * Return raw cookie value if value unescape errors

0.0.4 / 2012-06-21
==================

  * Use encode/decodeURIComponent for cookie encoding/decoding
    - Improve server/client interoperability

0.0.3 / 2012-06-06
==================

  * Only escape special characters per the cookie RFC

0.0.2 / 2012-06-01
==================

  * Fix `maxAge` option to not throw error

0.0.1 / 2012-05-28
==================

  * Add more tests

0.0.0 / 2012-05-28
==================

  * Initial release
";
        
        $__internal_bca98069f322c25dae47d42a308b352bbe46d63a58fcd038ae960facf45ac82c->leave($__internal_bca98069f322c25dae47d42a308b352bbe46d63a58fcd038ae960facf45ac82c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cookie/HISTORY.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("0.3.1 / 2016-05-26
==================

  * Fix `sameSite: true` to work with draft-7 clients
    - `true` now sends `SameSite=Strict` instead of `SameSite`

0.3.0 / 2016-05-26
==================

  * Add `sameSite` option
    - Replaces `firstPartyOnly` option, never implemented by browsers
  * Improve error message when `encode` is not a function
  * Improve error message when `expires` is not a `Date`

0.2.4 / 2016-05-20
==================

  * perf: enable strict mode
  * perf: use for loop in parse
  * perf: use string concatination for serialization

0.2.3 / 2015-10-25
==================

  * Fix cookie `Max-Age` to never be a floating point number

0.2.2 / 2015-09-17
==================

  * Fix regression when setting empty cookie value
    - Ease the new restriction, which is just basic header-level validation
  * Fix typo in invalid value errors

0.2.1 / 2015-09-17
==================

  * Throw on invalid values provided to `serialize`
    - Ensures the resulting string is a valid HTTP header value

0.2.0 / 2015-08-13
==================

  * Add `firstPartyOnly` option
  * Throw better error for invalid argument to parse
  * perf: hoist regular expression

0.1.5 / 2015-09-17
==================

  * Fix regression when setting empty cookie value
    - Ease the new restriction, which is just basic header-level validation
  * Fix typo in invalid value errors

0.1.4 / 2015-09-17
==================

  * Throw better error for invalid argument to parse
  * Throw on invalid values provided to `serialize`
    - Ensures the resulting string is a valid HTTP header value

0.1.3 / 2015-05-19
==================

  * Reduce the scope of try-catch deopt
  * Remove argument reassignments

0.1.2 / 2014-04-16
==================

  * Remove unnecessary files from npm package

0.1.1 / 2014-02-23
==================

  * Fix bad parse when cookie value contained a comma
  * Fix support for `maxAge` of `0`

0.1.0 / 2013-05-01
==================

  * Add `decode` option
  * Add `encode` option

0.0.6 / 2013-04-08
==================

  * Ignore cookie parts missing `=`

0.0.5 / 2012-10-29
==================

  * Return raw cookie value if value unescape errors

0.0.4 / 2012-06-21
==================

  * Use encode/decodeURIComponent for cookie encoding/decoding
    - Improve server/client interoperability

0.0.3 / 2012-06-06
==================

  * Only escape special characters per the cookie RFC

0.0.2 / 2012-06-01
==================

  * Fix `maxAge` option to not throw error

0.0.1 / 2012-05-28
==================

  * Add more tests

0.0.0 / 2012-05-28
==================

  * Initial release
", "node_modules/cookie/HISTORY.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cookie/HISTORY.md");
    }
}