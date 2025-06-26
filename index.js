// index.js
import { php } from 'php-wasm';

addEventListener("fetch", async (event) => {
  const url = new URL(event.request.url);
  
  // Handle PHP execution
  if(url.pathname.endsWith('.php')) {
    const response = await php.run(`<?php
      require_once('${url.pathname.substring(1)}');
    `);
    return event.respondWith(new Response(response.body, {
      headers: { 'Content-Type': 'text/html' }
    }));
  }
  
  // Serve static files
  return event.respondWith(fetch(event.request));
});
