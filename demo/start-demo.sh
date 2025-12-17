#!/bin/bash
echo "========================================"
echo "  Démarrage du serveur de démonstration"
echo "========================================"
echo ""
echo "Le site sera accessible sur : http://localhost:8000"
echo ""
echo "Appuyez sur Ctrl+C pour arrêter le serveur"
echo ""
cd "$(dirname "$0")"
python3 -m http.server 8000

