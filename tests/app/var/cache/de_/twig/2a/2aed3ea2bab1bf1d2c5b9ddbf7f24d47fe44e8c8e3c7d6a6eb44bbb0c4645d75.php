<?php

/* node_modules/fresh/HISTORY.md */
class __TwigTemplate_33a983271b6e75871cf0734aa54868429d2491ef27a493e231232bd5315f1461 extends Twig_Template
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
        $__internal_f4bbac595e6f29a30e112e0b8592aafc7c35002b18c846b476e2fcf4180449e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bbac595e6f29a30e112e0b8592aafc7c35002b18c846b476e2fcf4180449e7->enter($__internal_f4bbac595e6f29a30e112e0b8592aafc7c35002b18c846b476e2fcf4180449e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fresh/HISTORY.md"));

        // line 1
        echo "0.5.0 / 2017-02-21
==================

  * Fix incorrect result when `If-None-Match` has both `*` and ETags
  * Fix weak `ETag` matching to match spec
  * perf: delay reading header values until needed
  * perf: skip checking modified time if ETag check failed
  * perf: skip parsing `If-None-Match` when no `ETag` header
  * perf: use `Date.parse` instead of `new Date`

0.4.0 / 2017-02-05
==================

  * Fix false detection of `no-cache` request directive
  * perf: enable strict mode
  * perf: hoist regular expressions
  * perf: remove duplicate conditional
  * perf: remove unnecessary boolean coercions

0.3.0 / 2015-05-12
==================

  * Add weak `ETag` matching support

0.2.4 / 2014-09-07
==================

  * Support Node.js 0.6

0.2.3 / 2014-09-07
==================

  * Move repository to jshttp

0.2.2 / 2014-02-19
==================

  * Revert \"Fix for blank page on Safari reload\"

0.2.1 / 2014-01-29
==================

  * Fix for blank page on Safari reload

0.2.0 / 2013-08-11
==================

  * Return stale for `Cache-Control: no-cache`

0.1.0 / 2012-06-15
==================

  * Add `If-None-Match: *` support

0.0.1 / 2012-06-10
==================

  * Initial release
";
        
        $__internal_f4bbac595e6f29a30e112e0b8592aafc7c35002b18c846b476e2fcf4180449e7->leave($__internal_f4bbac595e6f29a30e112e0b8592aafc7c35002b18c846b476e2fcf4180449e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fresh/HISTORY.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("0.5.0 / 2017-02-21
==================

  * Fix incorrect result when `If-None-Match` has both `*` and ETags
  * Fix weak `ETag` matching to match spec
  * perf: delay reading header values until needed
  * perf: skip checking modified time if ETag check failed
  * perf: skip parsing `If-None-Match` when no `ETag` header
  * perf: use `Date.parse` instead of `new Date`

0.4.0 / 2017-02-05
==================

  * Fix false detection of `no-cache` request directive
  * perf: enable strict mode
  * perf: hoist regular expressions
  * perf: remove duplicate conditional
  * perf: remove unnecessary boolean coercions

0.3.0 / 2015-05-12
==================

  * Add weak `ETag` matching support

0.2.4 / 2014-09-07
==================

  * Support Node.js 0.6

0.2.3 / 2014-09-07
==================

  * Move repository to jshttp

0.2.2 / 2014-02-19
==================

  * Revert \"Fix for blank page on Safari reload\"

0.2.1 / 2014-01-29
==================

  * Fix for blank page on Safari reload

0.2.0 / 2013-08-11
==================

  * Return stale for `Cache-Control: no-cache`

0.1.0 / 2012-06-15
==================

  * Add `If-None-Match: *` support

0.0.1 / 2012-06-10
==================

  * Initial release
", "node_modules/fresh/HISTORY.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fresh/HISTORY.md");
    }
}
