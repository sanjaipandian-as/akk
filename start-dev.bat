@echo off
echo ============================================
echo   Starting Akkurate Dev Server with Live Reload
echo ============================================

:: Start PHP built-in server in background using XAMPP's PHP
echo [1] Starting PHP server on http://localhost:8000 ...
start "PHP Server" "C:\xampp\php\php.exe" -S localhost:8000

:: Wait a moment for PHP to start
timeout /t 2 /nobreak > nul

:: Start Browser-Sync as a proxy over PHP server
echo [2] Starting Browser-Sync (live reload)...
browser-sync start --proxy "localhost:8000" --files "**/*.php, **/*.css, **/*.js, **/*.html" --port 3000 --open

echo Done! Open http://localhost:3000 in your browser.
