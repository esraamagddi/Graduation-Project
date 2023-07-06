const cacheName="secureSpace";
const assets=[
    "/",
    "/index.html"
]

self.addEventListener("install",(installEvent)=>{
    installEvent.waitUntil(
        caches.open(cacheName).then((cache)=>{
            cache.addAll(assets).then().catch();
        })
    )
});

self.addEventListener("activate",(activateEvent)=>{
    caches.keys().then((keys)=>{
        return Promise.all(
            keys.filter((key)=>key!=cacheName)
            .map((key)=>caches.delete(key))
        )
    })
})

self.addEventListener("fetch",(fetchEvent)=>{
    if (!(fetchEvent.request.url.indexOf('http') === 0)) return;
    fetchEvent.respondWith(
        caches.match(fetchEvent.request).then((res)=>{
            return res || fetch(fetchEvent.request).then((fetchRes)=>{
                return caches.open(cacheName).then((cache)=>{
                    cache.put(fetchEvent.request, fetchRes.clone())
                    return fetchRes
                })
            })
        })
    )
})