self.addEventListener("install", e => {
	//console.log("Install PWA!");
	e.waitUntil(
		cache.open("static").then(cache => {
			return cache.addAll(["./", "./src/master.css", "./images/logo192.png"]);
		})
	);
});

self.addEventListener("fetch", e => {
	//console.log(`Intercepting fetch request for: ${e.request.url}`);
	e.respondWith(
		caches.match(e.request).then(response => {
			return response || fetch(e.request);
		})
	);
});