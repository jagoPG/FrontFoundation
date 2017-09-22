<?php

/* node_modules/etag/HISTORY.md */
class __TwigTemplate_c28854b2d856cae16cf9a6f5ac62c18a975b95b536dff8a1e3d4a737cb82f578 extends Twig_Template
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
        $__internal_a1295e6dcaac7963e7b91429f9206c7fdaba0e0c465a0e0f8f1ac67973194b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1295e6dcaac7963e7b91429f9206c7fdaba0e0c465a0e0f8f1ac67973194b9f->enter($__internal_a1295e6dcaac7963e7b91429f9206c7fdaba0e0c465a0e0f8f1ac67973194b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/etag/HISTORY.md"));

        // line 1
        echo "1.8.1 / 2017-09-12
==================

  * perf: replace regular expression with substring

1.8.0 / 2017-02-18
==================

  * Use SHA1 instead of MD5 for ETag hashing
    - Improves performance for larger entities
    - Works with FIPS 140-2 OpenSSL configuration

1.7.0 / 2015-06-08
==================

  * Always include entity length in ETags for hash length extensions
  * Generate non-Stats ETags using MD5 only (no longer CRC32)
  * Improve stat performance by removing hashing
  * Remove base64 padding in ETags to shorten
  * Use MD5 instead of MD4 in weak ETags over 1KB

1.6.0 / 2015-05-10
==================

  * Improve support for JXcore
  * Remove requirement of `atime` in the stats object
  * Support \"fake\" stats objects in environments without `fs`

1.5.1 / 2014-11-19
==================

  * deps: crc@3.2.1
    - Minor fixes

1.5.0 / 2014-10-14
==================

  * Improve string performance
  * Slightly improve speed for weak ETags over 1KB

1.4.0 / 2014-09-21
==================

  * Support \"fake\" stats objects
  * Support Node.js 0.6

1.3.1 / 2014-09-14
==================

  * Use the (new and improved) `crc` for crc32

1.3.0 / 2014-08-29
==================

  * Default strings to strong ETags
  * Improve speed for weak ETags over 1KB

1.2.1 / 2014-08-29
==================

  * Use the (much faster) `buffer-crc32` for crc32

1.2.0 / 2014-08-24
==================

  * Add support for file stat objects

1.1.0 / 2014-08-24
==================

  * Add fast-path for empty entity
  * Add weak ETag generation
  * Shrink size of generated ETags

1.0.1 / 2014-08-24
==================

  * Fix behavior of string containing Unicode

1.0.0 / 2014-05-18
==================

  * Initial release
";
        
        $__internal_a1295e6dcaac7963e7b91429f9206c7fdaba0e0c465a0e0f8f1ac67973194b9f->leave($__internal_a1295e6dcaac7963e7b91429f9206c7fdaba0e0c465a0e0f8f1ac67973194b9f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/etag/HISTORY.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("1.8.1 / 2017-09-12
==================

  * perf: replace regular expression with substring

1.8.0 / 2017-02-18
==================

  * Use SHA1 instead of MD5 for ETag hashing
    - Improves performance for larger entities
    - Works with FIPS 140-2 OpenSSL configuration

1.7.0 / 2015-06-08
==================

  * Always include entity length in ETags for hash length extensions
  * Generate non-Stats ETags using MD5 only (no longer CRC32)
  * Improve stat performance by removing hashing
  * Remove base64 padding in ETags to shorten
  * Use MD5 instead of MD4 in weak ETags over 1KB

1.6.0 / 2015-05-10
==================

  * Improve support for JXcore
  * Remove requirement of `atime` in the stats object
  * Support \"fake\" stats objects in environments without `fs`

1.5.1 / 2014-11-19
==================

  * deps: crc@3.2.1
    - Minor fixes

1.5.0 / 2014-10-14
==================

  * Improve string performance
  * Slightly improve speed for weak ETags over 1KB

1.4.0 / 2014-09-21
==================

  * Support \"fake\" stats objects
  * Support Node.js 0.6

1.3.1 / 2014-09-14
==================

  * Use the (new and improved) `crc` for crc32

1.3.0 / 2014-08-29
==================

  * Default strings to strong ETags
  * Improve speed for weak ETags over 1KB

1.2.1 / 2014-08-29
==================

  * Use the (much faster) `buffer-crc32` for crc32

1.2.0 / 2014-08-24
==================

  * Add support for file stat objects

1.1.0 / 2014-08-24
==================

  * Add fast-path for empty entity
  * Add weak ETag generation
  * Shrink size of generated ETags

1.0.1 / 2014-08-24
==================

  * Fix behavior of string containing Unicode

1.0.0 / 2014-05-18
==================

  * Initial release
", "node_modules/etag/HISTORY.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/etag/HISTORY.md");
    }
}
