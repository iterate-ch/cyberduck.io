Title: OpenStack Interoperability
Date: 2014-06-04 09:21
Modified: 2014-06-04 09:21
Category: Cyberduck
Author: David Kocher
Slug: openstack-interoperability
Summary: Interoperability with different providers of Swift (OpenStack Object Storage) has been a field of attention in the latest maintenance release of Cyberduck. We are now defaulting to use version 2.0 (Keystone) for authentication with the OpenStack Identity Service with consecutive fallback strategies for different options of tenant specifiers. To use the version 1.0 (devauth) authentication method with a legacy

Interoperability with different providers of [Swift (OpenStack Object Storage)](https://trac.cyberduck.io/wiki/help/en/howto/openstack) has been a field of attention in the latest maintenance release of Cyberduck. We are now defaulting to use version 2.0 (Keystone) for authentication with the [OpenStack Identity Service](http://docs.openstack.org/developer/keystone/) with consecutive fallback strategies for different options of tenant specifiers. To use the  version 1.0 (devauth) authentication method with a legacy OpenStack deployment, download the [Openstack Swift (v1) profile](https://trac.cyberduck.io/wiki/help/en/howto/openstack#Authenticationwithdevauthforcontextv1.0%C2%A0)*.*
