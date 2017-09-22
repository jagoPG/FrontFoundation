<?php

/* node_modules/proxy-addr/HISTORY.md */
class __TwigTemplate_8ee295d5872727b9d7d592862c7602d2673510339ff9b180c928dbb6a309153c extends Twig_Template
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
        $__internal_7dfc2121b7245a70f100e33f4eff7060a1287d98dda49ef29465cdd01604d689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dfc2121b7245a70f100e33f4eff7060a1287d98dda49ef29465cdd01604d689->enter($__internal_7dfc2121b7245a70f100e33f4eff7060a1287d98dda49ef29465cdd01604d689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/proxy-addr/HISTORY.md"));

        // line 1
        echo "1.1.5 / 2017-07-25
==================

  * Fix array argument being altered
  * deps: ipaddr.js@1.4.0

1.1.4 / 2017-03-24
==================

  * deps: ipaddr.js@1.3.0

1.1.3 / 2017-01-14
==================

  * deps: ipaddr.js@1.2.0

1.1.2 / 2016-05-29
==================

  * deps: ipaddr.js@1.1.1
    - Fix IPv6-mapped IPv4 validation edge cases

1.1.1 / 2016-05-03
==================

  * Fix regression matching mixed versions against multiple subnets

1.1.0 / 2016-05-01
==================

  * Fix accepting various invalid netmasks
    - IPv4 netmasks must be contingous
    - IPv6 addresses cannot be used as a netmask
  * deps: ipaddr.js@1.1.0

1.0.10 / 2015-12-09
===================

  * deps: ipaddr.js@1.0.5
    - Fix regression in `isValid` with non-string arguments

1.0.9 / 2015-12-01
==================

  * deps: ipaddr.js@1.0.4
    - Fix accepting some invalid IPv6 addresses
    - Reject CIDRs with negative or overlong masks
  * perf: enable strict mode

1.0.8 / 2015-05-10
==================

  * deps: ipaddr.js@1.0.1

1.0.7 / 2015-03-16
==================

  * deps: ipaddr.js@0.1.9
    - Fix OOM on certain inputs to `isValid`

1.0.6 / 2015-02-01
==================

  * deps: ipaddr.js@0.1.8

1.0.5 / 2015-01-08
==================

  * deps: ipaddr.js@0.1.6

1.0.4 / 2014-11-23
==================

  * deps: ipaddr.js@0.1.5
    - Fix edge cases with `isValid`

1.0.3 / 2014-09-21
==================

  * Use `forwarded` npm module

1.0.2 / 2014-09-18
==================

  * Fix a global leak when multiple subnets are trusted
  * Support Node.js 0.6
  * deps: ipaddr.js@0.1.3

1.0.1 / 2014-06-03
==================

  * Fix links in npm package

1.0.0 / 2014-05-08
==================

  * Add `trust` argument to determine proxy trust on
    * Accepts custom function
    * Accepts IPv4/IPv6 address(es)
    * Accepts subnets
    * Accepts pre-defined names
  * Add optional `trust` argument to `proxyaddr.all` to
    stop at first untrusted
  * Add `proxyaddr.compile` to pre-compile `trust` function
    to make subsequent calls faster

0.0.1 / 2014-05-04
==================

  * Fix bad npm publish

0.0.0 / 2014-05-04
==================

  * Initial release
";
        
        $__internal_7dfc2121b7245a70f100e33f4eff7060a1287d98dda49ef29465cdd01604d689->leave($__internal_7dfc2121b7245a70f100e33f4eff7060a1287d98dda49ef29465cdd01604d689_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/proxy-addr/HISTORY.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("1.1.5 / 2017-07-25
==================

  * Fix array argument being altered
  * deps: ipaddr.js@1.4.0

1.1.4 / 2017-03-24
==================

  * deps: ipaddr.js@1.3.0

1.1.3 / 2017-01-14
==================

  * deps: ipaddr.js@1.2.0

1.1.2 / 2016-05-29
==================

  * deps: ipaddr.js@1.1.1
    - Fix IPv6-mapped IPv4 validation edge cases

1.1.1 / 2016-05-03
==================

  * Fix regression matching mixed versions against multiple subnets

1.1.0 / 2016-05-01
==================

  * Fix accepting various invalid netmasks
    - IPv4 netmasks must be contingous
    - IPv6 addresses cannot be used as a netmask
  * deps: ipaddr.js@1.1.0

1.0.10 / 2015-12-09
===================

  * deps: ipaddr.js@1.0.5
    - Fix regression in `isValid` with non-string arguments

1.0.9 / 2015-12-01
==================

  * deps: ipaddr.js@1.0.4
    - Fix accepting some invalid IPv6 addresses
    - Reject CIDRs with negative or overlong masks
  * perf: enable strict mode

1.0.8 / 2015-05-10
==================

  * deps: ipaddr.js@1.0.1

1.0.7 / 2015-03-16
==================

  * deps: ipaddr.js@0.1.9
    - Fix OOM on certain inputs to `isValid`

1.0.6 / 2015-02-01
==================

  * deps: ipaddr.js@0.1.8

1.0.5 / 2015-01-08
==================

  * deps: ipaddr.js@0.1.6

1.0.4 / 2014-11-23
==================

  * deps: ipaddr.js@0.1.5
    - Fix edge cases with `isValid`

1.0.3 / 2014-09-21
==================

  * Use `forwarded` npm module

1.0.2 / 2014-09-18
==================

  * Fix a global leak when multiple subnets are trusted
  * Support Node.js 0.6
  * deps: ipaddr.js@0.1.3

1.0.1 / 2014-06-03
==================

  * Fix links in npm package

1.0.0 / 2014-05-08
==================

  * Add `trust` argument to determine proxy trust on
    * Accepts custom function
    * Accepts IPv4/IPv6 address(es)
    * Accepts subnets
    * Accepts pre-defined names
  * Add optional `trust` argument to `proxyaddr.all` to
    stop at first untrusted
  * Add `proxyaddr.compile` to pre-compile `trust` function
    to make subsequent calls faster

0.0.1 / 2014-05-04
==================

  * Fix bad npm publish

0.0.0 / 2014-05-04
==================

  * Initial release
", "node_modules/proxy-addr/HISTORY.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/proxy-addr/HISTORY.md");
    }
}
