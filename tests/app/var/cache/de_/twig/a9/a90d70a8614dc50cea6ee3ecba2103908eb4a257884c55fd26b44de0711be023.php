<?php

/* node_modules/fsevents/node_modules/request/lib/getProxyFromURI.js */
class __TwigTemplate_fce8673059a4f97dfade003b549536922608819893aecf10abd682aee4adf69c extends Twig_Template
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
        $__internal_ec766a678f90dca8d32759e5606c4f44409b62e904c03eb3ea1cd3d4547cd823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec766a678f90dca8d32759e5606c4f44409b62e904c03eb3ea1cd3d4547cd823->enter($__internal_ec766a678f90dca8d32759e5606c4f44409b62e904c03eb3ea1cd3d4547cd823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/request/lib/getProxyFromURI.js"));

        // line 1
        echo "'use strict'

function formatHostname(hostname) {
  // canonicalize the hostname, so that 'oogle.com' won't match 'google.com'
  return hostname.replace(/^\\.*/, '.').toLowerCase()
}

function parseNoProxyZone(zone) {
  zone = zone.trim().toLowerCase()

  var zoneParts = zone.split(':', 2)
    , zoneHost = formatHostname(zoneParts[0])
    , zonePort = zoneParts[1]
    , hasPort = zone.indexOf(':') > -1

  return {hostname: zoneHost, port: zonePort, hasPort: hasPort}
}

function uriInNoProxy(uri, noProxy) {
  var port = uri.port || (uri.protocol === 'https:' ? '443' : '80')
    , hostname = formatHostname(uri.hostname)
    , noProxyList = noProxy.split(',')

  // iterate through the noProxyList until it finds a match.
  return noProxyList.map(parseNoProxyZone).some(function(noProxyZone) {
    var isMatchedAt = hostname.indexOf(noProxyZone.hostname)
      , hostnameMatched = (
          isMatchedAt > -1 &&
          (isMatchedAt === hostname.length - noProxyZone.hostname.length)
        )

    if (noProxyZone.hasPort) {
      return (port === noProxyZone.port) && hostnameMatched
    }

    return hostnameMatched
  })
}

function getProxyFromURI(uri) {
  // Decide the proper request proxy to use based on the request URI object and the
  // environmental variables (NO_PROXY, HTTP_PROXY, etc.)
  // respect NO_PROXY environment variables (see: http://lynx.isc.org/current/breakout/lynx_help/keystrokes/environments.html)

  var noProxy = process.env.NO_PROXY || process.env.no_proxy || ''

  // if the noProxy is a wildcard then return null

  if (noProxy === '*') {
    return null
  }

  // if the noProxy is not empty and the uri is found return null

  if (noProxy !== '' && uriInNoProxy(uri, noProxy)) {
    return null
  }

  // Check for HTTP or HTTPS Proxy in environment Else default to null

  if (uri.protocol === 'http:') {
    return process.env.HTTP_PROXY ||
           process.env.http_proxy || null
  }

  if (uri.protocol === 'https:') {
    return process.env.HTTPS_PROXY ||
           process.env.https_proxy ||
           process.env.HTTP_PROXY  ||
           process.env.http_proxy  || null
  }

  // if none of that works, return null
  // (What uri protocol are you using then?)

  return null
}

module.exports = getProxyFromURI
";
        
        $__internal_ec766a678f90dca8d32759e5606c4f44409b62e904c03eb3ea1cd3d4547cd823->leave($__internal_ec766a678f90dca8d32759e5606c4f44409b62e904c03eb3ea1cd3d4547cd823_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/request/lib/getProxyFromURI.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

function formatHostname(hostname) {
  // canonicalize the hostname, so that 'oogle.com' won't match 'google.com'
  return hostname.replace(/^\\.*/, '.').toLowerCase()
}

function parseNoProxyZone(zone) {
  zone = zone.trim().toLowerCase()

  var zoneParts = zone.split(':', 2)
    , zoneHost = formatHostname(zoneParts[0])
    , zonePort = zoneParts[1]
    , hasPort = zone.indexOf(':') > -1

  return {hostname: zoneHost, port: zonePort, hasPort: hasPort}
}

function uriInNoProxy(uri, noProxy) {
  var port = uri.port || (uri.protocol === 'https:' ? '443' : '80')
    , hostname = formatHostname(uri.hostname)
    , noProxyList = noProxy.split(',')

  // iterate through the noProxyList until it finds a match.
  return noProxyList.map(parseNoProxyZone).some(function(noProxyZone) {
    var isMatchedAt = hostname.indexOf(noProxyZone.hostname)
      , hostnameMatched = (
          isMatchedAt > -1 &&
          (isMatchedAt === hostname.length - noProxyZone.hostname.length)
        )

    if (noProxyZone.hasPort) {
      return (port === noProxyZone.port) && hostnameMatched
    }

    return hostnameMatched
  })
}

function getProxyFromURI(uri) {
  // Decide the proper request proxy to use based on the request URI object and the
  // environmental variables (NO_PROXY, HTTP_PROXY, etc.)
  // respect NO_PROXY environment variables (see: http://lynx.isc.org/current/breakout/lynx_help/keystrokes/environments.html)

  var noProxy = process.env.NO_PROXY || process.env.no_proxy || ''

  // if the noProxy is a wildcard then return null

  if (noProxy === '*') {
    return null
  }

  // if the noProxy is not empty and the uri is found return null

  if (noProxy !== '' && uriInNoProxy(uri, noProxy)) {
    return null
  }

  // Check for HTTP or HTTPS Proxy in environment Else default to null

  if (uri.protocol === 'http:') {
    return process.env.HTTP_PROXY ||
           process.env.http_proxy || null
  }

  if (uri.protocol === 'https:') {
    return process.env.HTTPS_PROXY ||
           process.env.https_proxy ||
           process.env.HTTP_PROXY  ||
           process.env.http_proxy  || null
  }

  // if none of that works, return null
  // (What uri protocol are you using then?)

  return null
}

module.exports = getProxyFromURI
", "node_modules/fsevents/node_modules/request/lib/getProxyFromURI.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/request/lib/getProxyFromURI.js");
    }
}
