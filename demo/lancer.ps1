Write-Host "========================================" -ForegroundColor Cyan
Write-Host "  Démarrage du serveur APEESFT" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""
Set-Location $PSScriptRoot
Write-Host "Le site sera accessible sur : http://localhost:8000" -ForegroundColor Green
Write-Host ""
Write-Host "Appuyez sur Ctrl+C pour arrêter le serveur" -ForegroundColor Yellow
Write-Host ""
Start-Process "http://localhost:8000"
python -m http.server 8000

