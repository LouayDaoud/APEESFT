@echo off
echo ========================================
echo   Demarrage du serveur APEESFT
echo ========================================
echo.
cd /d %~dp0
echo Le site sera accessible sur : http://localhost:8000
echo.
echo Appuyez sur Ctrl+C pour arreter le serveur
echo.
start http://localhost:8000
python -m http.server 8000

