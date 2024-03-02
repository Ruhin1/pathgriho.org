import { defineConfig } from "vite";

export default defineConfig({
  build: {
    rollupOptions: {
      input: {
        main: "./index.html",
        blog: "./blog.html",
        "photo-gallery": "./photo-gallery.html",
        "book-details": "./book-details.html",
        "book-store": "./book-store.html",
        "team-gallery": "./team-gallery.html",
        extends: "./extends.html",
      },
    },
  },
});
