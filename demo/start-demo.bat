@echo off
echo ========================================
echo   Demarrage du serveur de demonstration
echo ========================================
echo.
echo Le site sera accessible sur : http://localhost:8000
echo.
echo Appuyez sur Ctrl+C pour arreter le serveur
echo.
cd /d %~dp0
python -m http.server 8000
pause

