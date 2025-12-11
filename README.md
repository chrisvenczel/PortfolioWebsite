# PortfolioWebsite

This is the code for my interactive portfolio website. It includes the HTML, CSS, PHP etc as well as the projects themselves written in P5JS.

## Prerequisites

- PHP 8.0+ CLI (for the built-in web server)
- Node 18+ (for npm scripts)

## Local setup

1. Install dependencies: `npm install` (no extra packages are pulled; this just enables the scripts).
2. Start the site from the project root: `npm start` (serves `src/` via PHP's built-in server).
3. Open `http://localhost:8000` in your browser. Press `Ctrl+C` in the terminal to stop the server.

## Hosting on your network

## Build static HTML

Generate static HTML into `dist/`: `npm run build` (renders PHP from `src/` to `.html` and copies assets).
