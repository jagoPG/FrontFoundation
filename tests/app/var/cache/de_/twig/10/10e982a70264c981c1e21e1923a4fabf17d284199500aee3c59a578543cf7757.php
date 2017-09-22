<?php

/* node_modules/fsevents/node_modules/sntp/README.md */
class __TwigTemplate_a56cb556d6d4777be63fbc1013625e46901cdee12f23cc722e55547cb7d34f32 extends Twig_Template
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
        $__internal_ab6513c00d4a18993ddfd5e8a044b38f6ca3e83c579c55f4ee24e85ae088413d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6513c00d4a18993ddfd5e8a044b38f6ca3e83c579c55f4ee24e85ae088413d->enter($__internal_ab6513c00d4a18993ddfd5e8a044b38f6ca3e83c579c55f4ee24e85ae088413d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sntp/README.md"));

        // line 1
        echo "# sntp

An SNTP v4 client (RFC4330) for node. Simpy connects to the NTP or SNTP server requested and returns the server time
along with the roundtrip duration and clock offset. To adjust the local time to the NTP time, add the returned `t` offset
to the local time.

[![Build Status](https://secure.travis-ci.org/hueniverse/sntp.png)](http://travis-ci.org/hueniverse/sntp)

# Usage

```javascript
var Sntp = require('sntp');

// All options are optional

var options = {
    host: 'nist1-sj.ustiming.org',  // Defaults to pool.ntp.org
    port: 123,                      // Defaults to 123 (NTP)
    resolveReference: true,         // Default to false (not resolving)
    timeout: 1000                   // Defaults to zero (no timeout)
};

// Request server time

Sntp.time(options, function (err, time) {

    if (err) {
        console.log('Failed: ' + err.message);
        process.exit(1);
    }

    console.log('Local clock is off by: ' + time.t + ' milliseconds');
    process.exit(0);
});
```

If an application needs to maintain continuous time synchronization, the module provides a stateful method for
querying the current offset only when the last one is too old (defaults to daily).

```javascript
// Request offset once

Sntp.offset(function (err, offset) {

    console.log(offset);                    // New (served fresh)

    // Request offset again

    Sntp.offset(function (err, offset) {

        console.log(offset);                // Identical (served from cache)
    });
});
```

To set a background offset refresh, start the interval and use the provided now() method. If for any reason the
client fails to obtain an up-to-date offset, the current system clock is used.

```javascript
var before = Sntp.now();                    // System time without offset

Sntp.start(function () {

    var now = Sntp.now();                   // With offset
    Sntp.stop();
});
```

";
        
        $__internal_ab6513c00d4a18993ddfd5e8a044b38f6ca3e83c579c55f4ee24e85ae088413d->leave($__internal_ab6513c00d4a18993ddfd5e8a044b38f6ca3e83c579c55f4ee24e85ae088413d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sntp/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# sntp

An SNTP v4 client (RFC4330) for node. Simpy connects to the NTP or SNTP server requested and returns the server time
along with the roundtrip duration and clock offset. To adjust the local time to the NTP time, add the returned `t` offset
to the local time.

[![Build Status](https://secure.travis-ci.org/hueniverse/sntp.png)](http://travis-ci.org/hueniverse/sntp)

# Usage

```javascript
var Sntp = require('sntp');

// All options are optional

var options = {
    host: 'nist1-sj.ustiming.org',  // Defaults to pool.ntp.org
    port: 123,                      // Defaults to 123 (NTP)
    resolveReference: true,         // Default to false (not resolving)
    timeout: 1000                   // Defaults to zero (no timeout)
};

// Request server time

Sntp.time(options, function (err, time) {

    if (err) {
        console.log('Failed: ' + err.message);
        process.exit(1);
    }

    console.log('Local clock is off by: ' + time.t + ' milliseconds');
    process.exit(0);
});
```

If an application needs to maintain continuous time synchronization, the module provides a stateful method for
querying the current offset only when the last one is too old (defaults to daily).

```javascript
// Request offset once

Sntp.offset(function (err, offset) {

    console.log(offset);                    // New (served fresh)

    // Request offset again

    Sntp.offset(function (err, offset) {

        console.log(offset);                // Identical (served from cache)
    });
});
```

To set a background offset refresh, start the interval and use the provided now() method. If for any reason the
client fails to obtain an up-to-date offset, the current system clock is used.

```javascript
var before = Sntp.now();                    // System time without offset

Sntp.start(function () {

    var now = Sntp.now();                   // With offset
    Sntp.stop();
});
```

", "node_modules/fsevents/node_modules/sntp/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sntp/README.md");
    }
}
