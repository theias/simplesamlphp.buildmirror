# IAS Fork

This is the IAS fork of SimpleSAMLphp that adds to the existing build workflow to produce an RPM and create a release.

It includes an alternate, working RPM spec file at `extra/simplesamlphp.spec`, a build script, and GitHub Actions workflows to automatically build/release RPMs created by that spec.

Our workflow should be to keep this fork in sync with upstream and to merge in from upstream when there is a tagged release.

```
# This ensures upstream is present in git config and merges in from there
make merge-upstream
```

# SimpleSAMLphp

![Build Status](https://github.com/simplesamlphp/simplesamlphp/actions/workflows/php.yml/badge.svg)
[![Coverage Status](https://codecov.io/gh/simplesamlphp/simplesamlphp/branch/master/graph/badge.svg)](https://codecov.io/gh/simplesamlphp/simplesamlphp)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/simplesamlphp/simplesamlphp/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/simplesamlphp/simplesamlphp/?branch=master)
[![Type coverage](https://shepherd.dev/github/simplesamlphp/simplesamlphp/coverage.svg)](https://shepherd.dev/github/simplesamlphp/simplesamlphp)
[![BrowserStack Status](https://automate.browserstack.com/badge.svg?badge_key=LzlCL29sZEVDRXJpdGtxZUdITFA3YjYyUFBBYkVVZDVDcG1YZXRaN2pvTT0tLVhCNzkwVUNGVFVjVFVicUg0R1BNR0E9PQ==--f9efb6f330bd98dd6e3c7b816ac2f0982275a872)](https://automate.browserstack.com/public-build/LzlCL29sZEVDRXJpdGtxZUdITFA3YjYyUFBBYkVVZDVDcG1YZXRaN2pvTT0tLVhCNzkwVUNGVFVjVFVicUg0R1BNR0E9PQ==--f9efb6f330bd98dd6e3c7b816ac2f0982275a872)

This is the official repository of the SimpleSAMLphp software.

* [SimpleSAMLphp homepage](https://simplesamlphp.org)
* [SimpleSAMLphp Downloads](https://simplesamlphp.org/download)

Please, [contribute](CONTRIBUTING.md)!
