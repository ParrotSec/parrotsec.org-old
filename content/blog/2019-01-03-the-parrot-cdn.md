---
id: 253
title: The Parrot CDN
date: 2019-01-03T05:20:42+00:00
author: palinuro
image: images/backgrounds/macaw-poly2.jpg
---


# the Parrot CDN
Hello mates, we are proud to announce the release of our dedicated CDN (Content Delivery Network)

It consists of several servers all around the world that host a fully operational caching and delivery system of all the content of our website

This servers network is completely driven by us (no external services involved) and all the data goes directly to servers we own.

Thanks to very powerful technologies like GeoDNS and IP Anycast, if someone hits a parrot website, it is served automatically by the nearest servers according to the ip location of the client.

By having our own CDN we can move away from cloudflare and other third party services, provide fast content delivery, provide failover routes in case of network congestions, downtimes or attacks and offer a better and more private services to all our users.


# how to test the CDN

test how the CDN sees your requests:

    ┌─[palinuro@parrot]─[~]
    └──╼ $ dig -t txt @ns.parrotsec.io director.geo.parrotsec.org | grep country

    director.geo.parrotsec.org. 30	IN	TXT	"ip 185.178.92.254 v4 city gavardo country it ita state eu region 09 name unknown as as206701"


test how the CDN resolves for you:

    ┌─[✗]─[palinuro@parrot]─[~]
    └──╼ $ host director.geo.parrotsec.org

    director.geo.parrotsec.org has address 89.36.210.176
    director.geo.parrotsec.org has address 80.211.238.94
    director.geo.parrotsec.org has IPv6 address 2a03:a140:10:10e6::1
    director.geo.parrotsec.org has IPv6 address 2a03:b0c0:3:e0::105:5001


test how the CDN caches content:

    ┌─[palinuro@parrot]─[~]
    └──╼ $ curl -I https://www.parrotsec.org/img/logo.png 2> /dev/null | grep X-Cache-Status

    X-Cache-Status: HIT

* `MISS` – The response was not found in the cache and so was fetched from an origin server. The response might then have been cached.
* `BYPASS` – The response was fetched from the origin server instead of served from the cache because the request matched a specific cache directive. The response might then have been cached.
* `EXPIRED` – The entry in the cache has expired. The response contains fresh content from the origin server.
* `STALE` – The content is stale because the origin server is not responding correctly, and the edge server is providing cached content instead.
* `UPDATING` – The content is stale because the entry is currently being updated in response to a previous request.
* `REVALIDATED` – The CDN verified that the current cached content was still valid.
* `HIT` – The response contains valid, fresh content direct from the cache.


# The future

We are still working hard to optimize our setup and we will add new edge servers to scale up if needed.

We are still playing with the IP Anycast nodes that are not yet available.

We are also working on a big upgrade to our mirror servers (iso downloads and apt archive).

Stay tuned :)