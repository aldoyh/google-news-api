# Google News API - AI Agent Instructions

## Architecture Overview
This is a PHP web application with two pages: a simple list view (`index.php`) and an interactive 3D carousel (`carousel.html`). Both consume the NewsAPI to display Brazilian news headlines. The application uses PHP for server-side API fetching and JavaScript (p5.js + GSAP) for client-side 3D rendering.

- **Key Components**: 
  - API integration via `file_get_contents()` in PHP files
  - News display: HTML cards in `index.php`, 3D carousel in `carousel.html` using p5.js
  - Bootstrap + AOS for UI in main page; p5.js + GSAP for 3D animations
- **Data Flow**: PHP fetches JSON from NewsAPI.org, decodes it, and either renders HTML or serves JSON for JS consumption
- **Why this structure?**: Built as a learning project for API consumption and web animations, with simple PHP backend and modern JS frontend

## Developer Workflows
- **Running locally**: Use `php -S localhost:8000` from project root to start a development server
- **No build process**: Direct file editing; refresh browser to see changes
- **Debugging**: Standard PHP error logging; browser console for JS issues
- **Dependencies**: External libraries (Bootstrap, AOS, p5.js, GSAP) loaded via CDN; no local package management

## Project Conventions
- **Code style**: Mixed HTML/PHP in single files; Portuguese labels for UI text (e.g., "Título:", "Descrição:")
- **API handling**: Hardcoded API key in source (replace with environment variable for production)
- **Styling**: Custom CSS in `css/style.css` extends Bootstrap; p5.js for 3D graphics
- **Error handling**: Minimal; API failures may cause unhandled exceptions

## Integration Points
- **External API**: NewsAPI.org (endpoint: `https://newsapi.org/v2/top-headlines?country=br&apiKey=...`)
- **Response structure**: JSON with `articles` array containing `title`, `description`, `content`, `author`, `publishedAt`, `urlToImage`
- **Cross-component communication**: `fetch_news.php` serves JSON to `carousel.html` via AJAX

## Key Files
- `index.php`: Main list view - API call, HTML structure, news rendering loop
- `fetch_news.php`: API fetcher - returns news data as JSON for carousel
- `carousel.html`: 3D carousel page - p5.js 3D rendering with auto-play and auto-update
- `css/style.css`: Custom styling for news cards, jumbotron, responsive layout
- `README.md`: Project overview and setup instructions

## Patterns to Follow
- **News rendering**: Use `<div class="row News">` with `imgBx` and `News-info` columns (see `index.php` lines 40-55)
- **Animation**: Add `data-aos` attributes for fade effects; use p5.js WEBGL for 3D
- **Author handling**: Check if `$News->author` is empty, display "Autor não informado" if so
- **3D carousel**: Position cards in circular array, rotate continuously, load images asynchronously</content>
<parameter name="filePath">/Users/aldoyh/Sites/google-news-api/.github/copilot-instructions.md