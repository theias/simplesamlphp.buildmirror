#!/usr/bin/env bash
set -eu
set -o pipefail

vers="${1:-$(git tag | tail -n1)}"
vers="${vers##*/}"
mkdir -p ./rpmbuild/{BUILD,BUILDROOT,RPMS,SOURCES,SPECS,SRPMS}
mkdir -p "./simplesamlphp-${vers}"

cp -a . "/tmp/simplesamlphp-${vers}/"
tar -cf ./rpmbuild/SOURCES/"simplesamlphp-${vers}.tar.gz" "/tmp/simplesamlphp-${vers}"

cp extra/simplesamlphp.spec rpmbuild/SPECS/simplesamlphp.spec
ls -R rpmbuild
rpmbuild --define "_topdir ${PWD}/rpmbuild"  -ba rpmbuild/SPECS/simplesamlphp.spec
