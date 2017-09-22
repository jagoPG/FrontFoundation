<?php

/* node_modules/tough-cookie/lib/pathMatch.js */
class __TwigTemplate_017e6973a5cecf30aa41b3d942f593c3e8b8db2c64e238ff1b893122378f6e8b extends Twig_Template
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
        $__internal_048bdad409bd58786ce24f26252194bc7c08cc57fdf6273c4a2a214a5ad32c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048bdad409bd58786ce24f26252194bc7c08cc57fdf6273c4a2a214a5ad32c29->enter($__internal_048bdad409bd58786ce24f26252194bc7c08cc57fdf6273c4a2a214a5ad32c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tough-cookie/lib/pathMatch.js"));

        // line 1
        echo "/*!
 * Copyright (c) 2015, Salesforce.com, Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice,
 * this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright notice,
 * this list of conditions and the following disclaimer in the documentation
 * and/or other materials provided with the distribution.
 *
 * 3. Neither the name of Salesforce.com nor the names of its contributors may
 * be used to endorse or promote products derived from this software without
 * specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS \"AS IS\"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */
\"use strict\";
/*
 * \"A request-path path-matches a given cookie-path if at least one of the
 * following conditions holds:\"
 */
function pathMatch (reqPath, cookiePath) {
  // \"o  The cookie-path and the request-path are identical.\"
  if (cookiePath === reqPath) {
    return true;
  }

  var idx = reqPath.indexOf(cookiePath);
  if (idx === 0) {
    // \"o  The cookie-path is a prefix of the request-path, and the last
    // character of the cookie-path is %x2F (\"/\").\"
    if (cookiePath.substr(-1) === \"/\") {
      return true;
    }

    // \" o  The cookie-path is a prefix of the request-path, and the first
    // character of the request-path that is not included in the cookie- path
    // is a %x2F (\"/\") character.\"
    if (reqPath.substr(cookiePath.length, 1) === \"/\") {
      return true;
    }
  }

  return false;
}

exports.pathMatch = pathMatch;
";
        
        $__internal_048bdad409bd58786ce24f26252194bc7c08cc57fdf6273c4a2a214a5ad32c29->leave($__internal_048bdad409bd58786ce24f26252194bc7c08cc57fdf6273c4a2a214a5ad32c29_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tough-cookie/lib/pathMatch.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * Copyright (c) 2015, Salesforce.com, Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice,
 * this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright notice,
 * this list of conditions and the following disclaimer in the documentation
 * and/or other materials provided with the distribution.
 *
 * 3. Neither the name of Salesforce.com nor the names of its contributors may
 * be used to endorse or promote products derived from this software without
 * specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS \"AS IS\"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */
\"use strict\";
/*
 * \"A request-path path-matches a given cookie-path if at least one of the
 * following conditions holds:\"
 */
function pathMatch (reqPath, cookiePath) {
  // \"o  The cookie-path and the request-path are identical.\"
  if (cookiePath === reqPath) {
    return true;
  }

  var idx = reqPath.indexOf(cookiePath);
  if (idx === 0) {
    // \"o  The cookie-path is a prefix of the request-path, and the last
    // character of the cookie-path is %x2F (\"/\").\"
    if (cookiePath.substr(-1) === \"/\") {
      return true;
    }

    // \" o  The cookie-path is a prefix of the request-path, and the first
    // character of the request-path that is not included in the cookie- path
    // is a %x2F (\"/\") character.\"
    if (reqPath.substr(cookiePath.length, 1) === \"/\") {
      return true;
    }
  }

  return false;
}

exports.pathMatch = pathMatch;
", "node_modules/tough-cookie/lib/pathMatch.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tough-cookie/lib/pathMatch.js");
    }
}
